<?php

namespace models;

class User {
    private $username;
    private $password;
    private $email;

    public function __construct($username, $password, $email) {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->email = $email;
    }

    public function register() {
        // Registration logic (e.g., save to database)
    }

    public function login($username, $password) {
        // Login logic (check username and password)
    }

    public function updateProfile($newData) {
        // Logic to update user's profile information
    }

    public function delete() {
        // Logic to delete the user account
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }
}
