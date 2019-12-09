<?php


namespace Eguana\IEBrasil\Entities;


use Eguana\IEBrasil\Base\AbstractFormatter;

class SP extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 12;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{3}(\.[0-9]{3}){3}$/';

    /**
     * Retorna a mascara da inscrição estadual estado da São Paulo
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '999.999.999.999';
    }
}