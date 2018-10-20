<?php

namespace App\Models;


class Logins
{
    /**
     * @param $a
     * @param $b
     * @return number
     */
    public function sum($a, $b)
    {
        return array_sum(func_get_args());
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function logCliente($a)
    {
        return $a;
    }

    /**
     * @param $a
     * @param $b
     * @return mixed
     */
    public function logAdmi($a)
    {
        return $a;
    }

    /**
     * @param $a
     * @param $b
     * @return float
     */
    public function logSin($a)
    {
        return $a;
    }

}