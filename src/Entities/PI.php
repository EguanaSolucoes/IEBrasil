<?php


namespace Eguana\IEBrasil\Entities;


use Eguana\IEBrasil\Base\AbstractFormatter;

class PI extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{8}-[0-9]$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Piaui
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99999999-9';
    }
}