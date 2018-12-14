<?php

Abstract class User
{
    protected $name = null;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function hasReadPermission()
    {
        return true;
    }

    public function hasModifyPermission()
    {
        return false;
    }

    public function hasDeletePermission()
    {
        return false;
    }

    public function wantsFlashInterface()
    {
        return true;
    }


}