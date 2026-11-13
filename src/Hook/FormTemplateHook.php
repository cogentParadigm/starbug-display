<?php
namespace Starbug\Display\Hook;

class FormTemplateHook extends FormHook {
  public function build($form, &$control, &$field) {
    $field['nofield'] = true;
  }
}
