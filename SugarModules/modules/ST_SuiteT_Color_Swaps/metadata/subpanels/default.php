<?php
$module_name='ST_SuiteT_Color_Swaps';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'ST_SuiteT_Color_Swaps',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '30%',
      'default' => true,
    ),
    'original_color' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_ORIGINAL_COLOR',
      'width' => '20%',
      'default' => true,
    ),
    'new_color' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_NEW_COLOR',
      'width' => '20%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'vname' => 'LBL_DATE_MODIFIED',
      'width' => '20%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'ST_SuiteT_Color_Swaps',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'ST_SuiteT_Color_Swaps',
      'width' => '5%',
      'default' => true,
    ),
  ),
);