<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_45bea2313c538a2004e5fe6b6234a045a6da19e7e482b2aaa3ab21d8affe724a extends Twig_Template
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
        $__internal_2adf2da253f2c7efe0d09050e6b527243441425c7ff2e0a8754e243b4f38eba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adf2da253f2c7efe0d09050e6b527243441425c7ff2e0a8754e243b4f38eba6->enter($__internal_2adf2da253f2c7efe0d09050e6b527243441425c7ff2e0a8754e243b4f38eba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_5bb1427bdc0eb92518e4f50c5ce3182e9a0d609d0300f7fcafb44f5715aa3209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb1427bdc0eb92518e4f50c5ce3182e9a0d609d0300f7fcafb44f5715aa3209->enter($__internal_5bb1427bdc0eb92518e4f50c5ce3182e9a0d609d0300f7fcafb44f5715aa3209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2adf2da253f2c7efe0d09050e6b527243441425c7ff2e0a8754e243b4f38eba6->leave($__internal_2adf2da253f2c7efe0d09050e6b527243441425c7ff2e0a8754e243b4f38eba6_prof);

        
        $__internal_5bb1427bdc0eb92518e4f50c5ce3182e9a0d609d0300f7fcafb44f5715aa3209->leave($__internal_5bb1427bdc0eb92518e4f50c5ce3182e9a0d609d0300f7fcafb44f5715aa3209_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_145f7649edde00da466d362554e8820cdfd55865c4f46168604cebb1c47521f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_145f7649edde00da466d362554e8820cdfd55865c4f46168604cebb1c47521f2->enter($__internal_145f7649edde00da466d362554e8820cdfd55865c4f46168604cebb1c47521f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_888d80fb7b8f4223bab621b5a079615c06f67a41f2a742652de811fe39701853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888d80fb7b8f4223bab621b5a079615c06f67a41f2a742652de811fe39701853->enter($__internal_888d80fb7b8f4223bab621b5a079615c06f67a41f2a742652de811fe39701853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_888d80fb7b8f4223bab621b5a079615c06f67a41f2a742652de811fe39701853->leave($__internal_888d80fb7b8f4223bab621b5a079615c06f67a41f2a742652de811fe39701853_prof);

        
        $__internal_145f7649edde00da466d362554e8820cdfd55865c4f46168604cebb1c47521f2->leave($__internal_145f7649edde00da466d362554e8820cdfd55865c4f46168604cebb1c47521f2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e435497711755e65dbb8a8f4be592add595dabaab3d9205a9bf8a336146a3e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e435497711755e65dbb8a8f4be592add595dabaab3d9205a9bf8a336146a3e58->enter($__internal_e435497711755e65dbb8a8f4be592add595dabaab3d9205a9bf8a336146a3e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f63692821f1c82389dd79aca809ac4079534f5521a23c7625dae00fda474cc7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63692821f1c82389dd79aca809ac4079534f5521a23c7625dae00fda474cc7c->enter($__internal_f63692821f1c82389dd79aca809ac4079534f5521a23c7625dae00fda474cc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f63692821f1c82389dd79aca809ac4079534f5521a23c7625dae00fda474cc7c->leave($__internal_f63692821f1c82389dd79aca809ac4079534f5521a23c7625dae00fda474cc7c_prof);

        
        $__internal_e435497711755e65dbb8a8f4be592add595dabaab3d9205a9bf8a336146a3e58->leave($__internal_e435497711755e65dbb8a8f4be592add595dabaab3d9205a9bf8a336146a3e58_prof);

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
