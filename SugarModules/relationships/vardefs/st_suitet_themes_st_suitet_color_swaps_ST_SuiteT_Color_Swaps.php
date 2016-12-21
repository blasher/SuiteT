<?php
// created: 2016-12-21 14:04:06
$dictionary["ST_SuiteT_Color_Swaps"]["fields"]["st_suitet_themes_st_suitet_color_swaps"] = array (
  'name' => 'st_suitet_themes_st_suitet_color_swaps',
  'type' => 'link',
  'relationship' => 'st_suitet_themes_st_suitet_color_swaps',
  'source' => 'non-db',
  'module' => 'ST_SuiteT_Themes',
  'bean_name' => 'ST_SuiteT_Themes',
  'vname' => 'LBL_ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_FROM_ST_SUITET_THEMES_TITLE',
  'id_name' => 'st_suitet_themes_st_suitet_color_swapsst_suitet_themes_ida',
);
$dictionary["ST_SuiteT_Color_Swaps"]["fields"]["st_suitet_themes_st_suitet_color_swaps_name"] = array (
  'name' => 'st_suitet_themes_st_suitet_color_swaps_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_FROM_ST_SUITET_THEMES_TITLE',
  'save' => true,
  'id_name' => 'st_suitet_themes_st_suitet_color_swapsst_suitet_themes_ida',
  'link' => 'st_suitet_themes_st_suitet_color_swaps',
  'table' => 'st_suitet_themes',
  'module' => 'ST_SuiteT_Themes',
  'rname' => 'name',
);
$dictionary["ST_SuiteT_Color_Swaps"]["fields"]["st_suitet_themes_st_suitet_color_swapsst_suitet_themes_ida"] = array (
  'name' => 'st_suitet_themes_st_suitet_color_swapsst_suitet_themes_ida',
  'type' => 'link',
  'relationship' => 'st_suitet_themes_st_suitet_color_swaps',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_FROM_ST_SUITET_COLOR_SWAPS_TITLE',
);
