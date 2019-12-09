<?php

namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class AL
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class AL extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/24(\.[0-9]{7}/';

    /**
     * Retorna a mascara;
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '999999999';
    }
}