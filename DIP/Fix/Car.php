interface Car{
	public function run();
}

class Lamborghini implements Car {
	public function run(){
		echo 'Lamborghini';
	}
}

class Huyndai implements Car{
	public function run(){
		echo 'Huyndai';
	}
}

class Driver {
	public $car;
	public function __contruct(Car $car){
		$this->car = $car;
	}
	public function drive(){
		$this->car->run();
	}
}

$driver = new Driver(new Lamborghini());
$drive->drive();