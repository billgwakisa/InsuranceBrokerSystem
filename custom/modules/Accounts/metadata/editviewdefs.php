<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cust_first_name_c',
            'label' => 'LBL_CUST_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'cust_last_name_c',
            'label' => 'LBL_CUST_LAST_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cust_mobile_c',
            'label' => 'LBL_CUST_MOBILE',
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
          1 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'jjwg_maps_address_c',
            'label' => 'LBL_JJWG_MAPS_ADDRESS',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'cust_comm_mode_c',
            'studio' => 'visible',
            'label' => 'LBL_CUST_COMM_MODE',
          ),
          1 => 
          array (
            'name' => 'cust_bus_prof_c',
            'label' => 'LBL_CUST_BUS_PROF',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cust_veh_reg_c',
            'label' => 'LBL_CUST_VEH_REG',
          ),
          1 => 
          array (
            'name' => 'cust_year_manuf_c',
            'label' => 'LBL_CUST_YEAR_MANUF',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cust_vehicl_val_c',
            'label' => 'LBL_CUST_VEHICL_VAL',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cust_veh_ins_start_date_c',
            'label' => 'LBL_CUST_VEH_INS_START_DATE',
          ),
          1 => 
          array (
            'name' => 'cust_veh_ins_end_date_c',
            'label' => 'LBL_CUST_VEH_INS_END_DATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'cust_veh_reg_plates_c',
            'label' => 'LBL_CUST_VEH_REG_PLATES',
          ),
          1 => 
          array (
            'name' => 'cust_veh_engine_chasis_num_c',
            'label' => 'LBL_CUST_VEH_ENGINE_CHASIS_NUM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'cust_vehic_cc_c',
            'label' => 'LBL_CUST_VEHIC_CC',
          ),
          1 => 
          array (
            'name' => 'cust_veh_seats_cap_c',
            'label' => 'LBL_CUST_VEH_SEATS_CAP',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'cust_vehicle_make_c',
            'label' => 'LBL_CUST_VEHICLE_MAKE',
          ),
          1 => 
          array (
            'name' => 'cust_vehicle_body_c',
            'label' => 'LBL_CUST_VEHICLE_BODY',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cust_ins_cover_type_c',
            'studio' => 'visible',
            'label' => 'LBL_CUST_INS_COVER_TYPE',
          ),
          1 => 
          array (
            'name' => 'cust_veh_purp_c',
            'studio' => 'visible',
            'label' => 'LBL_CUST_VEH_PURP',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
