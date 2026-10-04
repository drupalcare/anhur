<?php

declare(strict_types=1);

namespace Drupal\Tests\anhur\Kernel;

use Drupal\KernelTests\KernelTestBase;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;

/**
 * Anhur's settings config has a schema and installs under strict checking.
 *
 * Before config/schema/anhur.schema.yml existed this threw
 * "No schema for anhur.settings". The type is inherited from the base theme
 * (drupal8_w3css_theme), whose own test guards the key list.
 *
 * @license SPDX-License-Identifier: GPL-2.0-or-later
 */
#[Group('anhur')]
#[RunTestsInSeparateProcesses]
class ThemeSettingsSchemaTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = ['system'];

  /**
   * Installing the theme (and its base) under strict schema is clean.
   */
  public function testInstallUnderStrictSchemaIsClean(): void {
    $this->installConfig(['system']);
    $this->container->get('theme_installer')->install(['anhur']);
    $settings = $this->config('anhur.settings');
    $this->assertFalse($settings->isNew());
    $this->assertSame('w3-theme-00014', $settings->get('current_theme'));
    $this->assertSame(1, $settings->get('top_region'));
  }

}
