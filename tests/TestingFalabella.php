<?php
namespace tests;
use PHPUnit\Framework\TestCase;
use app\Fb;
use app\formatter\Num3Format;
use app\formatter\Num5Format;
use app\formatter\Num3And5Format;

class TestingFb extends TestCase
{

    public function testThree() {
        $Fb = new Fb(3);    
        $this->assertEquals(0, $Fb->getRemainder(3));
    }

    public function  testFive(){
        $Fb = new Fb(10);
        $this->assertEquals(0, $Fb->getRemainder(5));
    }

    public function  testThreeAndFive(){

        $Fb = new Fb(15);
        $this->assertEquals(0, $Fb->getRemainder(3));
        $this->assertEquals(0, $Fb->getRemainder(5));
    }
    
    public function testWriteThree() {	
        $Fb = new Fb(3);  
        $writer = new Num3Format();
        $this->expectOutputString(sprintf("Number %d Fb is <b>%s</b></br>", $Fb->number, 'Linio'), $Fb->write($writer));
    }
    
    public function testWriteFive() {
        $Fb = new Fb(10);  
        $writer = new Num5Format();
        $this->expectOutputString(sprintf("Number %d Fb is <b>%s</b></br>", $Fb->number, 'IT'), $Fb->write($writer));
    }
    
    public function testWriteThreeAndFive() {
        $Fb = new Fb(15);  
        $writer = new Num3And5Format();
        $this->expectOutputString(sprintf("Number %d Fb is <b>%s</b></br>", $Fb->number, 'Linianos'), $Fb->write($writer));
    }

}