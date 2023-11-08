<?php

use EligerBackend\Model\Classes\Connectors\DBConnector;
use EligerBackend\Model\Classes\Users\User;

if (isset($_POST["code"])) {
    $user = new User();
    echo $user->sendOTP(DBConnector::getConnection(), $_POST["code"]);
} else {
    echo 500;
}
