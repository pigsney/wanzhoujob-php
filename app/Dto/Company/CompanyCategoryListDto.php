<?php


namespace App\Dto\Company;


use App\Dto\PageListDto;

class CompanyCategoryListDto extends PageListDto
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
    private $category_ids;

    /**
     * @var int | null
     */
    private $category_id;

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
    public function getCategoryIds(): ?array
    {
        return $this->category_ids;
    }

    /**
     * @param int[]|null $category_ids
     */
    public function setCategoryIds(?array $category_ids): void
    {
        $this->category_ids = $category_ids;
    }

    /**
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    /**
     * @param int|null $category_id
     */
    public function setCategoryId(?int $category_id): void
    {
        $this->category_id = $category_id;
    }



}