<?php
$module_name = 'ST_SuiteT_Themes';
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'original_theme_name',
            'label' => 'LBL_ORIGINAL_THEME_NAME',
          ),
          1 => 
          array (
            'name' => 'new_theme_name',
            'label' => 'LBL_NEW_THEME_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'original_theme_path',
            'label' => 'LBL_ORIGINAL_THEME_PATH',
          ),
          1 => 
          array (
            'name' => 'new_theme_path',
            'label' => 'LBL_NEW_THEME_PATH',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'original_theme_url',
            'label' => 'LBL_ORIGINAL_THEME_URL',
          ),
          1 => 
          array (
            'name' => 'new_theme_url',
            'label' => 'LBL_NEW_THEME_URL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
