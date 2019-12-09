<?php


namespace Eguana\IEBrasil\Entities;


use Eguana\IEBrasil\Base\AbstractFormatter;

class PB extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 9;

    /**
     * @var string
     */
    protected $pattern = '/^16(\.[0-9]{3}){2}-[0-9]$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Paraiba
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '99.999.999-9';
    }
}