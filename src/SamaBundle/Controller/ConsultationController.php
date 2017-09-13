<?php

namespace SamaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SamaBundle\Entity\Consultation;
use SamaBundle\Form\ConsultationType;

/**
 * Consultation controller.
 *
 * @Route("/consultation")
 */
class ConsultationController extends Controller
{
    /**
     * Lists all Consultation entities.
     *
     * @Route("/", name="consultation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $consultations = $em->getRepository('SamaBundle:Consultation')->findAll();

        return $this->render('consultation/index.html.twig', array(
            'consultations' => $consultations,
        ));
    }

    /**
     * Creates a new Consultation entity.
     *
     * @Route("/new", name="consultation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $consultation = new Consultation();
        $form = $this->createForm('SamaBundle\Form\ConsultationType', $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($consultation);
            $em->flush();

            return $this->redirectToRoute('consultation_show', array('id' => $consultation->getId()));
        }

        return $this->render('consultation/new.html.twig', array(
            'consultation' => $consultation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Consultation entity.
     *
     * @Route("/{id}", name="consultation_show")
     * @Method("GET")
     */
    public function showAction(Consultation $consultation)
    {
        $deleteForm = $this->createDeleteForm($consultation);

        return $this->render('consultation/show.html.twig', array(
            'consultation' => $consultation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Consultation entity.
     *
     * @Route("/{id}/edit", name="consultation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Consultation $consultation)
    {
        $deleteForm = $this->createDeleteForm($consultation);
        $editForm = $this->createForm('SamaBundle\Form\ConsultationType', $consultation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($consultation);
            $em->flush();

            return $this->redirectToRoute('consultation_edit', array('id' => $consultation->getId()));
        }

        return $this->render('consultation/edit.html.twig', array(
            'consultation' => $consultation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Consultation entity.
     *
     * @Route("/{id}", name="consultation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Consultation $consultation)
    {
        $form = $this->createDeleteForm($consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($consultation);
            $em->flush();
        }

        return $this->redirectToRoute('consultation_index');
    }

    /**
     * Creates a form to delete a Consultation entity.
     *
     * @param Consultation $consultation The Consultation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Consultation $consultation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('consultation_delete', array('id' => $consultation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
