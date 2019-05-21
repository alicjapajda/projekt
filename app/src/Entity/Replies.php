<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RepliesRepository")
 */
class Replies
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $topic_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $reply_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reply_content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getTopicId(): ?int
    {
        return $this->topic_id;
    }

    public function setTopicId(int $topic_id): self
    {
        $this->topic_id = $topic_id;

        return $this;
    }

    public function getReplyDate(): ?\DateTimeInterface
    {
        return $this->reply_date;
    }

    public function setReplyDate(\DateTimeInterface $reply_date): self
    {
        $this->reply_date = $reply_date;

        return $this;
    }

    public function getReplyContent(): ?string
    {
        return $this->reply_content;
    }

    public function setReplyContent(string $reply_content): self
    {
        $this->reply_content = $reply_content;

        return $this;
    }
}
