<?php

use Dane\JV\Contact;
use Dane\JV\MainPage;
use Dane\JV\PageNotFound;

require_once '../vendor/autoload.php';

if (empty($_SERVER['PATH_INFO'])) {
    new MainPage();
} elseif ($_SERVER['PATH_INFO'] === '/contact') {
    new Contact();
} else {
    new PageNotFound();
}
