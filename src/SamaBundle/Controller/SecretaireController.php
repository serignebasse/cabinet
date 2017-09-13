<?php

namespace SamaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SamaBundle\Entity\Secretaire;
use SamaBundle\Form\SecretaireType;

/**
 * Secretaire controller.
 *
 * @Route("/secretaire")
 */
class SecretaireController extends Controller
{
    /**
     * Lists all Secretaire entities.
     *
     * @Route("/", name="secretaire_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $secretaires = $em->getRepository('SamaBundle:Secretaire')->findAll();

        return $this->render('secretaire/index.html.twig', array(
            'secretaires' => $secretaires,
        ));
    }

    /**
     * Creates a new Secretaire entity.
     *
     * @Route("/new", name="secretaire_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $secretaire = new Secretaire();
        $form = $this->createForm('SamaBundle\Form\SecretaireType', $secretaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($secretaire);
            $em->flush();

            return $this->redirectToRoute('secretaire_show', array('id' => $secretaire->getId()));
        }

        return $this->render('secretaire/new.html.twig', array(
            'secretaire' => $secretaire,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Secretaire entity.
     *
     * @Route("/{id}", name="secretaire_show")
     * @Method("GET")
     */
    public function showAction(Secretaire $secretaire)
    {
        $deleteForm = $this->createDeleteForm($secretaire);

        return $this->render('secretaire/show.html.twig', array(
            'secretaire' => $secretaire,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Secretaire entity.
     *
     * @Route("/{id}/edit", name="secretaire_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Secretaire $secretaire)
    {
        $deleteForm = $this->createDeleteForm($secretaire);
        $editForm = $this->createForm('SamaBundle\Form\SecretaireType', $secretaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($secretaire);
            $em->flush();

            return $this->redirectToRoute('secretaire_edit', array('id' => $secretaire->getId()));
        }

        return $this->render('secretaire/edit.html.twig', array(
            'secretaire' => $secretaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Secretaire entity.
     *
     * @Route("/{id}", name="secretaire_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Secretaire $secretaire)
    {
        $form = $this->createDeleteForm($secretaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($secretaire);
            $em->flush();
        }

        return $this->redirectToRoute('secretaire_index');
    }

    /**
     * Creates a form to delete a Secretaire entity.
     *
     * @param Secretaire $secretaire The Secretaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Secretaire $secretaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('secretaire_delete', array('id' => $secretaire->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
