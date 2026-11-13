<?php
namespace Starbug\Display;

use Exception;
use Psr\Container\ContainerInterface;

/**
 * An implementation of DisplayFactoryInterface.
 */
class DisplayFactory implements DisplayFactoryInterface {
  public function __construct(
    protected ContainerInterface $container
  ) {
  }

  /**
   * {@inheritdoc}
   *
   * Accepts a class name or a list of class names and instantiates the first
   * one that exists.
   */
  public function get($displays): Display {
    if (!is_array($displays)) {
      $displays = [$displays];
    }
    foreach ($displays as $display) {
      if (is_string($display) && class_exists($display)) {
        return $this->container->make($display);
      }
    }
    throw new Exception("Display not found: ".implode(", ", $displays));
  }
}
