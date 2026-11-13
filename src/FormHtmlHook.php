<?php
namespace Starbug\Display;

class FormHtmlHook extends FormHook {
  public function build($form, &$control, &$field) {
    $field['nofield'] = true;
  }
}
