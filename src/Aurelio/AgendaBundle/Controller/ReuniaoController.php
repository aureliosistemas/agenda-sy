<?php

namespace Aurelio\AgendaBundle\Controller;

use Aurelio\AgendaBundle\Entity\Reuniao;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Reuniao controller.
 *
 * @Route("reuniao")
 */
class ReuniaoController extends Controller
{
    /**
     * Lista todos os regiistro relacionados a reuniao.
     *
     * @Route("/", name="reuniao_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reuniaos = $em->getRepository('AurelioAgendaBundle:Reuniao')->findAll();

        return $this->render('reuniao/index.html.twig', array(
            'reuniaos' => $reuniaos,
        ));
    }

    /**
     * Cria um novo reuniao.
     *
     * @Route("/new", name="reuniao_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $reuniao = new Reuniao();
        $form = $this->createForm('Aurelio\AgendaBundle\Form\ReuniaoType', $reuniao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reuniao);
            $em->flush();

            return $this->redirectToRoute('reuniao_show', array('id' => $reuniao->getId()));
        }

        return $this->render('reuniao/new.html.twig', array(
            'reuniao' => $reuniao,
            'form' => $form->createView(),
        ));
    }

    /**
     * Busca e mostra reuniao.
     *
     * @Route("/{id}", name="reuniao_show")
     * @Method("GET")
     */
    public function showAction(Reuniao $reuniao)
    {
        $deleteForm = $this->createDeleteForm($reuniao);

        return $this->render('reuniao/show.html.twig', array(
            'reuniao' => $reuniao,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Caso exista mostra o formulario de edição da reuniao.
     *
     * @Route("/{id}/edit", name="reuniao_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reuniao $reuniao)
    {
        $deleteForm = $this->createDeleteForm($reuniao);
        $editForm = $this->createForm('Aurelio\AgendaBundle\Form\ReuniaoType', $reuniao);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reuniao_edit', array('id' => $reuniao->getId()));
        }

        return $this->render('reuniao/edit.html.twig', array(
            'reuniao' => $reuniao,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deleta a reuniao.
     *
     * @Route("/{id}", name="reuniao_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reuniao $reuniao)
    {
        $form = $this->createDeleteForm($reuniao);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reuniao);
            $em->flush();
        }

        return $this->redirectToRoute('reuniao_index');
    }

    /**
     * Cria o formulario para deletar reuniao.
     *
     * @param Reuniao $reuniao The reuniao entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reuniao $reuniao)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reuniao_delete', array('id' => $reuniao->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
