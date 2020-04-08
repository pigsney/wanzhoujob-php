<?php


namespace App\DTO;


class PageListDTO
{
    /**
     * 每页数据条数
     * @var int |null
     */
    protected $limit;

    /**
     * 当前页码
     * @var int | null
     */
    protected $page;

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param int|null $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @return int|null
     */
    public function getPage(): ?int
    {
        return $this->page;
    }

    /**
     * @param int|null $page
     */
    public function setPage(?int $page): void
    {
        $this->page = $page;
    }



}