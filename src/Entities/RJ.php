<?php


namespace Eguana\IEBrasil\Entities;


use Eguana\IEBrasil\Base\AbstractFormatter;

class RJ extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 8;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{2}(\.[0-9]{3}){2}$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Rio de Janeiro
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999.999';
    }
}