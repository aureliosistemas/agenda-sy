<?php

namespace Aurelio\AgendaBundle\Controller;

use Aurelio\AgendaBundle\Entity\Reuniao;
use Aurelio\AgendaBundle\Entity\ReuniaoDia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reuniaodia controller.
 *
 * @Route("reuniaodia")
 */
class ReuniaoDiaController extends Controller
{
    /**
     * Lista todos os regiistro relacionados a Reuniaodia.
     *
     * @Route("/{reuniao}", name="reuniaodia_index")
     * @Method("GET")
     */
    public function indexAction(Request $request, $reuniao)
    {
        $em = $this->getDoctrine()->getManager();

        $Reuniaodia = new Reuniaodia();
        $reuniaoDias = $em->getRepository('AurelioAgendaBundle:ReuniaoDia')->findByReuniao($reuniao);
        $form = $this->createForm('Aurelio\AgendaBundle\Form\ReuniaoDiaType', $Reuniaodia);
        $form->handleRequest($request);
      
        return $this->render('reuniaodia/index.html.twig', array(
            'form' => $form->createView(),
            'reuniaoDias' => $reuniaoDias,
        ));
    }

    /**
     * Cria um novo Reuniaodia.
     *
     * @Route("/{reuniao}", name="reuniaodia_new")
     * @Method({"POST"})
     */
    public function newAction(Request $request, Reuniao $reuniao)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $request->request->get('aurelio_agendabundle_reuniaodia')['data'];
        $dia = new Reuniaodia();
        $dia->setReuniao($reuniao);
        $dia->setData(\DateTime::createFromFormat("d/m/Y",$data));

        $em->persist($dia);

        $em->flush();

        return $this->redirectToRoute('reuniaodia_index', array('reuniao' => $reuniao->getId()));
    }

    /**
     * Busca e mostra Reuniaodia.
     *
     * @Route("/{id}", name="reuniaodia_show")
     * @Method("GET")
     */
    public function showAction(ReuniaoDia $Reuniaodia)
    {
        $deleteForm = $this->createDeleteForm($Reuniaodia);

        return $this->render('reuniaodia/show.html.twig', array(
            'Reuniaodia' => $Reuniaodia,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Caso exista mostra o formulario de edição da Reuniaodia.
     *
     * @Route("/{id}/edit", name="reuniaodia_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ReuniaoDia $Reuniaodia)
    {
        $deleteForm = $this->createDeleteForm($Reuniaodia);
        $editForm = $this->createForm('Aurelio\AgendaBundle\Form\ReuniaoDiaType', $Reuniaodia);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reuniaodia_edit', array('id' => $Reuniaodia->getId()));
        }

        return $this->render('reuniaodia/edit.html.twig', array(
            'Reuniaodia' => $Reuniaodia,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deleta a Reuniaodia.
     *
     * @Route("/remove/{id}", name="reuniaodia_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request, ReuniaoDia $Reuniaodia)
    {
        $reuniao = $Reuniaodia->getReuniao();
        $em = $this->getDoctrine()->getManager();
        $em->remove($Reuniaodia);
        $em->flush();
        
        return $this->redirectToRoute('reuniaodia_index', array('reuniao' => $reuniao->getId()));
    }

    /**
     * Cria o formulario para deletar Reuniaodia.
     *
     * @param ReuniaoDia $Reuniaodia The Reuniaodia entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ReuniaoDia $Reuniaodia)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reuniaodia_delete', array('id' => $Reuniaodia->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
