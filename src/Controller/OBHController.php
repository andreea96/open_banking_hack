<?php
/**
 * Created by PhpStorm.
 * User: Andreea
 * Date: 9/14/2019
 * Time: 1:53 PM
 */
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class OBHController
 */
class OBHController extends \FOS\RestBundle\FOSRestBundle
{
    public function getCreditAction()
    {
        return new Response('ceva', 200);
    }
}