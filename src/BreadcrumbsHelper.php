<?php
namespace Starbug\Display;

class BreadcrumbsHelper {
  public function __construct(
    protected Breadcrumbs $target
  ) {
  }
  public function helper() {
    return $this->target;
  }
}
