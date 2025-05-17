<?php

function theme($path)
{
    $theme = config('app.theme');
    return url("themes/{$theme}/{$path}");
}
