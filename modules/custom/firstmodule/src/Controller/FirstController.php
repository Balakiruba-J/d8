<?php

/**
 * @file
 * Contains \Drupal\firstmodule\Controller\FirstController.
 */

namespace Drupal\firstmodule\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class FirstController.
 *
 * @package Drupal\firstmodule\Controller
 */
class FirstController extends ControllerBase {
  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello() {
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Hi Hello World!!!')
    ];
  }

}
