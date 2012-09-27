<?php

namespace Generic\Comment\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Comment as BaseComment;
use FOS\CommentBundle\Model\SignedCommentInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @author Soufian Salim <soufi@nsal.im>
 *
 * @ORM\Entity
 * @ORM\Table(name="generic_comment_comment")
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Comment extends BaseComment implements SignedCommentInterface
{
    /**
     * @var int
     * 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     * @ORM\generatedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Generic\Comment\Entity\Thread
     * 
     * @ORM\ManyToOne(targetEntity="Generic\Comment\Entity\Thread")
     */
    protected $thread;

    /**
     * @var Generic\User\Entity\User
     * 
     * @ORM\ManyToOne(targetEntity="Generic\User\Entity\User")
     */
    protected $author;

    /**
     * @param UserInterface $author
     */
    public function setAuthor(UserInterface $author)
    {
        $this->author = $author;
    }

    /**
     * @return UserInterface
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getAuthorName()
    {
        if (null === $this->getAuthor()) {
            return 'Guest';
        }

        return $this->getAuthor()->getUsername();
    }
}