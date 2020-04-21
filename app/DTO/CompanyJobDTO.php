<?php


namespace App\DTO;


class CompanyJobDTO
{
    /**
     * @var int | null
     */
    private $company_id;

    /**
     * @var int[] | null
     */
    private $job_ids;

    /**
     * @var int | null
     */
    private $job_id;

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
     * @return int[]|null
     */
    public function getJobIds(): ?array
    {
        return $this->job_ids;
    }

    /**
     * @param int[]|null $job_ids
     */
    public function setJobIds(?array $job_ids): void
    {
        $this->job_ids = $job_ids;
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