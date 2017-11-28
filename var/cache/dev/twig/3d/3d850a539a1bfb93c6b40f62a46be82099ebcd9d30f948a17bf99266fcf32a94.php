<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_bee46fc3a59cfc9adfb27f9befacf4eac81fa0fddb14b3aecddaa03b4ca8c6b7 extends Twig_Template
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
        $__internal_cd38ef2873fd00847ac31c51f819f1e5184f04b19dada8d42b87a6a5d615930e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd38ef2873fd00847ac31c51f819f1e5184f04b19dada8d42b87a6a5d615930e->enter($__internal_cd38ef2873fd00847ac31c51f819f1e5184f04b19dada8d42b87a6a5d615930e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
";
        
        $__internal_cd38ef2873fd00847ac31c51f819f1e5184f04b19dada8d42b87a6a5d615930e->leave($__internal_cd38ef2873fd00847ac31c51f819f1e5184f04b19dada8d42b87a6a5d615930e_prof);

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
        return new Twig_Source("", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
