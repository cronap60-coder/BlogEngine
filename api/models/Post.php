<?php
namespace api\\models; 

class Post {
    private $id;
    private $title;
    private $content;
    private $createdAt;
    private $updatedAt;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
        $this->createdAt = date('Y-m-d H:i:s');
        $this->updatedAt = $this->createdAt;
    }

    public function create() {
        // Code to create a new post in the database
    }

    public function read($id) {
        // Code to read a post from the database
    }

    public function update($id, $title, $content) {
        // Code to update the post in the database
    }

    public function delete($id) {
        // Code to delete the post from the database
    }
}