<?php

namespace Aurelio\AgendaBundle\Controller;

use Aurelio\AgendaBundle\Entity\Reuniao;
use Aurelio\AgendaBundle\Entity\ReuniaoPessoa;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
/**
 * Reuniaopessoa controller.
 *
 * @Route("reuniaopessoa")
 */
class ReuniaoPessoaController extends Controller
{
    /**
     * Lista todos os regiistro relacionados a reuniaoPessoa.
     *
     * @Route("/", name="reuniaopessoa_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reuniaoPessoas = $em->getRepository('AurelioAgendaBundle:ReuniaoPessoa')->findAll();

        return $this->render('reuniaopessoa/index.html.twig', array(
            'reuniaoPessoas' => $reuniaoPessoas,
        ));
    }

  /**
     * Cria um novo Reuniaodia.
     *
     * @Route("/{reuniao}", name="reuniaopessoa_new")
     * @Method({"POST"})
     */
    public function newAction(Request $request, Reuniao $reuniao)
    {
        $em = $this->getDoctrine()->getManager();
        $nome = $request->request->get('pessoa_nome');
        $datas = $em->getRepository('AurelioAgendaBundle:ReuniaoDia')->findByReuniao($reuniao);
        $model = new ReuniaoPessoa();
        $model->setReuniao($reuniao);
        $model->setNome($nome);

        $em->persist($model);

        $em->flush();

        return $this->render('reuniaopessoa/new.html.twig', array(
            'datas' => $datas,
            'reuniao' => $reuniao->getId(),
            'nome' => $model,
            'id' => $model->getId(),
        ));
    }

   
    /**
     * Caso exista mostra o formulario de edição da reuniaoPessoa.
     *
     * @Route("/dias/{id}", name="reuniaopessoa_dias")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ReuniaoPessoa $reuniaoPessoa)
    {
       try {
            $em = $this->getDoctrine()->getManager();
            $dias = $request->request->get('dias');
            $reuniaoPessoa->setDias($dias);
            $em->flush();
            $retorno = true;
       } catch (Exception $e) {
           $retorno = false;
       }

       $response = new Response(json_encode($retorno));
       $response->headers->set('Content-Type', 'application/json');

       return $response;
    }

    /**
     * Deleta a reuniaoPessoa.
     *
     * @Route("/{id}", name="reuniaopessoa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ReuniaoPessoa $reuniaoPessoa)
    {
        $form = $this->createDeleteForm($reuniaoPessoa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reuniaoPessoa);
            $em->flush();
        }

        return $this->redirectToRoute('reuniaopessoa_index');
    }
}
