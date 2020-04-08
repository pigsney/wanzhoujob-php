<?php


namespace App\DTO;

class JobFairDTO
{


    /**
     * @var int | null
     */
    private $id;

    /**
     * 招聘会名称
     * @var string | null
     */
    private $title;

    /**
     * 招聘会主页图片
     * @var string | null
     */
    private $image;

    /**
     * 招聘会简介
     * @var string | null
     */
    private $introduce;

    /**
     * @var  int | null
     */
    private $is_job_fair_type;

    /**
     * 招聘会时间（选择在哪天举办招聘会）
     * @var string | null
     */
    private $holding_time;

    /**
     * @var int | null
     */
    private $status;

    /**
     * @return string|null
     */
    public function getHoldingTime(): ?string
    {
        return $this->holding_time;
    }

    /**
     * @param string|null $holding_time
     */
    public function setHoldingTime(?string $holding_time): void
    {
        $this->holding_time = $holding_time;
    }

    /**
     * 举办单位
     * @var string | null
     */
    private $host_unit;

    /**
     * 举办地点
     * @var string| null
     */
    private $venue;

    /**
     * 联系电话
     * @var string | null
     */
    private $telephone;

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
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string|null
     */
    public function getIntroduce(): ?string
    {
        return $this->introduce;
    }

    /**
     * @param string|null $introduce
     */
    public function setIntroduce(?string $introduce): void
    {
        $this->introduce = $introduce;
    }

    /**
     * @return int|null
     */
    public function getIsJobFairType(): ?int
    {
        return $this->is_job_fair_type;
    }

    /**
     * @param int|null $is_job_fair_type
     */
    public function setIsJobFairType(?int $is_job_fair_type): void
    {
        $this->is_job_fair_type = $is_job_fair_type;
    }


    /**
     * @return string|null
     */
    public function getHostUnit(): ?string
    {
        return $this->host_unit;
    }

    /**
     * @param string|null $host_unit
     */
    public function setHostUnit(?string $host_unit): void
    {
        $this->host_unit = $host_unit;
    }

    /**
     * @return string|null
     */
    public function getVenue(): ?string
    {
        return $this->venue;
    }

    /**
     * @param string|null $venue
     */
    public function setVenue(?string $venue): void
    {
        $this->venue = $venue;
    }

    /**
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string|null $telephone
     */
    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int|null $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }


}