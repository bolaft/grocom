<?php

namespace Generic\EAV\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="Generic\EAV\Repository\AttributeRepository")
 * @ORM\Table(name="generic_eav_attribute")
 */
class Attribute
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * The name of the attribute. Defaults to a slug of the label
     *
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $name;

    /**
     * The label that will be displayed to the user
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $label;

    /**
     * This help text may be displayed to the user, if specified
     *
     * @ORM\Column(type="string", length=255)
     */
    protected $help_text;

    /**
     * This is used to determine the type of values to use for this attribute.
     * It can be one of string|integer|float|boolean|join
     * join is a special type that is used to link the value with one element of this
     * attribute's domain.
     *
     * @ORM\Column(type="string", length=32)
     */
    protected $raw_type;
    private static $valid_raw_types = array(
        'string'  => 'string',
        'text'    => 'text',
        'date'    => 'date',
        'integer' => 'integer',
        'float'   => 'float',
        'boolean' => 'boolean',
        'join'    => 'join',
        'type'    => 'type',
        'file'    => 'file',
    );

    /**
     * This is used to deduce the appropriate form element to use to
     * render this attribute
     *
     * @ORM\Column(type="string", length=50)
     */
    protected $display_type;
    private static $valid_display_types = array(
        'text'           => 'text',
        'color_picker'   => 'color_picker',
        'textarea'       => 'textarea',
        'redactor'       => 'redactor',
        'password'       => 'password',
        'date_picker'    => 'date_picker',
        'radio'          => 'radio',
        'checkbox'       => 'checkbox',
        'multi_checkbox' => 'multi_checkbox',
        'select'         => 'select',
        'file'           => 'file',
    );

    private static $valid_display_for_raw = array(
        'string' => array(
            'text',
            'Zend_Form_Element_Password',
            'color_picker',
        ),
        'text' => array(
            'textarea',
            'redactor',
        ),
        'date' => array(
            'text',
            'date_picker',
        ),
        'integer' => array(
            'text',
        ),
        'float' => array(
            'text',
        ),
        'boolean' => array(
            'checkbox',
            'radio',
            'select',
        ),
        'join' => array(
            'select',
            'radio',
            'checkbox',
            'multi_checkbox',
        ),
        'type' => array(
            'select',
            'radio',
            'checkbox',
        ),
        'file' => array(
            'file',
        ),
    );

    /**
     * One attribute can have domain values (if raw_type is 'join')
     *
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\DomainValue", mappedBy="attribute", cascade={"persist"})
     */
    protected $domain;

    /**
     * The values of this attribute
     *
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\Value\Value", mappedBy="attribute")
     */
    protected $values;

    public function __construct($data = null)
    {
        $this->domain     = new ArrayCollection();
        $this->values     = new ArrayCollection();

        if (null !== $data) {
            $this->setName($data['name']);
            $this->setLabel($data['label']);
            $this->setHelpText($data['help_text']);
            $this->setRawType($data['raw_type']);
            $this->setDisplayType($data['display_type']);
        }
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param  string    $name
     * @return Attribute
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set label
     *
     * @param  string    $label
     * @return Attribute
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set help_text
     *
     * @param  string    $helpText
     * @return Attribute
     */
    public function setHelpText($helpText)
    {
        $this->help_text = $helpText;

        return $this;
    }

    /**
     * Get help_text
     *
     * @return string
     */
    public function getHelpText()
    {
        return $this->help_text;
    }

    /**
     * Set raw_type
     *
     * @param  string    $rawType
     * @return Attribute
     */
    public function setRawType($rawType)
    {
        if (!in_array($rawType, array_keys(self::$valid_raw_types))) {
            throw new \InvalidArgumentException("Invalid display type : " . $rawType);
        }

        $this->raw_type = $rawType;

        return $this;
    }

    /**
     * Get raw_type
     *
     * @return string
     */
    public function getRawType()
    {
        return $this->raw_type;
    }

    /**
     * Set display_type
     *
     * @param  string    $displayType
     * @return Attribute
     */
    public function setDisplayType($displayType)
    {
        if (!in_array($displayType, array_keys(self::$valid_display_types))) {
            throw new \InvalidArgumentException("Invalid display type : " . $displayType);
        }

        $this->display_type = $displayType;

        return $this;
    }

    /**
     * Get display_type
     *
     * @return string
     */
    public function getDisplayType()
    {
        return $this->display_type;
    }

    /**
     * Set domain
     *
     * @param  array     $domain
     * @return Attribute
     */
    public function setDomain(array $domain)
    {
        foreach ($domain as $value) {
            $dv = new \Generic\EAV\Entity\DomainValue($value);
            $this->addDomainValue($dv);
        }
    }

    /**
     * Add domain
     *
     * @param  Generic\EAV\Entity\DomainValue $domain
     * @return Attribute
     */
    public function addDomainValue(\Generic\EAV\Entity\DomainValue $value)
    {
        $value->setAttribute($this);
        $this->domain[] = $value;

        return $this;
    }

    /**
     * Get domain
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Add value
     *
     * @param  Generic\EAV\Entity\Value\Value $value
     * @return Attribute
     */
    public function addValue(\Generic\EAV\Entity\Value\Value $value)
    {
        $this->values[] = $value;

        return $this;
    }

    /**
     * Get values
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getValues()
    {
        return $this->values;
    }

    public static function getValidRawTypes()
    {
        return self::$valid_raw_types;
    }

    public static function getValidDisplayTypes()
    {
        return self::$valid_display_types;
    }

    public static function isValidDisplayForRaw($display, $raw)
    {
        return in_array($display, self::$valid_display_for_raw[$raw]);
    }

    public static function getValidDisplayForRaw($raw = null)
    {
        return ($raw === null) ? self::$valid_display_for_raw : self::$valid_display_for_raw[$raw];
    }
}
