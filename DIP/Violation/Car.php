class Car{
	
	public function run(){
		echo 'Car';
	}
	
}

class Driver(){
	public $car;
	public function _construct(Car $car){
		$this->car = $car;
	}
	public function drive(){
		$this->car->run();
	}
	
}

$driver = new Driver(new Car());
$driver->drive();