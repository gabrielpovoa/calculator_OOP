<?php 
class Calculator {
    public $initialValue = 0;

    public function __construct($n)
    {
        $this->initialValue = $n;        
    }
    public function add($n) 
    {
        $this->initialValue +=$n;
    }
    public function sub($n) 
    {
        $this->initialValue -=$n;
    }
    public function times($n) 
    {
        $this->initialValue *=$n;
    }
    public function divide($n) 
    {
        if($n !== 0) {
            $this->initialValue /=$n;
        }
    }
    public function clear(){
        $this->initialValue;
    }

}


?>