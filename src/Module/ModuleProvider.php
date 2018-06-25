<?php
/**
 * ModuleProvider.php
 *
 * @copyright Chongyi <xpz3847878@163.com>
 * @link      https://insp.top
 */

namespace Dybasedev\KeeperContracts\Module;

use Psr\Container\ContainerInterface;

interface ModuleProvider
{
    public function register(ContainerInterface $container);

    public function mount(ContainerInterface $container);
}