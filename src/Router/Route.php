<?php

namespace Router;

use Bramus\Router\Router;

class Route{
    public static $Router = null;
    //initailse the router
    private static function initRoute() {
        $router = new Router();
        self::$Router = self::$Router==null ? $router : self::$Router;
    }
    //get method
    public static function get(string $path, $colback_method){
        self::initRoute();
        self::$Router->get($path, $colback_method);
    }
    //post method
    public static function post(string $path, $colback_method){
        self::initRoute();
        self::$Router->post($path, $colback_method);
    }
    //patch method
    public static function patch(string $path, $colback_method){
        self::initRoute();
        self::$Router->patch($path, $colback_method);
    }
    //put method
    public static function put(string $path, $colback_method){
        self::initRoute();
        self::$Router->put($path, $colback_method);
    }
    //delete method
    public static function delete(string $path, $colback_method){
        self::initRoute();
        self::$Router->delete($path, $colback_method);
    }
    //options method
    public static function options(string $path, $colback_method){
        self::initRoute();
        self::$Router->options($path, $colback_method);
    }
    //all method
    public static function all(string $path, $colback_method){
        self::initRoute();
        self::$Router->all($path, $colback_method);
    }
    //match method
    public static function match(string $method, string $pattern, $colback_method){
        self::initRoute();
        self::$Router->match($method, $pattern, $colback_method);
    }

    //mount method
    public static function group(string $path, $colback_method){
       self::initRoute();
       self::$Router->mount($path, $colback_method);
    }

    //set namespace method
    public static function setNamespace(string $base_namespace){
       self::initRoute();
       self::$Router->setNamespace($base_namespace);
    }
    //set namespace method
    public static function setBasePath(string $base_path){
       self::initRoute();
       self::$Router->setBasePath($base_path);
    }
    
    //set 404 method
    public static function set404(string $path, $callback = null){
        self::initRoute();
        if($callback == null && is_string($path)){
            self::$Router->set404($path);
        }else{
            self::$Router->set404($path, $callback);
        }
    }
    //trigger 404 method
    public static function trigger404(){
        self::initRoute();
        self::$Router->trigger404();
        
    }
    //before route middleware method
    public static function before(string $method, string $path, $callback){
        self::initRoute();
        self::$Router->before($method, $path, $callback);
    }


    //Run the router
    public static function run($callback = null){
        if($callback){
            self::$Router->run($callback);
        }else{
            self::$Router->run();
        }
    }
}