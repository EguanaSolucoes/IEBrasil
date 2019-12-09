<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class RN
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class RN extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^20(\.[0-9]{3}){2}-[0-9]$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Rio Grande do Norte
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999.999-9';
    }
}