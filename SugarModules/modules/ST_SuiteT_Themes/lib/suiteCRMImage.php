<?php

class suiteCRMImage
{
	public $im;

	function __construct( $filename )
	{
		$this->im = new Imagick( realpath( $filename ) );
	}

	function separateImageChannel($imagePath, $channel)
	{
		$this->im->separateimagechannel($channel);
		header("Content-Type: image/jpg");
		echo $imagick->getImageBlob();
	}
}

?>