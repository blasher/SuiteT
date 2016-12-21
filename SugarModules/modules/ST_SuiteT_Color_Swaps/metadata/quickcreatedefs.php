<?php
$module_name = 'ST_SuiteT_Color_Swaps';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'st_suitet_themes_st_suitet_color_swaps_name',
            'label' => 'LBL_ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_FROM_ST_SUITET_THEMES_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'original_color',
            'label' => 'LBL_ORIGINAL_COLOR',
          ),
          1 => 
          array (
            'name' => 'new_color',
            'label' => 'LBL_NEW_COLOR',
          ),
        ),
      ),
    ),
  ),
);
?>
