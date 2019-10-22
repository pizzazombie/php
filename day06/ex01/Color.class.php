<?php
class Color
{
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	static $verbose = false;


	public function __construct( array $arr)
	{
		//print("haha1\n");
		if (array_key_exists('rgb', $arr))
		{
			//print("haha1\n");
			$this->red = ($arr['rgb'] >> 16) & 0xFF;
            $this->green = ($arr['rgb'] >> 8) & 0xFF;
            $this->blue = $arr['rgb'] & 0xFF;
		}
		else if (array_key_exists('red', $arr) && array_key_exists('green', $arr) && array_key_exists('blue', $arr))
		{
			
			$this->red = (int)$arr['red'];
			$this->green = (int)$arr['green'];
			$this->blue = (int)$arr['blue'];
		}
		if (self::$verbose == true)
      		print("$this constructed.".PHP_EOL);
    	return ;
	}

	public function  __toString()
	{
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
	}

	static function doc()
	{
		return (file_get_contents("Color.doc.txt"));
	}

	function add(Color $arr)
	{
		$new_red = $this->red + $arr->red;
		$new_green = $this->green + $arr->green;
		$new_blue = $this->blue + $arr->blue;
		$new_color = new Color(array('red' => $new_red, 'green' => $new_green, 'blue' => $new_blue));
		return $new_color;
	}

	function sub(Color $arr)
	{
		$new_red = $this->red - $arr->red;
		$new_green = $this->green - $arr->green;
		$new_blue = $this->blue - $arr->blue;
		$new_color = new Color(array('red' => $new_red, 'green' => $new_green, 'blue' => $new_blue));
		return $new_color;
	}

	function mult($i)
	{
		$new_red = $this->red * $i;
		$new_green = $this->green * $i;
		$new_blue = $this->blue * $i;
		$new_color = new Color(array('red' => $new_red, 'green' => $new_green, 'blue' => $new_blue));
		return $new_color;
	}

	public function __destruct()
	{
		if (self::$verbose == true)
      		print("$this destructed.".PHP_EOL);
    	return;
	}
}
?>