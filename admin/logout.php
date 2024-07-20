<?php

session_start();
session_unset();
session_destroy();

require '../inc/app.php';

redirect('../');
