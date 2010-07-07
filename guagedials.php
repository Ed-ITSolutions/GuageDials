<?php
include("lib/dial.guagedial.php");
class guagedials {
	protected $guagedial;
	public $x, $y;
	protected $unit, $format;
	public function __construct($type,$x,$y,$format,$unit){
		$this->x = $x;
		$this->y = $y;
		$this->format = $format;
		$this->unit = $unit;
		if($type == "dial"){
			$this->guagedial = new guagedials_dial($x,$y,$format);
		}else{
			echo($type." is not a valid guagedial");
		}
	}
	
	function allowed_data_points(){
		return $this->guagedial->allowed_data_points();
	}
	
	function add_data($data){
		$this->guagedial->add_data($data);
	}
	
	function draw(){
		$this->guagedial->draw();
	}
}

?>
