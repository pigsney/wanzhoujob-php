<?php


namespace App\DTO;


class CompanyDTO
{

    /**
     * @var int | null
     */
    private $id;

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
     * @var string | null
     */
    private $name;

    /**
     * @var string | null
     */
    private $logo;

    /**
     * @var string | null
     */
    private $full_name;

    /**
     * @var int | null
     */
    private $nature;

    /**
     * @var int | null
     */
    private $scale;

    /**
     * @var array | null
     */
    private $welfare;

    /**
     * @var string | null
     */
    private $url;

    /**
     * @var string | null
     */
    private $address;

    /**
     * @var string | null
     */
    private $standby_address;

    /**
     * @var int | null
     */
    private $contacts;

    /**
     * @var string | null
     */
    private $phone;

    /**
     * @var string | null
     */
    private $landline;

    /**
     * @var string | null
     */
    private $email;

    /**
     * @var string | null
     */
    private $introduce;

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
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @param string|null $logo
     */
    public function setLogo(?string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->full_name;
    }

    /**
     * @param string|null $full_name
     */
    public function setFullName(?string $full_name): void
    {
        $this->full_name = $full_name;
    }

    /**
     * @return int|null
     */
    public function getNature(): ?int
    {
        return $this->nature;
    }

    /**
     * @param int|null $nature
     */
    public function setNature(?int $nature): void
    {
        $this->nature = $nature;
    }

    /**
     * @return int|null
     */
    public function getScale(): ?int
    {
        return $this->scale;
    }

    /**
     * @param int|null $scale
     */
    public function setScale(?int $scale): void
    {
        $this->scale = $scale;
    }

    /**
     * @return array|null
     */
    public function getWelfare(): ?array
    {
        return $this->welfare;
    }

    /**
     * @param array|null $welfare
     */
    public function setWelfare(?array $welfare): void
    {
        $this->welfare = $welfare;
    }



    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string|null $url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

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
     * @return string|null
     */
    public function getStandbyAddress(): ?string
    {
        return $this->standby_address;
    }

    /**
     * @param string|null $standby_address
     */
    public function setStandbyAddress(?string $standby_address): void
    {
        $this->standby_address = $standby_address;
    }

    /**
     * @return int|null
     */
    public function getContacts(): ?int
    {
        return $this->contacts;
    }

    /**
     * @param int|null $contacts
     */
    public function setContacts(?int $contacts): void
    {
        $this->contacts = $contacts;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return string|null
     */
    public function getLandline(): ?string
    {
        return $this->landline;
    }

    /**
     * @param string|null $landline
     */
    public function setLandline(?string $landline): void
    {
        $this->landline = $landline;
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


}