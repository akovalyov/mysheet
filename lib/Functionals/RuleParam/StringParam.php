<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MySheet\Functionals\RuleParam;

use MySheet\Essentials\RuleParam;

/**
 * Description of MetricParam
 *
 * @author dobby007
 */
class StringParam extends RuleParam {
    protected $text;
    
    public function __construct($text) {
        $this->setText($text);
    }

    
    public function getText() {
        return $this->text;
    }
    
    public function getQuotedText() {
        return '"' . str_replace('"', '\"', $this->text) . '"';
    }

    public function setText($text) {
        $this->text = $text;
    }

    public function toRealCss() {
        return $this->getQuotedText();
    }
    
    public function __toString() {
        return $this->toRealCss();
    }
        
    public static function parse(&$string) {
        //TODO: consider that the string might have escaped double qoutes
        if (preg_match('/^"(.*)"/', $string, $matches)) {
            parent::trimStringBy($string, strlen($matches[0]));
            return new self($matches[1]);
        }
        return false;
    }
}