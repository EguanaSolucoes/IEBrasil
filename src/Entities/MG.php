<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class MG
 * @package Eguana\IEBrasil\Entities
 */
class MG extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 13;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{9}\.[0-9]{2}-[0-9]{2}$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Minas Gerais
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '999999999.99-99';
    }
}