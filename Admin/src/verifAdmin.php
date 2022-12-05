<?php

if(!isset($_SESSION['admin'])){
    header('Location: /ProjetDBD/Admin/');
}