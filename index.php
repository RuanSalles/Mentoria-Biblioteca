<?php
declare(strict_types=1);
require __DIR__ . "/vendor/autoload.php";

use App\Entity\Address;
use App\Entity\User;

$user = new User('ruansalles', 'contatoruansales@gmail.com', 'auhsuahsuhasuh', 'Ruan', '0817261623',
new Address('Rua Jequitibá', '876', 'RJ', 'Casa C', '87654-182')
);

echo $user;