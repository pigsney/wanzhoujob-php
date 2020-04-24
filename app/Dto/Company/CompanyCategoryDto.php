<?php


namespace App\Dto\Company;


use App\Kernels\BaseDto;

class CompanyCategoryDto extends BaseDto
{
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