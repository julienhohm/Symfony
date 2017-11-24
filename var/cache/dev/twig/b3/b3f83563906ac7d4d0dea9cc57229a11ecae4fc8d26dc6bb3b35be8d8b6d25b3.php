<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_89c2c37e811f517fe402f6e7ce33e4f2f12b3d88378b40055913e8aa1ebba8d6 extends Twig_Template
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
        $__internal_89bad3e96006b605fcc832ff7c5fe8017c7b685a7a3c3d8ea8d54a319c450ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89bad3e96006b605fcc832ff7c5fe8017c7b685a7a3c3d8ea8d54a319c450ade->enter($__internal_89bad3e96006b605fcc832ff7c5fe8017c7b685a7a3c3d8ea8d54a319c450ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_7f38b280101bf769d514bfa1118ee1d836a83709cf484e734b7c1134a386709e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f38b280101bf769d514bfa1118ee1d836a83709cf484e734b7c1134a386709e->enter($__internal_7f38b280101bf769d514bfa1118ee1d836a83709cf484e734b7c1134a386709e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89bad3e96006b605fcc832ff7c5fe8017c7b685a7a3c3d8ea8d54a319c450ade->leave($__internal_89bad3e96006b605fcc832ff7c5fe8017c7b685a7a3c3d8ea8d54a319c450ade_prof);

        
        $__internal_7f38b280101bf769d514bfa1118ee1d836a83709cf484e734b7c1134a386709e->leave($__internal_7f38b280101bf769d514bfa1118ee1d836a83709cf484e734b7c1134a386709e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_33462e708f043220410b5a34b7496db1f94cc5b21cd8c170dba6ad95ee2e6e93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33462e708f043220410b5a34b7496db1f94cc5b21cd8c170dba6ad95ee2e6e93->enter($__internal_33462e708f043220410b5a34b7496db1f94cc5b21cd8c170dba6ad95ee2e6e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_79f529573015ec626f85dc32fd1e237d2620abb1bc50bbe0568392442813f378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f529573015ec626f85dc32fd1e237d2620abb1bc50bbe0568392442813f378->enter($__internal_79f529573015ec626f85dc32fd1e237d2620abb1bc50bbe0568392442813f378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_79f529573015ec626f85dc32fd1e237d2620abb1bc50bbe0568392442813f378->leave($__internal_79f529573015ec626f85dc32fd1e237d2620abb1bc50bbe0568392442813f378_prof);

        
        $__internal_33462e708f043220410b5a34b7496db1f94cc5b21cd8c170dba6ad95ee2e6e93->leave($__internal_33462e708f043220410b5a34b7496db1f94cc5b21cd8c170dba6ad95ee2e6e93_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a90b8a3fbd1cf0a71e5da36b1a383da1e01a80629fe8d4f7c63b33edda2a7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a90b8a3fbd1cf0a71e5da36b1a383da1e01a80629fe8d4f7c63b33edda2a7a4->enter($__internal_3a90b8a3fbd1cf0a71e5da36b1a383da1e01a80629fe8d4f7c63b33edda2a7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_91251175ae41ba45f2bc74a5dbd352ed1ca1f06f6e8d17f5d9bcfbddbccc0d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91251175ae41ba45f2bc74a5dbd352ed1ca1f06f6e8d17f5d9bcfbddbccc0d31->enter($__internal_91251175ae41ba45f2bc74a5dbd352ed1ca1f06f6e8d17f5d9bcfbddbccc0d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_91251175ae41ba45f2bc74a5dbd352ed1ca1f06f6e8d17f5d9bcfbddbccc0d31->leave($__internal_91251175ae41ba45f2bc74a5dbd352ed1ca1f06f6e8d17f5d9bcfbddbccc0d31_prof);

        
        $__internal_3a90b8a3fbd1cf0a71e5da36b1a383da1e01a80629fe8d4f7c63b33edda2a7a4->leave($__internal_3a90b8a3fbd1cf0a71e5da36b1a383da1e01a80629fe8d4f7c63b33edda2a7a4_prof);

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
