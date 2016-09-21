<?php 
/**
	Admin Page Framework v3.8.0b16 by Michael Uno 
	Generated by PHP Class Files Script Generator <https://github.com/michaeluno/PHP-Class-Files-Script-Generator>
	<http://en.michaeluno.jp/custom-scrollbar>
	Copyright (c) 2013-2016, Michael Uno; Licensed under MIT <http://opensource.org/licenses/MIT> */
class CustomScrollbar_AdminPageFramework_FieldType__nested extends CustomScrollbar_AdminPageFramework_FieldType {
    public $aFieldTypeSlugs = array('_nested');
    protected $aDefaultKeys = array();
    protected function getStyles() {
        return ".custom-scrollbar-fieldset > .custom-scrollbar-fields > .custom-scrollbar-field.with-nested-fields > .custom-scrollbar-fieldset.multiple-nesting {margin-left: 2em;}.custom-scrollbar-fieldset > .custom-scrollbar-fields > .custom-scrollbar-field.with-nested-fields > .custom-scrollbar-fieldset {margin-bottom: 1em;}.with-nested-fields > .custom-scrollbar-fieldset.child-fieldset > .custom-scrollbar-child-field-title {display: inline-block;padding: 0 0 0.4em 0;}.custom-scrollbar-fieldset.child-fieldset > label.custom-scrollbar-child-field-title {display: table-row; white-space: nowrap;}";
    }
    protected function getField($aField) {
        $_oCallerForm = $aField['_caller_object'];
        $_aInlineMixedOutput = array();
        foreach ($this->getAsArray($aField['content']) as $_aChildFieldset) {
            if (is_scalar($_aChildFieldset)) {
                continue;
            }
            if (!$this->isNormalPlacement($_aChildFieldset)) {
                continue;
            }
            $_aChildFieldset = $this->getFieldsetReformattedBySubFieldIndex($_aChildFieldset, ( integer )$aField['_index'], $aField['_is_multiple_fields'], $aField);
            $_oFieldset = new CustomScrollbar_AdminPageFramework_Form_View___Fieldset($_aChildFieldset, $_oCallerForm->aSavedData, $_oCallerForm->getFieldErrors(), $_oCallerForm->aFieldTypeDefinitions, $_oCallerForm->oMsg, $_oCallerForm->aCallbacks);
            $_aInlineMixedOutput[] = $_oFieldset->get();
        }
        return implode('', $_aInlineMixedOutput);
    }
}
class CustomScrollbar_AdminPageFramework_FieldType_inline_mixed extends CustomScrollbar_AdminPageFramework_FieldType__nested {
    public $aFieldTypeSlugs = array('inline_mixed');
    protected $aDefaultKeys = array('label_min_width' => '',);
    protected function getStyles() {
        return ".custom-scrollbar-field-inline_mixed {width: 98%;}.custom-scrollbar-field-inline_mixed > fieldset {display: inline-block;overflow-x: visible;padding-right: 0.4em;}.custom-scrollbar-field-inline_mixed > fieldset > .custom-scrollbar-fields{display: inline;width: auto;table-layout: auto;margin: 0;padding: 0;vertical-align: middle;white-space: nowrap;}.custom-scrollbar-field-inline_mixed > fieldset > .custom-scrollbar-fields > .custom-scrollbar-field {float: none;clear: none;width: 100%;display: inline-block;margin-right: auto;vertical-align: middle; }.with-mixed-fields > fieldset > label {width: auto;padding: 0;}.custom-scrollbar-field-inline_mixed > fieldset > .custom-scrollbar-fields > .custom-scrollbar-field .custom-scrollbar-input-label-string {padding: 0;}.custom-scrollbar-field-inline_mixed > fieldset > .custom-scrollbar-fields > .custom-scrollbar-field > .custom-scrollbar-input-label-container,.custom-scrollbar-field-inline_mixed > fieldset > .custom-scrollbar-fields > .custom-scrollbar-field > * > .custom-scrollbar-input-label-container{padding: 0;display: inline-block;width: 100%;}.custom-scrollbar-field-inline_mixed > fieldset > .custom-scrollbar-fields > .custom-scrollbar-field > .custom-scrollbar-input-label-container > label,.custom-scrollbar-field-inline_mixed > fieldset > .custom-scrollbar-fields > .custom-scrollbar-field > * > .custom-scrollbar-input-label-container > label{display: inline-block;}.custom-scrollbar-field-inline_mixed > fieldset > .custom-scrollbar-fields > .custom-scrollbar-field > .custom-scrollbar-input-label-container > label > input,.custom-scrollbar-field-inline_mixed > fieldset > .custom-scrollbar-fields > .custom-scrollbar-field > * > .custom-scrollbar-input-label-container > label > input{display: inline-block;min-width: 100%;margin-right: auto;margin-left: auto;}.custom-scrollbar-field-inline_mixed .custom-scrollbar-input-label-container,.custom-scrollbar-field-inline_mixed .custom-scrollbar-input-label-string{min-width: 0;}";
    }
}
