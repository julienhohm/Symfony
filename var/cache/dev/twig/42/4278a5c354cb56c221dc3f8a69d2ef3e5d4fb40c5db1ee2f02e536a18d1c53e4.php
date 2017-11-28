<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f59f7509564b8d227be510e64af185140211d20e25155caa4fbe3a86c6ee382b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59f7509564b8d227be510e64af185140211d20e25155caa4fbe3a86c6ee382b->enter($__internal_f59f7509564b8d227be510e64af185140211d20e25155caa4fbe3a86c6ee382b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9e052dfbeda7c2aec5219146cf5348bef38d41803233be3450df98ccf2be8465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e052dfbeda7c2aec5219146cf5348bef38d41803233be3450df98ccf2be8465->enter($__internal_9e052dfbeda7c2aec5219146cf5348bef38d41803233be3450df98ccf2be8465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f59f7509564b8d227be510e64af185140211d20e25155caa4fbe3a86c6ee382b->leave($__internal_f59f7509564b8d227be510e64af185140211d20e25155caa4fbe3a86c6ee382b_prof);

        
        $__internal_9e052dfbeda7c2aec5219146cf5348bef38d41803233be3450df98ccf2be8465->leave($__internal_9e052dfbeda7c2aec5219146cf5348bef38d41803233be3450df98ccf2be8465_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_063a8c01abc37726aa2e9396aad23d51dfb2b39a3a02f286d312f5f72edbcfe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063a8c01abc37726aa2e9396aad23d51dfb2b39a3a02f286d312f5f72edbcfe5->enter($__internal_063a8c01abc37726aa2e9396aad23d51dfb2b39a3a02f286d312f5f72edbcfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b61a9df1987a6947e0a3f7291b40802d88b042629e8f3e24322b11a4441d3964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61a9df1987a6947e0a3f7291b40802d88b042629e8f3e24322b11a4441d3964->enter($__internal_b61a9df1987a6947e0a3f7291b40802d88b042629e8f3e24322b11a4441d3964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b61a9df1987a6947e0a3f7291b40802d88b042629e8f3e24322b11a4441d3964->leave($__internal_b61a9df1987a6947e0a3f7291b40802d88b042629e8f3e24322b11a4441d3964_prof);

        
        $__internal_063a8c01abc37726aa2e9396aad23d51dfb2b39a3a02f286d312f5f72edbcfe5->leave($__internal_063a8c01abc37726aa2e9396aad23d51dfb2b39a3a02f286d312f5f72edbcfe5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b904fd8719db5b74d747de828614bb04b4e13d8edd5316d1d99e94e8119c6839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b904fd8719db5b74d747de828614bb04b4e13d8edd5316d1d99e94e8119c6839->enter($__internal_b904fd8719db5b74d747de828614bb04b4e13d8edd5316d1d99e94e8119c6839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b75e2e68d48e56c4f9068b0dea5a4f5c9fbbb2a7fdc63e44070c310ca8a9ff05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b75e2e68d48e56c4f9068b0dea5a4f5c9fbbb2a7fdc63e44070c310ca8a9ff05->enter($__internal_b75e2e68d48e56c4f9068b0dea5a4f5c9fbbb2a7fdc63e44070c310ca8a9ff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b75e2e68d48e56c4f9068b0dea5a4f5c9fbbb2a7fdc63e44070c310ca8a9ff05->leave($__internal_b75e2e68d48e56c4f9068b0dea5a4f5c9fbbb2a7fdc63e44070c310ca8a9ff05_prof);

        
        $__internal_b904fd8719db5b74d747de828614bb04b4e13d8edd5316d1d99e94e8119c6839->leave($__internal_b904fd8719db5b74d747de828614bb04b4e13d8edd5316d1d99e94e8119c6839_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3478e912e45c0f07e770454cebe4af09c418a908dcc26572d253c793f42fcab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3478e912e45c0f07e770454cebe4af09c418a908dcc26572d253c793f42fcab->enter($__internal_b3478e912e45c0f07e770454cebe4af09c418a908dcc26572d253c793f42fcab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d63fd124cd9070a93852032786c49e2ac03d2e6270f774b7381bb1677fd5480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d63fd124cd9070a93852032786c49e2ac03d2e6270f774b7381bb1677fd5480->enter($__internal_0d63fd124cd9070a93852032786c49e2ac03d2e6270f774b7381bb1677fd5480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0d63fd124cd9070a93852032786c49e2ac03d2e6270f774b7381bb1677fd5480->leave($__internal_0d63fd124cd9070a93852032786c49e2ac03d2e6270f774b7381bb1677fd5480_prof);

        
        $__internal_b3478e912e45c0f07e770454cebe4af09c418a908dcc26572d253c793f42fcab->leave($__internal_b3478e912e45c0f07e770454cebe4af09c418a908dcc26572d253c793f42fcab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
