<?php

namespace app;
use \app\formatter\Num3And5Format;
use \app\formatter\Num3Format;
use \app\formatter\Num5Format;
use Exception;

class MainApp {

    public function calculate() {

        for ($number = 1; $number <= 100; $number++) {
            try {
                $fb = new Fb($number);
                switch ($fb) {
                    case $fb->getRemainder(3) == 0 && $fb->getRemainder(5) == 0:
                        $writer = new Num3And5Format();
                        break;
                    case $fb->getRemainder(3) == 0:
                        $writer = new Num3Format();
                        break;
                    case $fb->getRemainder(5) == 0:
                        $writer = new Num5Format();
                        break;
                    default:
                        throw new Exception('Number Not Supported');
                }
                $fb->write($writer);
                
            } catch (Exception $ex) {
                echo sprintf("Number %d Fb is <b>%s</b></br>", $number, $number);
            }
        }
    }
}
