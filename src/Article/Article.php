<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: federicogermi
 * Date: 29/11/2018
 * Time: 15:17.
 */

namespace LaravelDay\Article;

class Article
{
    private $id;
    private $title;
    private $body;
    private $creationDate;

    /**
     * @param string    $title
     * @param string    $body
     * @param \DateTime $creationDate
     */
    public function _contruct(int $id, string $title, string $body, \DateTimeImmutable $creationDate)
    {
        $this->title = $title;
        $this->body = $body;
        $this->creationDate = $creationDate;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getCreationDate(): \DateTimeImmutable
    {
        return $this->creationDate;
    }
}
