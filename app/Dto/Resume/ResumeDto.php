<?php


namespace App\Dto\Resume;


use App\Kernels\BaseDto;
use Illuminate\Http\UploadedFile;

class ResumeDto extends BaseDto
{

    /**
     * @var int | null
     */
    private $id;

    /**
     * @var string | null
     */
    private $name;

    /**
     * @var int | null
     */
    private $sex;

    /**
     * @var string | null
     */
    private $birthday;

    /**
     * @var string | null
     */
    private $introduce;

    /**
     * @var int | null
     */
    private $high;

    /**
     * @var int | null
     */
    private $phone;

    /**
     * @var int | null
     */
    private $work_experience;

    /**
     * @var int | null
     */
    private $educational_level;

    /**
     * @var string | null
     */
    private $political_outlook;

    /**
     * @var int | null
     */
    private $marital_status;

    /**
     * @var string | null
     */
    private $native_place;

    /**
     * @var string | null
     */
    private $address;

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @param string|null $address
     */
    public function setAddress(?string $address): void
    {
        $this->address = $address;
    }

    /**
     * @var string | null
     */
    private $email;

    /**
     * @var int | null
     */
    private $job_status;

    /**
     * @var UploadedFile | null
     */
    private $photo;

    /**
     * @var array | null
     */
    private $job_intention;

    /**
     * @var array | null
     */
    private $work_history;

    /**
     * @var int | null
     */
    private $educational_type;

    /**
     * @var array | null
     */
    private $educational_background;

    /**
     * @var array | null
     */
    private $project_history;

    /**
     * @var array | null
     */
    private $language_ability;

    /**
     * @var array | null
     */
    private $skill_expertise;

    /**
     * @var array | null
     */
    private $certificate;

    /**
     * @var array | null
     */
    private $other_information;

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
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * @param string|null $birthday
     */
    public function setBirthday(?string $birthday): void
    {
        $this->birthday = $birthday;
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
    public function getHigh(): ?int
    {
        return $this->high;
    }

    /**
     * @param int|null $high
     */
    public function setHigh(?int $high): void
    {
        $this->high = $high;
    }

    /**
     * @return int|null
     */
    public function getPhone(): ?int
    {
        return $this->phone;
    }

    /**
     * @param int|null $phone
     */
    public function setPhone(?int $phone): void
    {
        $this->phone = $phone;
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
     * @return int|null
     */
    public function getEducationalLevel(): ?int
    {
        return $this->educational_level;
    }

    /**
     * @param int|null $educational_level
     */
    public function setEducationalLevel(?int $educational_level): void
    {
        $this->educational_level = $educational_level;
    }

    /**
     * @return string|null
     */
    public function getPoliticalOutlook(): ?string
    {
        return $this->political_outlook;
    }

    /**
     * @param string|null $political_outlook
     */
    public function setPoliticalOutlook(?string $political_outlook): void
    {
        $this->political_outlook = $political_outlook;
    }

    /**
     * @return int|null
     */
    public function getMaritalStatus(): ?int
    {
        return $this->marital_status;
    }

    /**
     * @param int|null $marital_status
     */
    public function setMaritalStatus(?int $marital_status): void
    {
        $this->marital_status = $marital_status;
    }

    /**
     * @return string|null
     */
    public function getNativePlace(): ?string
    {
        return $this->native_place;
    }

    /**
     * @param string|null $native_place
     */
    public function setNativePlace(?string $native_place): void
    {
        $this->native_place = $native_place;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return int|null
     */
    public function getJobStatus(): ?int
    {
        return $this->job_status;
    }

    /**
     * @param int|null $job_status
     */
    public function setJobStatus(?int $job_status): void
    {
        $this->job_status = $job_status;
    }

    /**
     * @return UploadedFile|null
     */
    public function getPhoto(): ?UploadedFile
    {
        return $this->photo;
    }

    /**
     * @param UploadedFile|null $photo
     */
    public function setPhoto(?UploadedFile $photo): void
    {
        $this->photo = $photo;
    }


    /**
     * @return array|null
     */
    public function getJobIntention(): ?array
    {
        return $this->job_intention;
    }

    /**
     * @param array|null $job_intention
     */
    public function setJobIntention(?array $job_intention): void
    {
        $this->job_intention = $job_intention;
    }

    /**
     * @return array|null
     */
    public function getWorkHistory(): ?array
    {
        return $this->work_history;
    }

    /**
     * @param array|null $work_history
     */
    public function setWorkHistory(?array $work_history): void
    {
        $this->work_history = $work_history;
    }

    /**
     * @return int|null
     */
    public function getEducationalType(): ?int
    {
        return $this->educational_type;
    }

    /**
     * @param int|null $educational_type
     */
    public function setEducationalType(?int $educational_type): void
    {
        $this->educational_type = $educational_type;
    }

    /**
     * @return array|null
     */
    public function getEducationalBackground(): ?array
    {
        return $this->educational_background;
    }

    /**
     * @param array|null $educational_background
     */
    public function setEducationalBackground(?array $educational_background): void
    {
        $this->educational_background = $educational_background;
    }

    /**
     * @return array|null
     */
    public function getProjectHistory(): ?array
    {
        return $this->project_history;
    }

    /**
     * @param array|null $project_history
     */
    public function setProjectHistory(?array $project_history): void
    {
        $this->project_history = $project_history;
    }

    /**
     * @return array|null
     */
    public function getLanguageAbility(): ?array
    {
        return $this->language_ability;
    }

    /**
     * @param array|null $language_ability
     */
    public function setLanguageAbility(?array $language_ability): void
    {
        $this->language_ability = $language_ability;
    }

    /**
     * @return array|null
     */
    public function getSkillExpertise(): ?array
    {
        return $this->skill_expertise;
    }

    /**
     * @param array|null $skill_expertise
     */
    public function setSkillExpertise(?array $skill_expertise): void
    {
        $this->skill_expertise = $skill_expertise;
    }

    /**
     * @return array|null
     */
    public function getCertificate(): ?array
    {
        return $this->certificate;
    }

    /**
     * @param array|null $certificate
     */
    public function setCertificate(?array $certificate): void
    {
        $this->certificate = $certificate;
    }

    /**
     * @return array|null
     */
    public function getOtherInformation(): ?array
    {
        return $this->other_information;
    }

    /**
     * @param array|null $other_information
     */
    public function setOtherInformation(?array $other_information): void
    {
        $this->other_information = $other_information;
    }





}