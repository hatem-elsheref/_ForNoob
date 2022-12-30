<?php

namespace Framework;
session_start();

require_once '../Framework/bootstrap.php';

$application = new Application($configurations);
echo $application->start();
