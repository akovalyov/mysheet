<?php

/*
 * Copyright 2015 dobby007.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace MSSLib\Events;

use MSSLib\Essentials\VariableScope;

/**
 * Description of EventData
 *
 * @author dobby007
 */
abstract class EventData
{
    protected $_vars;
    protected $_handled = false;
    
    /**
     * 
     * @return VariableScope
     */
    public function getVars() {
        return $this->_vars;
    }
    
    public function handled($handled = null) {
        if ($handled === null) {
            return $this->_handled;
        }
        $this->_handled = $handled;
    }


}
