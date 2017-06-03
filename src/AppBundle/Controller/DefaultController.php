<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $company = [
            'name' => 'Megafonn Creative',
        ];

        $currentUser = $this->get('security.token_storage')->getToken()->getUser();

        return $this->render('panel/index.html.twig', [
            'company' => $company,
            'currentUser' => $currentUser,
        ]);
    }
}
