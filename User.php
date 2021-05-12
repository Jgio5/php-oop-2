<?php
    
    ini_set('display_errors', 1);

    class User
    {
        private $id;
        private $nome;
        private $cognome;
        public $nickname;
        private $email;
        private $password;
        public $type; //lv user
        public $membership; //data iscrizione
        public $n_commenti = 0;
        public $n_post = 0;
        public $image;
        public $status;

        public function setEmail($_email)
        {
            $this->email = $_email;
        }
        public function getEmail()
        {
            return $this->email;
        }

        public function setType($type)
        {

            if($type < 10) {
                $this->type = "nuovo utente";
            }
            elseif($type > 10 && $type <= 30) {
                $this->type = "utente attivo";
            }
            else {
                $this->type = "utente più attivo";
            }
        }
        public function getTpe($type)
        {
            return $this->$type;
        }

        public function setMember($membership)
        {
            if($membership < 2) {
                $this->membership = 'young member';
            }
            elseif($membership <= 5 && $membership >=2) {
                $this->membership = 'silver member';
            }
            else {
                $this->membership = 'gold member';
            }
        }
        public function getMember()
        {
            return $this->$membership;
        }

    }

