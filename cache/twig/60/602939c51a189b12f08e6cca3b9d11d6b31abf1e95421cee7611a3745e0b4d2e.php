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

/* forms/fields/toggle/toggle.html.twig */
class __TwigTemplate_5311a82f88d5918b2dd3f4cf7b3823a076ac4fe39e013b290a1722b585401f50 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/toggle/toggle.html.twig"));

        // line 8
        $context["macro"] = $this;
        // line 10
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 11
        $context["value"] = (((($context["value"] ?? null) === false)) ? (0) : (($context["value"] ?? null)));
        // line 13
        $context["has_hidden"] = false;
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 15
            if (twig_test_empty($context["key"])) {
                // line 16
                $context["has_hidden"] = true;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/toggle/toggle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 20
    public function block_global_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_attributes"));

        // line 21
        echo "  ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
  data-grav-field-name=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 25
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 26
        echo "
  <div class=\"switch-toggle switch-grav ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " switch-";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["field"] ?? null), "options", [])), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo "\">
    ";
        // line 28
        $context["maxLen"] = 0;
        // line 29
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 30
            echo "      ";
            $context["translation"] = twig_trim_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"]));
            // line 31
            echo "      ";
            $context["maxLen"] = max(twig_length_filter($this->env, ($context["translation"] ?? null)), ($context["maxLen"] ?? null));
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 35
            echo "      ";
            $context["id"] = (("toggle_" . $this->getAttribute(($context["field"] ?? null), "name", [])) . $context["key"]);
            // line 36
            echo "      ";
            $context["translation"] = twig_trim_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"]));
            // line 37
            echo "
      <input type=\"radio\"
             value=\"";
            // line 39
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"
             id=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"
             name=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
          ";
            // line 42
            if ($this->getAttribute(($context["field"] ?? null), "highlight", [], "any", true, true)) {
                // line 43
                echo "            class=\"";
                echo ((($this->getAttribute(($context["field"] ?? null), "highlight", []) == ("" . $context["key"]))) ? ("highlight") : (""));
                echo "\"
          ";
            }
            // line 45
            echo "          ";
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 46
            echo "          ";
            if ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) {
                // line 47
                echo "            ";
                if ((("" . $context["key"]) == ("" . ($context["value"] ?? null)))) {
                    // line 48
                    echo "              checked=\"checked\"
            ";
                } elseif ((                // line 49
(isset($context["value"]) || array_key_exists("value", $context)) && (($context["key"] == 1) || ($context["key"] == "1")))) {
                    // line 50
                    echo "              checked=\"checked\"
            ";
                }
                // line 52
                echo "          ";
            } else {
                // line 53
                echo "            ";
                if ((("" . $context["key"]) == ("" . ($context["value"] ?? null)))) {
                    // line 54
                    echo "              checked=\"checked\"
            ";
                }
                // line 56
                echo "          ";
            }
            // line 57
            echo "          ";
            if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
                echo "required=\"required\"";
            }
            // line 58
            echo "      />
      <label for=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">";
            echo twig_trim_filter($context["macro"]->getspanToggle(($context["translation"] ?? null), ($context["maxLen"] ?? null)));
            echo "</label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "  </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "spanToggle"));

            // line 4
            echo "  ";
            $context["space"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2));
            // line 5
            echo "  ";
            echo ((($context["space"] ?? null) . ($context["input"] ?? null)) . ($context["space"] ?? null));
            echo "
";
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/toggle/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 5,  236 => 4,  220 => 3,  212 => 61,  202 => 59,  199 => 58,  194 => 57,  191 => 56,  187 => 54,  184 => 53,  181 => 52,  177 => 50,  175 => 49,  172 => 48,  169 => 47,  166 => 46,  161 => 45,  155 => 43,  153 => 42,  149 => 41,  145 => 40,  141 => 39,  137 => 37,  134 => 36,  131 => 35,  127 => 34,  124 => 33,  118 => 32,  115 => 31,  112 => 30,  107 => 29,  105 => 28,  97 => 27,  94 => 26,  88 => 25,  79 => 22,  74 => 21,  68 => 20,  60 => 1,  53 => 16,  51 => 15,  47 => 14,  45 => 13,  43 => 11,  41 => 10,  39 => 8,  30 => 1,);
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

{% macro spanToggle(input, length) %}
  {% set space = repeat('&nbsp;&nbsp;', (length - input|length) / 2) %}
  {{ (space ~ input ~ space)|raw }}
{% endmacro %}

{% import _self as macro %}

{% set value = (value is null ? field.default : value) %}
{% set value = (value is same as(false) ? 0 : value) %}

{% set has_hidden = false %}
{% for key, text in field.options %}
  {% if key is empty %}
    {% set has_hidden = true %}
  {% endif %}
{% endfor %}

{% block global_attributes %}
  {{ parent() }}
  data-grav-field-name=\"{{ (scope ~ field.name)|fieldName }}\"
{% endblock %}

{% block input %}

  <div class=\"switch-toggle switch-grav {{ field.size }} switch-{{ field.options|length }} {{ field.classes }}\">
    {% set maxLen = 0 %}
    {% for text in field.options %}
      {% set translation = text|t|trim %}
      {% set maxLen = max(translation|length, maxLen) %}
    {% endfor %}

    {% for key, text in field.options %}
      {% set id = \"toggle_\" ~ field.name ~ key %}
      {% set translation = text|t|trim %}

      <input type=\"radio\"
             value=\"{{ key }}\"
             id=\"{{ id }}\"
             name=\"{{ (scope ~ field.name)|fieldName }}\"
          {% if field.highlight is defined %}
            class=\"{{ field.highlight == '' ~ key ? 'highlight' : '' }}\"
          {% endif %}
          {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
          {% if field.toggleable %}
            {% if '' ~ key == '' ~ value %}
              checked=\"checked\"
            {% elseif value is defined and (key == 1 or key == '1') %}
              checked=\"checked\"
            {% endif %}
          {% else %}
            {% if '' ~ key == '' ~ value %}
              checked=\"checked\"
            {% endif %}
          {% endif %}
          {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
      />
      <label for=\"{{ id }}\">{{ (macro.spanToggle(translation, maxLen)|trim)|raw }}</label>
    {% endfor %}
  </div>
{% endblock %}
", "forms/fields/toggle/toggle.html.twig", "/Users/richardigbiriki/send/grav/user/plugins/form/templates/forms/fields/toggle/toggle.html.twig");
    }
}
