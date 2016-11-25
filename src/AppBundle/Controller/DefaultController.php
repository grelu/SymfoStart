<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="redirect_login")
     */
    public function indexAction(Request $request)
    {
        // redirect to login
		return $this->redirectToRoute('fos_user_security_login');
    }
}
