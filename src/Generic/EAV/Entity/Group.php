<?php
namespace Generic\EAV\Entity;

use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Gedmo\Tree(type="nested")
 * @ORM\Table(name="generic_eav_group")
 * @ORM\Entity(repositoryClass="Generic\EAV\Repository\GroupRepository")
 */
class Group
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=64)
     */
    private $name;

    /**
     * @ORM\Column(name="label", type="string", length=64)
     */
    private $label;

    /**
     * @Gedmo\TreeLeft
     * @ORM\Column(name="lft", type="integer")
     */
    private $lft;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(name="lvl", type="integer")
     */
    private $lvl;

    /**
     * @Gedmo\TreeRight
     * @ORM\Column(name="rgt", type="integer")
     */
    private $rgt;

    /**
     * @Gedmo\TreeRoot
     * @ORM\Column(name="root", type="integer", nullable=true)
     */
    private $root;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="Generic\EAV\Entity\Group", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity="Generic\EAV\Entity\Group", mappedBy="parent")
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    private $children;

    /**
     * @ORM\OneToOne(targetEntity="Generic\EAV\Entity\Link", inversedBy="display_group", fetch="EAGER")
     * @ORM\JoinColumn(name="link_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $link = null;

    public function __construct($name = null)
    {
        $this->setName($name);
        $this->setLabel($name);
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param  string $name
     * @return Group
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
     * @param  string $label
     * @return Group
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
     * Set parent
     *
     * @param  App\Entity\Group $parent
     * @return Group
     */
    public function setParent(\Generic\EAV\Entity\Group $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return App\Entity\Group
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Get children
     * 
     * @return Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }
    
    /**
     * Get a child from its name
     */
    public function getChild($child_name)
    {
        foreach ($this->children as $child) {
            if ($child->getName() == $child_name)
                return $child;
        }
        return null;
    }
    
    /**
     * Set lft
     *
     * @param  integer $lft
     * @return Group
     */
    public function setLft($lft)
    {
        $this->lft = $lft;

        return $this;
    }

    /**
     * Get lft
     *
     * @return integer
     */
    public function getLft()
    {
        return $this->lft;
    }

    /**
     * Set lvl
     *
     * @param  integer $lvl
     * @return Group
     */
    public function setLvl($lvl)
    {
        $this->lvl = $lvl;

        return $this;
    }

    /**
     * Get lvl
     *
     * @return integer
     */
    public function getLvl()
    {
        return $this->lvl;
    }

    /**
     * Set rgt
     *
     * @param  integer $rgt
     * @return Group
     */
    public function setRgt($rgt)
    {
        $this->rgt = $rgt;

        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer
     */
    public function getRgt()
    {
        return $this->rgt;
    }

    /**
     * Set root
     *
     * @param  integer $root
     * @return Group
     */
    public function setRoot($root)
    {
        $this->root = $root;

        return $this;
    }

    /**
     * Get root
     *
     * @return integer
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Set link
     *
     * @param  Generic\EAV\Entity\Link $link
     * @return Group
     */
    public function setLink(\Generic\EAV\Entity\Link $link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return Generic\EAV\Entity\Link
     */
    public function getLink()
    {
        return $this->link;
    }

    public function isLeaf()
    {
        return null !== $this->link;
    }

    public function toArray()
    {
        $data = get_object_vars($this);
        $data['parent_id'] = null !== $this->parent ? $this->parent->getId() : null;
        if (null !== $this->link) {
            $data['link_id'] = $this->link->getId();
        }

        unset($data['link']);
        unset($data['parent']);
        unset($data['children']);

        return $data;
    }
}
