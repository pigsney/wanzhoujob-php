<?php


namespace App\Dto\JobFair;


use App\Kernels\BaseDto;

class JobFairCompanyDto extends BaseDto
{

    /**
     * @var int | null
     */
    protected $job_fair_id;

    /**
     * @var int | null
     */
    protected $company_id;

    /**
     * @var int[] | null
     */
    protected $company_ids;

    /**
     * @return int[]|null
     */
    public function getCompanyIds(): ?array
    {
        return $this->company_ids;
    }

    /**
     * @param int[]|null $company_ids
     */
    public function setCompanyIds(?array $company_ids): void
    {
        $this->company_ids = $company_ids;
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


}