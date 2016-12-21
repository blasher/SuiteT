<?php
$dashletData['ST_SuiteT_Color_SwapsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'st_suitet_themes_st_suitet_color_swaps_name' => 
  array (
    'default' => '',
  ),
  'original_color' => 
  array (
    'default' => '',
  ),
  'new_color' => 
  array (
    'default' => '',
  ),
);
$dashletData['ST_SuiteT_Color_SwapsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'st_suitet_themes_st_suitet_color_swaps_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_FROM_ST_SUITET_THEMES_TITLE',
    'id' => 'ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPSST_SUITET_THEMES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'original_color' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORIGINAL_COLOR',
    'width' => '10%',
    'default' => true,
  ),
  'new_color' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NEW_COLOR',
    'width' => '10%',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
