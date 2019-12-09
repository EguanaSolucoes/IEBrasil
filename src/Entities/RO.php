<?php


namespace Eguana\IEBrasil\Entities;


use Eguana\IEBrasil\Base\AbstractFormatter;

class RO extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 14;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{13}-[0-9]$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Rondonia
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '9999999999999-9';
    }
}