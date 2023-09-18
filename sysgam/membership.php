<?php

function registerUser($username, $email, $password)
{
}
function usernameCheck($username)
{
    if (strlen($username) >= 6) {
        $bol = preg_match('/^[\w]+/', $username);
        return $bol;
    } else {
        return false;
    }
}
$bol = usernameCheck("22");
echo $bol ? "True" : "F";
function emailCheck($email)
{
    if (strlen($email) >= 8) {
        $bol = preg_match('/^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,4}+$/', $email);
        return $bol;
    } else {
        return false;
    }
}
$bol = emailCheck("kuro@gmail.com");
echo $bol ? "True" : "False";
function passwordCheck($password)
{
    if (strlen($password) >= 6) {
        $bol = preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*(_|[^\w]))(?=.*[\d])/', $password);
        return $bol;
    } else {
        return false;
    }
}
$bol = passwordCheck("A3sdrBc12of_");
echo $bol ? "True" : "False";
