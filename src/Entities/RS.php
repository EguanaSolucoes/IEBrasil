<?php


namespace Eguana\IEBrasil\Entities;


use Eguana\IEBrasil\Base\AbstractFormatter;

class RS extends AbstractFormatter
{
    /**
     * @var int
     */
    protected $ieSize = 10;

    /**
     * @var string
     */
    protected $pattern = '/^[0-9]{3}\/[0-9]{7}$/';

    /**
     * Retorna a mascara da inscrição estadual estado da Rio Grande do Sul
     *
     * @return mixed|string
     */
    public function getMask()
    {
        return '999/9999999';
    }
}