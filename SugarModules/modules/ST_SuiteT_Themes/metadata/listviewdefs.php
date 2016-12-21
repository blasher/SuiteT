<?php
$module_name = 'ST_SuiteT_Themes';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ORIGINAL_THEME_NAME' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ORIGINAL_THEME_NAME',
    'width' => '10%',
  ),
  'NEW_THEME_NAME' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NEW_THEME_NAME',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
);
?>
