<?php

namespace App\Controller;

use App\Entity\Configuration;
use App\Form\ConfigurationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ConfigurationController
 * @package App\Controller
 * @Route("configuration")
 */
class ConfigurationController extends Controller
{
    /**
     * @Route("/", name="index_config")
     */
    public function index()
    {
        $configurations = $this->getDoctrine()->getRepository(Configuration::class)->findAll();
        return $this->render('back/config/index.html.twig', compact('configurations'));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/add", name="add_config")
     */
    public function Add(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $config = new Configuration();
        $form = $this->createForm(ConfigurationType::class, $config);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $config = $form->getData();
            $em->persist($config);
            $em->flush();
            $this->addFlash('success', "Votre configuration a été enregistré avec succés");
            return $this->redirectToRoute('index_config');

        }
        return $this->render("back/config/add_edit.html.twig", array(
            'form' => $form->createView()
        ));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/edit/{id}", name="edit_config")
     */
    public function edit(Request $request , $id) {
        $em = $this->getDoctrine()->getManager();
        $config = $em->find(Configuration::class, $id);
        $form = $this->createForm(ConfigurationType::class, $config);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $config = $form->getData();
            $em->persist($config);
            $em->flush();
            $this->addFlash('success', "Votre configuration a été enregistré avec succés");
            return $this->redirectToRoute('index_config');

        }
        return $this->render("back/config/add_edit.html.twig", array(
            'form' => $form->createView()
        ));
    }

}
