<?php
/**
 * Created by PhpStorm.
 * User: zacharyrosenthal
 * Date: 1/19/16
 * Time: 4:33 PM
 */
public function quadratic($a, $b, $c) {

    $radical = $b*$b - 4*$a*$c;

    if ($radical < 0) {

        return null;

    }

    $r1 = (-$b + $radical) / (2*$a);

    $r2 = (-$b - $radical) / (2*$a);

    return [$r1,$r2];

}