<?php 
    use Phroute\Phroute\RouteCollector;

    $router = new RouteCollector();
    
    $router->get($route, $handler);    # match only get requests
    $router->post($route, $handler);   # match only post requests
    $router->delete($route, $handler); # match only delete requests
    $router->any($route, $handler);    # match any request method
?>