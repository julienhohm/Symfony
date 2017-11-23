<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c6469006e9bb468c85d02cddb7e14813f1e5a0d5cc6fffe320b9a449b530167a extends Twig_Template
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
        $__internal_37f088910e78acaa65f0a13cd118ed32c6c62805bb2dc2e6c1cc266606bbcb6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f088910e78acaa65f0a13cd118ed32c6c62805bb2dc2e6c1cc266606bbcb6a->enter($__internal_37f088910e78acaa65f0a13cd118ed32c6c62805bb2dc2e6c1cc266606bbcb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : null)));
        echo "
";
        
        $__internal_37f088910e78acaa65f0a13cd118ed32c6c62805bb2dc2e6c1cc266606bbcb6a->leave($__internal_37f088910e78acaa65f0a13cd118ed32c6c62805bb2dc2e6c1cc266606bbcb6a_prof);

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
