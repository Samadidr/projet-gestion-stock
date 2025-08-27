<?php
include_once __DIR__ . "/personne.php";
// DAO.php is already included through personne.php

// Vérifier si la classe Client n'existe pas déjà
if (!class_exists('Client')) {
    class Client extends Personne{

        function save(){      
            $this->dao->ajouterClient($this);
        }

        static function afficher(){
            $dao = new DAO();
            return $dao->afficherClient();
        }

        static function total(){
            $dao = new DAO();
            return $dao->getClientTotal();
        }

        function setId($idd){
            $this->id = $idd;
        }

        function update($cli){
            $this->dao->updateClient($cli);
        }

        function getClient($cli){
            $this->dao->getClient($cli);
        }

        static function delete($cli){
            $dao = new DAO();
            $dao->deleteClient($cli);
        }
    }
}
?>