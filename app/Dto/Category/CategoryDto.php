<?php


namespace App\Dto\Category;


use App\Kernels\BaseDto;

class CategoryDto extends BaseDto
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
     * @var string[] | null
     */
    private $names;

    /**
     * @return string[]|null
     */
    public function getNames(): array
    {
        return $this->names;
    }

    /**
     * @param string[]|null $names
     */
    public function setNames(array $names)
    {
        $this->names = $names;
    }

    /**
     * @return string|null
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int|null
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }


}