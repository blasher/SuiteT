<?php
 // created: 2016-12-21 14:04:06
$layout_defs["ST_SuiteT_Themes"]["subpanel_setup"]['st_suitet_themes_st_suitet_color_swaps'] = array (
  'order' => 100,
  'module' => 'ST_SuiteT_Color_Swaps',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ST_SUITET_THEMES_ST_SUITET_COLOR_SWAPS_FROM_ST_SUITET_COLOR_SWAPS_TITLE',
  'get_subpanel_data' => 'st_suitet_themes_st_suitet_color_swaps',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
