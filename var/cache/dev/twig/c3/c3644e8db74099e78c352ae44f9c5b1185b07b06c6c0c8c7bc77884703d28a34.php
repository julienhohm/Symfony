<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_b59dc6c72091c9c852636259a4a7e537fd79d7b5f22ac2166e2ba6acd0f2df3b extends Twig_Template
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
        $__internal_4849fc6aa54001caeb3041dcf0005f50a91efa9e33afd78e900d971f4204a86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4849fc6aa54001caeb3041dcf0005f50a91efa9e33afd78e900d971f4204a86a->enter($__internal_4849fc6aa54001caeb3041dcf0005f50a91efa9e33afd78e900d971f4204a86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_fae968d462973bff5e0ae55879695ea9c14489f395801a12a3b2248c6da4d0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae968d462973bff5e0ae55879695ea9c14489f395801a12a3b2248c6da4d0ff->enter($__internal_fae968d462973bff5e0ae55879695ea9c14489f395801a12a3b2248c6da4d0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4849fc6aa54001caeb3041dcf0005f50a91efa9e33afd78e900d971f4204a86a->leave($__internal_4849fc6aa54001caeb3041dcf0005f50a91efa9e33afd78e900d971f4204a86a_prof);

        
        $__internal_fae968d462973bff5e0ae55879695ea9c14489f395801a12a3b2248c6da4d0ff->leave($__internal_fae968d462973bff5e0ae55879695ea9c14489f395801a12a3b2248c6da4d0ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_75f152cdf27889a22d7894f9d339cebaafa0d8b10dbd172580a3e064ecb29e27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f152cdf27889a22d7894f9d339cebaafa0d8b10dbd172580a3e064ecb29e27->enter($__internal_75f152cdf27889a22d7894f9d339cebaafa0d8b10dbd172580a3e064ecb29e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c9d3baf48b7d312a7811ecb9eb46f927feff89af62f4362900791b9a47df7dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d3baf48b7d312a7811ecb9eb46f927feff89af62f4362900791b9a47df7dca->enter($__internal_c9d3baf48b7d312a7811ecb9eb46f927feff89af62f4362900791b9a47df7dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c9d3baf48b7d312a7811ecb9eb46f927feff89af62f4362900791b9a47df7dca->leave($__internal_c9d3baf48b7d312a7811ecb9eb46f927feff89af62f4362900791b9a47df7dca_prof);

        
        $__internal_75f152cdf27889a22d7894f9d339cebaafa0d8b10dbd172580a3e064ecb29e27->leave($__internal_75f152cdf27889a22d7894f9d339cebaafa0d8b10dbd172580a3e064ecb29e27_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_94dcebdb1285ba5c57852a6d2ac026a1620456626e0eeca1b09577f0d6a490ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94dcebdb1285ba5c57852a6d2ac026a1620456626e0eeca1b09577f0d6a490ef->enter($__internal_94dcebdb1285ba5c57852a6d2ac026a1620456626e0eeca1b09577f0d6a490ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97faa7f884eda577ad4082887b875c6f637cb89c0aeab1f6fd8bf4d351834736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97faa7f884eda577ad4082887b875c6f637cb89c0aeab1f6fd8bf4d351834736->enter($__internal_97faa7f884eda577ad4082887b875c6f637cb89c0aeab1f6fd8bf4d351834736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_97faa7f884eda577ad4082887b875c6f637cb89c0aeab1f6fd8bf4d351834736->leave($__internal_97faa7f884eda577ad4082887b875c6f637cb89c0aeab1f6fd8bf4d351834736_prof);

        
        $__internal_94dcebdb1285ba5c57852a6d2ac026a1620456626e0eeca1b09577f0d6a490ef->leave($__internal_94dcebdb1285ba5c57852a6d2ac026a1620456626e0eeca1b09577f0d6a490ef_prof);

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
