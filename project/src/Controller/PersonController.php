<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Person;
use App\Form\PersonType;

class PersonController extends AbstractController
{
    #[Route('/person', name: 'app_person')]
    public function saveComplaint(ManagerRegistry $doctrine, Request $request): Response
    {
		$manager = $doctrine->getManager();
		
		$person = new Person();
		
		$form = $this->createForm(PersonType::class, $person);
		$form->handleRequest($request);
		if($form->isSubmitted() && $form->isValid()){
		  $person = $form->getData();  
          $manager -> persist($person);
          $manager -> flush();
		  return $this->render('person/success.html.twig');
		  
		}
        return $this->render('person/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
