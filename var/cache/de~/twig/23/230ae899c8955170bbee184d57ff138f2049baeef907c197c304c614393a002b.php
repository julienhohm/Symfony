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
        $__internal_1b160d23702faa10e871b5105612f82f348316f72ca35de245cb33f79a04d7ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b160d23702faa10e871b5105612f82f348316f72ca35de245cb33f79a04d7ec->enter($__internal_1b160d23702faa10e871b5105612f82f348316f72ca35de245cb33f79a04d7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_2abf75cf30135e4bb49d0439caad6b0c9cc0ad6fd06f76eb5db65b8b0cf22661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abf75cf30135e4bb49d0439caad6b0c9cc0ad6fd06f76eb5db65b8b0cf22661->enter($__internal_2abf75cf30135e4bb49d0439caad6b0c9cc0ad6fd06f76eb5db65b8b0cf22661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b160d23702faa10e871b5105612f82f348316f72ca35de245cb33f79a04d7ec->leave($__internal_1b160d23702faa10e871b5105612f82f348316f72ca35de245cb33f79a04d7ec_prof);

        
        $__internal_2abf75cf30135e4bb49d0439caad6b0c9cc0ad6fd06f76eb5db65b8b0cf22661->leave($__internal_2abf75cf30135e4bb49d0439caad6b0c9cc0ad6fd06f76eb5db65b8b0cf22661_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b941eb6d6048eecb2c1e38b015bfc0142f32de1338824461e93007d9b8d4072d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b941eb6d6048eecb2c1e38b015bfc0142f32de1338824461e93007d9b8d4072d->enter($__internal_b941eb6d6048eecb2c1e38b015bfc0142f32de1338824461e93007d9b8d4072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_76a2ae6606ff1c1c39f02b192e6891f2363141c34d899eda757aa9f4f6cf4a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a2ae6606ff1c1c39f02b192e6891f2363141c34d899eda757aa9f4f6cf4a51->enter($__internal_76a2ae6606ff1c1c39f02b192e6891f2363141c34d899eda757aa9f4f6cf4a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_76a2ae6606ff1c1c39f02b192e6891f2363141c34d899eda757aa9f4f6cf4a51->leave($__internal_76a2ae6606ff1c1c39f02b192e6891f2363141c34d899eda757aa9f4f6cf4a51_prof);

        
        $__internal_b941eb6d6048eecb2c1e38b015bfc0142f32de1338824461e93007d9b8d4072d->leave($__internal_b941eb6d6048eecb2c1e38b015bfc0142f32de1338824461e93007d9b8d4072d_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fc393cb31573c44b8075b72290810af7ece7cc9b3967c20fb31af4ebfd39c293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc393cb31573c44b8075b72290810af7ece7cc9b3967c20fb31af4ebfd39c293->enter($__internal_fc393cb31573c44b8075b72290810af7ece7cc9b3967c20fb31af4ebfd39c293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_acc2e86ce36c8e88b92cb382175a242da85da28b2bc51d968505797368568287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc2e86ce36c8e88b92cb382175a242da85da28b2bc51d968505797368568287->enter($__internal_acc2e86ce36c8e88b92cb382175a242da85da28b2bc51d968505797368568287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_acc2e86ce36c8e88b92cb382175a242da85da28b2bc51d968505797368568287->leave($__internal_acc2e86ce36c8e88b92cb382175a242da85da28b2bc51d968505797368568287_prof);

        
        $__internal_fc393cb31573c44b8075b72290810af7ece7cc9b3967c20fb31af4ebfd39c293->leave($__internal_fc393cb31573c44b8075b72290810af7ece7cc9b3967c20fb31af4ebfd39c293_prof);

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
