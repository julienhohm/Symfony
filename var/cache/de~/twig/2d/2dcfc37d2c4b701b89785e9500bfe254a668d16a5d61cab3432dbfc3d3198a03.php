<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_1af2b205ad2e5885b1177b583b5d115d22c23006caf0278e200c07be47ad0b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_eb8790b4a7e869b509eb25eb5077616ebaa492eba53ed6655e741c817eb5d383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8790b4a7e869b509eb25eb5077616ebaa492eba53ed6655e741c817eb5d383->enter($__internal_eb8790b4a7e869b509eb25eb5077616ebaa492eba53ed6655e741c817eb5d383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8efb5aec7e362becee5cc1f0be6597385aaa80b779e847e61b4ae7ab029950f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efb5aec7e362becee5cc1f0be6597385aaa80b779e847e61b4ae7ab029950f6->enter($__internal_8efb5aec7e362becee5cc1f0be6597385aaa80b779e847e61b4ae7ab029950f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb8790b4a7e869b509eb25eb5077616ebaa492eba53ed6655e741c817eb5d383->leave($__internal_eb8790b4a7e869b509eb25eb5077616ebaa492eba53ed6655e741c817eb5d383_prof);

        
        $__internal_8efb5aec7e362becee5cc1f0be6597385aaa80b779e847e61b4ae7ab029950f6->leave($__internal_8efb5aec7e362becee5cc1f0be6597385aaa80b779e847e61b4ae7ab029950f6_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_41dd86de0e7938cfe8cab38826bd956fd4e069b1351595d97a2a8baa53ab20ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41dd86de0e7938cfe8cab38826bd956fd4e069b1351595d97a2a8baa53ab20ca->enter($__internal_41dd86de0e7938cfe8cab38826bd956fd4e069b1351595d97a2a8baa53ab20ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_c8399ab5936edf0854c34640138d53a4a5f8ca8fd775fcd331355918a083a4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8399ab5936edf0854c34640138d53a4a5f8ca8fd775fcd331355918a083a4cf->enter($__internal_c8399ab5936edf0854c34640138d53a4a5f8ca8fd775fcd331355918a083a4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_c8399ab5936edf0854c34640138d53a4a5f8ca8fd775fcd331355918a083a4cf->leave($__internal_c8399ab5936edf0854c34640138d53a4a5f8ca8fd775fcd331355918a083a4cf_prof);

        
        $__internal_41dd86de0e7938cfe8cab38826bd956fd4e069b1351595d97a2a8baa53ab20ca->leave($__internal_41dd86de0e7938cfe8cab38826bd956fd4e069b1351595d97a2a8baa53ab20ca_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d602ccc39328c1f0bb1a908ec27b785812ce8743c3a7a50549266cd8befafc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d602ccc39328c1f0bb1a908ec27b785812ce8743c3a7a50549266cd8befafc4->enter($__internal_8d602ccc39328c1f0bb1a908ec27b785812ce8743c3a7a50549266cd8befafc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8669ce4ee3266bdc8613f99f29c39a216e63d594f1a98b80c1aef1469467797c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8669ce4ee3266bdc8613f99f29c39a216e63d594f1a98b80c1aef1469467797c->enter($__internal_8669ce4ee3266bdc8613f99f29c39a216e63d594f1a98b80c1aef1469467797c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8669ce4ee3266bdc8613f99f29c39a216e63d594f1a98b80c1aef1469467797c->leave($__internal_8669ce4ee3266bdc8613f99f29c39a216e63d594f1a98b80c1aef1469467797c_prof);

        
        $__internal_8d602ccc39328c1f0bb1a908ec27b785812ce8743c3a7a50549266cd8befafc4->leave($__internal_8d602ccc39328c1f0bb1a908ec27b785812ce8743c3a7a50549266cd8befafc4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
