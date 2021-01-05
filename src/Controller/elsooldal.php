<?php
/**
 * Created by PhpStorm.
 * User: media
 * Date: 2021. 01. 05.
 * Time: 12:06
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class elsooldal extends AbstractController
{

    /**
     * @Route("/")
     */


    public function homepage()
        {
            return new Response("www");
        }
    }