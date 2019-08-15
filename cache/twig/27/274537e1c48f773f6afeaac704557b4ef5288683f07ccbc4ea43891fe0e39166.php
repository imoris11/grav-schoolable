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

/* forms/fields/parents/parents.html.twig */
class __TwigTemplate_a1382c26a113c5309c045e76e2b89f56dfca146248312de24dbdd7c168a55ea5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/parents/parents.html.twig"));

        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/parents/parents.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 4
        echo "    ";
        $context["defaults"] = ["show_root" => true, "show_all" =>         // line 6
($context["show_all_val"] ?? null), "show_modular" =>         // line 7
($context["show_modular_val"] ?? null), "show_slug" =>         // line 8
($context["show_slug_val"] ?? null), "show_fullpath" =>         // line 9
($context["show_fullpath_val"] ?? null), "default" =>         // line 10
($context["last_page_route"] ?? null), "limit_levels" =>         // line 11
($context["limit_levels_val"] ?? null)];
        // line 13
        echo "
    ";
        // line 14
        $context["field"] = twig_array_merge(($context["field"] ?? null), ($context["defaults"] ?? null));
        // line 15
        echo "    ";
        $context["name"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        // line 16
        echo "    ";
        $context["parent"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ($context["value"] ?? null)], "method"), "title", []);
        // line 17
        echo "    <div class=\"parents-wrapper\">
        <div class=\"form-input-wrapper\" data-parents=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" data-remodal-target=\"parents\">
            <div class=\"parent-title\" data-parents-field-name=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["parent"] ?? null), "html", null, true);
        echo "</div>
            <span><i class=\"fa fa-folder-o\"></i> <span data-parents-field-label=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (((isset($context["value"]) || array_key_exists("value", $context))) ? (_twig_default_filter(($context["value"] ?? null), "<root>")) : ("<root>")), "html", null, true);
        echo "</span></span>
        </div>

        <input type=\"hidden\" class=\"input\" name=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\" data-field-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html", null, true);
        echo "\" />
    </div>

    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/parents/parents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  84 => 20,  78 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  63 => 14,  60 => 13,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  53 => 6,  51 => 4,  45 => 3,  29 => 1,);
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

{% block input %}
    {% set defaults = {
        show_root: true,
        show_all: show_all_val,
        show_modular: show_modular_val,
        show_slug: show_slug_val,
        show_fullpath: show_fullpath_val,
        default: last_page_route,
        limit_levels: limit_levels_val
    } %}

    {% set field = field|merge(defaults) %}
    {% set name = (scope ~ field.name)|fieldName %}
    {% set parent = page.find(value).title %}
    <div class=\"parents-wrapper\">
        <div class=\"form-input-wrapper\" data-parents=\"{{ name }}\" data-remodal-target=\"parents\">
            <div class=\"parent-title\" data-parents-field-name=\"{{ name }}\">{{ parent }}</div>
            <span><i class=\"fa fa-folder-o\"></i> <span data-parents-field-label=\"{{ name }}\">{{ value|default('<root>') }}</span></span>
        </div>

        <input type=\"hidden\" class=\"input\" name=\"{{ name }}\" data-field-name=\"{{ field.name }}\" value=\"{{ value|join(', ') }}\" />
    </div>

    {#{% set last_page_route = admin.page.getLastPageRoute %}
    {% set show_slug_val = true %}
    {% set show_fullpath_val = false %}
    {% set show_all_val = true %}

    {% set show_parents = config.get('plugins.admin.pages.show_parents') %}
    {% if show_parents == 'folder' %}
        {% set show_slug_val = false %}
    {% elseif show_parents == 'fullpath' %}
        {% set show_fullpath_val = true %}
    {% endif %}

    {% set limit_levels_val = config.get('plugins.admin.pages.parents_levels') %}

    {% set show_modular_val = config.get('plugins.admin.pages.show_modular', true) %}
    {% if show_modular_val == false %}
        {% set show_all_val = false %}
    {% endif %}

    {% set defaults = {show_root:true, show_all:show_all_val, show_modular:show_modular_val, show_slug:show_slug_val, show_fullpath:show_fullpath_val, default:last_page_route, limit_levels:limit_levels_val} %}
    {% set field = field|merge(defaults) %}
    {{ parent() }}#}
{% endblock %}
", "forms/fields/parents/parents.html.twig", "/Users/richardigbiriki/send/grav/user/plugins/admin/themes/grav/templates/forms/fields/parents/parents.html.twig");
    }
}
