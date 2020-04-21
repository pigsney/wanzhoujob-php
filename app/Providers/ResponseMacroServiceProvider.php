<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;
use App\Exceptions\Error;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //error
        Response::macro('fail', function ($err_code=0,$msg='') {
            if ($msg) {
                $err_msg = $msg;
            } else {
                $err_msg = Error::errMsg($err_code);
            }
            $response_data = [
                'code' => $err_code,
                'message' => $err_msg,
                'timestamp' => now()->toDateTimeString(),
            ];
            return Response::json($response_data);
        });

        //正常返回
        Response::macro('success', function ($result=null,$msg='',$pagination=null) {
            if (is_null($result)){
                $result = [];
            }
            if (is_null($pagination)) {
                $pagination = [];
            }
            $response_data = [
                'code' => 1,
                'data' => $result,
                'message' => $msg,
                'timestamp' => now()->toDateTimeString(),
            ];
            if (!empty($pagination)) $response_data['pagination'] = $pagination;

            return Response::json($response_data);
        });
    }

    public function register(){

    }
}