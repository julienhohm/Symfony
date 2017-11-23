<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6bb4ff11626cecb59a03a84f061116282fce74892df7fd9a7e10f17811feb733 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_7b19d3bfc479ad46c37ab5c5481606cace29caa4fce3f284cc445249c6bb0045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b19d3bfc479ad46c37ab5c5481606cace29caa4fce3f284cc445249c6bb0045->enter($__internal_7b19d3bfc479ad46c37ab5c5481606cace29caa4fce3f284cc445249c6bb0045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0df73f9cd65a303a23ee01795583f4498a063060279eb9f845a2589937a0d806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df73f9cd65a303a23ee01795583f4498a063060279eb9f845a2589937a0d806->enter($__internal_0df73f9cd65a303a23ee01795583f4498a063060279eb9f845a2589937a0d806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b19d3bfc479ad46c37ab5c5481606cace29caa4fce3f284cc445249c6bb0045->leave($__internal_7b19d3bfc479ad46c37ab5c5481606cace29caa4fce3f284cc445249c6bb0045_prof);

        
        $__internal_0df73f9cd65a303a23ee01795583f4498a063060279eb9f845a2589937a0d806->leave($__internal_0df73f9cd65a303a23ee01795583f4498a063060279eb9f845a2589937a0d806_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_091f3264c5eb9500b07479ce2338d4ab01cea4b29d027322b6a0da8e5d81a54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_091f3264c5eb9500b07479ce2338d4ab01cea4b29d027322b6a0da8e5d81a54d->enter($__internal_091f3264c5eb9500b07479ce2338d4ab01cea4b29d027322b6a0da8e5d81a54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0fe403bc3369a8792f75cb10d1a6929f18eb437f99ee6f4b586b597ee9115219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fe403bc3369a8792f75cb10d1a6929f18eb437f99ee6f4b586b597ee9115219->enter($__internal_0fe403bc3369a8792f75cb10d1a6929f18eb437f99ee6f4b586b597ee9115219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0fe403bc3369a8792f75cb10d1a6929f18eb437f99ee6f4b586b597ee9115219->leave($__internal_0fe403bc3369a8792f75cb10d1a6929f18eb437f99ee6f4b586b597ee9115219_prof);

        
        $__internal_091f3264c5eb9500b07479ce2338d4ab01cea4b29d027322b6a0da8e5d81a54d->leave($__internal_091f3264c5eb9500b07479ce2338d4ab01cea4b29d027322b6a0da8e5d81a54d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b17ff8ddd250dc0d5b609ba2f50665156b9c15b129d98315476f96f27d628a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17ff8ddd250dc0d5b609ba2f50665156b9c15b129d98315476f96f27d628a64->enter($__internal_b17ff8ddd250dc0d5b609ba2f50665156b9c15b129d98315476f96f27d628a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40a74444d484d3c31700f9b7eaa6f4db99ada226d647cdb00b7e1cd34b9e39f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40a74444d484d3c31700f9b7eaa6f4db99ada226d647cdb00b7e1cd34b9e39f3->enter($__internal_40a74444d484d3c31700f9b7eaa6f4db99ada226d647cdb00b7e1cd34b9e39f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_40a74444d484d3c31700f9b7eaa6f4db99ada226d647cdb00b7e1cd34b9e39f3->leave($__internal_40a74444d484d3c31700f9b7eaa6f4db99ada226d647cdb00b7e1cd34b9e39f3_prof);

        
        $__internal_b17ff8ddd250dc0d5b609ba2f50665156b9c15b129d98315476f96f27d628a64->leave($__internal_b17ff8ddd250dc0d5b609ba2f50665156b9c15b129d98315476f96f27d628a64_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
