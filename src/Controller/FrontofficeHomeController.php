<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Circuit;

class FrontofficeHomeController extends AbstractController
{
    /**
     * @Route("/home", name="front", methods="GET")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $circuits = $em->getRepository(Circuit::Class)->findAll();
        return $this->render('front/home.html.twig', [
            'circuits' => $circuits ,
        ]);
    }

    /**
     * @Route("/circuit/{id}", name="front_circuit_show", methods="GET")
     */
    public function circuitShow($id)
    {
        $em = $this->getDoctrine()->getManager();
        $circuit = $em->getRepository(Circuit::class)->find($id);

        dump($circuit);

        return $this->render('front/circuit_show.html.twig', [
            'circuit' => $circuit,
        ]);
    }

    /**
    * @Route("/home/like/{id}", name="front_circuit_like", methods="GET")
    */
    public function circuitLike($id)
    {
        dump($id);
        $em = $this->getDoctrine()->getManager();
        $circuit = $em->getRepository(Circuit::class)->find($id);
        $likes = $this->get('session')->get('likes');
        if( ! $likes )
        {
            $likes = array();
        }
        if( ! in_array($id,$likes) )
        {
            $likes[] = $id;
        }
        else
        {
            $likes = array_diff($likes, array($id));
        }
        $this->get('session')->set('likes', $likes);
        return $this->redirectToRoute('front');
    }
}
