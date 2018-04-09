<?php
/**
 * DestructibleModuleProvider.php
 *
 * @copyright Chongyi <xpz3847878@163.com>
 * @link      https://insp.top
 */

namespace Dybasedev\KeeperContracts\Module;


use Illuminate\Contracts\Container\Container;

interface DestructibleModuleProvider extends ModuleProvider
{
    public function destroy(Container $container);
}