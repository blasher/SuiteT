<?php
class suiteCRMDir
{
	public $debug    = false;
	public $contents = array();

	// PHP 5 CONSTRUCTOR
	function __construct( $path )
	{
		$this->root_path = $this->trailingslashit( $path );
	}

	// DIR CONTENTS FUNCTIONS
	function get_contents()
	{
		$this->rglob( $this->root_path );
		return( array_keys( $this->contents ) );
	}

	function rglob ($path )
	{
		foreach( glob( $path . '*' ) as $file )
		{
			if ($this->debug)
			{	echo $file . "\n";
			}
			$this->contents[$file] = 1;
			$this->rglob( $this->trailingslashit( $file ) );
		}
	}

	// GENERIC HELPER FUNCTIONS

	function _e( $string )
	{	if( $this->debug )
		{	echo $string ."\n";
		}
	}

	function _d()
	{	if( $this->debug )
		{	echo '<pre>' . "\n";
			print_r( $this );
			echo '</pre>' . "\n";
		}
	}

	function _c()
	{
		return( clone ($this) );
	}

	function trailingslashit( $string )
	{	return $this->untrailingslashit( $string ) . '/';
	}
	
	function untrailingslashit( $string )
	{	return rtrim( $string, '/\\' );
	}

}



?>