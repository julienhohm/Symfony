<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d618b59fca9a830b8ab3ed0eeb533711d1b9c8f96a2fe56b9fec819474ef979e extends Twig_Template
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
        $__internal_eb2710b85ba35f1e5dc59f7c22e8e1a68972fca13e222575b0568a6ff2bae938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb2710b85ba35f1e5dc59f7c22e8e1a68972fca13e222575b0568a6ff2bae938->enter($__internal_eb2710b85ba35f1e5dc59f7c22e8e1a68972fca13e222575b0568a6ff2bae938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0a58caa9d34cf462122129872d7f897f93e392adc1f3b2dea1f9c64bd5c05c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a58caa9d34cf462122129872d7f897f93e392adc1f3b2dea1f9c64bd5c05c07->enter($__internal_0a58caa9d34cf462122129872d7f897f93e392adc1f3b2dea1f9c64bd5c05c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2710b85ba35f1e5dc59f7c22e8e1a68972fca13e222575b0568a6ff2bae938->leave($__internal_eb2710b85ba35f1e5dc59f7c22e8e1a68972fca13e222575b0568a6ff2bae938_prof);

        
        $__internal_0a58caa9d34cf462122129872d7f897f93e392adc1f3b2dea1f9c64bd5c05c07->leave($__internal_0a58caa9d34cf462122129872d7f897f93e392adc1f3b2dea1f9c64bd5c05c07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_42f30131b7909f224ac16378b9ad802c61b6fe976800aad24e03ee0d9da2b080 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f30131b7909f224ac16378b9ad802c61b6fe976800aad24e03ee0d9da2b080->enter($__internal_42f30131b7909f224ac16378b9ad802c61b6fe976800aad24e03ee0d9da2b080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2cde6c29693814c1ab7eebc8c373ede417f9db772876a5c326c6a8e57439a36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cde6c29693814c1ab7eebc8c373ede417f9db772876a5c326c6a8e57439a36f->enter($__internal_2cde6c29693814c1ab7eebc8c373ede417f9db772876a5c326c6a8e57439a36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2cde6c29693814c1ab7eebc8c373ede417f9db772876a5c326c6a8e57439a36f->leave($__internal_2cde6c29693814c1ab7eebc8c373ede417f9db772876a5c326c6a8e57439a36f_prof);

        
        $__internal_42f30131b7909f224ac16378b9ad802c61b6fe976800aad24e03ee0d9da2b080->leave($__internal_42f30131b7909f224ac16378b9ad802c61b6fe976800aad24e03ee0d9da2b080_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c07ad3aca8b3fee0c7f70ec92b27b74b2f1c9bb219ffbf76dd7d401fb8336f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07ad3aca8b3fee0c7f70ec92b27b74b2f1c9bb219ffbf76dd7d401fb8336f23->enter($__internal_c07ad3aca8b3fee0c7f70ec92b27b74b2f1c9bb219ffbf76dd7d401fb8336f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87f651287f9ae85c1fc55af0a0075a261c79f6dff3634786e3c3a447ba046d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f651287f9ae85c1fc55af0a0075a261c79f6dff3634786e3c3a447ba046d44->enter($__internal_87f651287f9ae85c1fc55af0a0075a261c79f6dff3634786e3c3a447ba046d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_87f651287f9ae85c1fc55af0a0075a261c79f6dff3634786e3c3a447ba046d44->leave($__internal_87f651287f9ae85c1fc55af0a0075a261c79f6dff3634786e3c3a447ba046d44_prof);

        
        $__internal_c07ad3aca8b3fee0c7f70ec92b27b74b2f1c9bb219ffbf76dd7d401fb8336f23->leave($__internal_c07ad3aca8b3fee0c7f70ec92b27b74b2f1c9bb219ffbf76dd7d401fb8336f23_prof);

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
