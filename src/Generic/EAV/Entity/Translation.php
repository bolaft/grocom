<?php
namespace Generic\EAV\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Entity\MappedSuperclass\AbstractTranslation;

/**
 * Mappe les traductions EAV.
 * 
 * @author   Soufian Salim <soufi@nsal.im>
 * 
 * @ORM\Table(name="generic_eav_translation", indexes={
 *      @ORM\index(name="article_translation_idx", columns={"locale", "object_class", "foreign_key", "field"})
 * })
 * @ORM\Entity(repositoryClass="Gedmo\Translatable\Entity\Repository\TranslationRepository")
 */
class Translation extends AbstractTranslation
{

}