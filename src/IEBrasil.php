<?php

namespace Eguana\IEBrasil;

use Eguana\IEBrasil\Entities\AC;
use Eguana\IEBrasil\Entities\AL;
use Eguana\IEBrasil\Entities\AM;
use Eguana\IEBrasil\Entities\AP;
use Eguana\IEBrasil\Entities\BA;
use Eguana\IEBrasil\Entities\CE;
use Eguana\IEBrasil\Entities\DF;
use Eguana\IEBrasil\Entities\ES;
use Eguana\IEBrasil\Entities\GO;
use Eguana\IEBrasil\Entities\MA;
use Eguana\IEBrasil\Entities\MG;
use Eguana\IEBrasil\Entities\MS;
use Eguana\IEBrasil\Entities\MT;
use Eguana\IEBrasil\Entities\PA;
use Eguana\IEBrasil\Entities\PB;
use Eguana\IEBrasil\Entities\PE;
use Eguana\IEBrasil\Entities\PI;
use Eguana\IEBrasil\Entities\PR;
use Eguana\IEBrasil\Entities\RJ;
use Eguana\IEBrasil\Entities\RN;
use Eguana\IEBrasil\Entities\RO;
use Eguana\IEBrasil\Entities\RR;
use Eguana\IEBrasil\Entities\RS;
use Eguana\IEBrasil\Entities\SC;
use Eguana\IEBrasil\Entities\SE;
use Eguana\IEBrasil\Entities\SP;
use Eguana\IEBrasil\Entities\TO;

class IEBrasil
{
    /**
     * Retorna o IE informado formatado de acordo com o estado
     *
     * @param $ie
     * @param $state
     * @return string|string[]
     */
    public function format($ie, $state)
    {
        if ($this->isStateOfBrazil($state) && $stateClass = $this->getState($state)) {
            $ie = preg_replace('/[^0-9]/', '', $ie);

            $ie = $stateClass->normalizedValue($ie);
            $ie = $stateClass->format($ie);
        }

        return $ie;
    }
    
    /**
     * Retorna a masca do Estado informado
     *
     * @param $estado
     * @return mixed|string
     */
    public function getMask($estado)
    {
        $estado = strtoupper($estado);

        $stateClass = $this->getState($estado);

        return $stateClass->getMask();
    }

    private function isStateOfBrazil($state)
    {
        return in_array($state, config('iebrasil.estados'), true);
    }
    /**
     * @param $state
     * @return AC|AL|AM|AP|BA|CE|DF
     */
    private function getState($state)
    {
        switch ($state) {
            case 'AC':
                $stateClass = new AC();
                break;
            case 'AL':
                $stateClass = new  AL();
                break;
            case 'AM':
                $stateClass = new AM();
                break;
            case 'AP':
                $stateClass = new AP();
                break;
            case 'BA':
                $stateClass = new BA();
                break;
            case 'CE':
                $stateClass = new CE();
                break;
            case 'DF':
                $stateClass = new DF();
                break;
            case 'ES':
                $stateClass = new ES();
                break;
            case 'GO':
                $stateClass = new GO();
                break;
            case 'MA':
                $stateClass = new MA();
                break;
            case 'MG':
                $stateClass = new MG();
                break;
            case 'MS':
                $stateClass = new MS();
                break;
            case 'MT':
                $stateClass = new MT();
                break;
            case 'PA':
                $stateClass = new PA();
                break;
            case 'PB':
                $stateClass = new PB();
                break;
            case 'PE':
                $stateClass = new PE();
                break;
            case 'PI':
                $stateClass = new PI();
                break;
            case 'PR':
                $stateClass = new PR();
                break;
            case 'RJ':
                $stateClass = new RJ();
                break;
            case 'RN':
                $stateClass = new RN();
                break;
            case 'RO':
                $stateClass = new RO();
                break;
            case 'RR':
                $stateClass = new RR();
                break;
            case 'RS':
                $stateClass = new RS();
                break;
            case 'SC':
                $stateClass = new SC();
                break;
            case 'SE':
                $stateClass = new SE();
                break;
            case 'SP':
                $stateClass = new SP();
                break;
            case 'TO':
                $stateClass = new TO();
                break;
            default :
                $stateClass = null;
        }

        return $stateClass;
    }
}