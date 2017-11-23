<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e180f9812d9abd59e8d051fff5bf906fb5a7a2e7a1089a63df52725eeff688ea extends Twig_Template
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
        $__internal_f525f7719c98c5aee27b04e31a5d4c99bca042e2a7d47db79cbbf314838d7eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f525f7719c98c5aee27b04e31a5d4c99bca042e2a7d47db79cbbf314838d7eda->enter($__internal_f525f7719c98c5aee27b04e31a5d4c99bca042e2a7d47db79cbbf314838d7eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_55a966d66e944282bf6981ed95b27bcc66cfbe5de766065988025d68da0518ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a966d66e944282bf6981ed95b27bcc66cfbe5de766065988025d68da0518ac->enter($__internal_55a966d66e944282bf6981ed95b27bcc66cfbe5de766065988025d68da0518ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f525f7719c98c5aee27b04e31a5d4c99bca042e2a7d47db79cbbf314838d7eda->leave($__internal_f525f7719c98c5aee27b04e31a5d4c99bca042e2a7d47db79cbbf314838d7eda_prof);

        
        $__internal_55a966d66e944282bf6981ed95b27bcc66cfbe5de766065988025d68da0518ac->leave($__internal_55a966d66e944282bf6981ed95b27bcc66cfbe5de766065988025d68da0518ac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
