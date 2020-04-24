<?php

namespace App\Dto\JobFair;

use App\Dto\PageListDto;

class JobFairCompanyListDto extends PageListDto
{
    /**
     * @var int | null
     */
    private $recruitment_id;

    /**
     * @var int | null
     */
    private $take;

    /**
     * @var integer|null
     */
    private $type;

    /**
     * @return int|null
     */
    public function getRecruitmentId(): ?int
    {
        return $this->recruitment_id;
    }

    /**
     * @param int|null $recruitment_id
     */
    public function setRecruitmentId(?int $recruitment_id): void
    {
        $this->recruitment_id = $recruitment_id ?? 0;
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
        $this->take = $take ?? 2;
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
        $this->type = $type ?? 0;
    }



}