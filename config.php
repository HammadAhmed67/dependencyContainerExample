<?php 

require_once __DIR__.'/Database.php';
require_once __DIR__.'/User.php';

use Database\Database;
use User\User;
use function DI\create;

return [
  'database' => create(Database::class),
  'user' => create(User::class)
];

?>