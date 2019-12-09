<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class SC
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class SC extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{3}(\.[0-9]{3}){2}$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Santa Catarina
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '999.999.999';
    }
}