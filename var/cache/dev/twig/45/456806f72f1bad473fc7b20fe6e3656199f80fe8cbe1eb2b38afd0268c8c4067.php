<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_6023e7046629ab9729ab6484398a02caaee165f05f4f641d0ff3fd39fce6a214 extends Twig_Template
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
        $__internal_f81456461b91f24317b74ad494827164ba1f695480b13ed785c331ad21286a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f81456461b91f24317b74ad494827164ba1f695480b13ed785c331ad21286a7f->enter($__internal_f81456461b91f24317b74ad494827164ba1f695480b13ed785c331ad21286a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_c69bfed196a6bb85c1fb88c03eb8db36c5d2adea5b02a28441bd9a63fa820485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69bfed196a6bb85c1fb88c03eb8db36c5d2adea5b02a28441bd9a63fa820485->enter($__internal_c69bfed196a6bb85c1fb88c03eb8db36c5d2adea5b02a28441bd9a63fa820485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_f81456461b91f24317b74ad494827164ba1f695480b13ed785c331ad21286a7f->leave($__internal_f81456461b91f24317b74ad494827164ba1f695480b13ed785c331ad21286a7f_prof);

        
        $__internal_c69bfed196a6bb85c1fb88c03eb8db36c5d2adea5b02a28441bd9a63fa820485->leave($__internal_c69bfed196a6bb85c1fb88c03eb8db36c5d2adea5b02a28441bd9a63fa820485_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4f91ff0da9601929764b91f24afb580a9fb74656ec8753e074bc0fa7d5ee55e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f91ff0da9601929764b91f24afb580a9fb74656ec8753e074bc0fa7d5ee55e->enter($__internal_e4f91ff0da9601929764b91f24afb580a9fb74656ec8753e074bc0fa7d5ee55e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fdaa7ac05769ff1f637ad2e822f3129f2c81d232b73bf146b5d12a2473c1a698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdaa7ac05769ff1f637ad2e822f3129f2c81d232b73bf146b5d12a2473c1a698->enter($__internal_fdaa7ac05769ff1f637ad2e822f3129f2c81d232b73bf146b5d12a2473c1a698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fdaa7ac05769ff1f637ad2e822f3129f2c81d232b73bf146b5d12a2473c1a698->leave($__internal_fdaa7ac05769ff1f637ad2e822f3129f2c81d232b73bf146b5d12a2473c1a698_prof);

        
        $__internal_e4f91ff0da9601929764b91f24afb580a9fb74656ec8753e074bc0fa7d5ee55e->leave($__internal_e4f91ff0da9601929764b91f24afb580a9fb74656ec8753e074bc0fa7d5ee55e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d123ba8a17734d030aa15709499907ffaf70704a2a0b7c7f1f51f30185610bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d123ba8a17734d030aa15709499907ffaf70704a2a0b7c7f1f51f30185610bd->enter($__internal_6d123ba8a17734d030aa15709499907ffaf70704a2a0b7c7f1f51f30185610bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34d2123cbe88273e810a75daba6b98c414f1f5a6f30decfa388d37160bb61a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d2123cbe88273e810a75daba6b98c414f1f5a6f30decfa388d37160bb61a4e->enter($__internal_34d2123cbe88273e810a75daba6b98c414f1f5a6f30decfa388d37160bb61a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_34d2123cbe88273e810a75daba6b98c414f1f5a6f30decfa388d37160bb61a4e->leave($__internal_34d2123cbe88273e810a75daba6b98c414f1f5a6f30decfa388d37160bb61a4e_prof);

        
        $__internal_6d123ba8a17734d030aa15709499907ffaf70704a2a0b7c7f1f51f30185610bd->leave($__internal_6d123ba8a17734d030aa15709499907ffaf70704a2a0b7c7f1f51f30185610bd_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_37341f377b38153ea2ecd0c990fea36b60035b9056b0a3859491080438fc167d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37341f377b38153ea2ecd0c990fea36b60035b9056b0a3859491080438fc167d->enter($__internal_37341f377b38153ea2ecd0c990fea36b60035b9056b0a3859491080438fc167d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_74e45850916204e5a28fa4ebec0c8ca63874397124ada6f1e81c2804d1740730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74e45850916204e5a28fa4ebec0c8ca63874397124ada6f1e81c2804d1740730->enter($__internal_74e45850916204e5a28fa4ebec0c8ca63874397124ada6f1e81c2804d1740730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_74e45850916204e5a28fa4ebec0c8ca63874397124ada6f1e81c2804d1740730->leave($__internal_74e45850916204e5a28fa4ebec0c8ca63874397124ada6f1e81c2804d1740730_prof);

        
        $__internal_37341f377b38153ea2ecd0c990fea36b60035b9056b0a3859491080438fc167d->leave($__internal_37341f377b38153ea2ecd0c990fea36b60035b9056b0a3859491080438fc167d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
