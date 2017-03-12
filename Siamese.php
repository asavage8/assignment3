<?php
	// this file will extend PArentClass.php

	class Siamese extends Cat {
		private $baseColor;

   public function __construct($n,$g, $s, $p, $mI) {
     parent::__construct($n, $g, $s, $p, $mI);
	 }

   public function __destruct(){
     parent::__destruct();
   }

   public function meow($times) {
      parent::meow($times);
			echo "I meow, but I do it ".$this->meowIntensity."ly<br/>";
  }

	 public function funFact(){
		 echo "My fur changes color based on heat. <br/>
		 That's why it's white near my heart and darker<br/>
		 towards my extremities";
	 }

   public function sunggleLevel(){
		 parent::sunggleLevel();
      echo "Come snuggle with me, becuse I am adorble<br/>";
   }

	 function __clone()
	 {

		//  $this->object1 = clone $this->object1;
	 }
	 public function __toString() {
			return "I am Siamese Kitty " . $this->name . ". I am ".$this->gender." and I'm
		 ".$this->personality." and ".$this->size.".";
	}
	}
