<?php
$module_name = 'ST_SuiteT_Themes';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'original_theme_name',
            'label' => 'LBL_ORIGINAL_THEME_NAME',
          ),
          1 => 
          array (
            'name' => 'new_theme_name',
            'label' => 'LBL_NEW_THEME_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'original_theme_path',
            'label' => 'LBL_ORIGINAL_THEME_PATH',
          ),
          1 => 
          array (
            'name' => 'new_theme_path',
            'label' => 'LBL_NEW_THEME_PATH',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'original_theme_url',
            'label' => 'LBL_ORIGINAL_THEME_URL',
          ),
          1 => 
          array (
            'name' => 'new_theme_url',
            'label' => 'LBL_NEW_THEME_URL',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
      'lbl_detailview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 'date_entered',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 'date_modified',
        ),
      ),
    ),
  ),
);
?>
