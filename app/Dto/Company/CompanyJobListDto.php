<?php


namespace App\Dto\Company;


use App\Dto\PageListDto;

class CompanyJobListDto extends PageListDto
{
    /**
     * @var int | null
     */
    private $take;

    /**
     * @var int | null
     */
    private $type;

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

    /**
     * @return int|null
     */
    public function getTake(): ?int
    {
        return $this->take;
    }

    /**
     * @param int|null $take
     */
    public function setTake(?int $take): void
    {
        $this->take = $take;
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @param int|null $type
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
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

}