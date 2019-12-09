<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class PA
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class PA extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^15(\.[0-9]{3}){2}-[0-9]$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Para
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999.999-9';
    }
}