<?php
class guagedials_dial {
	protected $x, $y, $data, $foramt, $image;
	public function __construct($x,$y,$format){
		$this->x = $x;
		$this->y = $y;
		$this->format = $format;
		$this->data = array();
	}
	
	function allowed_data_points(){
		return 2;
	}
	
	function add_data($data){
		if(count($this->data) <= $this->allowed_data_points()-1){
			$this->data[] = $data;
		}else{
			echo("Too many data points provided");
		}
	}
	
	function draw(){
		header("Content-type: image/".$this->format);
		$this->image = imageCreate($this->x, $this->y);
		$black = ImageColorAllocate($this->image, 0, 0, 0);
		$white = ImageColorAllocate($this->image, 255, 255, 255);
		ImageFill($this->image, 0, 0, $black);
		imagefilledellipse($this->image,$this->x/2,$this->y/2,$this->x-20,$this->y-20,$white);
		ImagePNG($this->image);
		ImageDestroy($this->image);
	}
	
}
?>
