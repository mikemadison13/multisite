<?php

namespace Drupal\Tests\multisite_core\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * @group multisite
 */
class BaseTest extends BrowserTestBase {

  /**
   * Theme to enable. This field is mandatory.
   *
   * @var string
   */
  protected $defaultTheme = 'claro';

  /**
   * Confirms the response code of the site.
   */
  public function testResponseCode(): void {
    $this->drupalGet("/user");
    $session = $this->assertSession();
    $session->statusCodeEquals(200);
  }

}
