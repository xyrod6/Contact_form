<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Person;

class PersonController extends AbstractController
{
    #[Route('/person', name: 'app_person')]
    public function index(): Response
    {
		$person = new Person();
		
		$form = $this->createForm(PersonType::class, $task);
		
        return $this->render('person/index.html.twig', [
            'form' => 'PersonController',
        ]);
    }
}
