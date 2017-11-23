<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1a9dab48292fbc982af7d3daa88e18b61f4ca8ea7e7de3f9a00de3b86f0ef11b extends Twig_Template
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
        $__internal_9cd56a7daa842f741baa86b89aa0d149b8cfd37dd5087a50e070c31d5aef6bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd56a7daa842f741baa86b89aa0d149b8cfd37dd5087a50e070c31d5aef6bd9->enter($__internal_9cd56a7daa842f741baa86b89aa0d149b8cfd37dd5087a50e070c31d5aef6bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_1c8a6226b5fdab569ab2495c147b05f998ef0043844613658a5a28e16a27e5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8a6226b5fdab569ab2495c147b05f998ef0043844613658a5a28e16a27e5cc->enter($__internal_1c8a6226b5fdab569ab2495c147b05f998ef0043844613658a5a28e16a27e5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9cd56a7daa842f741baa86b89aa0d149b8cfd37dd5087a50e070c31d5aef6bd9->leave($__internal_9cd56a7daa842f741baa86b89aa0d149b8cfd37dd5087a50e070c31d5aef6bd9_prof);

        
        $__internal_1c8a6226b5fdab569ab2495c147b05f998ef0043844613658a5a28e16a27e5cc->leave($__internal_1c8a6226b5fdab569ab2495c147b05f998ef0043844613658a5a28e16a27e5cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
