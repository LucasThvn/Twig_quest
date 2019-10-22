<?php
require_once '../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/View');

$lucas = "lucas";

$persons = [
    ['name' => 'riri', 'age' => 10],
    ['name' => 'fifi', 'age' => 20],
    ['name' => 'loulou', 'age' => 30],
];

$twig = new Twig\Environment($loader);

echo $twig->render('person.html.twig', [
    'name' => $lucas,
    'persons' => $persons,
]);