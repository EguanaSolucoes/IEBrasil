<?php

namespace Eguana\IEBrasil\Base;


abstract class AbstractFormatter
{
    /**
     * @var string
     */
    protected $pattern = '';

    /**
     * @var int
     */
    protected $ieSize;

    /**
     * Retorna o valor passado já formatado.
     *
     * @param $value
     * @return string|string[]|null
     */
    public function format($value)
    {
        if (!$this->canBeFormatted($value)) {
            return null;
        }

        return $this->formatter($this->getMask(), $value);
    }

    /**
     * Verifica que o valor informado pode ser formatado
     *
     * @param $value
     * @return bool
     */
    public function canBeFormatted($value)
    {
        $value = preg_replace('/[^0-9]/', '', $value);
        $mask = preg_replace('/[^0-9]/', '', $this->getMask());
        return (is_string($value) && strlen($value) === strlen($mask));
    }

    /**
     * Realiza a formatação de acordo com a mascara e valor informado.
     *
     * @param $mask
     * @param $value
     * @return string|string[]
     */
    protected function formatter($mask, $value)
    {
        if (($size = strlen(preg_replace('/[^0-9]/', '', $mask))) !== strlen($value)) {
            $value = str_pad($value, $size, '0', STR_PAD_RIGHT);
        } else {
            $value = str_pad($value, $size, '0', STR_PAD_LEFT);
        }

        for ($i = 0, $j = 0, $l = strlen($mask); $i < $l; $i++) {
            if(is_numeric($mask[$i])) {
                $mask = substr_replace($mask, $value[$j++], $i, 1);
            }
        }

        return $mask;
    }

    /**
     * Retorna a mascara que será utilizada para formatar o valor.
     *
     * @return mixed
     */
    abstract public function getMask();

    /**
     * Retorna o valor normatizado de acordo com a quantidade de carcteres necessário
     *
     * @param $value
     * @return mixed
     **/
    public function normalizedValue($value)
    {
        return str_pad($value, $this->ieSize, '0', STR_PAD_LEFT);
    }

    /**
     * Verifica se o valor informado está formatado
     * @param $value
     * @return bool
     */
    public function isFormatted($value)
    {
        return @preg_match($this->pattern, $value) === 1;
    }

    /**
     * Retira a formatação
     *
     * @param $value
     * @return string|string[]|null
     */
    public function unformat($value)
    {
        if(!$this->canBeFormatted($value))
            return NULL;

        $mask = preg_replace('/[^0-9]/', '', $this->getMask());

        return $this->formatter($mask, $value);
    }
}