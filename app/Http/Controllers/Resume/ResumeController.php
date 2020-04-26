<?php


namespace App\Http\Controllers\Resume;


use App\Dto\Resume\ResumeDto;
use App\Enums\Sex;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Resume\ResumeRequest;
use App\Services\Resume\ResumeService;

class ResumeController extends Controller
{

    private $service;

    public function __construct(ResumeService $service)
    {
        $this->service = $service;
    }

    /**
     * 保存和修改都是这个接口
     * @param ResumeRequest $request
     * @return mixed
     * @throws \Exception
     */
    public function store(ResumeRequest $request)
    {
        $addDto = new ResumeDto($request->all());
        $addDto->setPhoto($request->file('photo'));;
        return $this->service->saveResume($addDto);
    }

    public function show()
    {

    }

    public function index()
    {

    }
}