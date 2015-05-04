<?php

namespace Ahe\gsbBundle\Controller;
require_once("include/fct.inc.php");
require_once("include/class.pdogsb.inc.php");
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ComptableController extends Controller
{   // ok
    public function consulterVisiteursAction() {
       $liste = $this->getArtisans() ;
       return $this->render('AheGsbBundle:Comptables:consulterVisiteurs.html.twig', 
                                array('liste'=>$liste)) ;
        
    }
    
    public function getVisiteurs(){
        $idComptable=$this->getRequest()->getSession()->get('idComptable');
        $em = $this->getDoctrine()->getManager();
    }

    public function seDeconnecterAction()
    {
        
    }
   
}