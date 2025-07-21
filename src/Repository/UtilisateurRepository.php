<?php
namespace App\Repository;

use APP\Entity\Utilisateur;

class UtilisateurRepository  extends Repository
{
    public function findAll():array
    {
        $query = $this->pdo->prepare("SELECT id, name FROM utilisateur");
        $query->execute();

        $utilisateur = $query->fetchAll($this->pdo::FETCH_CLASS, Utilisateur::class);
        
        var_dump($utilisateur);

        return $utilisateur;
    }
}
