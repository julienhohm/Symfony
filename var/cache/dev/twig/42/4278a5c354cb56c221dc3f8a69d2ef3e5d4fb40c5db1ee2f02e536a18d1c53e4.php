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
        $__internal_23b41c2abfb9151f3f6d4564f7f8fef12e5078a2916138e438311d6343761fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b41c2abfb9151f3f6d4564f7f8fef12e5078a2916138e438311d6343761fc3->enter($__internal_23b41c2abfb9151f3f6d4564f7f8fef12e5078a2916138e438311d6343761fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a6ae126438b54484c7cf608f4d49867513095a6db255ee67bd2d31c6ede029d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ae126438b54484c7cf608f4d49867513095a6db255ee67bd2d31c6ede029d6->enter($__internal_a6ae126438b54484c7cf608f4d49867513095a6db255ee67bd2d31c6ede029d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_23b41c2abfb9151f3f6d4564f7f8fef12e5078a2916138e438311d6343761fc3->leave($__internal_23b41c2abfb9151f3f6d4564f7f8fef12e5078a2916138e438311d6343761fc3_prof);

        
        $__internal_a6ae126438b54484c7cf608f4d49867513095a6db255ee67bd2d31c6ede029d6->leave($__internal_a6ae126438b54484c7cf608f4d49867513095a6db255ee67bd2d31c6ede029d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_49794299aaaa5a02a30711dd3edad0a0849e2ff6706e52741fce92e2ecf2a28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49794299aaaa5a02a30711dd3edad0a0849e2ff6706e52741fce92e2ecf2a28a->enter($__internal_49794299aaaa5a02a30711dd3edad0a0849e2ff6706e52741fce92e2ecf2a28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a14f5199ccd7b3bf4a132516474cfa6536e908c75756fbe0ebda8840d78bd54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14f5199ccd7b3bf4a132516474cfa6536e908c75756fbe0ebda8840d78bd54e->enter($__internal_a14f5199ccd7b3bf4a132516474cfa6536e908c75756fbe0ebda8840d78bd54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a14f5199ccd7b3bf4a132516474cfa6536e908c75756fbe0ebda8840d78bd54e->leave($__internal_a14f5199ccd7b3bf4a132516474cfa6536e908c75756fbe0ebda8840d78bd54e_prof);

        
        $__internal_49794299aaaa5a02a30711dd3edad0a0849e2ff6706e52741fce92e2ecf2a28a->leave($__internal_49794299aaaa5a02a30711dd3edad0a0849e2ff6706e52741fce92e2ecf2a28a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cf5ce8c457b3edd89229b48813142614b366301c7f36e0f44ed0301c9c4db319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf5ce8c457b3edd89229b48813142614b366301c7f36e0f44ed0301c9c4db319->enter($__internal_cf5ce8c457b3edd89229b48813142614b366301c7f36e0f44ed0301c9c4db319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d1edcd2222a9edc2d1a1be3b32d113b8cf4c43894eeb212937d2ad5b20897d97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1edcd2222a9edc2d1a1be3b32d113b8cf4c43894eeb212937d2ad5b20897d97->enter($__internal_d1edcd2222a9edc2d1a1be3b32d113b8cf4c43894eeb212937d2ad5b20897d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d1edcd2222a9edc2d1a1be3b32d113b8cf4c43894eeb212937d2ad5b20897d97->leave($__internal_d1edcd2222a9edc2d1a1be3b32d113b8cf4c43894eeb212937d2ad5b20897d97_prof);

        
        $__internal_cf5ce8c457b3edd89229b48813142614b366301c7f36e0f44ed0301c9c4db319->leave($__internal_cf5ce8c457b3edd89229b48813142614b366301c7f36e0f44ed0301c9c4db319_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6874f356dd7365afadecd5d2bf5f078da754c9b842015a222e2333971bb4da9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6874f356dd7365afadecd5d2bf5f078da754c9b842015a222e2333971bb4da9c->enter($__internal_6874f356dd7365afadecd5d2bf5f078da754c9b842015a222e2333971bb4da9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb8d3ce6c9eb7968f3c23126d9fcd5caf952d6c4db03ac16e9903c8e4e3a9cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8d3ce6c9eb7968f3c23126d9fcd5caf952d6c4db03ac16e9903c8e4e3a9cb4->enter($__internal_cb8d3ce6c9eb7968f3c23126d9fcd5caf952d6c4db03ac16e9903c8e4e3a9cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cb8d3ce6c9eb7968f3c23126d9fcd5caf952d6c4db03ac16e9903c8e4e3a9cb4->leave($__internal_cb8d3ce6c9eb7968f3c23126d9fcd5caf952d6c4db03ac16e9903c8e4e3a9cb4_prof);

        
        $__internal_6874f356dd7365afadecd5d2bf5f078da754c9b842015a222e2333971bb4da9c->leave($__internal_6874f356dd7365afadecd5d2bf5f078da754c9b842015a222e2333971bb4da9c_prof);

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
