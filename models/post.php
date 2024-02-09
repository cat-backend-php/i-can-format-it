<?php

class postsModel {
    public $title = '';

    public $description = '';

    public $image = '';

    public $created_at;

    public categoryModel $category;

    public function __construct($title = '', $description = '', $image = '', $created_at = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->created_at = $created_at;
    }

    public function set_title(string $title)
    {
        $this->title = $title;
    }

    public function setDesc(string $description)
    {
        $this->description = $description;
    }

    public function category(categoryModel $cate)
    {

    }

    public function image($img) { $this->image = $img; }

    const timezone = 'UTC';
}