<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_60e7086290f182ebcc111473d9fe584b7595d75e7fdb9e9923a501ae5ca7d0d9 extends Twig_Template
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
        $__internal_831e68ef0a6f00445f10029cfcc7688f99958130b8336ca2893d9a87d974cdb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831e68ef0a6f00445f10029cfcc7688f99958130b8336ca2893d9a87d974cdb5->enter($__internal_831e68ef0a6f00445f10029cfcc7688f99958130b8336ca2893d9a87d974cdb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_831e68ef0a6f00445f10029cfcc7688f99958130b8336ca2893d9a87d974cdb5->leave($__internal_831e68ef0a6f00445f10029cfcc7688f99958130b8336ca2893d9a87d974cdb5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
