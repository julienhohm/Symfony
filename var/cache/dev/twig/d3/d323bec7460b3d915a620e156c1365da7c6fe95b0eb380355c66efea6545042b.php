<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c96f6c2dfb32a1082817420a38bf4c8a8873649359c68c62ce12711cc0b1c039 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf1a69f6edc329065b086059a70647285b81272c68b7d3603a22ce086c22a678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1a69f6edc329065b086059a70647285b81272c68b7d3603a22ce086c22a678->enter($__internal_cf1a69f6edc329065b086059a70647285b81272c68b7d3603a22ce086c22a678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0534e9b33732d4e1f9a7e1232f265706cea240e8cfa204b3c59b5c8516f74185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0534e9b33732d4e1f9a7e1232f265706cea240e8cfa204b3c59b5c8516f74185->enter($__internal_0534e9b33732d4e1f9a7e1232f265706cea240e8cfa204b3c59b5c8516f74185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf1a69f6edc329065b086059a70647285b81272c68b7d3603a22ce086c22a678->leave($__internal_cf1a69f6edc329065b086059a70647285b81272c68b7d3603a22ce086c22a678_prof);

        
        $__internal_0534e9b33732d4e1f9a7e1232f265706cea240e8cfa204b3c59b5c8516f74185->leave($__internal_0534e9b33732d4e1f9a7e1232f265706cea240e8cfa204b3c59b5c8516f74185_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81d6b71c1275cdf48a4a72d5be30169a62f455f0ee9c19125a99762a0ec57cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d6b71c1275cdf48a4a72d5be30169a62f455f0ee9c19125a99762a0ec57cfc->enter($__internal_81d6b71c1275cdf48a4a72d5be30169a62f455f0ee9c19125a99762a0ec57cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0ceaf2f182ef6c719002a5cde90005401a726aff3ff492901fe5f88375dc30e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ceaf2f182ef6c719002a5cde90005401a726aff3ff492901fe5f88375dc30e1->enter($__internal_0ceaf2f182ef6c719002a5cde90005401a726aff3ff492901fe5f88375dc30e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0ceaf2f182ef6c719002a5cde90005401a726aff3ff492901fe5f88375dc30e1->leave($__internal_0ceaf2f182ef6c719002a5cde90005401a726aff3ff492901fe5f88375dc30e1_prof);

        
        $__internal_81d6b71c1275cdf48a4a72d5be30169a62f455f0ee9c19125a99762a0ec57cfc->leave($__internal_81d6b71c1275cdf48a4a72d5be30169a62f455f0ee9c19125a99762a0ec57cfc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_00926b9f635d4e7f119a3172e359ab031c0a719949b11f45cd94c431be3c6e75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00926b9f635d4e7f119a3172e359ab031c0a719949b11f45cd94c431be3c6e75->enter($__internal_00926b9f635d4e7f119a3172e359ab031c0a719949b11f45cd94c431be3c6e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_968ce567c4ae607362da551f6fb5f83e119e5236319e58bdfa7d1cf9fe34c6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968ce567c4ae607362da551f6fb5f83e119e5236319e58bdfa7d1cf9fe34c6ce->enter($__internal_968ce567c4ae607362da551f6fb5f83e119e5236319e58bdfa7d1cf9fe34c6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_968ce567c4ae607362da551f6fb5f83e119e5236319e58bdfa7d1cf9fe34c6ce->leave($__internal_968ce567c4ae607362da551f6fb5f83e119e5236319e58bdfa7d1cf9fe34c6ce_prof);

        
        $__internal_00926b9f635d4e7f119a3172e359ab031c0a719949b11f45cd94c431be3c6e75->leave($__internal_00926b9f635d4e7f119a3172e359ab031c0a719949b11f45cd94c431be3c6e75_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
