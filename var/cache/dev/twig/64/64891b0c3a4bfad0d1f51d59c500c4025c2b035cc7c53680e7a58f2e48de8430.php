<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6b3f79290fa30e8d244df8332ef85a494179b7bebde2d2f61632b2a35f1e668f extends Twig_Template
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
        $__internal_a545adee5c7d035cee6501000b9e765cd9a1a2ad016af0aa77a174a5d745787b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a545adee5c7d035cee6501000b9e765cd9a1a2ad016af0aa77a174a5d745787b->enter($__internal_a545adee5c7d035cee6501000b9e765cd9a1a2ad016af0aa77a174a5d745787b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a545adee5c7d035cee6501000b9e765cd9a1a2ad016af0aa77a174a5d745787b->leave($__internal_a545adee5c7d035cee6501000b9e765cd9a1a2ad016af0aa77a174a5d745787b_prof);

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
        return new Twig_Source("", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
