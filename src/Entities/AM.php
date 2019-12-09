<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class AM
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class AM extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/[0-9]{2}(\.[0-9]{3}){2}-[0-9]/';

    /**
     * Retorna a mascara
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999.999-9';
    }
}