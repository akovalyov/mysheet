<?php

/*
 * Copyright 2014 dobby007 (Alexander Gilevich, alegil91@gmail.com).
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

namespace MSSLib\Essentials\ExpressionTree;
use MSSLib\Essentials\VariableScope;
use MSSLib\Essentials\MssClass;

/**
 *
 * @author dobby007 (Alexander Gilevich, alegil91@gmail.com)
 */
interface ICalculatedNode {
    /**
     * 
     * @param VariableScope $vars
     * @return MssClass Instance of MssClass that is the result of calculation
     */
    public function getCalculatedValue(VariableScope $vars = null);
}
