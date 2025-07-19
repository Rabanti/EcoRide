<?php
namespace  App\Controller;

use App\Repository\UtilisateurRepository;

class PageController extends Controller
{
    public function home(): void
{
    $gretting = "Hello";
    $name = "John";

    $utilisateurRepository = new UtilisateurRepository();

    $utilisateur = $utilisateurRepository->findAll();
    
    
    $this->render("page/home", [
        "grettings" => $gretting,
        "name" => $name,
        "utilisateur" => $utilisateur,
    ]);
}

public function about (): void
{
    $this->render("page/about");
}
    }



//la on l'a pas découper en mvc car la parti vue est direct en controller
// dans une fonction quand on a pas de return ,type = void
