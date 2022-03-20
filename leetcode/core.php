<?php

function dd(...$var)
{
    foreach ($var as $v) {
        echo "<pre>";
        print_r($v);
        echo "</pre>";
    }
    exit();
}

