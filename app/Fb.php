<?php
namespace app;
use \app\formatter\Formatter;

class Fb
{
    public $number;
    
    public function __construct($num)
    {
        $this->number = $num;
    }
    
    public function getRemainder($divisor) {
        return $this->number % $divisor;
    }

    public function write(Formatter $writer) {
        echo sprintf("Number %d Fb is <b>%s</b></br>", $this->number, $writer->getName());
    }

}
