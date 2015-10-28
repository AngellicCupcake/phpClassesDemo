<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		// =========== DEFINE THE CLASS ==========
		class Cat{
			// object properties
			public $name;
			public $age;
			public $weight;
            private $breed;

			// the object's constructor
			public function __construct($_name, $_age, $_weight){
				$this->name   = $_name;
				$this->age    = $_age;
				$this->weight = $_weight;
                
                if ($this->weight > 25){
                    
                    $this->breed = "Mountain Lion";
                }
			}

			public function feedCat($_food){
				if ($_food < $this->weight/8){
					echo $this->name." needs more food than that!";
					echo "<br>";
				} else {
					echo $this->name." is fully fed!";
					echo "<br>";
				}
			}

			public function howOld(){
				echo $this->name." is ".$this->age." years old.";
				echo "<br>";
				echo $this->name." is ".$this->age." cat years old!";
				echo "<br>";
			}
		}



    // CLASS MINE OF DOG THING //

class Dog{
			// object properties
            public $name;
			public $age;
			public $weight;
            public $happiness;
            public $playtime;
            private $breed;
    
            public function __construct($_name, $_age, $_weight, $_happiness, $_playtime){
				$this->name   = $_name;
				$this->age    = $_age;
				$this->weight = $_weight;
                $this->happiness = $_happiness;
                $this->playtime = $_playtime;
                
                
                if ($this->weight > 205){
                    
                    $this->breed = "Malamute";
                }
			}
    
        public function playDog($_play){
				if ($_happiness > $_play){
                    echo $this->name." is happy!";
                }
            else{
                echo "Play With Your Dog More!";
                echo "<br>";
				
				}
			}
			
		}

// dogs //

        $dog1 = new Dog("Babu", 35, 100, 100, 60);
        $dog1->playDog(100);

// cats//

		$cat1 = new Cat("Little Buddy", 2, 8);
		$cat2 = new Cat("Sneaky Pete", 0, 2);
        $cat3 = new Cat("PuppyCat", 100, 50);
        $cat4 = new Cat("Usagi", 3, 7);

		$cat1->howOld();
		$cat1->feedCat(6);
            
        $cat3->howOld();

		echo $cat2->name;
		echo "<br>";
	?>

</body>
</html>





