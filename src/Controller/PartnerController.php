<?php

namespace App\Controller;

use App\Entity\Partner;
use App\Form\PartnerType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PartnerController extends Controller
{
    /**
     * @Route("/partner", name="list_partner")
     */
    public function index()
    {
       $partners = $this->getDoctrine()->getRepository(Partner::class)->findAll();
        return $this->render('back/Partners/index.html.twig', compact('partners'));
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/partner/add", name="add_partner")
     */
    public function Add(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $partner = new Partner();
        $form = $this->createForm(PartnerType::class, $partner);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $partner = $form->getData();
            $em->persist($partner);
            $em->flush();
            $this->addFlash('success', "Votre partenaire a été enregistré avec succés");
            return $this->redirectToRoute('list_partner');

        }
        return $this->render("back/Partners/add.html.twig", array(
            'form' => $form->createView()
        ));
    }

    /**
     * @param Request $request
     * @param $id
     * @return Response
     * @Route("/partner/edit/{id}", name="edit_partner")
     */
    public function Edit(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $partner = $em->find(Partner::class, $id);
        $form = $this->createForm(PartnerType::class, $partner);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $partner = $form->getData();
            $em->persist($partner);
            $em->flush();
            $this->addFlash('success', "Votre partenaire a été enregistré avec succés");

            return $this->redirectToRoute('list_partner');
        }
        return $this->render("back/Partners/add.html.twig", array(
            'form' => $form->createView()
        ));
    }


    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route("/partner/delete/{id}", name="delete_partner")
     */
    public function delete($id) {
        $em = $this->getDoctrine()->getManager();
        $partner = $em->find(Partner::class, $id);
        try
        {
            $em->remove($partner);
            $em->flush();
            $this->addFlash('success', "Votre partnenaire a été supprimé avec succès");
        } catch
        (\Exception $ex)
        {
            $this->addFlash('danger', "Impossible de supprimer cette Ligne");
        }
        return $this->redirect($this->generateUrl("list_partner"));

    }
}
