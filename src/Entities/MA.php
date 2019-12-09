<?php


namespace Eguana\IEBrasil\Entities;


use Eguana\IEBrasil\Base\AbstractFormatter;

class MA extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^12\.[0-9]{6}-[0-9]$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Maranhão
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999999-9';
    }
}