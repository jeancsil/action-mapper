<?php
/**
 * This file is part of Action Mapper, a PHP front-controller microframework
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Lcobucci\ActionMapper\Routing;

/**
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 */
class RouteHandlerContainer
{
    /**
     * @var array
     */
    protected $handlers;

    /**
     * @param array $handlers
     */
    public function __construct(array $handlers = array())
    {
        $this->handlers = $handlers;
    }

    /**
     * @param string $className
     * @return mixed
     */
    public function get($className)
    {
        if (!isset($this->handlers[$className])) {
            $this->handlers[$className] = new $className;
        }

        return $this->handlers[$className];
    }
}
