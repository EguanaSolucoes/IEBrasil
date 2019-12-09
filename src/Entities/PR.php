<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class PR
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class PR extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 10;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{8}-[0-9]{2}$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Paraná
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99999999-99';
    }
}