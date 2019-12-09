<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class AP
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class AP extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/03\.[0-9]{6}-[0-9]/';

    /**
     * Retorna a mascara
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999999-9';
    }
}