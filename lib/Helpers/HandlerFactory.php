<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MySheet\Helpers;

/**
 * Description of HandlerFactory
 *
 * @author dobby007
 */
class HandlerFactory {
    private $map = array();
    
    public function triggerEvent($class, $eventName, $arguments = null, &$handled = null) {
        $handled = false;
//        var_dump('asad', $class, $name);
        if (isset($this->map[$class][$eventName])) {
            $arguments = array_merge([&$handled], is_array($arguments) ? $arguments : []);
//            var_dump($arguments);
            foreach ($this->map[$class][$eventName] as $callback) {
                $result = call_user_func_array($callback, $arguments);
                if ($handled !== false) {
                    return $result;
                }
            }
        }
        
        return false;
    }
    
    public function registerHandler($class, $eventName, callable $callback) {
        if (!isset($this->map[$class])) {
            $this->map[$class] = [];
        }
        
        if (!isset($this->map[$class][$eventName])) {
            $this->map[$class][$eventName] = [];
        }
        
        $this->map[$class][$eventName][] = $callback;
//        var_dump($this->map);
        return $this;
    }
}
