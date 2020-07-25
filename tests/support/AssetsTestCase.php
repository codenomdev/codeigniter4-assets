<?php

namespace Tests\Support;

use CodeIgniter\Test\CIUnitTestCase;
use Codenom\Assets\Libraries\Assets;

class AssetsTestCase extends CIUnitTestCase
{
	/**
	 * @var \Codenom\Assets\Libraries\Assets
	 */
	protected $assets;

	/**
	 * @var \Codenom\Assets\Config\Assets
	 */
	protected $config;

	public function setUp(): void
	{
		parent::setUp();

		$this->config           = new \Codenom\Assets\Config\Assets();
		$this->config->silent   = false;
		$this->config->fileBase = SUPPORTPATH . 'assets/';

		// Create the service
		$this->assets = new Assets($this->config);
	}
}
