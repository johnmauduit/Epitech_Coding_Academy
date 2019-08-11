<?php

require 'vendor/autoload.php';

use Core\Database;

var_dump(Database::getInstance()->getConnection());