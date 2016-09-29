<?php

require "ConnectionFactory.php";

$factory = new ConnectionFactory();
$connection = $factory->getConnection();