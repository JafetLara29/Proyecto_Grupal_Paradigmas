<?php
    class User{
        //Variables para almacenar los datos cunado los retiremos de la base de datos
        public $id;
        public $documentID;
        public $name;
        public $lastName;
        public $address;
        public $phone;
        public $email;
        public $iban;
        public $active;

        //Contructor
        public function __construct($id, $documentID,$name, $lastName, $address, $phone,$email, $iban, $active){
            $this->id = $id;
            $this->documentID = $documentID;
            $this->name=$name;
            $this->lastName = $lastName;
            $this->address = $address;
            $this->phone = $phone;
            $this->email=$email;
            $this->iban = $iban;
            $this->active = $active;
        }
        function getID() {
            return $this->id;
        }
        function getDocumentID() {
            return $this->documentID;
        }
        function getName() {
            return $this->name;
        }
        function getLastName() {
            return $this->lastName;
        }
        function getAddress() {
            return $this->address;
        }
        function getPhone() {
            return $this->phone;
        }
        function getEmail() {
            return $this->email;
        }
        function getIBAN() {
            return $this->iban;
        }
        function getActive() {
            return $this->active;
        }

        function setID($id){
            $this->id = $id;
        }

    }
?>