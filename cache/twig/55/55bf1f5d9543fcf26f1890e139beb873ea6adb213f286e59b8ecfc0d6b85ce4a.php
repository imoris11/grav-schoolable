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

/* partials/hero.html.twig */
class __TwigTemplate_55fef30a631315bf9e02f0cee3d549782521a9d4fe9abba42aae52b4d300c88e extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/hero.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", [])) {
            // line 2
            echo "  ";
            $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array");
        } else {
            // line 4
            echo "  ";
            $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        }
        // line 6
        echo "
<div class=\"header hero ";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_classes", []);
        echo " ";
        echo ($context["classes"] ?? null);
        echo " ";
        echo (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_scroll", [])) ? ("hero-scroll-icon") : (""));
        echo "\" ";
        if (($context["header_image_media"] ?? null)) {
            echo "style=\"background-image: url(";
            echo $this->getAttribute(($context["header_image_media"] ?? null), "url", []);
            echo ");\"";
        }
        echo ">
    <div class=\"container\">
        ";
        // line 9
        if (($context["content"] ?? null)) {
            // line 10
            echo "            ";
            echo ($context["content"] ?? null);
            echo "
        ";
        } else {
            // line 12
            echo "            ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 16
            echo "            <a class=\"btn";
            if ($this->getAttribute($context["button"], "primary", [])) {
                echo " btn-primary";
            }
            echo "\" href=\"";
            echo ((twig_in_filter("//", $this->getAttribute($context["button"], "url", []))) ? ($this->getAttribute($context["button"], "url", [])) : ((($context["base_url"] ?? null) . $this->getAttribute($context["button"], "url", []))));
            echo "\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_scroll", [])) {
            // line 20
            echo "            <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
        ";
        }
        // line 22
        echo "    </div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  102 => 20,  100 => 19,  97 => 18,  82 => 16,  78 => 15,  75 => 14,  69 => 12,  63 => 10,  61 => 9,  46 => 7,  43 => 6,  39 => 4,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.header.hero_image %}
  {% set header_image_media = page.media.images[page.header.hero_image] %}
{% else %}
  {% set header_image_media = page.media.images|first %}
{% endif %}

<div class=\"header hero {{ page.header.hero_classes }} {{ classes }} {{ page.header.hero_scroll ? 'hero-scroll-icon' : '' }}\" {% if header_image_media %}style=\"background-image: url({{ header_image_media.url }});\"{% endif %}>
    <div class=\"container\">
        {% if content %}
            {{ content|raw }}
        {% else %}
            {{ page.content|raw }}
        {% endif %}

        {% for button in page.header.buttons %}
            <a class=\"btn{% if button.primary %} btn-primary{% endif %}\" href=\"{{ '//' in button.url ? button.url : base_url ~ button.url }}\">{{ button.text }}</a>
        {% endfor %}

        {% if page.header.hero_scroll %}
            <i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
        {% endif %}
    </div>
</div>
", "partials/hero.html.twig", "/Users/richardigbiriki/send/grav/user/themes/bootstrap4/templates/partials/hero.html.twig");
    }
}
