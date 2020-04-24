<?php


namespace App\Dto\JobFair;


use App\Dto\PageListDto;

class JobFairListDto extends PageListDto
{
    /**
     * @var string | null
     */
    private $name;

    /**
     * @var int[] | null
     */
    private $types;

    /**
     * @var int[] | null
     */
    private $ids;

    /**
     * @var int | null
     */
    private $id;

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
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int[]|null
     */
    public function getTypes(): ?array
    {
        return $this->types;
    }

    /**
     * @param int[]|null $types
     */
    public function setTypes(?array $types): void
    {
        $this->types = $types;
    }


}