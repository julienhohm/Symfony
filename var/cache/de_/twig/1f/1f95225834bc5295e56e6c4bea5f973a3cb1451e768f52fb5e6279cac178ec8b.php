<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d53bdc6022306765b899ef656aa8d9f0e2df2cc5daf85a5d16c7888cf66f53a4 extends Twig_Template
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
        $__internal_42c1e7c3beb9b9f6780b0ed60e534db00f5e9154640bcdd9dfb52cee75a8eecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c1e7c3beb9b9f6780b0ed60e534db00f5e9154640bcdd9dfb52cee75a8eecc->enter($__internal_42c1e7c3beb9b9f6780b0ed60e534db00f5e9154640bcdd9dfb52cee75a8eecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : null)));
        echo "
*/
";
        
        $__internal_42c1e7c3beb9b9f6780b0ed60e534db00f5e9154640bcdd9dfb52cee75a8eecc->leave($__internal_42c1e7c3beb9b9f6780b0ed60e534db00f5e9154640bcdd9dfb52cee75a8eecc_prof);

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
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
