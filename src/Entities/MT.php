<?php


namespace Eguana\IEBrasil\Entities;


use Eguana\IEBrasil\Base\AbstractFormatter;

class MT extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 11;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{4}(\.[0-9]{3}){2}-[0-9]{2}$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Mato Grosso
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '9999.999.999-9';
    }
}