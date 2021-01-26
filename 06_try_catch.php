<?php

function hello_from($user)
{
    if(is_null($user))
    {
        throw new Exception('User is NULL');
    }

    return $user->say_hello();
}

try {
    echo hello_from(NULL);
} catch(Exception $e) {
    echo "Rescued from: {$e->getMessage()}";
}