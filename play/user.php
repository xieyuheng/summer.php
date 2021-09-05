<?php

class User
{
    public function profile()
    {
        return "hi";
    }
}

$user = new User();

echo $user->profile();
