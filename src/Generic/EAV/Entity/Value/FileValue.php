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
    protected $file;

    public function setValue($value)
    {
        $this->file = $value;
    }

    public function getValue()
    {
        return $this->file;
    }
}
