<?php
use Phalcon\Mvc\Controller;
use component\A;
use component\B;
use component\C;
use component\D;

class SuccessController extends Controller
{
    public function indexAction()
    {
        $component = $_GET['comp'];

        switch ($component) {
            case 'A':
                $comp = new A();
                $this->view->message = $comp->index();
                die;
                break;
            case 'B':
                $comp = new B();
                $this->view->message = $comp->index();
                die;
                break;
            case 'C':
                $comp = new C();
                $this->view->message = $comp->index();
                die;
                break;
            case 'D':
                $comp = new D();
                $this->view->message = $comp->index();
                die;
                break;
            default:
                # code...
                break;
        }
    }
}