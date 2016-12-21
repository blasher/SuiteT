<?php
$dashletData['ST_SuiteT_ThemesDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'original_theme_name' => 
  array (
    'default' => '',
  ),
  'new_theme_name' => 
  array (
    'default' => '',
  ),
  'assigned_user_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['ST_SuiteT_ThemesDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'original_theme_name' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ORIGINAL_THEME_NAME',
    'width' => '10%',
  ),
  'new_theme_name' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NEW_THEME_NAME',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
);
