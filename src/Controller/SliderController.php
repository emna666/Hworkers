<?php

namespace App\Controller;

use App\Entity\Slider;
use App\Form\SliderType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SliderController extends Controller
{
    /**
     * @Route("/slider", name="list_slider")
     */
    public function index()
    {
        $sliders = $this->getDoctrine()->getRepository(Slider::class)->findAll();

        return $this->render('back/sliders/index.html.twig', compact('sliders'));
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/slider/add", name="add_slider")
     */
    public function Add(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $slider = new Slider();
        $form = $this->createForm(SliderType::class, $slider);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $slider = $form->getData();
            $em->persist($slider);
            $em->flush();
            $this->addFlash('success', "Votre slider a été enregistré avec succés");
            return $this->redirectToRoute('list_slider');

        }
        return $this->render("back/sliders/add.html.twig", array(
            'form' => $form->createView()
        ));
    }

    /**
     * @param Request $request
     * @param $id
     * @return Response
     * @Route("/slider/edit/{id}", name="edit_slider")
     */
    public function Edit(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $slider = $em->find(Slider::class, $id);
        $form = $this->createForm(SliderType::class, $slider);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $slider = $form->getData();
            $em->persist($slider);
            $em->flush();
            $this->addFlash('success', "Votre slider a été enregistré avec succés");

            return $this->redirectToRoute('list_slider');
        }
        return $this->render("back/sliders/add.html.twig", array(
            'form' => $form->createView()
        ));
    }


    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/slider/delete/{id}", name="delete_slider")
     */
    public function delete($id) {
        $em = $this->getDoctrine()->getManager();
        $slider = $em->find(Slider::class, $id);
        try
        {
            $em->remove($slider);
            $em->flush();
            $this->addFlash('success', "Votre slider a été supprimé avec succès");
        } catch
        (\Exception $ex)
        {
            $this->addFlash('danger', "Impossible de supprimer cette Ligne");
        }
        return $this->redirect($this->generateUrl("list_slider"));

    }
}
