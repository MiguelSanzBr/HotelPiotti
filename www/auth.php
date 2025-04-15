<?php
require 'vendor/autoload.php';
require 'database/DatabaseConnection.php';
require 'models/user.php';

function auth() {
    if (isset($_COOKIE['remember_token'])) {
        $rememberToken = $_COOKIE['remember_token'];
        
        $user = User::where('remember_token', $rememberToken)->first();
        
        if ($user) {
            return $user;
        }
    }
    
    return null;
}