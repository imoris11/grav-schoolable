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

/* partials/javascript-config.html.twig */
class __TwigTemplate_a9d2c1d97c128c46681c53db08e903b056316f000784427baab216218c58cb1c extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascript-config.html.twig"));

        // line 1
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.login", 1 => "admin.super"])) {
            // line 2
            $context["notifications"] = ((((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "widgets", []), "dashboard-notifications", [], "array") || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "dashboard", [])) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "plugins", [])) || $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "notifications", []), "themes", []))) ? (1) : (0));
            // line 3
            switch (($context["template_route"] ?? null)) {
                case "dashboard":
                {
                    // line 5
                    echo "        ";
                    $context["notifications_filters"] = "['feed', 'dashboard', 'top']";
                    // line 6
                    echo "    ";
                    break;
                }
                case "plugins":
                {
                    // line 7
                    echo "        ";
                    $context["notifications_filters"] = "['plugins', 'top']";
                    // line 8
                    echo "    ";
                    break;
                }
                case "themes":
                {
                    // line 9
                    echo "        ";
                    $context["notifications_filters"] = "['themes', 'top']";
                    // line 10
                    echo "    ";
                    break;
                }
                default:
                {
                    // line 11
                    echo "        ";
                    $context["notifications_filters"] = "['top']";
                }
            }
            // line 13
            echo "<script type=\"text/javascript\">
    window.GravAdmin = window.GravAdmin || {};
    window.GravAdmin.config = {
        current_url: '";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "route", [0 => true], "method"), "html", null, true);
            echo "',
        base_url_relative: '";
            // line 17
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "',
        base_url_simple: '";
            // line 18
            echo twig_escape_filter($this->env, ($context["base_url_simple"] ?? null), "html", null, true);
            echo "',
        route: '";
            // line 19
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"), "html", null, true);
            echo "',
        param_sep: '";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []), "html", null, true);
            echo "',
        ";
            // line 21
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
                // line 22
                echo "        enable_auto_updates_check: '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "enable_auto_updates_check", []), "html", null, true);
                echo "',
        ";
            }
            // line 24
            echo "        admin_timeout: '";
            (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "session", []), "timeout", [])) ? (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "session", []), "timeout", []), "html", null, true))) : (print (1800)));
            echo "',
        admin_nonce: '";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "getNonce", []), "html", null, true);
            echo "',
        language: '";
            // line 26
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", [], "any", false, true), "language", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", [], "any", false, true), "language", []), "en")) : ("en")), "html", null, true);
            echo "',
        pro_enabled: '";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin-pro", [], "array"), "enabled", []), "html", null, true);
            echo "',
        notifications: {
            enabled: ";
            // line 29
            echo twig_escape_filter($this->env, ($context["notifications"] ?? null), "html", null, true);
            echo ",
            filters: ";
            // line 30
            echo ($context["notifications_filters"] ?? null);
            echo "
        },
        local_notifications: '";
            // line 32
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", [], "any", false, true), "local_notifications", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", [], "any", false, true), "local_notifications", []), false)) : (false)), "html", null, true);
            echo "',
        site: {
            delimiter: '";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", [], "any", false, true), "summary", [], "any", false, true), "delimiter", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", [], "any", false, true), "summary", [], "any", false, true), "delimiter", []), "===")) : ("===")), "html", null, true);
            echo "'
        }
    };
    window.GravAdmin.uri_params = {};

    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "params", [0 => null, 1 => true], "method"));
            foreach ($context['_seq'] as $context["param"] => $context["value"]) {
                // line 40
                echo "        window.GravAdmin.uri_params.";
                echo twig_escape_filter($this->env, $context["param"], "html", null, true);
                echo " = \"";
                echo twig_escape_filter($this->env, twig_replace_filter($context["value"], ["\\" => "/"]), "html", null, true);
                echo "\";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['param'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "</script>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/javascript-config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  150 => 40,  146 => 39,  138 => 34,  133 => 32,  128 => 30,  124 => 29,  119 => 27,  115 => 26,  111 => 25,  106 => 24,  100 => 22,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  73 => 13,  68 => 11,  62 => 10,  59 => 9,  53 => 8,  50 => 7,  44 => 6,  41 => 5,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if authorize(['admin.login', 'admin.super']) %}
{% set notifications = (config.plugins.admin.widgets['dashboard-notifications'] or config.plugins.admin.notifications.dashboard or config.plugins.admin.notifications.plugins or config.plugins.admin.notifications.themes) ? 1 : 0 %}
{% switch template_route %}
    {% case 'dashboard' %}
        {% set notifications_filters = \"['feed', 'dashboard', 'top']\" %}
    {% case 'plugins' %}
        {% set notifications_filters = \"['plugins', 'top']\" %}
    {% case 'themes' %}
        {% set notifications_filters = \"['themes', 'top']\" %}
    {% default %}
        {% set notifications_filters = \"['top']\" %}
{% endswitch %}
<script type=\"text/javascript\">
    window.GravAdmin = window.GravAdmin || {};
    window.GravAdmin.config = {
        current_url: '{{ uri.route(true) }}',
        base_url_relative: '{{ base_url_relative }}',
        base_url_simple: '{{ base_url_simple }}',
        route: '{{ admin.route|trim('/') }}',
        param_sep: '{{ config.system.param_sep }}',
        {% if authorize(['admin.maintenance', 'admin.super']) %}
        enable_auto_updates_check: '{{ config.plugins.admin.enable_auto_updates_check }}',
        {% endif %}
        admin_timeout: '{{ config.plugins.admin.session.timeout ?: 1800 }}',
        admin_nonce: '{{ admin.getNonce }}',
        language: '{{ grav.user.language|default('en') }}',
        pro_enabled: '{{ config.plugins[\"admin-pro\"].enabled }}',
        notifications: {
            enabled: {{ notifications }},
            filters: {{ notifications_filters|raw }}
        },
        local_notifications: '{{ config.system.local_notifications|default(false) }}',
        site: {
            delimiter: '{{ config.site.summary.delimiter|default('===') }}'
        }
    };
    window.GravAdmin.uri_params = {};

    {% for param, value in grav.uri.params(null, true) %}
        window.GravAdmin.uri_params.{{param}} = \"{{value|replace({'\\\\': '/'})}}\";
    {% endfor %}
</script>
{% endif %}
", "partials/javascript-config.html.twig", "/Users/richardigbiriki/send/grav/user/plugins/admin/themes/grav/templates/partials/javascript-config.html.twig");
    }
}
