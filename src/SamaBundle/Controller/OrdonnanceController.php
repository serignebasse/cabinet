<?php

namespace SamaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SamaBundle\Entity\Ordonnance;
use SamaBundle\Form\OrdonnanceType;

/**
 * Ordonnance controller.
 *
 * @Route("/ordonnance")
 */
class OrdonnanceController extends Controller
{
    /**
     * Lists all Ordonnance entities.
     *
     * @Route("/", name="ordonnance_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ordonnances = $em->getRepository('SamaBundle:Ordonnance')->findAll();

        return $this->render('ordonnance/index.html.twig', array(
            'ordonnances' => $ordonnances,
        ));
    }

    /**
     * Creates a new Ordonnance entity.
     *
     * @Route("/new", name="ordonnance_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ordonnance = new Ordonnance();
        $form = $this->createForm('SamaBundle\Form\OrdonnanceType', $ordonnance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ordonnance);
            $em->flush();

            return $this->redirectToRoute('ordonnance_show', array('id' => $ordonnance->getId()));
        }

        return $this->render('ordonnance/new.html.twig', array(
            'ordonnance' => $ordonnance,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ordonnance entity.
     *
     * @Route("/{id}", name="ordonnance_show")
     * @Method("GET")
     */
    public function showAction(Ordonnance $ordonnance)
    {
        $deleteForm = $this->createDeleteForm($ordonnance);

        return $this->render('ordonnance/show.html.twig', array(
            'ordonnance' => $ordonnance,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Ordonnance entity.
     *
     * @Route("/{id}/edit", name="ordonnance_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Ordonnance $ordonnance)
    {
        $deleteForm = $this->createDeleteForm($ordonnance);
        $editForm = $this->createForm('SamaBundle\Form\OrdonnanceType', $ordonnance);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ordonnance);
            $em->flush();

            return $this->redirectToRoute('ordonnance_edit', array('id' => $ordonnance->getId()));
        }

        return $this->render('ordonnance/edit.html.twig', array(
            'ordonnance' => $ordonnance,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ordonnance entity.
     *
     * @Route("/{id}", name="ordonnance_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Ordonnance $ordonnance)
    {
        $form = $this->createDeleteForm($ordonnance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ordonnance);
            $em->flush();
        }

        return $this->redirectToRoute('ordonnance_index');
    }

    /**
     * Creates a form to delete a Ordonnance entity.
     *
     * @param Ordonnance $ordonnance The Ordonnance entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Ordonnance $ordonnance)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ordonnance_delete', array('id' => $ordonnance->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
