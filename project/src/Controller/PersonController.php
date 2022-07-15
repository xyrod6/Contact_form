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
		
		$form = $this->createFormBuilder($person)
            ->add('name', TextType::class)
            ->add('email', DateType::class)
			->add('message', TextType::class)
            ->add('submit', SubmitType::class, ['label' => 'Contact form'])
            ->getForm();
			
        return $this->render('person/index.html.twig', [
            'form' => 'PersonController',
        ]);
    }
}
