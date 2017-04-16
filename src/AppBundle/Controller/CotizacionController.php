<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Controller\CotizacionController;
use BackendBundle\Entity\User;
use BackendBundle\Entity\Cotizacion;
use AppBundle\Form\CotizacionType;
use AppBundle\Form\UserType;
use BackendBundle\Entity\Cliente;

class CotizacionController extends Controller{
    
    public function indexAction(Request $request){
        
        return $this->render('AppBundle:Cotizacion:home.html.twig');
    }
    
    public function addCotizacionAction(Request $request){
        
        $cotizacion = new Cotizacion();
        $form = $this->createForm(CotizacionType::class, $cotizacion);
        
        return $this->render('AppBundle:Cotizacion:add_cotizacion.html.twig', array(
            "form" => $form->createView()
        ));
    }
}
