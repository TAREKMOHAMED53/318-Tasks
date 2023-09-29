<?php
require_once "../core/helpers.php";
session_start();
session_unset();
session_destroy();
redirectTo("../index.php");
die();