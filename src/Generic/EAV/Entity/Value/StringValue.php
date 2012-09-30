<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Generic\EAV\Entity\Value\Value;

/**
 * @author Soufian Salim <soufi@nsal.im>
 *
 * @ORM\Entity
 */
class StringValue extends Value
{
    /**
     * @var string
     * 
     * @Gedmo\Translatable
     * @ORM\Column(type="string", length=255)
     */
    protected $string;

    /**
     * @var string
     * 
     * @Gedmo\Locale
     */
    protected $locale;

    /**
     * Set value
     * 
     * @param  string $value
     * @return StringValue
     */
    public function setValue($value)
    {
        $this->string = $value;
    }

    /**
     * Get value
     * 
     * @return string
     */
    public function getValue()
    {
        return $this->string;
    }

    /**
     * Set locale
     *
     * @param  string $locale
     * @return Attribute
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }
}
