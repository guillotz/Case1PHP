<?php
abstract class FiguraGeometrica
{
	protected $_color;


	function __construct()
	{

	}
	public function SetColor ($color)
	{
		$this->_color = $color;
	}
	public function GetColor()
	{
		return $this->_color;
	}
	public function Tostring()
	{
		echo "<br>" . $this->_color;
	}
	

}

?>
