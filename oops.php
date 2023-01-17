<?php 

class Solution{
    public $a,$b,$c;
    function sum()
    {
       $this->c = $this->a+$this->b;
       return $this->c;
    }
    // subtract
    function sub()
    {
        $this->a = $this->a - $this->b;
        return $this->a;
    }
    // multiply
    function mul()
    {   
        $this->c = $this->a*$this->b;
        return $this->c;
    }
    // divide
    function div()
    {   
        $this->c = $this->a/$this->b;
        return $this->c;
    }
}

$c1 = new Solution();
$c1->a = 10;
$c1->b = 20;

echo $c1->sum();
echo $c1->sub();
echo $c1->mul();
echo $c1->div();

?>