<?php
$viewdefs ['Leads'] = 
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
          3 => 
          array (
            'customCode' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}<input title="{$MOD.LBL_CONVERTLEAD_TITLE}" accessKey="{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}" type="button" class="button" onClick="document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'" name="convert" value="{$MOD.LBL_CONVERTLEAD}">{/if}',
            'sugar_html' => 
            array (
              'type' => 'button',
              'value' => '{$MOD.LBL_CONVERTLEAD}',
              'htmlOptions' => 
              array (
                'title' => '{$MOD.LBL_CONVERTLEAD_TITLE}',
                'accessKey' => '{$MOD.LBL_CONVERTLEAD_BUTTON_KEY}',
                'class' => 'button',
                'onClick' => 'document.location=\'index.php?module=Leads&action=ConvertLead&record={$fields.id.value}\'',
                'name' => 'convert',
                'id' => 'convert_lead_button',
              ),
              'template' => '{if $bean->aclAccess("edit") && !$DISABLE_CONVERT_ACTION}[CONTENT]{/if}',
            ),
          ),
          4 => 'FIND_DUPLICATES',
          5 => 
          array (
            'customCode' => '<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              'htmlOptions' => 
              array (
                'title' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
                'class' => 'button',
                'id' => 'manage_subscriptions_button',
                'onclick' => 'this.form.return_module.value=\'Leads\'; this.form.return_action.value=\'DetailView\';this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'Subscriptions\'; this.form.module.value=\'Campaigns\'; this.form.module_tab.value=\'Leads\';',
                'name' => '{$APP.LBL_MANAGE_SUBSCRIPTIONS}',
              ),
            ),
          ),
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}">',
          ),
        ),
        'headerTpl' => 'modules/Leads/tpls/DetailViewHeader.tpl',
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
          'file' => 'modules/Leads/Lead.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'comment' => 'First name of the contact',
            'label' => 'LBL_FIRST_NAME',
          ),
          1 => 
          array (
            'name' => 'last_name',
            'comment' => 'Last name of the contact',
            'label' => 'LBL_LAST_NAME',
          ),
        ),
        1 => 
        array (
          0 => 'title',
        ),
        2 => 
        array (
          0 => 'phone_work',
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 'phone_fax',
        ),
        4 => 
        array (
          0 => 'email1',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_street',
            'label' => 'LBL_PRIMARY_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'preferred_mode_of_comm_c',
            'studio' => 'visible',
            'label' => 'LBL_PREFERRED_MODE_OF_COMM',
          ),
          1 => 
          array (
            'name' => 'insured_profession_c',
            'label' => 'LBL_INSURED_PROFESSION',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'vehicle_reg_c',
            'label' => 'LBL_VEHICLE_REG',
          ),
          1 => 
          array (
            'name' => 'vehicle_manuf_year_c',
            'label' => 'LBL_VEHICLE_MANUF_YEAR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'vehicle_value_c',
            'label' => 'LBL_VEHICLE_VALUE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'insure_period_start_c',
            'label' => 'LBL_INSURE_PERIOD_START',
          ),
          1 => 
          array (
            'name' => 'insure_period_end_c',
            'label' => 'LBL_INSURE_PERIOD_END',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'registered_letter_number_c',
            'label' => 'LBL_REGISTERED_LETTER_NUMBER',
          ),
          1 => 
          array (
            'name' => 'engine_chasis_num_c',
            'label' => 'LBL_ENGINE_CHASIS_NUM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'vehicle_make_c',
            'label' => 'LBL_VEHICLE_MAKE',
          ),
          1 => 
          array (
            'name' => 'body_type_c',
            'label' => 'LBL_BODY_TYPE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'engine_capacity_cc_c',
            'label' => 'LBL_ENGINE_CAPACITY_CC',
          ),
          1 => 
          array (
            'name' => 'carrying_seating_capacity_c',
            'label' => 'LBL_CARRYING_SEATING_CAPACITY',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'type_of_cover_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_OF_COVER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'vehicle_purpose_c',
            'studio' => 'visible',
            'label' => 'LBL_VEHICLE_PURPOSE',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'premium_account_c',
            'label' => 'LBL_PREMIUM_ACCOUNT',
          ),
          1 => 
          array (
            'name' => 'insurer_name_c',
            'label' => 'LBL_INSURER_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'insurance_payment_status_c',
            'studio' => 'visible',
            'label' => 'LBL_INSURANCE_PAYMENT_STATUS',
          ),
          1 => 
          array (
            'name' => 'overall_status_c',
            'label' => 'LBL_OVERALL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'insurance_quote_c',
            'label' => 'LBL_INSURANCE_QUOTE',
          ),
        ),
      ),
    ),
  ),
);
?>
