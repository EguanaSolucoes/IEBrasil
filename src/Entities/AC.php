<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class AC
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class AC extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 13;

    /**
     * @var string
     */
    protected $pattern = '/^01(\.[0-9]{3}){2}\/[0-9]{3}-[0-9]{2}$/';

    /**
     * Retorna a mascara
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999.999/999-99';
    }
}