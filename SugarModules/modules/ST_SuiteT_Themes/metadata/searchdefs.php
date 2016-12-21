<?php
$module_name = 'ST_SuiteT_Themes';
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
      'original_theme_name' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ORIGINAL_THEME_NAME',
        'width' => '10%',
        'name' => 'original_theme_name',
      ),
      'new_theme_name' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NEW_THEME_NAME',
        'width' => '10%',
        'name' => 'new_theme_name',
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
      'original_theme_name' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_ORIGINAL_THEME_NAME',
        'width' => '10%',
        'name' => 'original_theme_name',
      ),
      'new_theme_name' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NEW_THEME_NAME',
        'width' => '10%',
        'name' => 'new_theme_name',
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
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'date_modified' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_modified',
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
