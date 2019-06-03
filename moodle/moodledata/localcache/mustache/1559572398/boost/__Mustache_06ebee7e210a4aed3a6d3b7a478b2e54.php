<?php

class __Mustache_06ebee7e210a4aed3a6d3b7a478b2e54 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'posts' section
        $value = $context->find('posts');
        $buffer .= $this->section820d57a79d2580bb1d5a0990a1fc35b2($context, $indent, $value);

        return $buffer;
    }

    private function sectionD7a5a1c6d1d09c3ba75453c12ad17e87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> mod_forum/forum_discussion_threaded_post }}
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
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_threaded_post')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section820d57a79d2580bb1d5a0990a1fc35b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< mod_forum/forum_discussion_post }}
        {{$replies}}
            <!-- The forumthread class is only added for behat -->
            <div class="indent forumthread post-replies">
                {{#replies}}
                    {{> mod_forum/forum_discussion_threaded_post }}
                {{/replies}}
            </div>
        {{/replies}}
    {{/ mod_forum/forum_discussion_post }}
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
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
                    $context->pushBlockContext(array(
                        'replies' => array($this, 'block79b0b11bf6a8971afad5dd141d396ecb'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block79b0b11bf6a8971afad5dd141d396ecb($context)
    {
        $indent = $buffer = '';
        $buffer .= '            <!-- The forumthread class is only added for behat -->
';
        $buffer .= $indent . '            <div class="indent forumthread post-replies">
';
        // 'replies' section
        $value = $context->find('replies');
        $buffer .= $this->sectionD7a5a1c6d1d09c3ba75453c12ad17e87($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
    
        return $buffer;
    }
}
