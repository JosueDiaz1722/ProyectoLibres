<?php

class __Mustache_d1ba964909783eca9bc6cff2abaf3bae extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'total' section
        $value = $context->find('total');
        $buffer .= $this->sectionC5be6e301c67c0401807e67e8633b42f($context, $indent, $value);

        return $buffer;
    }

    private function section35cd624b4bdec5f9861727e6287d8a4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' queueheading, search, {{total}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' queueheading, search, ';
                $value = $this->resolveValue($context->find('total'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section678d9796b8e58c93588effd6bffbd7b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' context, role ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' context, role ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1411d52e0214b80908116a96905d8acb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' searcharea, search ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' searcharea, search ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section664f62332772dbc21a7a324f47ad636e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' time ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' time ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE58136bf0df3aea3e9e41b8b5a5c7f91(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' progress, search ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' progress, search ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0efd0b442e824fc89855c2253264491(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' priority, search ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' priority, search ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section697ae1ca216f4ab93b60b2dd94219f3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{areaname}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('areaname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c16870499a70829fcce540bcae4c23e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedatetimeshort, core_langconfig ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' strftimedatetimeshort, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f015d15e6577f2aba219a177fe48eb8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{timerequested}}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('timerequested'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3c16870499a70829fcce540bcae4c23e($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF430944882d6b7865343cbe7ea3f5ee6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{partialareaname}}:
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('partialareaname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ':
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section180356500e6bf3970a36657df7646f04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{partialtime}}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('partialtime'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= ', ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section3c16870499a70829fcce540bcae4c23e($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD31d26c84de004c485c83677930e66fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#userdate}} {{partialtime}}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} {{/userdate}}
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section180356500e6bf3970a36657df7646f04($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1751328a988613e3406e03e808b72832(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{priorityname}}
                        ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('priorityname'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63cc1fca103cbb24e273cadae6c1fc0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <tr>
                    <td>
                        {{{contextlink}}}
                    </td>
                    <td>
                        {{#searcharea}} {{areaname}} {{/searcharea}}
                    </td>
                    <td>{{#userdate}} {{timerequested}}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} {{/userdate}}</td>
                    <td>
                        {{#partialarea}}
                            {{partialareaname}}:
                        {{/partialarea}}
                        {{#partialtime}}
                            {{#userdate}} {{partialtime}}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} {{/userdate}}
                        {{/partialtime}}
                    </td>
                    <td>
                        {{#priorityname}}
                            {{priorityname}}
                        {{/priorityname}}
                        {{^priorityname}}
                            {{indexpriority}}
                        {{/priorityname}}
                    </td>
                </tr>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <tr>
';
                $buffer .= $indent . '                    <td>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('contextlink'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                    <td>
';
                $buffer .= $indent . '                        ';
                // 'searcharea' section
                $value = $context->find('searcharea');
                $buffer .= $this->section697ae1ca216f4ab93b60b2dd94219f3f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                    <td>';
                // 'userdate' section
                $value = $context->find('userdate');
                $buffer .= $this->section5f015d15e6577f2aba219a177fe48eb8($context, $indent, $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                    <td>
';
                // 'partialarea' section
                $value = $context->find('partialarea');
                $buffer .= $this->sectionF430944882d6b7865343cbe7ea3f5ee6($context, $indent, $value);
                // 'partialtime' section
                $value = $context->find('partialtime');
                $buffer .= $this->sectionD31d26c84de004c485c83677930e66fe($context, $indent, $value);
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                    <td>
';
                // 'priorityname' section
                $value = $context->find('priorityname');
                $buffer .= $this->section1751328a988613e3406e03e808b72832($context, $indent, $value);
                // 'priorityname' inverted section
                $value = $context->find('priorityname');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            ';
                    $value = $this->resolveValue($context->find('indexpriority'), $context);
                    $buffer .= call_user_func($this->mustache->getEscape(), $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc4590c2dce629449e8c7d7579fe1694(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <tr>
                    <td colspan="5">...</td>
                </tr>
            ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <tr>
';
                $buffer .= $indent . '                    <td colspan="5">...</td>
';
                $buffer .= $indent . '                </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5be6e301c67c0401807e67e8633b42f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <h3>
            {{#str}} queueheading, search, {{total}} {{/str}}
        </h3>
        <table class="generaltable">
            <thead>
            <tr>
                <th scope="col">{{#str}} context, role {{/str}}</th>
                <th scope="col">{{#str}} searcharea, search {{/str}}</th>
                <th scope="col">{{#str}} time {{/str}}</th>
                <th scope="col">{{#str}} progress, search {{/str}}</th>
                <th scope="col">{{#str}} priority, search {{/str}}</th>
            </tr>
            </thead>
            <tbody>


            {{#topten}}
                <tr>
                    <td>
                        {{{contextlink}}}
                    </td>
                    <td>
                        {{#searcharea}} {{areaname}} {{/searcharea}}
                    </td>
                    <td>{{#userdate}} {{timerequested}}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} {{/userdate}}</td>
                    <td>
                        {{#partialarea}}
                            {{partialareaname}}:
                        {{/partialarea}}
                        {{#partialtime}}
                            {{#userdate}} {{partialtime}}, {{#str}} strftimedatetimeshort, core_langconfig {{/str}} {{/userdate}}
                        {{/partialtime}}
                    </td>
                    <td>
                        {{#priorityname}}
                            {{priorityname}}
                        {{/priorityname}}
                        {{^priorityname}}
                            {{indexpriority}}
                        {{/priorityname}}
                    </td>
                </tr>
            {{/topten}}

            {{#ellipsis}}
                <tr>
                    <td colspan="5">...</td>
                </tr>
            {{/ellipsis}}
            </tbody>
        </table>
    </div>
';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        <h3>
';
                $buffer .= $indent . '            ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section35cd624b4bdec5f9861727e6287d8a4b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </h3>
';
                $buffer .= $indent . '        <table class="generaltable">
';
                $buffer .= $indent . '            <thead>
';
                $buffer .= $indent . '            <tr>
';
                $buffer .= $indent . '                <th scope="col">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section678d9796b8e58c93588effd6bffbd7b2($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th scope="col">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1411d52e0214b80908116a96905d8acb($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th scope="col">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section664f62332772dbc21a7a324f47ad636e($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th scope="col">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionE58136bf0df3aea3e9e41b8b5a5c7f91($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th scope="col">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionA0efd0b442e824fc89855c2253264491($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '            </tr>
';
                $buffer .= $indent . '            </thead>
';
                $buffer .= $indent . '            <tbody>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                // 'topten' section
                $value = $context->find('topten');
                $buffer .= $this->section63cc1fca103cbb24e273cadae6c1fc0f($context, $indent, $value);
                $buffer .= $indent . '
';
                // 'ellipsis' section
                $value = $context->find('ellipsis');
                $buffer .= $this->sectionCc4590c2dce629449e8c7d7579fe1694($context, $indent, $value);
                $buffer .= $indent . '            </tbody>
';
                $buffer .= $indent . '        </table>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
