<?php

namespace App\Controller;

use App\Repository\LoginRepository;
use App\Routing\Attribute\Route;
use App\Session\SessionInterface;
use PhpParser\Builder\Class_;

Class LoginController extends AbstractController
{
       #[Route(path:'/login', httpMethod:'GET')]
        public function create()
        {
          echo $this->twig->render('login.html.twig');
        }

        public function save()
        {
            if(!empty($_POST))
            {
               if(empty($_POST['nom'])) {
                  $errors['nom'] = "Le nom ne peut être vide";
               }
               if(!preg_match('/^([a-z0-9] )*$/i', $_POST['prenom'])){
                $errors['nom'] = "Le prenom ne doit pas contenir de caractères spéciaux";
                }
            }
        }
        
        
    

    
}
