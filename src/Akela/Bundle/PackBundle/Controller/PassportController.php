<?php

namespace Akela\Bundle\PackBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Akela\Bundle\CoreBundle\Entity\Passport;
use Akela\Bundle\CoreBundle\Form\PassportType;

/**
 * Passport controller.
 *
 * @Route("/passport")
 */
class PassportController extends Controller
{
    /**
     * Lists all Passport entities.
     *
     * @Route("/", name="passport_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $passports = $em->getRepository('CoreBundle:Passport')->findAll();

        return $this->render('passport/index.html.twig', array(
            'passports' => $passports,
        ));
    }

    /**
     * Creates a new Passport entity.
     *
     * @Route("/new", name="passport_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $passport = new Passport();
        $form = $this->createForm('Akela\Bundle\CoreBundle\Form\PassportType', $passport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($passport);
            $em->flush();

            return $this->redirectToRoute('passport_show', array('id' => $passport->getId()));
        }

        return $this->render('passport/new.html.twig', array(
            'passport' => $passport,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Passport entity.
     *
     * @Route("/{id}", name="passport_show")
     * @Method("GET")
     */
    public function showAction(Passport $passport)
    {
        $deleteForm = $this->createDeleteForm($passport);

        return $this->render('passport/show.html.twig', array(
            'passport' => $passport,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Passport entity.
     *
     * @Route("/{id}/edit", name="passport_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Passport $passport)
    {
        $deleteForm = $this->createDeleteForm($passport);
        $editForm = $this->createForm('Akela\Bundle\CoreBundle\Form\PassportType', $passport);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($passport);
            $em->flush();

            return $this->redirectToRoute('passport_edit', array('id' => $passport->getId()));
        }

        return $this->render('passport/edit.html.twig', array(
            'passport' => $passport,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Passport entity.
     *
     * @Route("/{id}", name="passport_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Passport $passport)
    {
        $form = $this->createDeleteForm($passport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($passport);
            $em->flush();
        }

        return $this->redirectToRoute('passport_index');
    }

    /**
     * Creates a form to delete a Passport entity.
     *
     * @param Passport $passport The Passport entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Passport $passport)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('passport_delete', array('id' => $passport->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
