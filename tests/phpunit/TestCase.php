<?php

namespace OOUI\Tests;

use OOUI\Theme;
use OOUI\WikimediaUITheme;

class TestCase extends \PHPUnit\Framework\TestCase {
	/**
	 * Subclasses can override
	 * @return Theme
	 */
	protected function getTheme() {
		return new WikimediaUITheme();
	}

	public function setUp(): void {
		parent::setUp();
		Theme::setSingleton( $this->getTheme() );
	}

	public function tearDown(): void {
		Theme::setSingleton( null );
		parent::tearDown();
	}
}
