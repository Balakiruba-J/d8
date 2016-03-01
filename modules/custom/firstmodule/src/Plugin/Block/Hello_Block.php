<?php

/**
 * @file
 * Contains \Drupal\firstmodule\Plugin\Block\Hello_Block.
 */

namespace Drupal\firstmodule\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello_Block' block.
 *
 * @Block(
 *  id = "hello_block",
 *  admin_label = @Translation("Hello_Block"),
 * )
 */
class Hello_Block extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['hello_block']['#markup'] = 'Hello World';

    return $build;
  }

}
