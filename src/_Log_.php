<?php

/**
 * _Chain_ ©2015 Julien <youlweb@hotmail.com>
 * Refer to the LICENSE file for the full copyright and license information.
 * @package chain/math
 */

namespace _Chain_\_Math_;

use _Chain_\_AbsLink_;
use _Chain_\I_O;
use _Chain_\Type;

/**
 * _Log_
 *
 * @author Julien <youlweb@hotmail.com>
 */
class _Log_ extends _AbsLink_
{
    /**
     * @var float
     */
    private $_base;

    /**
     * @param float $base Log base.
     * {@link http://php.net/manual/en/function.log.php Defaults to 'e'}.
     */
    public function __construct($base = M_E)
    {
        $this->_base = $base;
    }

    /**
     * Logarithm function.
     *
     * I/O contract
     * ------------
     * <pre>
     * I    number
     * O    number
     * X    no
     * </pre>
     *
     * @param I_O $IO
     * @return I_O
     */
    public function EXE(I_O $IO)
    {
        return $IO->_O(
            log($IO->I_(Type::NUMBER), $this->_base)
        );
    }
}