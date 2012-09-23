<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;

use Generic\EAV\Entity\Value\Value as BaseValue;

/**
 * @ORM\Entity
 */
class FileValue extends BaseValue
{
    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $file_value;

    public function setValue($value)
    {
        $this->file_value = $value;
    }

    public function getValue()
    {
        return $this->file_value;
    }
}
