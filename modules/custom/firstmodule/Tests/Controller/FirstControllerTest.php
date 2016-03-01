<?php

/**
 * @file
 * Contains \Drupal\firstmodule\Tests\FirstController.
 */

namespace Drupal\firstmodule\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the firstmodule module.
 */
class FirstControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "firstmodule FirstController's controller functionality",
      'description' => 'Test Unit for module firstmodule and controller FirstController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests firstmodule functionality.
   */
  public function testFirstController() {
    // Check that the basic functions of module firstmodule.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
