<?php


namespace App\DTO;


class JobListDTO extends PageListDTO
{
    /**
     * @var int[] | null
     */
    protected $ids;

    /**
     * @var int | null
     */
    protected $company_id;

    /**
     * @var int | null
     */
    protected $id;

    /**
     * @return int[]|null
     */
    public function getIds(): ?array
    {
        return $this->ids;
    }

    /**
     * @param int[]|null $ids
     */
    public function setIds(?array $ids): void
    {
        $this->ids = $ids;
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
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }


}