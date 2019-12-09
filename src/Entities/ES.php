<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class ES
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class ES extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^([0-9]{3}\.){2}[0-9]{2}-[0-9]$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Espirito Santo
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '999.999.99-9';
    }
}