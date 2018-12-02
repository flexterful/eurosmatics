<?php
/**
 * Created by PhpStorm.
 * User: Henrikas
 * Date: 2018-12-01
 * Time: 17:19
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    /**
     * @Route("/home", name="home"))
     *
     */
    public function showHome()
    {
        return $this->render('home.html.twig');
    }



}