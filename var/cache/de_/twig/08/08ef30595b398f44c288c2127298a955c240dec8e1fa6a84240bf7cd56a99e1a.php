<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_8d485e6bf9b50bf4b986edaedfab53afd8e59fa147e313285896a7de9817314e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36f54f33b1b546a4a90d410785ceb4a6fb2e83b5ca0c093b5f4ed6ba46e2ef72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36f54f33b1b546a4a90d410785ceb4a6fb2e83b5ca0c093b5f4ed6ba46e2ef72->enter($__internal_36f54f33b1b546a4a90d410785ceb4a6fb2e83b5ca0c093b5f4ed6ba46e2ef72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "css", null, true);
        echo "

*/
";
        
        $__internal_36f54f33b1b546a4a90d410785ceb4a6fb2e83b5ca0c093b5f4ed6ba46e2ef72->leave($__internal_36f54f33b1b546a4a90d410785ceb4a6fb2e83b5ca0c093b5f4ed6ba46e2ef72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
