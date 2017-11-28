<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_80a4d57c15423b9bb983e9c7388ba4a8a81c25d6ebbd9ec3fea3657cc453b13b extends Twig_Template
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
        $__internal_73c29a1fab4446b38269c14195fca28da50d8c4e9f6f244721ca9e51642cb8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c29a1fab4446b38269c14195fca28da50d8c4e9f6f244721ca9e51642cb8d5->enter($__internal_73c29a1fab4446b38269c14195fca28da50d8c4e9f6f244721ca9e51642cb8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? null)));
        echo "
*/
";
        
        $__internal_73c29a1fab4446b38269c14195fca28da50d8c4e9f6f244721ca9e51642cb8d5->leave($__internal_73c29a1fab4446b38269c14195fca28da50d8c4e9f6f244721ca9e51642cb8d5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
        return new Twig_Source("", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
