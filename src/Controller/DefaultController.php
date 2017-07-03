<?php

namespace Drupal\newyork1_aboutus\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\newyork1_aboutus\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Getaboutmepage.
   *
   * @return string
   *   Return Hello string.
   */
  public function getAboutMePage() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: getAboutMePage')
    ];
  }

}
