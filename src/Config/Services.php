<?php

namespace Codenom\Assets\Config;

use CodeIgniter\Config\BaseService;
use CodeIgniter\View\RendererInterface;

class Services extends BaseService
{
    public static function assets(BaseConfig $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('assets', $config);
        }

        // If no config was injected then load one
        // Prioritizes app/Config if found
        if (empty($config)) {
            $config = config('Assets');
        }
        return new \Codenom\Assets\Libraries\Assets($config);
    }

    public static function manifests(BaseConfig $config = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('manifests', $config);
        }

        // If no config was injected then load one
        // Prioritizes app/Config if found
        if (empty($config)) {
            $config = config('Assets');
        }
        return new \Codenom\Assets\Libraries\Manifests($config);
    }
}
