<?php
/**
 * Container.php
 *
 * @copyright Chongyi <chongyi@xopns.com>
 * @link      https://insp.top
 */

namespace Dybasedev\KeeperContracts\Module;

use Psr\Container\ContainerInterface;

interface Container extends ContainerInterface
{
    public function bind($id, $object, $immutable = true, $singleton = false);

    public function singleton($id, $object, $immutable = true);

    public function immutable($id);

    public function instance($id, $object, $immutable = true);
}