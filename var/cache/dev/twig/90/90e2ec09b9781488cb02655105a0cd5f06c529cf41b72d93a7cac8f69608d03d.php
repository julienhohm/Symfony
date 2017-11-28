<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_a3f4496e3b7ef28bed13527d5ab33012372ab1f8047aacfeae9417403788e877 extends Twig_Template
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
        $__internal_fa6349ba88f0732f36598905e4664a6199c0a55ebb2760304e613aa1295b77c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa6349ba88f0732f36598905e4664a6199c0a55ebb2760304e613aa1295b77c6->enter($__internal_fa6349ba88f0732f36598905e4664a6199c0a55ebb2760304e613aa1295b77c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_fa6349ba88f0732f36598905e4664a6199c0a55ebb2760304e613aa1295b77c6->leave($__internal_fa6349ba88f0732f36598905e4664a6199c0a55ebb2760304e613aa1295b77c6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e45cfceac9d41d9da514c0cd07435709d505983009493c0d94de394dd3504917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45cfceac9d41d9da514c0cd07435709d505983009493c0d94de394dd3504917->enter($__internal_e45cfceac9d41d9da514c0cd07435709d505983009493c0d94de394dd3504917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e45cfceac9d41d9da514c0cd07435709d505983009493c0d94de394dd3504917->leave($__internal_e45cfceac9d41d9da514c0cd07435709d505983009493c0d94de394dd3504917_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_182aea7c89575fc7f6c78e1966e4d38cbcf0e46d922e3ec3b4ce5d419280b938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182aea7c89575fc7f6c78e1966e4d38cbcf0e46d922e3ec3b4ce5d419280b938->enter($__internal_182aea7c89575fc7f6c78e1966e4d38cbcf0e46d922e3ec3b4ce5d419280b938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_182aea7c89575fc7f6c78e1966e4d38cbcf0e46d922e3ec3b4ce5d419280b938->leave($__internal_182aea7c89575fc7f6c78e1966e4d38cbcf0e46d922e3ec3b4ce5d419280b938_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_375ac5034d9c54ff7bb71f86979d791a7565ccb4ef56a61e0333f9c8482aa914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375ac5034d9c54ff7bb71f86979d791a7565ccb4ef56a61e0333f9c8482aa914->enter($__internal_375ac5034d9c54ff7bb71f86979d791a7565ccb4ef56a61e0333f9c8482aa914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_375ac5034d9c54ff7bb71f86979d791a7565ccb4ef56a61e0333f9c8482aa914->leave($__internal_375ac5034d9c54ff7bb71f86979d791a7565ccb4ef56a61e0333f9c8482aa914_prof);

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
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
