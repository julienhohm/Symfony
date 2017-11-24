<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_04113541e54b72efbe0bde2db0ad51ce980c2fd3b06071b618da70533e663e40 extends Twig_Template
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
        $__internal_a85d41f9ae5ae86546ec3cc8e7970aae0dcd78aa310e5f7d435da3d57f06e4a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85d41f9ae5ae86546ec3cc8e7970aae0dcd78aa310e5f7d435da3d57f06e4a6->enter($__internal_a85d41f9ae5ae86546ec3cc8e7970aae0dcd78aa310e5f7d435da3d57f06e4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_34eb766f8ce2a2d286281ae5f0423490921dc216d66fec18e72c60d616e14373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34eb766f8ce2a2d286281ae5f0423490921dc216d66fec18e72c60d616e14373->enter($__internal_34eb766f8ce2a2d286281ae5f0423490921dc216d66fec18e72c60d616e14373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a85d41f9ae5ae86546ec3cc8e7970aae0dcd78aa310e5f7d435da3d57f06e4a6->leave($__internal_a85d41f9ae5ae86546ec3cc8e7970aae0dcd78aa310e5f7d435da3d57f06e4a6_prof);

        
        $__internal_34eb766f8ce2a2d286281ae5f0423490921dc216d66fec18e72c60d616e14373->leave($__internal_34eb766f8ce2a2d286281ae5f0423490921dc216d66fec18e72c60d616e14373_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
