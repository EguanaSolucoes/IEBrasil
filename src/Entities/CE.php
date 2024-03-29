<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class CE
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class CE extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{2}\.[0-9]{6}-[0-9]$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Ceará
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999999-9';
    }
}