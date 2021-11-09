<?php
interface StartMachine
{
   public function startEngine();
}
abstract class Transport implements StartMachine

{
    public function startEngine()
    {
        echo '<br> Start Engine';
    }
    public function movingForvard()
    {
        echo '<br> moving forvard';
    }
    public function movingBackwards()
    {
        echo '<br> moving backwards';
    }
}
class Car extends Transport 
{   
    public $powerEngine = 200;
    public function nitro()
    {
        echo '<br> nitro';
    }
}

class Tank extends Transport
{
    public $gunCaliber = 120; 
    public function bang()
    {
       echo '<br> bang';
    }
}
class Excavator extends Transport
{
    public $bucketVolume = 2;
    public function movingBucket()
    {
       echo '<br> moving bucket';
    }
}

function testMachine (Transport $machine) {

}

function testF (Transport $tech) {
    $tech-> startEngine();
    $tech-> movingForvard();
}

$car = New Car ();

testF ($car);