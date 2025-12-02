<?php

require_once 'vendor/autoload.php';

if(isset($_GET['page'])) {
    if($_GET['page'] == 'home') {
        include 'pages/index.php';
    }
    else if($_GET['page'] == 'about') {
        include 'pages/about.php';
    } 
    else if($_GET['page'] == 'products') {
        include 'pages/products.php';
    } 
    else if($_GET['page'] == 'login') {
        include 'pages/login.php';
    } 
    else if($_GET['page'] == 'signup') {
        include 'pages/signup.php';
    } 
    else if($_GET['page'] == 'contact') {
        include 'pages/contact.php';
    } 
    else if($_GET['page'] == 'cart') {
        include 'pages/cart.php';
    } 
}
