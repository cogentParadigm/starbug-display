<?php
namespace Starbug\Display\Helper;

use Starbug\Display\Filter;

class FilterHelper {
  public function __construct(
    protected Filter $target
  ) {
  }
  public function helper() {
    return $this->target;
  }
}
