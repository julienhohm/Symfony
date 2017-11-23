<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_995a539d201bec0b1ed873b7cd4c429bf80149cee6e55c1bb4ce9598d95c0344 extends Twig_Template
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
        $__internal_7054faf3672a20083d945578ee717fb3c8ebd80c01ed252b797188e0d61dfe00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7054faf3672a20083d945578ee717fb3c8ebd80c01ed252b797188e0d61dfe00->enter($__internal_7054faf3672a20083d945578ee717fb3c8ebd80c01ed252b797188e0d61dfe00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : null)));
        echo "
*/
";
        
        $__internal_7054faf3672a20083d945578ee717fb3c8ebd80c01ed252b797188e0d61dfe00->leave($__internal_7054faf3672a20083d945578ee717fb3c8ebd80c01ed252b797188e0d61dfe00_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
        return new Twig_Source("", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
