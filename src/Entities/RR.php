<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class RR
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class RR extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^24\.[0-9]{6}-[0-9]$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Roraima
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999999-9';
    }
}