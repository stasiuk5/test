<?php
//Задача 2
function findSimple($a, $b)
{
    $array = array();
    for ($i = $a; $i <= $b; $i++){
		$counter = 0; 
    for ($j = $a; $j <= $b;$j++){
	if($i%$j==0) { $counter++; }}     
	                if($counter==2) 
					{ $array[] = $i;}}
    return $array;

}
//Задача3
function createTrapeze($a)
{
$keys = ['a', 'b', 'c'];
$newarray = []; 
$t = [];
foreach($a as $key){
   $t[] = $key;
   if(count($keys) == count($t)){
      $newarray[] = array_combine($keys, $t);
      $t = [];
   }
}
return $newarray;
}


//Задача 4

function squareTrapeze($a){


$newarray = array_map(function($key) {
      $key['s'] = ($key['a'] + $key['b']) * $key['c'] / 2; 
      return $key;
    }, $a);
    
    return $newarray;

}

//Задача 5

function getMin($a)
{
foreach ($a as $key => $value) {
    if(!isset($min)){
      $min  = $value;
    }else{
      if($min > $value ){
        $min = $value;
      }
    }
  }
  return $min;
}	

//Задача 6
function getSizeForLimit($a, $b)
{
   foreach ($a as $value){
        
        foreach ($value as $sValue){
			if ($value['s'] <= $b)
                echo $sValue;
        }
        
}


    
	}

//Задача 7


function printTrapeze($a){
echo "<table cellpadding=5 cellspacing=0 border=1>";
foreach ($a as $value){
        echo "<tr>";
        foreach ($value as $sValue){
			if ($value['s'] % 2 === 0)
                echo "<td>{$sValue}</td>";
			else  
				echo "<td bgcolor=red>{$sValue}</td>";
        }
        echo "</tr>";
}
echo "</table>";
}

//Задача 8
/*
abstract class BaseMath
{
	public function exp1($a, $b, $c) {
		$result=$a*($b^$c);
		return $result;
	}
	public function exp2($a, $b, $c){
		$result=($a/$b)^$c;
		return $result;		
	}
	public function getValue();
}
*/
//Задача 9
   abstract class BaseMath {
        public function exp1($a, $b, $c) {
            $result=$a*($b^$c);
		    return $result;
        }
        
        public function exp2($a, $b, $c) {
            $result=($a/$b)^$c;
		    return $result;
        }
        
        abstract function getValue(); 
    
    }
    class F1 extends BaseMath {
            public $a;
			public $b;
			public $c;
        function __construct($a,$b,$c) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;

        }
        
        public function getValue() {
             $f=($this->a*($this->b^$this->c)+((($this->a/$this->c)^$this->b)%3)^min($this->a,$this->b,$this->c));
              return $f;
        }
    }

//вывод 2
            echo "Задача 1";
            echo "</br>";
print_r (findSimple(1, 13));
            echo "</br>";
//вывод 3
            echo "Задача 2";
            echo "</br>";
print_r(createTrapeze([1,2,3,4,5,6]));
            echo "</br>";
//вывод 4
            echo "Задача 3";
            echo "</br>";
print_r (squareTrapeze(createTrapeze([1,2,3,4,5,6])));
            echo "</br>";
//вывод 5
            echo "Задача 4";
            echo "</br>";
echo "минимальное число массива = ";
print_r(getMin([6,3,4,2,5]));
            echo "</br>";
//вывод 6
            echo "Задача 5";
            echo "</br>";
echo (getSizeForLimit((squareTrapeze(createTrapeze([2,2,2,4,5,6]))),5));
			echo "</br>";
//вывод 7
            echo "Задача 6";
            echo "</br>";
			echo printTrapeze(squareTrapeze(createTrapeze([2,2,2,4,5,6])));
            echo "</br>";
//вывод 8
            echo "Задача 7 в коде закоментированна";
            echo "</br>";
//////
//вывод 9
            echo "Задача 8";
            echo "</br>";           
          $a = new F1(1,2,3);
          echo  var_dump ($a->getValue());
          echo  var_dump($a->exp1(11,12,13));
?>






