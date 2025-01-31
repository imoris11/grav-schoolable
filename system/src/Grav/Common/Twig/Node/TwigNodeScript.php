<?php

/**
 * @package    Grav\Common\Twig
 *
 * @copyright  Copyright (C) 2015 - 2019 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common\Twig\Node;

use Twig\Compiler;
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\Node;
use Twig\Node\NodeCaptureInterface;

class TwigNodeScript extends Node implements NodeCaptureInterface
{
    protected $tagName = 'script';

    /**
     * TwigNodeScript constructor.
     * @param Node|null $body
     * @param AbstractExpression|null $file
     * @param AbstractExpression|null $group
     * @param AbstractExpression|null $priority
     * @param AbstractExpression|null $attributes
     * @param int $lineno
     * @param string|null $tag
     */
    public function __construct(
        ?Node $body,
        ?AbstractExpression $file,
        ?AbstractExpression $group,
        ?AbstractExpression $priority,
        ?AbstractExpression $attributes,
        $lineno = 0,
        $tag = null
    )
    {
        $nodes = ['body' => $body, 'file' => $file, 'group' => $group, 'priority' => $priority, 'attributes' => $attributes];
        $nodes = array_filter($nodes);

        parent::__construct($nodes, [], $lineno, $tag);
    }
    /**
     * Compiles the node to PHP.
     *
     * @param Compiler $compiler A Twig Compiler instance
     * @throws \LogicException
     */
    public function compile(Compiler $compiler)
    {
        $compiler->addDebugInfo($this);

        $compiler->write("\$assets = \\Grav\\Common\\Grav::instance()['assets'];\n");

        if ($this->hasNode('attributes')) {
            $compiler
                ->write('$attributes = ')
                ->subcompile($this->getNode('attributes'))
                ->raw(";\n")
                ->write("if (!is_array(\$attributes)) {\n")
                ->indent()
                ->write("throw new UnexpectedValueException('{% {$this->tagName} with x %}: x is not an array');\n")
                ->outdent()
                ->write("}\n");
        } else {
            $compiler->write('$attributes = [];' . "\n");
        }

         if ($this->hasNode('group')) {
             $compiler
                 ->write("\$attributes['group'] = ")
                 ->subcompile($this->getNode('group'))
                 ->raw(";\n")
                 ->write("if (!is_string(\$attributes['group'])) {\n")
                 ->indent()
                 ->write("throw new UnexpectedValueException('{% {$this->tagName} in x %}: x is not a string');\n")
                 ->outdent()
                 ->write("}\n");
         }

        if ($this->hasNode('priority')) {
            $compiler
                ->write("\$attributes['priority'] = (int)(")
                ->subcompile($this->getNode('priority'))
                ->raw(");\n");
        }

        if ($this->hasNode('file')) {
            $compiler
                ->write('$assets->addJs(')
                ->subcompile($this->getNode('file'))
                ->raw(", \$attributes);\n");
        } else {
            $compiler
                ->write("ob_start();\n")
                ->subcompile($this->getNode('body'))
                ->write('$content = ob_get_clean();' . "\n")
                ->write("\$assets->addInlineJs(\$content, \$attributes);\n");
        }
    }
}
