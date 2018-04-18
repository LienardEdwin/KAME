<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SupportController extends Controller
{
    /**
     * Matches /support/close/*
     *
     * @Route("/support/{idT}/{idE}/{idR}/close", name="supportClose" ,  *
     *     requirements={
     *         "idR": "\d+",
     *         "idE": "\d+",
     *         "idT": "\d+"
     *     })
     */
    public function CloseTicket($idT,$idE,$idR)
    {
        $messageTest = "<li>";
        $messageTest .= $idT;
        $messageTest .= "</li>";
        $messageTest .= "<li>";
        $messageTest .= $idE;
        $messageTest .= "</li>";
        $messageTest .= "<li>";
        $messageTest .= $idR;
        $messageTest .= "</li>";
        $messageTest .= "<li>";
        $messageTest .= "Ferme un ticket";
        $messageTest .= "</li>";
        return new Response("<body><ul>$messageTest</ul></body>");
    }
    /**
     * Matches /support/message/*
     *
     * @Route("/support/{idT}/{idE}/{idR}/message", name="supportMessage" ,  *
     *     requirements={
     *         "idR": "\d+",
     *         "idE": "\d+",
     *         "idT": "\d+"
     *     })
     */
    public function MessageTicket($idT,$idE,$idR)
    {
        $messageTest = "<li>";
        $messageTest .= $idT;
        $messageTest .= "</li>";
        $messageTest .= "<li>";
        $messageTest .= $idE;
        $messageTest .= "</li>";
        $messageTest .= "<li>";
        $messageTest .= $idR;
        $messageTest .= "</li>";
        $messageTest .= "<li>";
        $messageTest .= "Message ticket";
        $messageTest .= "</li>";
        return new Response("<body><ul>$messageTest</ul></body>");
    }
    /**
     * Matches /support/submit/*
     *
     * @Route("/support/{idT}/{idE}/{idR}/submit", name="supportSubmit" ,  *
     *     requirements={
     *         "idR": "\d+",
     *         "idE": "\d+",
     *         "idT": "\d+"
     *     })
     */
    public function SubmitTicket($idT,$idE,$idR)
    {
        $messageTest = "<li>";
        $messageTest .= $idT;
        $messageTest .= "</li>";
        $messageTest .= "<li>";
        $messageTest .= $idE;
        $messageTest .= "</li>";
        $messageTest .= "<li>";
        $messageTest .= $idR;
        $messageTest .= "</li>";
        $messageTest .= "<li>";
        $messageTest .= "Submit ticket";
        $messageTest .= "</li>";
        return new Response("<body><ul>$messageTest</ul></body>");
    }

}
