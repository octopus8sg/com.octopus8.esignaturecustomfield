<?php

require_once 'esignaturecustomfield.civix.php';

// phpcs:disable
use CRM_Esignaturecustomfield_ExtensionUtil as E;

// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function esignaturecustomfield_civicrm_config(&$config)
{
    _esignaturecustomfield_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function esignaturecustomfield_civicrm_xmlMenu(&$files)
{
    _esignaturecustomfield_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function esignaturecustomfield_civicrm_install()
{
    _esignaturecustomfield_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function esignaturecustomfield_civicrm_postInstall()
{
    _esignaturecustomfield_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function esignaturecustomfield_civicrm_uninstall()
{
    _esignaturecustomfield_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function esignaturecustomfield_civicrm_enable()
{
    _esignaturecustomfield_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function esignaturecustomfield_civicrm_disable()
{
    _esignaturecustomfield_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function esignaturecustomfield_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL)
{
    return _esignaturecustomfield_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function esignaturecustomfield_civicrm_managed(&$entities)
{
    _esignaturecustomfield_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function esignaturecustomfield_civicrm_caseTypes(&$caseTypes)
{
    _esignaturecustomfield_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function esignaturecustomfield_civicrm_angularModules(&$angularModules)
{
    _esignaturecustomfield_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function esignaturecustomfield_civicrm_alterSettingsFolders(&$metaDataFolders = NULL)
{
    _esignaturecustomfield_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function esignaturecustomfield_civicrm_entityTypes(&$entityTypes)
{
    _esignaturecustomfield_civix_civicrm_entityTypes($entityTypes);
}

function esignaturecustomfield_civicrm_fieldOptions($entity, $field, &$options, $params)
{
//    CRM_Core_Error::debug_var('entity', $entity);
//    CRM_Core_Error::debug_var('field', $field);
//    CRM_Core_Error::debug_var('options', $options);
//    CRM_Core_Error::debug_var('params', $params);

    if (($entity === 'CustomField') && ($field === 'html_type')) {
        //to Add a Signature to options, two steps are needed - add eSignature to options
        //and add it to available options in buildForm hook
        $options['eSignature'] = 'Electronic Signature';
    }
}

/**
 * Implements hook_civicrm_themes().
 */
function esignaturecustomfield_civicrm_themes(&$themes)
{
    _esignaturecustomfield_civix_civicrm_themes($themes);
}

/**
 * Implements hook_civicrm_themes().
 */
function esignaturecustomfield_civicrm_buildForm($formName, &$form)
{
    CRM_Core_Error::debug_var('formName', $formName);
//    CRM_Core_Error::debug_var('form', $form);
    if ($formName == 'CRM_Custom_Form_Field') {
        $dataToHTML = $form->get_template_vars('dataToHTML');
    CRM_Core_Error::debug_var('dataToHTML', $dataToHTML);
        $dataToHTML['File'][] = 'eSignature';
        $dataToHTML['Memo'][] = 'eSignature';
//    $template = CRM_Core_Smarty::singleton();
//    $template->assign_by_ref( 'dataToHTML', $dataToHTML);
        $form->assign('dataToHTML', $dataToHTML);
    }
//    CRM_Core_Region::instance('page-body')->add(array(
//        'template' => 'CRM/Esignaturecustomfield/Page/ElSignature.tpl',
//  ));
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function esignaturecustomfield_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
function esignaturecustomfield_civicrm_navigationMenu(&$menu)
{
    //add new page to menu
    _esignaturecustomfield_civix_insert_navigation_menu($menu, '', array(
        'label' => E::ts('El Signature'),
        'name' => 'el_signature',
        'url' => 'civicrm/elsignature',
        'permission' => 'access CiviCRM',
        'operator' => 'OR',
        'separator' => 0,
    ));
    _esignaturecustomfield_civix_insert_navigation_menu($menu, 'el_signature', array(
        'label' => E::ts('Check El Signature'),
        'name' => 'check_el_signature',
        'url' => 'civicrm/elsignature',
        'permission' => 'access CiviCRM',
        'operator' => 'OR',
        'separator' => 0,
    ));
    _esignaturecustomfield_civix_navigationMenu($menu);
}
