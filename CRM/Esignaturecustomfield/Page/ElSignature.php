<?php
use CRM_Esignaturecustomfield_ExtensionUtil as E;

class CRM_Esignaturecustomfield_Page_ElSignature extends CRM_Core_Page {

  public function run() {
    // Example: Set the page-title dynamically; alternatively, declare a static title in xml/Menu/*.xml
    CRM_Utils_System::setTitle(E::ts('ElSignature'));

    // Example: Assign a variable for use in a template
    $this->assign('currentTime', date('Y-m-d H:i:s'));

    parent::run();
  }

}
