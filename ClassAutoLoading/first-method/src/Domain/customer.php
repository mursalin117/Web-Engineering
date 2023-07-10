<?php
    class Customer {
        private $id;
        private $firstname;
        private $surname;
        private $email;

        public function __construct(int $id, string $firstname, string $surname, string $email) {
            $this->id = $id;
            $this->firstname = $firstname;
            $this->surname = $surname;
            $this->email = $email;
        }

        public function __toString() {
            $result = 'Person Name: ' . $this->firstname . ' ' . $this->surname;
            return $result;
        }
    }
?>