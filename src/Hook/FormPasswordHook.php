<?php
namespace Starbug\Display\Hook;

class FormPasswordHook extends FormHook {
  public function build($form, &$control, &$field) {
    $field['type'] = 'password';
    $control = "input";
  }
}
