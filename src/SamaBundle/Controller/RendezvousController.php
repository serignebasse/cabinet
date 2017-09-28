<?php

namespace SamaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SamaBundle\Entity\Rendezvous;
use SamaBundle\Form\RendezvousType;

/**
 * Rendezvous controller.
 *
 * @Route("/rendezvous")
 */
class RendezvousController extends Controller
{
    /**
     * Lists all Rendezvous entities.
     *
     * @Route("/", name="rendezvous_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rendezvouses = $em->getRepository('SamaBundle:Rendezvous')->findAll();

        return $this->render('rendezvous/index.html.twig', array(
            'rendezvouses' => $rendezvouses,
        ));
    }

    /**
     * Creates a new Rendezvous entity.
     *
     * @Route("/new", name="rendezvous_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $rendezvous = new Rendezvous();
        $form = $this->createForm('SamaBundle\Form\RendezvousType', $rendezvous);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rendezvous);
            $em->flush();

            return $this->redirectToRoute('rendezvous_show', array('id' => $rendezvous->getId()));
        }

        return $this->render('rendezvous/new.html.twig', array(
            'rendezvous' => $rendezvous,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Rendezvous entity.
     *
     * @Route("/{id}", name="rendezvous_show")
     * @Method("GET")
     */
    public function showAction(Rendezvous $rendezvous)
    {
        $deleteForm = $this->createDeleteForm($rendezvous);

        return $this->render('rendezvous/show.html.twig', array(
            'rendezvous' => $rendezvous,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rendezvous entity.
     *
     * @Route("/{id}/edit", name="rendezvous_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Rendezvous $rendezvous)
    {
        $deleteForm = $this->createDeleteForm($rendezvous);
        $editForm = $this->createForm('SamaBundle\Form\RendezvousType', $rendezvous);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rendezvous);
            $em->flush();

            return $this->redirectToRoute('rendezvous_edit', array('id' => $rendezvous->getId()));
        }

        return $this->render('rendezvous/edit.html.twig', array(
            'rendezvous' => $rendezvous,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Rendezvous entity.
     *
     * @Route("/{id}", name="rendezvous_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Rendezvous $rendezvous)
    {
        $form = $this->createDeleteForm($rendezvous);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rendezvous);
            $em->flush();
        }

        return $this->redirectToRoute('rendezvous_index');
    }


    /**
     * Lists date.
     *
     * @Route("/", name="rendezvous_recherche")
     * @Method("POST")
     */
    public function rechercheAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $mot=$request->get('mot');
        $rendezvouses = $em->getRepository('SamaBundle:Rendezvous')->findBy(
            array('date'=> $mot)
        );

            return $this->render('rendezvous/index.html.twig', array(
                'rendezvouses' =>$rendezvouses
            ));

    }


    /**
     * Creates a form to delete a Rendezvous entity.
     *
     * @param Rendezvous $rendezvous The Rendezvous entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rendezvous $rendezvous)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rendezvous_delete', array('id' => $rendezvous->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
