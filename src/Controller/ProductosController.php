<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductosController extends AbstractController
{
    /**
     * @Route("/productos/{nombre}", name="app_productos")
     */
    public function ParametroNombre( Request $request ): Response
    {
        $arrayNombre = [ 'ivan' , 'leo' , 'osito'];

        return $this->render('form/form.html.twig',[
        'nombreParametro' => $request->get('nombre')
        ]
            
        );
    }
}
