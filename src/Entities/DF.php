<?php


namespace Eguana\IEBrasil\Entities;

use Eguana\IEBrasil\Base\AbstractFormatter;

/**
 * Class DF
 * @package Eguana\IEBrasil\Entities
 * @author  wesley@eguana.com.br
 */
class DF extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 13;

    /**
     * @var string
     */
    protected $pattern = '/^07(\.[0-9]{3}){3}-[0-9]{2}$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Distrito Federal
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999.999.999-99';
    }
}