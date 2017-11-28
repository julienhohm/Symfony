<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_54c3ee02db1bf819d08e3825017c1aef4f5ec5fee8f74baa22798914f59531b0 extends Twig_Template
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
        $__internal_483d08917b2f0eee74aac2a26a02e6b1c8ca2a11be62ec251954620862088f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483d08917b2f0eee74aac2a26a02e6b1c8ca2a11be62ec251954620862088f93->enter($__internal_483d08917b2f0eee74aac2a26a02e6b1c8ca2a11be62ec251954620862088f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
        
        $__internal_483d08917b2f0eee74aac2a26a02e6b1c8ca2a11be62ec251954620862088f93->leave($__internal_483d08917b2f0eee74aac2a26a02e6b1c8ca2a11be62ec251954620862088f93_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
