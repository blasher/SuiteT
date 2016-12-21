<?php

require_once( dirname(__FILE__) . '/suiteCRMDir.php' );

class suiteCRMTheme extends suiteCRMDir
{
	public $contents    = array();
	public $color_swaps = array();

	function __construct( $name, $path, $url )
	{
		$this->set_name( $name );
		$this->set_root_path( $path );
		$this->set_root_url( $url );

		parent::__construct( $path );
	}

	// SET PARAMETER FUNCTIONS

   function set_name( $name )
	{	$this->name        = $name;
		$this->target_name = $name;
	}

   function set_root_path( $path )
	{	$this->root_path        = $this->trailingslashit( $path );
		$this->target_root_path = $this->trailingslashit( $path );
	}

   function set_root_url( $url )
	{	$this->root_url        = $this->trailingslashit( $url );
		$this->target_root_url = $this->trailingslashit( $url );
	}

   function set_primary_color( $color )
	{	$this->primary_color = $color;
	}

	function set_target( $name, $path, $url )
	{
		$this->set_target_root_path( $path );
		$this->set_target_root_url( $url );
		$this->set_target_name( $name );
	}

   function set_target_name( $name )
	{	$this->target_name = $name;
	}

   function set_target_root_path( $path )
	{	$this->target_root_path = $this->trailingslashit( $path );
	}

   function set_target_root_url( $url )
	{	$this->target_root_url = $this->trailingslashit( $url );
	}

   function set_target_primary_color( $color )
	{	$this->target_primary_color = $color;
	}

   function set_debug( $debug )
	{	$this->debug = $debug;
	}

   function add_color_swap( $original_color, $target_color )
	{	$this->color_swaps[$original_color] = [ 'original_color' => $original_color,
															 'target_color'   => $target_color];
	}




	// READ / WRITE FUNCTIONS

   function read()
	{	$this->contents = $this->get_contents( $this->root_path );
	}

	function write()
	{
		$this->_e( 'Writing...'  );

		$this->create_target_root_dir();
		$this->copy_to_target();
	}

	// TARGET OUTPUT FUNCTIONS

	function copy_to_target()
	{
		foreach( $this->contents as $filename)
		{
			if(is_dir( $filename ) )
			{	$this->create_dir_in_target( $filename );
			}
			else
			{
				$this->copy_file_to_target( $filename );
			}
		}
	}

	// TARGET DIRNAME FUNCTIONS

	function create_target_root_dir()
	{
		$dirname = $this->target_root_path;
		$this->create_dir_in_target( $dirname );
	}

	function create_dir_in_target( $dirname )
	{
		$new_dirname = $this->filename_preg_replace_theme_root_path( $dirname );
		$this->create_dir( $new_dirname );
	}

	function create_dir( $path )
	{
		$this->_e( 'Creating Directory: ' . $path  );

		if( file_exists( $path ) )
		{  $this->deleteDirAndContents( $path );
		}

		mkdir ( $path );
	}

	// TARGET FILENAME FUNCTIONS

	function copy_file_to_target( $filename )
	{
		if($this->FileContainsText( $filename ) )
		{  $this->copy_text_file_to_target($filename);
		}
		else
		{  $this->copy_binary_file_to_target($filename);
		}

		$this->_e( "\n" );
	}


	function copy_text_file_to_target( $filename )
	{
		$read_filename  = $filename;
		$write_filename = $this->filename_preg_replace_theme_root_path( $read_filename );
		$write_filename = $this->filename_preg_replace_theme_name( $write_filename );

		$this->_e( 'Copying Text File Contents...'  );
		$this->_e( '  from file: ' . $read_filename  );
		$this->_e( '  to file: ' . $write_filename  );

		$input  = file( $read_filename );
		$output = implode( '', $input );

		$output = $this->file_content_preg_replace_theme_root_path( $output );
		$output = $this->file_content_preg_replace_theme_root_url( $output );
		$output = $this->file_content_preg_replace_theme_name( $output );
//		$output = $this->file_content_preg_replace_primary_color( $output );
		$output = $this->file_content_swap_colors( $output );


		$fh = fopen( $write_filename, "w" );
		fwrite( $fh, $output );
		fclose( $fh );
	}

	function copy_binary_file_to_target( $filename )
	{
		$read_filename  = $filename;
		$write_filename = $this->filename_preg_replace_theme_root_path( $read_filename );
		$write_filename = $this->filename_preg_replace_theme_name( $write_filename );

		$this->_e( 'Copying Binary File Contents...'  );
		$this->_e( '  from file: ' . $read_filename  );
		$this->_e( '  to file: ' . $write_filename  );

		copy($read_filename, $write_filename);
	}

	// FILENAME PREG FUNCTIONS

   function filename_preg_replace_theme_root_path( $filename )
	{
		$old_root_path    = $this->root_path;
		$target_root_path = $this->target_root_path;

		$this->_e( 'filename mod.  replacing "'.$old_root_path.'" with "'.$target_root_path.'"' );

		// replace old theme_root_paths with new theme_root_paths in dir root_paths
		$pattern       = '/' . $this->escape_preg_pattern( $old_root_path ) . '/';
		$replacement   = $target_root_path;
		$new_filename  = preg_replace($pattern, $replacement, $filename);

		return $new_filename;
	}

   function filename_preg_replace_theme_name( $filename )
	{
		$old_theme_name = $this->name;
		$new_theme_name = $this->target_name;

		$this->_e( 'filename mod.  replacing "'.$old_theme_name.'" with "'.$new_theme_name.'"' );

		// replace old theme_namees with new theme_namees in dir names
		$pattern       = '/' . $old_theme_name . '/';
		$replacement   = $new_theme_name;
		$new_filename  = preg_replace($pattern, $replacement, $filename);

		return $new_filename;
	}

	// FILE CONTENTS PREG FUNCTIONS

   function file_content_preg_replace_theme_root_path( $content )
	{
		$old_root_path    = $this->root_path;
		$target_root_path = $this->target_root_path;

		$this->_e( 'content mod - root path.  replacing "'.$old_root_path.'" with "'.$target_root_path.'"' );

		// replace old theme_root_paths with new theme_root_paths in dir root_paths
		$pattern       = '/' . $this->escape_preg_pattern( $old_root_path ) . '/';
		$replacement   = $target_root_path;
		$new_content  = preg_replace($pattern, $replacement, $content);

		return $new_content;
	}

   function file_content_preg_replace_theme_root_url( $content )
	{
		$old_root_url    = $this->root_url;
		$target_root_url = $this->target_root_url;

		$this->_e( 'content mod - root url.  replacing "'.$old_root_url.'" with "'.$target_root_url.'"' );

		// replace old theme_root_urles with new theme_root_urles in dir root_urls
		$pattern       = '/' . $this->escape_preg_pattern( $old_root_url ) . '/';
		$replacement   = $target_root_url;
		$new_content  = preg_replace($pattern, $replacement, $content);

		return $new_content;
	}

   function file_content_preg_replace_theme_name( $content )
	{
		$old_theme_name = $this->name;
		$new_theme_name = $this->target_name;

		$this->_e( 'content mod - theme name.  replacing "'.$old_theme_name.'" with "'.$new_theme_name.'"' );

		// replace old theme_namees with new theme_namees in dir names
		$pattern          = '/' . $old_theme_name . '/';
		$replacement      = $new_theme_name;
		$new_file_content = preg_replace($pattern, $replacement, $content);

		return $new_file_content;
	}

   function file_content_preg_replace_primary_color( $content )
	{
		$old_primary_color = $this->primary_color;
		$new_primary_color = $this->target_primary_color;

		$this->_e( 'content mod - primary color.  replacing "'.$old_primary_color.'" with "'.$new_primary_color.'"' );

		// replace old primary_colores with new primary_colores in dir names
		$pattern          = '/' . $old_primary_color . '/';
		$replacement      = $new_primary_color;
		$new_file_content = preg_replace($pattern, $replacement, $content);

		return $new_file_content;
	}

   function file_content_swap_colors( $content )
	{
		$new_file_content = $content;

		foreach($this->color_swaps as $swap)
		{
			$old_color = $swap['original_color'];
			$new_color = $swap['target_color'];

			$this->_e( 'content mod - color swap.  replacing "'.$old_color.'" with "'.$new_color.'"' );

			// replace old primary_colores with new primary_colores in dir names
			$pattern          = '/' . $old_color . '/i';
			$replacement      = $new_color;
			$new_file_content = preg_replace($pattern, $replacement, $content);
			$content          = $new_file_content;
		}

		return $new_file_content;
	}





	// HELPER FUNCTIONS
	function escape_preg_pattern( $preg_pattern )
	{
		// replace old prefixes with new prefixes in file names
		$pattern           = '/\//';
		$replacement       = '\/';
		$new_preg_pattern  = preg_replace( $pattern, $replacement, $preg_pattern);

		return $new_preg_pattern;
	}

	function FileContainsText( $filename )
	{
		$return = false;

		$mime = mime_content_type( $filename );
		$this->_e( 'MIME = ' . $mime ."\n" );

		if( $mime == 'text/plain')
		{  $return = true;
		}
		elseif( $mime == 'text/html')
		{  $return = true;
		}
		elseif( $mime == 'text/x-php')
		{  $return = true;
		}
		elseif( $mime == 'application/xml')
		{  $return = true;
		}
		elseif( $mime == 'image/svg+xml')
		{  $return = true;
		}

		return $return;
	}

	function deleteDirAndContents($path)
	{
		$this->_e( 'Dir exists.  Deleting Directory: ' . $path  );
			
		$files = array_reverse( glob( $this->trailingslashit($path ). '*' ) );

		foreach ( $files as $file)
		{
			is_dir($file) ? $this->deleteDirAndContents($file) : unlink($file);
		}

		rmdir( $path );
	}

}

?>
