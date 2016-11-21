<?php
/*
 * php-deal-zf2
 * ZF2 Implementation for lisachenko/php-deal
 *
 * @copyright Copyright 2016, Andreas Frömer <blubb0r05+github@gmail.com>
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 */

namespace PhpDeal\ZF2\PhpDealModule;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * ZF2 Module for registration of php-deal aspects
 */
class Module implements ConfigProviderInterface
{
    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
