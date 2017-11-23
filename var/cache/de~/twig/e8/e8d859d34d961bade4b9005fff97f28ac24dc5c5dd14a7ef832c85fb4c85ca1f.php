<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_80fb3a719a8df43bc36ec504dc75df625d94e38a75044c2f8ac923e5e7692b72 extends Twig_Template
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
        $__internal_5210426435604683eab2735adaf2a77db6f79dacf1a81b62070eba223edbd201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5210426435604683eab2735adaf2a77db6f79dacf1a81b62070eba223edbd201->enter($__internal_5210426435604683eab2735adaf2a77db6f79dacf1a81b62070eba223edbd201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_9c68e5789f9439b7ea4f6188c61ab9cc4f7a24e853a272afa1ca6970b5a45975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c68e5789f9439b7ea4f6188c61ab9cc4f7a24e853a272afa1ca6970b5a45975->enter($__internal_9c68e5789f9439b7ea4f6188c61ab9cc4f7a24e853a272afa1ca6970b5a45975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5210426435604683eab2735adaf2a77db6f79dacf1a81b62070eba223edbd201->leave($__internal_5210426435604683eab2735adaf2a77db6f79dacf1a81b62070eba223edbd201_prof);

        
        $__internal_9c68e5789f9439b7ea4f6188c61ab9cc4f7a24e853a272afa1ca6970b5a45975->leave($__internal_9c68e5789f9439b7ea4f6188c61ab9cc4f7a24e853a272afa1ca6970b5a45975_prof);

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
