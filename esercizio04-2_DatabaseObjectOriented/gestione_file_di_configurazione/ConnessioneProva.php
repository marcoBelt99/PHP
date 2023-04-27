<?php
    class ConnessioneProva
    {
        // Attributi per la connessione
        private $db_host;
        private $db_user;
        private $db_password;
        private $db_name;


        function get_db_host() {
            return $this->db_host;
        }
        function get_db_user() {
            return $this->db_user;
        }
        function get_db_password() {
            return $this->db_password;
        }
        function get_db_name() {
            return $this->db_name;
        }
    }


?>