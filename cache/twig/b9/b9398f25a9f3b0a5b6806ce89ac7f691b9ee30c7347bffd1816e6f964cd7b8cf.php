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

/* modular/text.html.twig */
class __TwigTemplate_99b1c2ae7f854af0209bda7be6a3d95514c7a01c142a4279cae3b75845ec450a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/text.html.twig"));

        // line 1
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("grid-size");
        // line 2
        $context["image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 3
        echo "
<section class=\"section modular-text ";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo " bg-gray\">
    <section class=\"container ";
        // line 5
        echo ($context["grid_size"] ?? null);
        echo "\">
        <div class=\"columns ";
        // line 6
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "image_align", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "image_align", []), "align-right")) : ("align-right"));
        echo "\">
            ";
        // line 7
        if (($context["image"] ?? null)) {
            // line 8
            echo "            <div class=\"column col-6 col-md-12\">
                ";
            // line 9
            echo ($context["content"] ?? null);
            echo "
            </div>
            <div class=\"column col-6 col-md-12\">
                ";
            // line 12
            echo $this->getAttribute(($context["image"] ?? null), "html", []);
            echo "
            </div>
            ";
        } else {
            // line 15
            echo "            <div class=\"column col-12\">
                ";
            // line 16
            echo ($context["content"] ?? null);
            echo "
            </div>
            ";
        }
        // line 19
        echo "        </div>
    </section>
</section>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  72 => 16,  69 => 15,  63 => 12,  57 => 9,  54 => 8,  52 => 7,  48 => 6,  44 => 5,  40 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set grid_size = theme_var('grid-size') %}
{% set image = page.media.images|first %}

<section class=\"section modular-text {{ page.header.class}} bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns {{ page.header.image_align|default('align-right') }}\">
            {% if image %}
            <div class=\"column col-6 col-md-12\">
                {{ content|raw }}
            </div>
            <div class=\"column col-6 col-md-12\">
                {{ image.html|raw }}
            </div>
            {% else %}
            <div class=\"column col-12\">
                {{ content|raw }}
            </div>
            {% endif %}
        </div>
    </section>
</section>
", "modular/text.html.twig", "/Users/richardigbiriki/send/grav/user/themes/quark/templates/modular/text.html.twig");
    }
}
