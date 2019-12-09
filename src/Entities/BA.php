<?php


namespace Eguana\IEBrasil\Entities;


use Eguana\IEBrasil\Base\AbstractFormatter;

class BA extends AbstractFormatter
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
     * Retorna a mascara da inscrição estadual estado da Bahia
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '999.999.999';
    }
}