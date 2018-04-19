<?php

class BookEntity
{
    private $title;
    private $year;
    private $id;
    private $authorId;

    /**
     * BookEntity constructor.
     * @param $title
     * @param $year
     * @param $id
     * @param $authorId
     */
    public function __construct($title, $year, $id, $authorId)
    {
        $this->title = $title;
        $this->year = $year;
        $this->id = $id;
        $this->authorId = $authorId;
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }/**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }/**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }/**
     * @param mixed $year
     */
    public function setYear($year): void
    {
        $this->year = $year;
    }/**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }/**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }/**
     * @return mixed
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }/**
     * @param mixed $authorId
     */
    public function setAuthorId($authorId): void
    {
        $this->authorId = $authorId;
    }
}