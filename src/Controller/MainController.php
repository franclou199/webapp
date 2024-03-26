<?php

namespace App\Controller;

use App\Entity\Posts;
use App\Entity\Users;
use App\Repository\PostsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'index')]
    // public function index(EntityManagerInterface $em): Response
    // {
    //     $author = new Users();
    //     $author->setEmail("test@test.com")
    //         ->setFullName("Kerchou")
    //         ->setUsername("Panda")
    //         ->setPassword("Panda@29");

    //     $em->persist($author);

    //     $post = new Posts();
    //     $post->setTitle("un titre") 
    //         ->setSlug("un-titre")
    //         ->setContent("un contenu")
    //         ->setPublishedAt(new \DateTimeImmutable())
    //         ->setSummary("summary")
    //         ->setAuthor($author);

    //     $em->persist($post);
    //     $em->flush();

    //     //dd($post);
    // }

    public function index(PostsRepository $repository): Response 
        {
            // $posts = $repository->findAll();
            $posts = $repository->findByTitle("un titre");

            dd($posts);
        }

        
}
