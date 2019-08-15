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

/* @Page:/Users/richardigbiriki/send/grav/user/pages/01.home/_intro */
class __TwigTemplate_42dcf1ee3c03d1563fb5362331342c1a356590d52c4937e9e9d218adb2761bb1 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Page:/Users/richardigbiriki/send/grav/user/pages/01.home/_intro"));

        // line 1
        echo "
<section class=\"section modular-text  bg-gray\">
    <section class=\"container grid-lg\">
        <div class=\"columns right\">
                        <div class=\"column col-6 col-md-12\">
                ## The future is bright but it starts today

But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound {.myclass}

[Get Started](http://youtube.com)
            </div>
            <div class=\"column col-6 col-md-12\">
                <img alt=\"\" src=\"/user/pages/01.home/_intro/father.jpg\" />
            </div>
                    </div>
    </section>
</section>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "@Page:/Users/richardigbiriki/send/grav/user/pages/01.home/_intro";
    }

    public function getDebugInfo()
    {
        return array (  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<section class=\"section modular-text  bg-gray\">
    <section class=\"container grid-lg\">
        <div class=\"columns right\">
                        <div class=\"column col-6 col-md-12\">
                ## The future is bright but it starts today

But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound {.myclass}

[Get Started](http://youtube.com)
            </div>
            <div class=\"column col-6 col-md-12\">
                <img alt=\"\" src=\"/user/pages/01.home/_intro/father.jpg\" />
            </div>
                    </div>
    </section>
</section>
", "@Page:/Users/richardigbiriki/send/grav/user/pages/01.home/_intro", "");
    }
}
