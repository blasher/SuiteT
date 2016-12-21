<?php
// created: 2016-12-21 14:04:06
$dictionary["st_suitet_themes_st_suitet_color_swaps"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'st_suitet_themes_st_suitet_color_swaps' => 
    array (
      'lhs_module' => 'ST_SuiteT_Themes',
      'lhs_table' => 'st_suitet_themes',
      'lhs_key' => 'id',
      'rhs_module' => 'ST_SuiteT_Color_Swaps',
      'rhs_table' => 'st_suitet_color_swaps',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'st_suitet_themes_st_suitet_color_swaps_c',
      'join_key_lhs' => 'st_suitet_themes_st_suitet_color_swapsst_suitet_themes_ida',
      'join_key_rhs' => 'st_suitet_themes_st_suitet_color_swapsst_suitet_color_swaps_idb',
    ),
  ),
  'table' => 'st_suitet_themes_st_suitet_color_swaps_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'st_suitet_themes_st_suitet_color_swapsst_suitet_themes_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'st_suitet_themes_st_suitet_color_swapsst_suitet_color_swaps_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'st_suitet_themes_st_suitet_color_swapsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'st_suitet_themes_st_suitet_color_swaps_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'st_suitet_themes_st_suitet_color_swapsst_suitet_themes_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'st_suitet_themes_st_suitet_color_swaps_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'st_suitet_themes_st_suitet_color_swapsst_suitet_color_swaps_idb',
      ),
    ),
  ),
);