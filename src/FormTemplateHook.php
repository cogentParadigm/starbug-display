<?php
namespace Starbug\Display;

class FormTemplateHook extends FormHook {
  public function build($form, &$control, &$field) {
    $field['nofield'] = true;
  }
}
