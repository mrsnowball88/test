<?php
use Core\Route;
return [
    new Route('/', 'Page', 'Home'),
    new Route('/contacts/', 'Page', 'Contacts'),
    new Route('/contacts', 'Page', 'Contacts'),
    new Route('/form/', 'Form', 'Feedback'),
];