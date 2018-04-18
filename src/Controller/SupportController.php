<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SupportController extends Controller
{
    /**
     * @Route("/support/submit", name="supportSubmit")
     */
    public function SubmitTicket()
    {
        return $this->render('support/index.html.twig', [
            'controller_name' => 'Creer le Ticket',
        ]);
    }

    /**
     * Matches /support exactly
     *
     * @Route("/support", name="supportMessage")
     */
    public function MessageTicket()
    {
        return $this->render('support/index.html.twig', [
            'controller_name' => 'Ouvre le ticket',
        ]);
    }

    /**
     * @Route("/support/close", name="supportClose")
     */
    public function CloseTicket()
    {
        return $this->render('support/index.html.twig', [
            'controller_name' => 'ferme le Ticket',
        ]);
    }

    /**
     * Matches /support/*
     *
     * @Route("/support/{slug}/{idE}/{idR}", name="supportIds")
     */
    public function idManager($slug,$idE,$idR)
    {
        $messageTest = "<li>";
        $messageTest .= $slug;
        $messageTest .= "</li>";
        $messageTest .= "<li>";
        $messageTest .= $idE;
        $messageTest .= "</li>";
        $messageTest .= "<li>";
        $messageTest .= $idR;
        $messageTest .= "</li>";
        return new Response("<body><ul>$messageTest</ul></body>");
    }

}
