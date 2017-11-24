<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1dc8cf45edab51eeafb05318c01d68d2ac4c92a51b78e2f6fcaed50cddd3912c extends Twig_Template
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
        $__internal_590800b2a757dab62047445aa7c4bcbef95a98c000ea323360c5f0d284599b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590800b2a757dab62047445aa7c4bcbef95a98c000ea323360c5f0d284599b59->enter($__internal_590800b2a757dab62047445aa7c4bcbef95a98c000ea323360c5f0d284599b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_eff6c6b6a258a1e425e715a3c28449a16384524473dc28d1459e3bdfdcc910ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff6c6b6a258a1e425e715a3c28449a16384524473dc28d1459e3bdfdcc910ee->enter($__internal_eff6c6b6a258a1e425e715a3c28449a16384524473dc28d1459e3bdfdcc910ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_590800b2a757dab62047445aa7c4bcbef95a98c000ea323360c5f0d284599b59->leave($__internal_590800b2a757dab62047445aa7c4bcbef95a98c000ea323360c5f0d284599b59_prof);

        
        $__internal_eff6c6b6a258a1e425e715a3c28449a16384524473dc28d1459e3bdfdcc910ee->leave($__internal_eff6c6b6a258a1e425e715a3c28449a16384524473dc28d1459e3bdfdcc910ee_prof);

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
