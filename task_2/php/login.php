<?php
/**
 * Created by PhpStorm.
 * User: nikhil
 * Date: 11/3/14
 * Time: 6:39 PM
 */
//echo 'WELCOME TO PHP';


if(isset($_POST['user'])=="nikhil" && isset($_POST['pass'])=='nikhil')
{
    echo 'WELCOME TO PHP';
}
else
{
    echo "USER NAME AND PASSWORD IS INCORRECT...";
}
?>
