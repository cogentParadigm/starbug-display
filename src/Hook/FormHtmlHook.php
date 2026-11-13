<?php
namespace Starbug\Display\Hook;

class FormHtmlHook extends FormHook {
  public function build($form, &$control, &$field) {
    $field['nofield'] = true;
  }
}
