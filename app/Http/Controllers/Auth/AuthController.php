<?php


namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\AuthRequest;
use App\Models\Staff;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{

    private $response;
    /**
     * 中间件去除login和refresh
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login']]);
        $this->middleware('refresh.token',['only'=>'refresh']);
        $this->response = response();
    }


    public function login(AuthRequest $request)
    {
        $credentials = $request->only('identifier', 'credential');

        $staff = Staff::where('id_number', $credentials['identifier'])
            ->where('password', md5($credentials['credential']))
            ->first();
        if (empty($staff) || !$token = JWTAuth::fromUser($staff)) {
            return $this->response->fail(401,'Unauthorized');
        }

        return $this->respondWithToken($token);
    }


    public function logout()
    {
        auth('api')->logout();

        return $this->response->success();
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return $this->response->success([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}