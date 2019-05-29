<?php

namespace App\Controller;

use App\Entity\Phone;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class PhoneController extends AbstractController
{
    /**
     * @var UserRepository
     */
    private $repositoryUser;
    public function __construct()
    {
        //$this->repositoryUser = $this->getDoctrine()->getRepository(User::class);
    }

    /**
     * @Route("/phones", name="phone")
     */
    public function index()
    {
        $repositoryUser = $this->getDoctrine()->getRepository(Phone::class);

        $phones = $repositoryUser->findAll();

        return $this->render('phone/index.html.twig', [
            'phones' => $phones,
        ]);
    }
}