<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_61735e9aae4db988ae6b96d61d2871f032d8b2c7b0c31b9f919341dbc978d6a2 extends Twig_Template
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
        $__internal_adcfc0335b06a89c66eddcc6549a8d4441848e5f53253ff47e10313e9fc20b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adcfc0335b06a89c66eddcc6549a8d4441848e5f53253ff47e10313e9fc20b66->enter($__internal_adcfc0335b06a89c66eddcc6549a8d4441848e5f53253ff47e10313e9fc20b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? null);
        echo " ";
        echo ($context["status_text"] ?? null);
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_adcfc0335b06a89c66eddcc6549a8d4441848e5f53253ff47e10313e9fc20b66->leave($__internal_adcfc0335b06a89c66eddcc6549a8d4441848e5f53253ff47e10313e9fc20b66_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
