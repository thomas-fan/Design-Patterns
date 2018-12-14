<?php
require_once './User.php';

class AdminUser extends User
{
    public function hasModifyPermission()
    {
        return true;
    }

    public function hasDeletePermission()
    {
        return true;
    }

    public function wantsFlashInterface()
    {
        return false;
    }
}