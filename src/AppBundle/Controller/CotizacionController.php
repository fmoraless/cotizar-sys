<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CotizacionController extends Controller{
    
    public function indexAction(Request $request){
        
        echo "Accion de index Cotizacion";
        die();
    }
}
