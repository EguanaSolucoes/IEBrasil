<?php

/**
 * Class IEBrasilTest
 */
class IEBrasilTest extends TestCase
{
    /**
     * Test format IE of state RN
     */
    public function testFormat()
    {
        $state = 'RN';
        $ie = '20449856-2';

        $ieFormatted = \Eguana\IEBrasil\Facades\IEBrasil::format($ie, $state);

        $this->assertEquals('20.449.856-2', $ieFormatted);
    }

    /**
     * Test return Mask of State RJ
     */
    public function testGetMask()
    {
        $state = 'RJ';

        $getMask = \Eguana\IEBrasil\Facades\IEBrasil::getMask($state);

        $this->assertEquals('99.999.999', $getMask);
    }
}