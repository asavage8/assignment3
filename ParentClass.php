<?php
	// This is the file for the parent class
//This is a Cat class
	class Cat {
		private $name;
		private $gender;
		private $size;
		private $meowType;
		private $meowIntensity;

   	public function __construct($n, $g, $s, $mT, $mI)
   	{
     	$this->name = $n;
			$this->gender = $g;
			$this->size = $s;
			$this->meowType = $mT;
			$this->meowIntensity = $mI;
   	}

   function __destruct()
   {
     echo get_class($this) . " " .  $this, " has left the building! <br/>
		 Poor Kitty<br/>";
   }

   public function meow()
   {
      echo "I meow<br/>";
   }

   public function sunggleLevel()
   {
      echo "Love me if you must...<br/>";
   }

   public function __toString()
   {
      $ans = "I am Kitty " . $this->name . ".";
      return $ans;
   }

   // This method will satisfy the Comparable interface.  However, unlike
   // with Java, predefined sorts will not work with this.  In order to have
   // a predefined sort work with a programmer-defined compare method, we
   // must use a comparator, as shown below.
   public function compareTo($r)
   {
      return strcmp($this->name, $r->name);
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


   public function wacky()
   {
      echo "This is the wackiest thing ever!!!<br/>";
   }

	}
