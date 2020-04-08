<?php


namespace App\DTO;


class CompanyListDTO extends PageListDTO
{
    /**
     * @var int | null
     */
    private $job_fair_id;

    /**
     * @var int | null
     */
    private $type;

    /**
     * @var int | null
     */
    private $take;

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



}