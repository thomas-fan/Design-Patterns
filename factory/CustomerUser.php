<?php
require_once './User.php';

class CustomerUser extends User
{
    public function hasModifyPermission()
    {
        return true;
    }
}