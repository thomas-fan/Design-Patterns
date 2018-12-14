<?php
require_once './Factory.php';

function boolToStr(bool $b): string
{
    if ($b == true) {
        return "Yes" . PHP_EOL;
    } else {
        return "No" . PHP_EOL;
    }
}

function displayPermissions(User $obj): void
{
    print $obj->getName() . "'s permissions:'" . PHP_EOL;
    print "Read: " . boolToStr($obj->hasReadPermission());
    print "Modify: " . boolToStr($obj->hasModifyPermission());
    print "Delete: " . boolToStr($obj->hasDeletePermission());
}

function displayRequirements(User $obj): void
{
    if ($obj->wantsFlashInterface()) {
        print $obj->getName() . " requires Flash" . PHP_EOL;
    }
}

$logins = ["zhangfan", "thomas", "tom"];

foreach ($logins as $login) {
    displayPermissions(Factory::create($login));
    displayRequirements(Factory::create($login));
}