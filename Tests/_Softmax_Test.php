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
class _Softmax_Test extends \PHPUnit_Framework_TestCase
{
    public function testEXE()
    {
        $IO = $this->getMock('_Chain_\I_O');
        $IO->expects($this->once())->method('I_')->with(Type::MULTI)
            ->willReturn([2, 2]);
        $IO->expects($this->once())->method('_O')->with([.5, .5]);
        $softmax = new _Softmax_();
        $softmax->EXE($IO);
    }
}
