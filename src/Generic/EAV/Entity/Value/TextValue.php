<?php

namespace Generic\EAV\Entity\Value;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Generic\EAV\Entity\Value\Value;

/**
 * @author Soufian Salim <soufi@nsal.im>
 *
 * @Gedmo\TranslationEntity(class="Generic\EAV\Entity\Translation")
 * @ORM\Entity
 */
class TextValue extends Value
{
    /**
     * @var string
     * 
     * @Gedmo\Translatable
     * @ORM\Column(type="text")
     */
    protected $text;

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
     * @return TextValue
     */
    public function setValue($value)
    {
        $this->text = $value;
    }

    /**
     * Get value
     * 
     * @return string
     */
    public function getValue()
    {
        return $this->text;
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
