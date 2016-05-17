<?php


function inputHas($key)
{
    return isset($_REQUEST[$key]);
}

// if (inputHas('name')) {
//     echo $REQUEST['name'];
// }

function inputGet($key)
{
    return inputHas($key) ? $_REQUEST[$key] : null;
}

// if (inputHas('name')) {
//     echo inputGet('name');
// }

function escape($input)
{
    return strip_tags(htmlspecialchars($input));
}















