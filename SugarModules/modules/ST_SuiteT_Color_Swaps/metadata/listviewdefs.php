<?php
$module_name = 'ST_SuiteT_Color_Swaps';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_FROM_ST_SUITET_THEMES_TITLE',
    'id' => 'ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPSST_SUITET_THEMES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ORIGINAL_COLOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORIGINAL_COLOR',
    'width' => '10%',
    'default' => true,
  ),
  'NEW_COLOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NEW_COLOR',
    'width' => '10%',
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
