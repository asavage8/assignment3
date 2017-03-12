<?php
	// this file will extend PArentClass.php

	class Hairless extends Cat {
	public function __construct($n,$g, $s, $p, $mI){
     parent::__construct($n, $g, $s, $p, $mI);
	}

   public function __destruct() {
     parent::__destruct();
   }

   public function meow($times) {
      parent::meow($times);
			echo "&I meow, but I do it ".$this->meowIntensity."ly<br/>";
  }

	public function sunggleLevel() {
			parent::sunggleLevel();
      echo "because I love you!!!<br/>";
   }

	 public function __toString() {
		 return "I am Hairless Kitty " . $this->name . ". I am ".$this->gender." and I'm
		".$this->personality." and ".$this->size.".";
 }
	}
