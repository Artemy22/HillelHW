<?php

namespace App\Controller;

use App\Entity\Country;
use App\Entity\Phone;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CountryController extends AbstractController
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
     * @Route("/countries", name="country")
     */
    public function index()
    {
        $repositoryUser = $this->getDoctrine()->getRepository(Country::class);

        $countries = $repositoryUser->findAll();

        return $this->render('country/index.html.twig', [
            'countries' => $countries,
        ]);
    }
}
