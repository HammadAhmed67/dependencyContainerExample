
Running this code, you should see the text “connected” on your screen. This means PHP-DI successfully injects the Database dependency into the User object and instantiates it.

With this simple example, you can start writing PHP code with a simple DI Container. 
Remember to add each dependency to the config.php and simply add your needed dependencies to the 
constructor of each class where you have dependencies, and PHP-DI will handle the rest using autowiring.
 In order to make autowiring work, you have to create objects by NOT using the new keyword. Instead, 
 use $myObjWithDependencies = $container->get(myObjWithDependencies::class); and PHP-DI will know to 
 check the constructor of myObjWithDependencies and inject all needed dependencies automatically.