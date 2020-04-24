<?php


namespace App\Dto\Job;


use App\Kernels\BaseDto;

class JobDto extends BaseDto
{
    /**
     * @var int | null
     */
    protected $id;

    /**
     * @var string | null
     */
    protected $job_title;

    /**
     * @var string | null
     */
    protected $department;

    /**
     * @var int | null
     */
    protected $number;

    /**
     * @var int | null
     */
    protected $education;

    /**
     * @var int | null
     */
    protected $work_experience;

    /**
     * @var string | null
     */
    protected $requirements;

    /**
     * @var int | null
     */
    protected $sex;

    /**
     * @var int | null
     */
    protected $min_age;

    /**
     * @var int | null
     */
    protected $max_age;

    /**
     * @var int | null
     */
    protected $salary_above;

    /**
     * @var int | null
     */
    protected $salary_below;

    /**
     * @var int | null
     */
    protected $manage_id;

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
    public function getJobTitle(): ?string
    {
        return $this->job_title;
    }

    /**
     * @param string|null $job_title
     */
    public function setJobTitle(?string $job_title): void
    {
        $this->job_title = $job_title;
    }

    /**
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }

    /**
     * @param string|null $department
     */
    public function setDepartment(?string $department): void
    {
        $this->department = $department;
    }

    /**
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int|null $number
     */
    public function setNumber(?int $number): void
    {
        $this->number = $number;
    }

    /**
     * @return int|null
     */
    public function getEducation(): ?int
    {
        return $this->education;
    }

    /**
     * @param int|null $education
     */
    public function setEducation(?int $education): void
    {
        $this->education = $education;
    }

    /**
     * @return int|null
     */
    public function getWorkExperience(): ?int
    {
        return $this->work_experience;
    }

    /**
     * @param int|null $work_experience
     */
    public function setWorkExperience(?int $work_experience): void
    {
        $this->work_experience = $work_experience;
    }

    /**
     * @return string|null
     */
    public function getRequirements(): ?string
    {
        return $this->requirements;
    }

    /**
     * @param string|null $requirements
     */
    public function setRequirements(?string $requirements): void
    {
        $this->requirements = $requirements;
    }

    /**
     * @return int|null
     */
    public function getSex(): ?int
    {
        return $this->sex;
    }

    /**
     * @param int|null $sex
     */
    public function setSex(?int $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return int|null
     */
    public function getMinAge(): ?int
    {
        return $this->min_age;
    }

    /**
     * @param int|null $min_age
     */
    public function setMinAge(?int $min_age): void
    {
        $this->min_age = $min_age;
    }

    /**
     * @return int|null
     */
    public function getMaxAge(): ?int
    {
        return $this->max_age;
    }

    /**
     * @param int|null $max_age
     */
    public function setMaxAge(?int $max_age): void
    {
        $this->max_age = $max_age;
    }

    /**
     * @return int|null
     */
    public function getSalaryAbove(): ?int
    {
        return $this->salary_above;
    }

    /**
     * @param int|null $salary_above
     */
    public function setSalaryAbove(?int $salary_above): void
    {
        $this->salary_above = $salary_above;
    }

    /**
     * @return int|null
     */
    public function getSalaryBelow(): ?int
    {
        return $this->salary_below;
    }

    /**
     * @param int|null $salary_below
     */
    public function setSalaryBelow(?int $salary_below): void
    {
        $this->salary_below = $salary_below;
    }

    /**
     * @return int|null
     */
    public function getManageId(): ?int
    {
        return $this->manage_id;
    }

    /**
     * @param int|null $manage_id
     */
    public function setManageId(?int $manage_id): void
    {
        $this->manage_id = $manage_id;
    }


}