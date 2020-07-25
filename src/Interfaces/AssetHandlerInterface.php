<?php

namespace Codenom\Assets\Interfaces;

use CodeIgniter\Config\BaseConfig;

interface AssetHandlerInterface
{
	public function __construct(BaseConfig $config = null);

	public function gather(string $route): array;
}
