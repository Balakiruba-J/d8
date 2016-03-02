<?php

/**
 * @file
 * Contains \Drupal\firstmodule\Plugin\Block\DefaultBlock.
 */

namespace Drupal\firstmodule\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'DefaultBlock' block.
 *
 * @Block(
 *  id = "default_block",
 *  admin_label = @Translation("Default block"),
 * )
 */
class DefaultBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
 /* public function blockForm($form, FormStateInterface $form_state) {
    $form['content'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Content'),
      '#description' => $this->t('My Content Description'),
      '#default_value' => isset($this->configuration['content']) ? $this->configuration['content'] : '',
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
 /* public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['content'] = $form_state->getValue('content');
  }

  /**
   * {@inheritdoc}
   */
 /* public function build() {
    $build = [];
    $build['default_block_content']['#markup'] = '<p>' . $this->configuration['content'] . '</p>';

    return $build;
  }
  */
 public function build( )
 {
 return array(
      '#markup' => $this->t('Hello, World!'),
  );
  }
 

}
