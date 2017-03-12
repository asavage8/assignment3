<?php
	// This is the file for the parent class
//This is a Cat class
	class Cat {
		protected $name;
		protected $gender;
		protected $size;
		protected $personality;
		protected $meowIntensity;


   	public function __construct($n, $g, $s, $p, $mI){
     	$this->name = $n;
			$this->gender = $g;
			$this->size = $s;
			$this->personality = $p;
			$this->meowIntensity = $mI;
   	}

   function __destruct() {
     echo "";
   }

   public function meow($times){
		 for($j=0; $j<$times; $j++){
      echo "Meow!!!  ";
		}
		echo "<br/>";
	}

   public function sunggleLevel() {
      echo "Love me,you must...   ";
   }
   public function __toString() {
      return "I am Kitty " . $this->name . ". I am ".$this->gender." and I'm
			".$this->personality." and ".$this->size.".";
  }


   // This static method accepts two object parameters, and returns the result
   // of the comparision between the two.  This can be used to sort an array
   // of objects with the comparator of choice.  See also ex15.php
   public static function compare($a, $b)
   {
      return strcmp($a->name, $b->name);
   }

   public static function compareTwo($a, $b)
   {
      return strcmp($b->name, $a->name);
   }


   public function purr(){
      echo "Purrr, I love you!!!!!<br/>";
   }

	}
