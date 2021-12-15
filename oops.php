<!DOCTYPE html>
<html>
<body>
<?php
class Car{
	
	public $color;
	public $model;
	
	public function __construct($color,$model){
		$this->color=$color;
		$this->model=$model;
	}
	public function message(){
		return "My car is a ".$this->color." ".$this->model."!";
	}
}

$myCar=new Car("black","Rangerover");
echo $myCar->message();
echo "<br>";
$my=new Car("white","Roseroyers");
echo $my->message();
echo "<br>";

?>
</body>
</html>