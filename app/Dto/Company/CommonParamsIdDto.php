<?php


namespace App\Dto\Company;


use App\Kernels\BaseDto;

class CommonParamsIdDto extends BaseDto
{
    /**
     * @var int | null
     */
    private $job_fair_id;

    /**
     * @var int | null
     */
    private $company_id;

    /**
     * @var int | null
     */
    private $job_id;

    /**
     * @var int | null
     */
    private $resume_id;

    /**
     * @return int|null
     */
    public function getResumeId(): ?int
    {
        return $this->resume_id;
    }

    /**
     * @param int|null $resume_id
     */
    public function setResumeId(?int $resume_id): void
    {
        $this->resume_id = $resume_id;
    }

    /**
     * @return int|null
     */
    public function getJobFairId(): ?int
    {
        return $this->job_fair_id;
    }

    /**
     * @param int|null $job_fair_id
     */
    public function setJobFairId(?int $job_fair_id): void
    {
        $this->job_fair_id = $job_fair_id;
    }

    /**
     * @return int|null
     */
    public function getCompanyId(): ?int
    {
        return $this->company_id;
    }

    /**
     * @param int|null $company_id
     */
    public function setCompanyId(?int $company_id): void
    {
        $this->company_id = $company_id;
    }

    /**
     * @return int|null
     */
    public function getJobId(): ?int
    {
        return $this->job_id;
    }

    /**
     * @param int|null $job_id
     */
    public function setJobId(?int $job_id): void
    {
        $this->job_id = $job_id;
    }



}