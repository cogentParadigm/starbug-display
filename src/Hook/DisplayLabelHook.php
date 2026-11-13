<?php
namespace Starbug\Display\Hook;

class DisplayLabelHook extends DisplayHook {
  public function build($display, $field, &$options, $column) {
    if (empty($options['label'])) {
      $options['label'] = $column['label'];
    }
  }
}
