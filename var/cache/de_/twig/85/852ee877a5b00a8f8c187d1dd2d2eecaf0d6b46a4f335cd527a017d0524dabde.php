<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ccb04908a0fa90a05d88865ef7817f77acaa4e0ad1f79a63d874013a4b3c64a9 extends Twig_Template
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
        $__internal_ddddcdab48d95c029ced26a33d314bae7a37051219d86ac10b1eb940272115d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddddcdab48d95c029ced26a33d314bae7a37051219d86ac10b1eb940272115d2->enter($__internal_ddddcdab48d95c029ced26a33d314bae7a37051219d86ac10b1eb940272115d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : null)));
        echo "
";
        
        $__internal_ddddcdab48d95c029ced26a33d314bae7a37051219d86ac10b1eb940272115d2->leave($__internal_ddddcdab48d95c029ced26a33d314bae7a37051219d86ac10b1eb940272115d2_prof);

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
