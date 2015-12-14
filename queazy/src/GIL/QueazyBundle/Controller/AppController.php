<?php
/**
 * Created by PhpStorm.
 * User: Renan
 * Date: 14/12/2015
 * Time: 13:33
 */

namespace GIL\QueazyBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{

    public function getBDD() {
        return $this->getDoctrine()->getEntityManager();
    }

    public function getRepo($repoName) {
        return $this->getBDD()->getRepository("GILQueazyBundle:" . $repoName);
    }

}