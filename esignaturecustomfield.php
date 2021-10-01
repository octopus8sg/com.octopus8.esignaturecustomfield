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
//function esignaturecustomfield_civicrm_alterCustomFieldDisplayValue(&$displayValue, $value, $entityId, $fieldInfo)
//{
//    CRM_Core_Error::debug_var('displayValue', $displayValue);
//    CRM_Core_Error::debug_var('value', $value);
//    CRM_Core_Error::debug_var('entityId', $entityId);
//    CRM_Core_Error::debug_var('fieldInfo', $fieldInfo);
//
//}

function esignaturecustomfield_civicrm_themes(&$themes)
{
    _esignaturecustomfield_civix_civicrm_themes($themes);
}

/**
 * Implements hook_civicrm_themes().
 */
//function esignaturecustomfield_civicrm_pageRun(&$page)
//{
//    CRM_Core_Error::debug_var('page', $page);
//}

//function esignaturecustomfield_civicrm_alterContent(  &$content, $context, $tplName, &$object )
//{
//    CRM_Core_Error::debug_var('content', $content);
//    CRM_Core_Error::debug_var('object', $object);
//    CRM_Core_Error::debug_var('context_cont', $context);
//    CRM_Core_Error::debug_var('tplName_cont', $tplName);
//}

//function esignaturecustomfield_civicrm_alterTemplateFile($formName, &$form, $context, &$tplName)
//{
//    CRM_Core_Error::debug_var('formName_templ', $formName);
//    CRM_Core_Error::debug_var('form_templ', $form);
//    CRM_Core_Error::debug_var('context_templ', $context);
//    CRM_Core_Error::debug_var('tplName', $tplName);
//}
//

function esignaturecustomfield_civicrm_preProcess($formName, &$form)
{
//    CRM_Core_Error::debug_var('formName_pre', $formName);
    //we get group tree first
    // this will build a grouptree for a single field preview
    if ($formName == 'CRM_Custom_Form_Preview') {
        esignature_preview($form);
    } elseif ($formName == 'CRM_Contact_Form_Inline_CustomData') {
        $groupTree = $form->_groupTree;
        $form->assign('eSignature_groupTree', $groupTree);
    } else {
        esignature_simpleforms($form);
//        _esignature_debug($form);
    }

//        CRM_Core_Error::debug_var('form_pre_post', $form);
//        CRM_Core_Error::debug_var('form_pre_post_all', $form->get_template_vars('groupTree'));
//        CRM_Core_Error::debug_var('form_pre_post', $form->get_template_vars());
//    }
    //get form, get know about custom fields and add them to form fields
//    $debud_added = false;
//    $groupTree = $form->get_template_vars('groupTree');
//    if ($groupTree) {
//        foreach ($groupTree as $id => $group) {
//            foreach ($group['fields'] as $fid => $field) {
//                $required = $field['is_required'] ?? NULL;
//                if ($field['html_type'] == 'eSignature') {
//                    $field['html_type'] = 'text';
//                    $groupTree[$id]['fields'][$fid]['html_type'] = 'text';
////                    $fieldId = $field['id'];
////                    $elementName = $field['element_name'];
////                    $signatures[] = $elementName;
////                    _esigno_addQuickFormElement($form, $elementName, $fieldId, $required);
////                    if ($form->getAction() == CRM_Core_Action::VIEW) {
////                        $form->getElement($elementName)->freeze();
////                    }
//                    if ($debud_added == false) {
//                        $debud_added = true;
//                    }
//                }
//            }
//        }
//        if($debud_added == true){
//            $form->assign('groupTree',$groupTree);
//            CRM_Core_Region::instance('page-body')->add(array(
//                'template' => 'CRM/Esignaturecustomfield/Page/debug.tpl',
//            ));
//        }
//    }

}

/**
 * @param $form
 * @param $groupTree
 * @throws API_Exception
 * @throws CRM_Core_Exception
 */
function esignature_simpleforms(&$form)
{
    $groupTree = [];
    $type = $form->_type;
    $subType = CRM_Utils_Request::retrieve('subType', 'String');
    $subName = CRM_Utils_Request::retrieve('subName', 'String');
    $groupCount = CRM_Utils_Request::retrieve('cgcount', 'Positive');
    $entityId = CRM_Utils_Request::retrieve('entityID', 'Positive');
    $contactID = CRM_Utils_Request::retrieve('cid', 'Positive');
    $groupID = CRM_Utils_Request::retrieve('groupID', 'Positive');
    $onlySubtype = CRM_Utils_Request::retrieve('onlySubtype', 'Boolean');
    $action = CRM_Utils_Request::retrieve('action', 'Alphanumeric');
    $contactTypes = CRM_Contact_BAO_ContactType::contactTypeInfo();
    if (!is_array($subType) && strstr($subType, CRM_Core_DAO::VALUE_SEPARATOR)) {
        $subType = str_replace(CRM_Core_DAO::VALUE_SEPARATOR, ',', trim($subType, CRM_Core_DAO::VALUE_SEPARATOR));
    }
    $singleRecord = NULL;
    if (!empty($form->_groupCount) && !empty($form->_multiRecordDisplay) && $form->_multiRecordDisplay == 'single') {
        $singleRecord = $form->_groupCount;
    }
    $mode = CRM_Utils_Request::retrieve('mode', 'String', $form);
    // when a new record is being added for multivalued custom fields.
    if (isset($form->_groupCount) && $form->_groupCount == 0 && $mode == 'add' &&
        !empty($form->_multiRecordDisplay) && $form->_multiRecordDisplay == 'single') {
        $singleRecord = 'new';
    }
    $groupTree = CRM_Core_BAO_CustomGroup::getTree($form->_type,
        NULL,
        $entityId,
        $groupID,
        $subType,
        $form->_subName,
        TRUE,
        $onlySubtype,
        FALSE,
        TRUE,
        $singleRecord
    );
    $groupTree = CRM_Core_BAO_CustomGroup::formatGroupTree($groupTree, TRUE, $form);
    $form->assign('eSignature_groupTree', $groupTree);
}

/**
 * @param $form
 * @param $groupTree
 * @param $params
 * @param $defaults
 * @throws CRM_Core_Exception
 */
function esignature_preview(&$form)
{
    $groupId = $form->get('groupId');
    $fieldId = $form->get('fieldId');
    $groupTree = [];
    $defaults = [];
    $params = null;
    if ($groupId) {

        if ($fieldId) {
            // field preview
            $params = ['id' => $fieldId];
            $fieldDAO = new CRM_Core_DAO_CustomField();
            CRM_Core_DAO::commonRetrieve('CRM_Core_DAO_CustomField', $params, $defaults);
            if (!empty($defaults['is_view'])) {
                CRM_Core_Error::statusBounce(ts('This field is view only so it will not display on edit form.'));
            } elseif (empty($defaults['is_active'])) {
                CRM_Core_Error::statusBounce(ts('This field is inactive so it will not display on edit form.'));
            }
            $groupTree[$groupId]['id'] = 0;
            $groupTree[$groupId]['fields'] = [];
            $groupTree[$groupId]['fields'][$fieldId] = $defaults;
            $groupTree = CRM_Core_BAO_CustomGroup::formatGroupTree($groupTree, 1, $form);
        } else {
            $groupTree = CRM_Core_BAO_CustomGroup::getGroupDetail($groupId);
            $groupTree = CRM_Core_BAO_CustomGroup::formatGroupTree($groupTree, TRUE, $form);
        }
        $form->assign('eSignature_groupTree', $groupTree);
    }
}

function _esignature_debug(&$form)
{
//    CRM_Core_Region::instance('page-body')->add(array(
//        'template' => 'CRM/Esignaturecustomfield/Page/debug.tpl',
//    ));
}

function __esignaturecustomfield_civicrm_buildForm($formName, &$form)
{
//    CRM_Core_Error::debug_var('formName_buildForm', $formName);
//    CRM_Core_Error::debug_var('form_buildForm', $form);
//    CRM_Core_Error::debug_var('templates_buildForm', $form->get_template_vars());

//    if ($formName == 'CRM_Custom_Form_Preview'
//        || $formName == 'CRM_Custom_Form_CustomDataByType'
//        || $formName == 'CRM_Contact_Form_Inline_CustomData'
//        || $formName == 'CRM_Contact_Form_Contact'
//    )
//
    if (true) {
// forms to edit custom data
//        CRM_Core_Error::debug_var('form', $form);
        $debud_added = false;
        $ngroupTree = $form->get_template_vars('groupTree');
        $agroupTree = $form->get_template_vars('address_groupTree');
        $groupTree = array_merge($ngroupTree, $agroupTree);
        /*        CRM_Core_Error::debug_var('address_groupTree', $form->get_template_vars('address_groupTree'));*/
        if ($groupTree) {
            foreach ($groupTree as $id => $group) {
                foreach ($group['fields'] as $field) {
                    $required = $field['is_required'] ?? NULL;
                    if ($field['html_type'] == 'eSignature') {
                        $fieldId = $field['id'];
                        $elementName = $field['element_name'];
//                        $signatures[] = $elementName;
                        _esigno_addQuickFormElement($form, $elementName, $fieldId, $required);
                        if ($form->getAction() == CRM_Core_Action::VIEW) {
                            $form->getElement($elementName)->freeze();
                        }
//                    if ($debud_added == false) {
//                        CRM_Core_Region::instance('page-body')->add(array(
//                            'template' => 'CRM/Esignaturecustomfield/Page/debug.tpl',
//                        ));
//                        $debud_added = true;
//                    }
                    }
                }
            }
        } else {
            $fields = $form->_fields;
            foreach ($fields as $field) {
                if ($field['html_type'] == 'eSignature') {
                    if (strpos($field['name'], 'custom_') === 0) {
                        $required = $field['is_required'] ?? NULL;
                        $fieldId = substr($field['name'], 7);
                        $elementName = $field['name'];
                        _esigno_addQuickFormElement($form, $elementName, $fieldId, $required);
                        if ($form->getAction() == CRM_Core_Action::VIEW) {
                            $form->getElement($elementName)->freeze();
                        }
                    }
                }
            }
        }

    }

//    if ($formName == 'CRM_Activity_Form_Activity') {
    // forms to show custom data
//        CRM_Core_Region::instance('page-body')->add(array(
//            'template' => 'CRM/Esignaturecustomfield/Page/debug.tpl',
//        ));        $debud_added = false;
    if (true) {
        $groupTrees = $form->get_template_vars('viewCustomData');
//        CRM_Core_Error::debug_var('groupTrees1', $groupTrees);
        if ($groupTrees) {
            foreach ($groupTrees as $gid => $groupTree) {
//            CRM_Core_Error::debug_var('groupTree', strval($gid) . '=>' . $groupTree);
                foreach ($groupTree as $id => $group) {
//                CRM_Core_Error::debug_var('group', strval($id) . '=>' . $group);
                    foreach ($group['fields'] as $fid => $field) {
//                    CRM_Core_Error::debug_var('field', strval($fid) . '=>' . $field);
                        if ($field['field_type'] == 'eSignature') {
                            $field_value = $field['field_value'];
                            $pos = strpos($field_value, 'image');
                            // The !== operator can also be used.  Using != would not work as expected
                            // because the position of 'a' is 0. The statement (0 != false) evaluates
                            // to false.
                            if ($pos !== false) {
                                $field['field_value'] = "<img src='$field_value' height='100px'>";
                                $groupTrees[$gid][$id]['fields'][$fid] = $field;
                                if ($debud_added == false) {
//                            CRM_Core_Region::instance('page-body')->add(array(
//                                'template' => 'CRM/Esignaturecustomfield/Page/debug.tpl',
//                            ));
                                    $debud_added = true;
                                }
                            }
                        }
                    }
                }
            }
            if ($debud_added == true) {
//                CRM_Core_Error::debug_var('groupTrees2', $groupTrees);
                $form->assign('viewCustomData', $groupTrees);
//            CRM_Core_Region::instance('page-body')->add(array(
//                'template' => 'CRM/Esignaturecustomfield/Page/debug.tpl',
//            ));
            }
        }
    }


}

function esignaturecustomfield_civicrm_buildForm($formName, &$form)
{
//lets check a form before and while building Form

    CRM_Core_Error::debug_var('formName_buildForm', $formName);

    if ($formName == 'CRM_Profile_Form_Edit') {
        CRM_Core_Error::debug_var('form_buildForm', $form);
        $fields = $form->_fields;
        foreach ($fields as $field) {
            if ($field['html_type'] == 'eSignature') {
                if (strpos($field['name'], 'custom_') === 0) {
                    $required = $field['is_required'] ?? NULL;
                    $fieldId = substr($field['name'], 7);
                    $elementName = $field['name'];
                    _esigno_addQuickFormElement($form, $elementName, $fieldId, $required);
                    if ($form->getAction() == CRM_Core_Action::VIEW) {
                        $form->getElement($elementName)->freeze();
                    }
                }
            }
        }
    }
//    CRM_Core_Error::debug_var('form_buildForm', $form);
//    CRM_Core_Error::debug_var('eSignature_groupTree', $form->get_template_vars('eSignature_groupTree'));

    //First add eSignature option to a Create Custom Field Form
    if ($formName == 'CRM_Custom_Form_Field') {
        _esigno_add_esignature_option($form);
    } else {
// forms to edit custom data
//        CRM_Core_Error::debug_var('form', $form);
        $groupTrees = [];
        $debud_added = false;
        $egroupTree = $form->get_template_vars('eSignature_groupTree');
        $groupTrees[] = $egroupTree;
        if (!$egroupTree) {
            $agroupTree = $form->get_template_vars('address_groupTree');
            if ($agroupTree) {
                $groupTrees = array_merge($agroupTree, $groupTrees);
            } else {
                $groupTrees[] = $form->get_template_vars('groupTree');
            }
        }
//        CRM_Core_Error::debug_var('address_groupTree', $groupTrees);
        foreach ($groupTrees as $groupTree) {
            if ($groupTree) {
                foreach ($groupTree as $id => $group) {
                    foreach ($group['fields'] as $field) {
                        $required = $field['is_required'] ?? NULL;
                        if ($field['html_type'] == 'eSignature') {
                            $fieldId = $field['id'];
                            $elementName = $field['element_name'];
//                        $signatures[] = $elementName;
                            _esigno_addQuickFormElement($form, $elementName, $fieldId, $required);
                            if ($form->getAction() == CRM_Core_Action::VIEW) {
                                $form->getElement($elementName)->freeze();
                            }
                            if ($debud_added == false) {
                                _esignature_debug($form);
                                $debud_added = true;
                            }
                        }
                    }
                }
            }
        }
    }
}

function esignaturecustomfield_civicrm_alterCustomFieldDisplayValue(&$displayValue, $value, $entityId, $fieldInfo)
{
    //First see what we have
//    CRM_Core_Error::debug_var('displayValue', $displayValue);
//    CRM_Core_Error::debug_var('value', $value);
//    CRM_Core_Error::debug_var('entityId', $entityId);
//    CRM_Core_Error::debug_var('fieldInfo', $fieldInfo);
    // The !== operator can also be used.  Using != would not work as expected
    // because the position of 'a' is 0. The statement (0 != false) evaluates
    // to false.
//    if ($fieldInfo['is_view']) {
    if ($fieldInfo['html_type'] === 'eSignature') {
        $pos = strpos($value, 'data:image/');
        if ($pos === 0) {
            $displayValue = "<img src='$value' height='100px'>";
        }
    }
//    }
}

/**
 * @param $form Smarty QuickForm
 * Function adds eSignature html_type option to Memo data_type
 */
function _esigno_add_esignature_option(&$form)
{
    $dataToHTML = $form->get_template_vars('dataToHTML');
//    CRM_Core_Error::debug_var('dataToHTML', $dataToHTML);
//    $dataToHTML['File'][] = 'eSignature';
    $dataToHTML['Memo'][] = 'eSignature';
//    $template = CRM_Core_Smarty::singleton();
//    $template->assign_by_ref( 'dataToHTML', $dataToHTML);
    $form->assign('dataToHTML', $dataToHTML);
}


/**
 * Add a custom field to an existing form.
 *
 * @param CRM_Core_Form $qf
 *   Form object (reference).
 * @param string $elementName
 *   Name of the custom field.
 * @param int $fieldId
 * @param bool $useRequired
 *   True if required else false.
 * @param bool $search
 *   True if used for search else false.
 * @param string $label
 *   Label for custom field.
 * @return \HTML_QuickForm_Element|null
 * @throws \CiviCRM_API3_Exception
 */
function _esigno_addQuickFormElement(
    $qf, $elementName, $fieldId, $useRequired = TRUE, $search = FALSE, $label = NULL
)
{
    $field = CRM_Core_BAO_CustomField::getFieldObject($fieldId);
    $widget = $field->html_type;
    $element = NULL;
    $customFieldAttributes = [];

    if (!isset($label)) {
        $label = $field->label;
    }

    // DAO stores attributes as a string, but it's hard to manipulate and
    // CRM_Core_Form::add() wants them as an array.
    $fieldAttributes = CRM_Core_BAO_CustomField::attributesFromString($field->attributes);

    // Custom field HTML should indicate group+field name
    $groupName = CRM_Core_DAO::getFieldValue('CRM_Core_DAO_CustomGroup', $field->custom_group_id);
    $fieldAttributes['data-crm-custom'] = $groupName . ':' . $field->name;
    $fieldAttributes['class'] = "eSignature" . $fieldId;
    // at some point in time we might want to split the below into small functions

    switch ($widget) {
        case 'eSignature':
            $element = $qf->add('text', $elementName, $label,
                $fieldAttributes,
                $useRequired && !$search
            );
            CRM_Core_Region::instance('form-body')->add(array(
                'template' => 'CRM/Esignaturecustomfield/Page/ElSignature.tpl',
            ));
            break;
    }

    if ($field->is_view && !$search) {
        $qf->freeze($elementName);
    }

    return $element;
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
//    _esignaturecustomfield_civix_insert_navigation_menu($menu, '', array(
//        'label' => E::ts('El Signature'),
//        'name' => 'el_signature',
//        'url' => 'civicrm/elsignature',
//        'permission' => 'access CiviCRM',
//        'operator' => 'OR',
//        'separator' => 0,
//    ));
//    _esignaturecustomfield_civix_insert_navigation_menu($menu, 'el_signature', array(
//        'label' => E::ts('Check El Signature'),
//        'name' => 'check_el_signature',
//        'url' => 'civicrm/elsignature',
//        'permission' => 'access CiviCRM',
//        'operator' => 'OR',
//        'separator' => 0,
//    ));
//    _esignaturecustomfield_civix_navigationMenu($menu);
}

function esignaturecustomfield_civicrm_postProcess($formName, $form)
{

//    $evalues = $form->exportValues();

    $evalues = CRM_Utils_Request::exportValues();
    $gevalues = $form->getSubmitValues();
    $groupTree = $form->get_template_vars('groupTree');
//    CRM_Core_Error::debug_var('formName_postPro', $formName);
//    CRM_Core_Error::debug_var('form', $form);
    foreach ($groupTree as $id => $group) {
        foreach ($group['fields'] as $field) {
//    CRM_Core_Error::debug_var('field', $field);
            $entityId = $form->_id;
            if ($form->_activityId) {
                $entityId = $form->_activityId;
            }
            if ($form->_entityId) {
                $entityId = $form->_entityId;
            }
            if ($formName == 'CRM_Contact_Form_Inline_CustomData'
                || $formName == 'CRM_Contact_Form_Contact'
            ) {
                $entityId = $form->_contactId;
            }
            if ($entityId) {
                if ($field['html_type'] == 'eSignature') {
                    if ($field['data_type'] != 'File') {
                        $fieldId = $field['id'];
                        $elementName = $field['element_name'];
                        $elementValue = $gevalues[$elementName];
//                    CRM_Core_Error::debug_var('element', $elementName . ':' . $elementValue);
                        if (isset($elementValue)) {
                            $result = civicrm_api3('CustomValue', 'create', [
                                'entity_id' => $entityId,
                                'custom_' . $fieldId => $elementValue,
                            ]);
//                        CRM_Core_Error::debug_var('result', $result);
                        }
                    }
                }
            } else {
                CRM_Core_Error::debug_var('result', $formName);

            }
        }
    }


    //    $svalues = $form->_submitValues;
//    $contactid = $form->getVar('_id');
//    CRM_Core_Error::debug_var('evalues', $evalues);
//    CRM_Core_Error::debug_var('gevalues', $gevalues);
//    CRM_Core_Error::debug_var('svalues', $svalues);

}

//function esignaturecustomfield_civicrm_post($op, $objectName, $id, &$params)
//{
//    CRM_Core_Error::debug_var('op', $op);
//    CRM_Core_Error::debug_var('objectName', $objectName);
//    CRM_Core_Error::debug_var('id', $id);
//    CRM_Core_Error::debug_var('params', $params);
//}

//function esignaturecustomfield_civicrm_apiWrappers(&$wrappers, $apiRequest) {
//    CRM_Core_Error::debug_var('wrappers', $wrappers);
//    CRM_Core_Error::debug_var('apiRequest', $apiRequest);
//
//}