<?php

namespace AppBundle\Controller;

use AppBundle\Form\Model\RegistrationFormModel;
use AppBundle\Form\Type\RegistrationFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationFormController extends Controller
{

    /**
     * @Route("/register", name="register")
     */
    public function registrationFormAction(Request $request)
    {
        $registrationFormModel = new RegistrationFormModel();
        $form = $this->createForm(RegistrationFormType::class, $registrationFormModel);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            var_dump("estoy en el controller" );die;
        }

        return $this->render('registration/registrationForm.html.twig', array(
            'form' => $form->createView(),
        ));

    }
}