<?php
namespace Starbug\Display\Helper;

use Starbug\Display\Breadcrumbs;

class BreadcrumbsHelper {
  public function __construct(
    protected Breadcrumbs $target
  ) {
  }
  public function helper() {
    return $this->target;
  }
}
