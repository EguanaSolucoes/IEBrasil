<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class GO
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class GO extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^(10|11|15)(\.[0-9]{3}){2}-[0-9]$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Goias
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999.999-9';
    }
}