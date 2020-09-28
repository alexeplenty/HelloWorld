<?php
namespace HelloWorld\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

/**
 * Class ContentController
 * @package HelloWorld\Controllers
 */
class ContentController extends Controller
{

    public function sayHello(Twig $twig):string
    {
        return $twig->render('HelloWorld::content.hello');
    }
}