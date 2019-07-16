<?php

use Dane\JV\Contact;
use Dane\JV\SendHandler;
use Dane\JV\MainPage;
use Dane\JV\PageNotFound;
use Dane\JV\Success;

require_once '../vendor/autoload.php';

if (empty($_SERVER['PATH_INFO'])) {
    new MainPage();
} elseif ($_SERVER['PATH_INFO'] === '/contact') {
    new Contact();
} elseif ($_SERVER['PATH_INFO'] === '/sent') {
    new SendHandler();
} elseif ($_SERVER['PATH_INFO'] === '/success') {
    new Success();
} else {
    new PageNotFound();
}
