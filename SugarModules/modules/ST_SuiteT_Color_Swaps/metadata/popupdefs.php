<?php
$popupMeta = array (
    'moduleMain' => 'ST_SuiteT_Color_Swaps',
    'varName' => 'ST_SuiteT_Color_Swaps',
    'orderBy' => 'st_suitet_color_swaps.name',
    'whereClauses' => array (
  'st_suitet_themes_st_suitet_color_swaps_name' => 'st_suitet_color_swaps.st_suitet_themes_st_suitet_color_swaps_name',
  'original_color' => 'st_suitet_color_swaps.original_color',
  'new_color' => 'st_suitet_color_swaps.new_color',
),
    'searchInputs' => array (
  4 => 'st_suitet_themes_st_suitet_color_swaps_name',
  5 => 'original_color',
  6 => 'new_color',
),
    'searchdefs' => array (
  'st_suitet_themes_st_suitet_color_swaps_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_FROM_ST_SUITET_THEMES_TITLE',
    'id' => 'ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPSST_SUITET_THEMES_IDA',
    'width' => '10%',
    'name' => 'st_suitet_themes_st_suitet_color_swaps_name',
  ),
  'original_color' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORIGINAL_COLOR',
    'width' => '10%',
    'name' => 'original_color',
  ),
  'new_color' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NEW_COLOR',
    'width' => '10%',
    'name' => 'new_color',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_FROM_ST_SUITET_THEMES_TITLE',
    'id' => 'ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPSST_SUITET_THEMES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'st_suitet_themes_st_suitet_color_swaps_name',
  ),
  'ORIGINAL_COLOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ORIGINAL_COLOR',
    'width' => '10%',
    'default' => true,
    'name' => 'original_color',
  ),
  'NEW_COLOR' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NEW_COLOR',
    'width' => '10%',
    'default' => true,
    'name' => 'new_color',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
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
),
);
