<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_c1f258f52ab6e021b89ce3317bb5a7109e2857f83385a158ade88c470d781a53 extends Twig_Template
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
        $__internal_3e78dfeda9047f7c5b48203607192226b7ef5b1e5690b5c0ba2c12a9bd7566b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e78dfeda9047f7c5b48203607192226b7ef5b1e5690b5c0ba2c12a9bd7566b5->enter($__internal_3e78dfeda9047f7c5b48203607192226b7ef5b1e5690b5c0ba2c12a9bd7566b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_7d6bc1abcd4ed6f6d0cf7cde39e149d07e1e432c189dfb597d5945608ab8af8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6bc1abcd4ed6f6d0cf7cde39e149d07e1e432c189dfb597d5945608ab8af8c->enter($__internal_7d6bc1abcd4ed6f6d0cf7cde39e149d07e1e432c189dfb597d5945608ab8af8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3e78dfeda9047f7c5b48203607192226b7ef5b1e5690b5c0ba2c12a9bd7566b5->leave($__internal_3e78dfeda9047f7c5b48203607192226b7ef5b1e5690b5c0ba2c12a9bd7566b5_prof);

        
        $__internal_7d6bc1abcd4ed6f6d0cf7cde39e149d07e1e432c189dfb597d5945608ab8af8c->leave($__internal_7d6bc1abcd4ed6f6d0cf7cde39e149d07e1e432c189dfb597d5945608ab8af8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
