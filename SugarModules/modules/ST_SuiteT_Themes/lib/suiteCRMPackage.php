<?php

require_once( dirname(__FILE__) . '/suiteCRMDir.php' );

class suiteCRMPackage extends suiteCRMDir
{
	public $name                 = '';
	public $prefix               = '';
	public $root_path            = '';
	public $contents             = array();

	public $target_name          = '';
	public $target_prefix        = '';
	public $target_root_path     = '';


	// PHP 5 CONSTRUCTOR
	function __construct( $name, $prefix, $path )
	{
		$this->set_name( $name );
		$this->set_prefix( $prefix );
		$this->set_root_path( $path );

		parent::__construct( $path );
	}

	// SET PARAMETER FUNCTIONS

   function set_name( $name )
	{	$this->name        = $name;
		$this->target_name = $name;
	}

   function set_prefix( $prefix )
	{	$this->prefix        = $prefix;
		$this->target_prefix = $prefix;
	}

   function set_root_path( $path )
	{	$this->root_path        = $this->trailingslashit( $path );
		$this->target_root_path = $this->trailingslashit( $path );
	}

	function set_target( $name, $prefix, $path )
	{
		$this->set_target_name( $name );
		$this->set_target_prefix( $prefix );
		$this->set_target_root_path( $path );
	}

   function set_target_name( $name )
	{	$this->target_name = $name;
	}

   function set_target_prefix( $prefix )
	{	$this->target_prefix = $prefix;
	}

   function set_target_root_path( $path )
	{	$this->target_root_path = $this->trailingslashit( $path );
	}

   function set_debug( $debug )
	{	$this->debug = $debug;
	}

   function set_modules_to_keep( $modules )
	{	$this->modules_to_keep = $modules;
	}

	// READ / WRITE FUNCTIONS

   function read()
	{	$this->contents = $this->get_contents( $this->root_path );
	}

	function write()
	{
		$this->_e( 'Writing...' . "\n" );

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
		$new_dirname = $this->filename_preg_replace_package_root_path( $dirname );
		$new_dirname = $this->filename_preg_replace_package_prefix( $new_dirname );
		$this->create_dir( $new_dirname );
	}

	function create_dir( $path )
	{
		$this->_e( 'Creating Directory: ' . $path . "\n" );

		if( file_exists( $path ) )
		{  $this->deleteDirAndContents( $path );
		}

		mkdir ( $path );
	}

	// TARGET FILENAME FUNCTIONS

	function copy_files_to_target()
	{
		foreach( array_keys($this->target_root_dir->files) as $fileindex)
		{
			$this->copy_file_to_target( $fileindex );
		}
	}

	function copy_file_to_target( $filename )
	{
		if($this->isTextFile( $filename ) )
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
		$write_filename = $this->filename_preg_replace_package_root_path( $read_filename );
		$write_filename = $this->filename_preg_replace_package_prefix( $write_filename );
		$write_filename = $this->filename_preg_replace_package_name( $write_filename );

		$this->_e( 'Copying Text File Contents...' . "\n" );
		$this->_e( '  from file: ' . $read_filename . "\n" );
		$this->_e( '  to file: ' . $write_filename . "\n" );

		$input  = file( $read_filename );
		$output = implode( '', $input );

		$output = $this->file_content_preg_replace_package_name( $output );
		$output = $this->file_content_preg_replace_prefix( $output );

		$fh = fopen( $write_filename, "w" );
		fwrite( $fh, $output );
		fclose( $fh );
	}

	function copy_binary_file_to_target( $filename )
	{
		$read_filename  = $filename;
		$write_filename = $this->filename_preg_replace_package_root_path( $read_filename );
		$write_filename = $this->filename_preg_replace_package_prefix( $write_filename );
		$write_filename = $this->filename_preg_replace_package_name( $write_filename );

		$this->_e( 'Copying Binary File Contents...' . "\n" );
		$this->_e( '  from file: ' . $read_filename . "\n" );
		$this->_e( '  to file: ' . $write_filename . "\n" );

		copy($read_filename, $write_filename);
	}

	// FILENAME PREG FUNCTIONS

   function filename_preg_replace_package_root_path( $filename )
	{
		$old_root_path    = $this->root_path;
		$target_root_path = $this->target_root_path;

		// replace old package_root_pathes with new package_root_pathes in dir root_paths
		$pattern       = '/' . $this->escape_preg_pattern( $old_root_path ) . '/';
		$replacement   = $target_root_path;
		$new_filename  = preg_replace($pattern, $replacement, $filename);

		return $new_filename;
	}

   function filename_preg_replace_package_name( $filename )
	{
		$old_package_name = $this->name;
		$new_package_name = $this->target_name;

		// replace old package_namees with new package_namees in dir names
		$pattern       = '/' . $old_package_name . '/';
		$replacement   = $new_package_name;
		$new_filename  = preg_replace($pattern, $replacement, $filename);

		return $new_filename;
	}

   function filename_preg_replace_package_prefix( $filename )
	{
		$old_prefix = $this->prefix;
		$new_prefix = $this->target_prefix;

		// replace old prefixes with new prefixes in file names
		$pattern       = '/\/'.$old_prefix.'/';
		$replacement   = '/'.$new_prefix;
		$new_filename  = preg_replace( $pattern, $replacement, $filename);

		$pattern       = '/Dashlets\/'.$old_prefix.'/';
		$replacement   = 'Dashlets/'.$new_prefix;
		$new_filename  = preg_replace( $pattern, $replacement, $new_filename );

		$pattern       = '/icons\/'.$old_prefix.'/';
		$replacement   = 'icons/'.$new_prefix;
		$new_filename  = preg_replace( $pattern, $replacement, $new_filename );

		$pattern       = '/icons\/Create'.$old_prefix.'/';
		$replacement   = 'icons/Create'.$new_prefix;
		$new_filename  = preg_replace( $pattern, $replacement, $new_filename );

		$pattern       = '/icon_'.$old_prefix.'/';
		$replacement   = 'icon_'.$new_prefix;
		$new_filename  = preg_replace( $pattern, $replacement, $new_filename );

		return $new_filename;
	} 


	// FILE CONTENTS PREG FUNCTIONS

   function file_content_preg_replace_package_name( $content )
	{
		$old_package_name = $this->name;
		$new_package_name = $this->target_name;

		// replace old package_namees with new package_namees in dir names
		$pattern          = '/' . $old_package_name . '/';
		$replacement      = $new_package_name;
		$new_file_content = preg_replace($pattern, $replacement, $content);

		return $new_file_content;
	}

   function file_content_preg_replace_prefix( $content )
	{
		$old_prefix = $this->prefix;
		$new_prefix = $this->target_prefix;

		// replace old prefixes with new prefixes in file names
		$pattern           = '/'.$old_prefix.'/';
		$replacement       = $new_prefix;
		$new_file_content  = preg_replace( $pattern, $replacement, $content);

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

	function fileMIMEType( $filename )
	{
		// return mime type ala mimetype extension
		$finfo = finfo_open(FILEINFO_MIME);

		//check to see if the mime-type starts with 'text'
		return finfo_file($finfo, $filename);
	}

	function isTextFile( $filename )
	{
		// return mime type ala mimetype extension
		$finfo = finfo_open(FILEINFO_MIME);

		//check to see if the mime-type starts with 'text'
		return substr(finfo_file($finfo, $filename), 0, 4) == 'text';
	}


	function deleteDirAndContents($path)
	{
		$this->_e( 'Dir exists.  Deleting Directory: ' . $path . "\n" );
			
		$files = array_reverse( glob( $this->trailingslashit($path ). '*' ) );

		foreach ( $files as $file)
		{
			is_dir($file) ? $this->deleteDirAndContents($file) : unlink($file);
		}

		rmdir( $path );
	}

}

?>