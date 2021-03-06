<?php
/**
 * ZfDebugModule. Console commands and other utilities for debugging ZF2 apps.
 *
 * @license http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright 2016 Vítor Brandão <vitor@noiselabs.org>
 */

namespace Noiselabs\ZfDebugModule;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * ZfDebug Module.
 *
 * @author Vítor Brandão <vitor@noiselabs.org>
 */
class Module implements ConfigProviderInterface
{
    const ID = 'zf-debug-utils';
    const NAME = 'ZfDebug Module';
    const VERSION = '0.1.0-DEV';

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        return require __DIR__ . '/../config/module.config.php';
    }
}
