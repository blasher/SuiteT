<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

/*
 * Created on Mar 23, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 require_once('include/MVC/Controller/SugarController.php');
  
  
class ST_SuiteT_ThemesController extends SugarController
{
	function action_generate()
	{
		require_once( dirname( __FILE__ ) . '/lib/suiteCRMTheme.php' );

		$name             = $this->bean->original_theme_name;
		$root_path        = $this->bean->original_theme_path;
		$root_url         = $this->bean->original_theme_url;
		$target_name      = $this->bean->new_theme_name;
		$target_root_path = $this->bean->new_theme_path;
		$target_root_url  = $this->bean->new_theme_url; 

		$theme = new suiteCRMTheme( $name, $root_path, $root_url );
//		$theme->set_debug( 'true' );
		$theme->set_target( $target_name, $target_root_path, $target_root_url );

		$this->bean->load_relationship('st_suitet_themes_st_suitet_color_swaps');

//		echo 'ID = ' . $this->bean->id . '<br />';
//		echo '<pre>' . print_r( $this->bean, true ) . '</pre>';

		foreach ($this->bean->st_suitet_themes_st_suitet_color_swaps->getBeans(new ST_SuiteT_Color_Swaps) as $color_swap)
		{
			echo 'Swapping '. $color_swap->original_color . ' with ' . $color_swap->new_color . '<br />'; 
			$theme->add_color_swap( $color_swap->original_color, $color_swap->new_color );
		}

		$theme->read();
		$theme->write();

//		echo '<pre>';
//		print_r( $theme );
//		echo '</pre>';

		$this->view = 'detail';
		$GLOBALS['view'] = $this->view;

	}


	
}
?>
