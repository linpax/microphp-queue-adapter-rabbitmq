<?php
/**
 * @link https://github.com/linpax/microphp-queue-adapter-rabbitmq
 * @copyright Copyright &copy; 2017 Linpax
 * @license https://github.com/linpax/microphp-queue-adapter-rabbitmq/blob/master/LICENSE
 */

namespace Micro\Queue\Adapter;

use Micro\Driver\RabbitMQ\RabbitMQ as RabbitMqDriver;


class RabbitMQ
{
    /** @var RabbitMqDriver $driver */
    private $driver; // exchange - почтовый ящик опправителя из которого сообщения кидаются в очереди

    /**
     * Отправка задания в очередь
     *
     * @param $name
     * @param array $params
     * @param string $stream
     */
    public function send($name, array $params = [], $stream = 'sync')
    {
        return false; // error
        return null; // async|stream
        return 'mixed'; // sync
    }
}