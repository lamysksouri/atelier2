<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'nom' => "Lamys \n Osama",
        ]);
    }

    #[Route('/blog/user', name: 'app_blog')]
    public function test_age($age){
        return $this->render('blog/test_age.html.twig', [
            'age' => 22,
        ]);
    }

    #[Route('/blog/users', name: 'app_blog')]
    public function users(): Response
    {
        $users = [
            ['name' => 'Lamys','age'=> 22] ,
            ['name' => 'Osama','age'=> 13 ],
            ['name' => 'Baw','age'=> 100 ]
        ];
        return $this->render('blog/users.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/blog/articles', name: 'app_articles')]
    public function articles(): Response
    {
        $Articles = [
            ['titre' => 'Le premier article', 'resume' => 'Résumé du premier article', 'date_publication' => '2024-01-01', 'auteur' => 'Meriam'],
            ['titre' => 'Le deuxième article ', 'resume' => 'Résumé du deuxième article', 'date_publication' => '2022-05-15', 'auteur' => 'Ahmed'],
            ['titre' => 'Le troisième article ', 'resume' => 'Résumé du troisième resume','date_publication' => '2020-03-10', 'auteur' => 'Nidhal'],
            ]; 
        return $this->render('blog/articles.html.twig', [
            'articles' => $Articles,
        ]);
    }

    }

