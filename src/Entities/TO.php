<?php


namespace Eguana\IEBrasil\Entities;


use Eguana\IEBrasil\Base\AbstractFormatter;

class TO extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{2}(\.[0-9]{3}){2}-[0-9]$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Tocantins
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999.999-9';
    }
}