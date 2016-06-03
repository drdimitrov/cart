<?php

namespace Cart;

use DI\ContainerBuilder;
use DI\Bridge\Slim\App as DIBridge;

class App extends DIBridge{
    
    protected function configureContainer(ContainerBuilder $builder){
        
        $builder->addDefinitions([
            'settings.displayErrorDetails' => TRUE
        ]);
        
        $builder->addDefinitions(__DIR__.'/container.php');
    }
    
    
}
