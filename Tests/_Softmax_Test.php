<?php

/**
 * _Chain_ ©2015 Julien <youlweb@hotmail.com>
 * Refer to the LICENSE file for the full copyright and license information.
 * @package chain/math
 */

namespace _Chain_\_Math_;

use _Chain_\Type;

/**
 * @author Julien <youlweb@hotmail.com>
 */
class _Log_Test extends \PHPUnit_Framework_TestCase
{
    public function testEXE()
    {
        $IO = $this->getMock('_Chain_\I_O');
        $IO->expects($this->once())->method('I_')->with(Type::NUMBER)
            ->willReturn(5);
        $IO->expects($this->once())->method('_O')->with(log(5));
        $softmax = new _Log_();
        $softmax->EXE($IO);
    }

    public function testEXEWithBase()
    {
        $IO = $this->getMock('_Chain_\I_O');
        $IO->expects($this->once())->method('I_')->with(Type::NUMBER)
            ->willReturn(5);
        $IO->expects($this->once())->method('_O')->with(log(5, 10));
        $softmax = new _Log_(10);
        $softmax->EXE($IO);
    }
}
