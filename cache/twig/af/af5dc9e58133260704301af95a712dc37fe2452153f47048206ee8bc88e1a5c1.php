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

/* partials/layout.html.twig */
class __TwigTemplate_47793585ae92171df489f364a78ea4f0c91b9748d6d758423a0794a312666989 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'item' => [$this, 'block_item'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/layout.html.twig"));

        // line 1
        $context["item_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-9 col-md-12") : ("col-12"));
        // line 2
        $context["sidebar_col"] = ((($context["show_sidebar"] ?? null)) ? ("col-3 col-md-12") : ("col-12"));
        // line 3
        echo "
<div class=\"columns\">
    <div id=\"item\" class=\"column ";
        // line 5
        echo ($context["item_col"] ?? null);
        echo " extra-spacing\">
        ";
        // line 6
        $this->displayBlock('item', $context, $blocks);
        // line 7
        echo "    </div>
    ";
        // line 8
        if (($context["show_sidebar"] ?? null)) {
            // line 9
            echo "    <div id=\"sidebar\" class=\"column ";
            echo ($context["sidebar_col"] ?? null);
            echo "\">
        ";
            // line 10
            $this->displayBlock('sidebar', $context, $blocks);
            // line 11
            echo "    </div>
    ";
        }
        // line 13
        echo "</div>

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 6
    public function block_item($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "item"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 10,  74 => 6,  65 => 13,  61 => 11,  59 => 10,  54 => 9,  52 => 8,  49 => 7,  47 => 6,  43 => 5,  39 => 3,  37 => 2,  35 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set item_col = show_sidebar ? 'col-9 col-md-12' : 'col-12' %}
{% set sidebar_col = show_sidebar ? 'col-3 col-md-12' : 'col-12' %}

<div class=\"columns\">
    <div id=\"item\" class=\"column {{ item_col }} extra-spacing\">
        {% block item %}{% endblock %}
    </div>
    {% if show_sidebar %}
    <div id=\"sidebar\" class=\"column {{ sidebar_col }}\">
        {% block sidebar %}{% endblock %}
    </div>
    {% endif %}
</div>

", "partials/layout.html.twig", "/Users/richardigbiriki/send/grav/user/themes/quark/templates/partials/layout.html.twig");
    }
}
