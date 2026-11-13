<?php
namespace Starbug\Display\Hook;

class FormSubmitHook extends FormHook {
  public function build($form, &$control, &$field) {
    $field['type'] = 'submit';
    $field['nolabel'] = true;
    $control = "input";
  }
}
