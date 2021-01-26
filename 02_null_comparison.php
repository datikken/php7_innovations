<?php

$val = $user_val ?? 'replace';

//Same as:
if(isset($user_val))
{
    $val = $user_val;
} else {
    $val = 'replace';
}

echo $page_title ?? 'Page title';

$username = $_POST['username'] ?? 'guest';

$val = $a ?? $b ?? $c ?? 'replace';