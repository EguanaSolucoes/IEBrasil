<?php


namespace Eguana\IEBrasil\Entities;


use Eguana\IEBrasil\Base\AbstractFormatter;

class PE extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{7}-[0-9]{2}$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Pernambuco
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '9999999-99';
    }
}