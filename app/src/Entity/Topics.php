<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TopicsRepository")
 */
class Topics
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
    private $cat_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $topic_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $topic_content;

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

    public function getCatId(): ?int
    {
        return $this->cat_id;
    }

    public function setCatId(int $cat_id): self
    {
        $this->cat_id = $cat_id;

        return $this;
    }

    public function getTopicDate(): ?\DateTimeInterface
    {
        return $this->topic_date;
    }

    public function setTopicDate(\DateTimeInterface $topic_date): self
    {
        $this->topic_date = $topic_date;

        return $this;
    }

    public function getTopicContent(): ?string
    {
        return $this->topic_content;
    }

    public function setTopicContent(string $topic_content): self
    {
        $this->topic_content = $topic_content;

        return $this;
    }
}
