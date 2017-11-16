<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cb073b442a5f62042976b2c9b29265f0f102533d761b12f2080d6a9b91b47fd0 extends Twig_Template
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
        $__internal_66e6163c17fdfb50c468be21f8eab68ec6f6b61930bd0cc68ec2cb3bc0093479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66e6163c17fdfb50c468be21f8eab68ec6f6b61930bd0cc68ec2cb3bc0093479->enter($__internal_66e6163c17fdfb50c468be21f8eab68ec6f6b61930bd0cc68ec2cb3bc0093479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_891548ba8f00c95354260b706800c3eb2ae07e6b44ad66f488e833fc1b40820b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891548ba8f00c95354260b706800c3eb2ae07e6b44ad66f488e833fc1b40820b->enter($__internal_891548ba8f00c95354260b706800c3eb2ae07e6b44ad66f488e833fc1b40820b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_66e6163c17fdfb50c468be21f8eab68ec6f6b61930bd0cc68ec2cb3bc0093479->leave($__internal_66e6163c17fdfb50c468be21f8eab68ec6f6b61930bd0cc68ec2cb3bc0093479_prof);

        
        $__internal_891548ba8f00c95354260b706800c3eb2ae07e6b44ad66f488e833fc1b40820b->leave($__internal_891548ba8f00c95354260b706800c3eb2ae07e6b44ad66f488e833fc1b40820b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd46f463c7290341896ffe8a318095edff639cb794986f9fe5167953869138fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd46f463c7290341896ffe8a318095edff639cb794986f9fe5167953869138fc->enter($__internal_dd46f463c7290341896ffe8a318095edff639cb794986f9fe5167953869138fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9cf46782164dc772d999781d5c9ae981dec2c4cf1b2599cd6c56a37e0803578f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cf46782164dc772d999781d5c9ae981dec2c4cf1b2599cd6c56a37e0803578f->enter($__internal_9cf46782164dc772d999781d5c9ae981dec2c4cf1b2599cd6c56a37e0803578f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9cf46782164dc772d999781d5c9ae981dec2c4cf1b2599cd6c56a37e0803578f->leave($__internal_9cf46782164dc772d999781d5c9ae981dec2c4cf1b2599cd6c56a37e0803578f_prof);

        
        $__internal_dd46f463c7290341896ffe8a318095edff639cb794986f9fe5167953869138fc->leave($__internal_dd46f463c7290341896ffe8a318095edff639cb794986f9fe5167953869138fc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_506da2a2063cbad817d45ced9dc8de8df20bc7b77684bb5de9b9f762802d4960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506da2a2063cbad817d45ced9dc8de8df20bc7b77684bb5de9b9f762802d4960->enter($__internal_506da2a2063cbad817d45ced9dc8de8df20bc7b77684bb5de9b9f762802d4960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da63a4376d956f3bec62f423a90f8daa82ba5f8817ba3482c5f684fe3260500b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da63a4376d956f3bec62f423a90f8daa82ba5f8817ba3482c5f684fe3260500b->enter($__internal_da63a4376d956f3bec62f423a90f8daa82ba5f8817ba3482c5f684fe3260500b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_da63a4376d956f3bec62f423a90f8daa82ba5f8817ba3482c5f684fe3260500b->leave($__internal_da63a4376d956f3bec62f423a90f8daa82ba5f8817ba3482c5f684fe3260500b_prof);

        
        $__internal_506da2a2063cbad817d45ced9dc8de8df20bc7b77684bb5de9b9f762802d4960->leave($__internal_506da2a2063cbad817d45ced9dc8de8df20bc7b77684bb5de9b9f762802d4960_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_144cd1ae54671b9e24e1e300c926f1828b98bb8f0525cfde9e1f8e9c41fe5f7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144cd1ae54671b9e24e1e300c926f1828b98bb8f0525cfde9e1f8e9c41fe5f7c->enter($__internal_144cd1ae54671b9e24e1e300c926f1828b98bb8f0525cfde9e1f8e9c41fe5f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aeab47d33b2f0975b1b8924be17e65e8653cd70f3c6d9cc1476593b2c7c91e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeab47d33b2f0975b1b8924be17e65e8653cd70f3c6d9cc1476593b2c7c91e0b->enter($__internal_aeab47d33b2f0975b1b8924be17e65e8653cd70f3c6d9cc1476593b2c7c91e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aeab47d33b2f0975b1b8924be17e65e8653cd70f3c6d9cc1476593b2c7c91e0b->leave($__internal_aeab47d33b2f0975b1b8924be17e65e8653cd70f3c6d9cc1476593b2c7c91e0b_prof);

        
        $__internal_144cd1ae54671b9e24e1e300c926f1828b98bb8f0525cfde9e1f8e9c41fe5f7c->leave($__internal_144cd1ae54671b9e24e1e300c926f1828b98bb8f0525cfde9e1f8e9c41fe5f7c_prof);

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
