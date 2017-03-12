<?php
	// this file will extend PArentClass.php

	class Siamese extends Cat {
		private $baseColor;

   public function __construct($n,$g, $s, $mT, $mI)
   {
     parent::__construct($n);
  }

   public function __destruct()
   {
     echo get_class($this) . " " . $this->name . " has had enough of your sass<br/>";
     parent::__destruct();
   }

   public function meow()
   {
      parent::characteristics();
			echo "I have a ".$this->meowType." meow. <br/>"
      echo "But I meow very ".$this->meowIntensity."<br/>";
  }

	 public function funFact(){
		 echo "My fur changes color based on heat. <br/>
		 That's why it's white near my heart and darker<br/>
		 towards my extremities"
	 }

   public function sunggleLevel()
   {
      echo "But I don't want you disturbing me<br/>";
   }
	}
