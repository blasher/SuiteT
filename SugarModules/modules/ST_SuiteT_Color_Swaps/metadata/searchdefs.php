<?php
$module_name = 'ST_SuiteT_Color_Swaps';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'st_suitet_themes_st_suitet_color_swaps_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_FROM_ST_SUITET_THEMES_TITLE',
        'id' => 'ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPSST_SUITET_THEMES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'st_suitet_themes_st_suitet_color_swaps_name',
      ),
      'original_color' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ORIGINAL_COLOR',
        'width' => '10%',
        'default' => true,
        'name' => 'original_color',
      ),
      'new_color' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NEW_COLOR',
        'width' => '10%',
        'default' => true,
        'name' => 'new_color',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'st_suitet_themes_st_suitet_color_swaps_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_FROM_ST_SUITET_THEMES_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPSST_SUITET_THEMES_IDA',
        'name' => 'st_suitet_themes_st_suitet_color_swaps_name',
      ),
      'original_color' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ORIGINAL_COLOR',
        'width' => '10%',
        'default' => true,
        'name' => 'original_color',
      ),
      'new_color' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_NEW_COLOR',
        'width' => '10%',
        'default' => true,
        'name' => 'new_color',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
