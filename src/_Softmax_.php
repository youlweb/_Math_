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
 * Represents the categorical probability distribution of a vector.
 *
 * @author Julien <youlweb@hotmail.com>
 */
class _Softmax_ extends _AbsLink_
{
    /**
     * Represents the categorical probability distribution of a vector.
     *
     * I/O contract
     * ------------
     * <pre>
     * I    multi       Array of numbers.
     * O    multi       Probability distribution.
     * X    no
     * </pre>
     *
     * @param I_O $IO
     * @return I_O
     */
    public function EXE(I_O $IO)
    {
        $sum = 0;
        $values = $IO->I_(Type::MULTI);
        foreach ($values as &$value) {
            $value = exp($value);
            $sum += $value;
        }
        return $IO->_O(
            array_map(function ($value) use ($sum) {
                return $value / $sum;
            }, $values)
        );
    }
}