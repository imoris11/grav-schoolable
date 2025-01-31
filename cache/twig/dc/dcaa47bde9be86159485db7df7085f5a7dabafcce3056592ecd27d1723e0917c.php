<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/fields/taxonomy/taxonomy.html.twig */
class __TwigTemplate_31d472454a008299b9b1e48c7a91f7da2a910c5682e5e5448de2d274272e106b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/taxonomy/taxonomy.html.twig"));

        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/taxonomy/taxonomy.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 4
        $context["taxonomies"] = (((null === ($context["taxonomies"] ?? null))) ? ((($this->getAttribute(($context["field"] ?? null), "taxonomies", [])) ? ($this->getAttribute(($context["field"] ?? null), "taxonomies", [])) : ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "data", [0 => "config/site"], "method"), "taxonomies", [])))) : (($context["taxonomies"] ?? null)));
        // line 5
        $context["parentname"] = $this->getAttribute(($context["field"] ?? null), "name", []);
        // line 6
        $context["options"] = $this->getAttribute(($context["field"] ?? null), "options", []);
        // line 7
        $context["default"] = $this->getAttribute(($context["field"] ?? null), "default", []);
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["taxonomies"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
            // line 10
            echo "
    ";
            // line 11
            $context["value"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->arrayFilter((($this->getAttribute(($context["data"] ?? null), "value", [0 => ("header.taxonomy." . $context["name"])], "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["data"] ?? null), "value", [0 => ("header.taxonomy." . $context["name"])], "method"), ((($this->getAttribute(($context["default"] ?? null), $context["name"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["default"] ?? null), $context["name"], [], "array")))) ? ($this->getAttribute(($context["default"] ?? null), $context["name"], [], "array")) : ([])))) : (((($this->getAttribute(($context["default"] ?? null), $context["name"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["default"] ?? null), $context["name"], [], "array")))) ? ($this->getAttribute(($context["default"] ?? null), $context["name"], [], "array")) : ([])))));
            // line 12
            echo "    ";
            $context["sub_taxonomies"] = twig_get_array_keys_filter((($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "taxonomy", [], "any", false, true), "taxonomy", [], "any", false, true), $context["name"], [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "taxonomy", [], "any", false, true), "taxonomy", [], "any", false, true), $context["name"]), [])) : ([])));
            // line 13
            echo "    ";
            $context["list"] = array_unique(twig_array_merge(twig_array_merge(((($this->getAttribute(($context["options"] ?? null), $context["name"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["options"] ?? null), $context["name"], [], "array")))) ? ($this->getAttribute(($context["options"] ?? null), $context["name"], [], "array")) : ([])), ($context["sub_taxonomies"] ?? null)), ($context["value"] ?? null)));
            // line 14
            echo "
    ";
            // line 15
            $context["field"] = ["type" => "select", "classes" => "fancy create", "label" => twig_capitalize_string_filter($this->env,             // line 18
$context["name"]), "name" => ((            // line 19
($context["parentname"] ?? null) . ".") . $context["name"]), "multiple" => true, "options" =>             // line 21
($context["list"] ?? null), "style" => $this->getAttribute(            // line 22
($context["field"] ?? null), "style", []), "selectize" => ["create" => true]];
            // line 27
            echo "
    ";
            // line 28
            $this->loadTemplate([0 => "forms/fields/select/select.html.twig"], "forms/fields/taxonomy/taxonomy.html.twig", 28)->display($context);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/taxonomy/taxonomy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  99 => 27,  97 => 22,  96 => 21,  95 => 19,  94 => 18,  93 => 15,  90 => 14,  87 => 13,  84 => 12,  82 => 11,  79 => 10,  62 => 9,  59 => 8,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  45 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
{% set taxonomies = (taxonomies is null ? (field.taxonomies ? field.taxonomies : admin.data('config/site').taxonomies) : taxonomies) %}
{% set parentname = field.name %}
{% set options = field.options %}
{% set default = field.default %}

{% for name in taxonomies %}

    {% set value = array(data.value('header.taxonomy.' ~ name)|default(default[name] ?? [])) %}
    {% set sub_taxonomies = attribute(grav.taxonomy.taxonomy, name)|default([])|keys %}
    {% set list = (options[name] ?? [])|merge(sub_taxonomies)|merge(value)|array_unique %}

    {% set field = {
        type: 'select',
        classes: 'fancy create',
        label: name|capitalize,
        name: parentname ~ '.' ~ name,
        multiple: true,
        options: list,
        style: field.style,
        selectize: {
            create: true
        }
    } %}

    {% include ['forms/fields/select/select.html.twig'] %}
{% endfor %}
{% endblock %}", "forms/fields/taxonomy/taxonomy.html.twig", "/Users/richardigbiriki/send/grav/user/plugins/admin/themes/grav/templates/forms/fields/taxonomy/taxonomy.html.twig");
    }
}
