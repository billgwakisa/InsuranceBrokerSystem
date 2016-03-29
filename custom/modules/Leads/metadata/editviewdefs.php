<?php
$viewdefs ['Leads'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
          1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
          2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
          3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
        ),
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
      'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
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
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'last_name',
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
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'primary',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
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
