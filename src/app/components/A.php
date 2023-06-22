<?php

namespace component;

use Phalcon\Di\Injectable;
use Phalcon\Security\JWT\Token\Parser;

class A extends Injectable
{
    public function index()
    {
        if ($this->session->has('currUser')) {

            $tokenReceived = $this->session->currUser;
            $parser = new Parser();

            $tokenObject = $parser->parse($tokenReceived);
            $role = $tokenObject->getClaims()->getPayload()['sub'];
            if ($role != '') {
                echo "<h3>This is component A</h3>";
                echo $this->session->currUser;
            } else {
                echo "access denied";
                die;
            }
        } else {
            echo "access denied";
            die;
        }
    }
}