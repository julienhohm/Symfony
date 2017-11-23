<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_b00aba3589b70453d58b40c18b999f2b9191dfd342ca24cc0d8f9c408612e844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b2fb1c16c2e4380a88c9cf7c2307ab19d5586b25ec1fc8be9c4297f09501d2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2fb1c16c2e4380a88c9cf7c2307ab19d5586b25ec1fc8be9c4297f09501d2b->enter($__internal_5b2fb1c16c2e4380a88c9cf7c2307ab19d5586b25ec1fc8be9c4297f09501d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_cecd855e782206a52faa0b7f32595e74250065d5f7ef57ba3b1599e2e5b24133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecd855e782206a52faa0b7f32595e74250065d5f7ef57ba3b1599e2e5b24133->enter($__internal_cecd855e782206a52faa0b7f32595e74250065d5f7ef57ba3b1599e2e5b24133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b2fb1c16c2e4380a88c9cf7c2307ab19d5586b25ec1fc8be9c4297f09501d2b->leave($__internal_5b2fb1c16c2e4380a88c9cf7c2307ab19d5586b25ec1fc8be9c4297f09501d2b_prof);

        
        $__internal_cecd855e782206a52faa0b7f32595e74250065d5f7ef57ba3b1599e2e5b24133->leave($__internal_cecd855e782206a52faa0b7f32595e74250065d5f7ef57ba3b1599e2e5b24133_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_f6c11751fe6c5b62778682e8c6f7b0767ab5af2e466ff1083bbab8308b3bafcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c11751fe6c5b62778682e8c6f7b0767ab5af2e466ff1083bbab8308b3bafcd->enter($__internal_f6c11751fe6c5b62778682e8c6f7b0767ab5af2e466ff1083bbab8308b3bafcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9f8f8413e0d36596911aae77a04fbe85784dd553ccb31893b47824f90972d6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f8f8413e0d36596911aae77a04fbe85784dd553ccb31893b47824f90972d6b9->enter($__internal_9f8f8413e0d36596911aae77a04fbe85784dd553ccb31893b47824f90972d6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_9f8f8413e0d36596911aae77a04fbe85784dd553ccb31893b47824f90972d6b9->leave($__internal_9f8f8413e0d36596911aae77a04fbe85784dd553ccb31893b47824f90972d6b9_prof);

        
        $__internal_f6c11751fe6c5b62778682e8c6f7b0767ab5af2e466ff1083bbab8308b3bafcd->leave($__internal_f6c11751fe6c5b62778682e8c6f7b0767ab5af2e466ff1083bbab8308b3bafcd_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_50957908cf5a2ef4fe06e6a74e66147d75cd6b874ef34db7d6083bdc8cd45406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50957908cf5a2ef4fe06e6a74e66147d75cd6b874ef34db7d6083bdc8cd45406->enter($__internal_50957908cf5a2ef4fe06e6a74e66147d75cd6b874ef34db7d6083bdc8cd45406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8aa138fc909c5d26cd76f006076ed8eaab17288d97c8e5227e62dc457150d070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa138fc909c5d26cd76f006076ed8eaab17288d97c8e5227e62dc457150d070->enter($__internal_8aa138fc909c5d26cd76f006076ed8eaab17288d97c8e5227e62dc457150d070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8aa138fc909c5d26cd76f006076ed8eaab17288d97c8e5227e62dc457150d070->leave($__internal_8aa138fc909c5d26cd76f006076ed8eaab17288d97c8e5227e62dc457150d070_prof);

        
        $__internal_50957908cf5a2ef4fe06e6a74e66147d75cd6b874ef34db7d6083bdc8cd45406->leave($__internal_50957908cf5a2ef4fe06e6a74e66147d75cd6b874ef34db7d6083bdc8cd45406_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
