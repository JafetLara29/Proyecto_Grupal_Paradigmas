<?php

include '../Data/userdata.php';

class UserBussiness {

    private $userData;

    public function __construct() {
        $this->userData = new UserData();
    }

    public function save($user) {
        return $this->userData->save($user);
    }

    public function getUsers() {
        return $this->userData->consult();
    }
    
}