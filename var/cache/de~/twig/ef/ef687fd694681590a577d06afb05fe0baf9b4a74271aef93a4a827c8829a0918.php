<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbba394f453aced082e220bbbca5778fab66938b2ef83f608a1f3e2184a9b075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbba394f453aced082e220bbbca5778fab66938b2ef83f608a1f3e2184a9b075->enter($__internal_dbba394f453aced082e220bbbca5778fab66938b2ef83f608a1f3e2184a9b075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_50c35156fdd769c5db085c71f54b5f2a27733455fa6a0c6827d7cee6ff5dfab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c35156fdd769c5db085c71f54b5f2a27733455fa6a0c6827d7cee6ff5dfab5->enter($__internal_50c35156fdd769c5db085c71f54b5f2a27733455fa6a0c6827d7cee6ff5dfab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbba394f453aced082e220bbbca5778fab66938b2ef83f608a1f3e2184a9b075->leave($__internal_dbba394f453aced082e220bbbca5778fab66938b2ef83f608a1f3e2184a9b075_prof);

        
        $__internal_50c35156fdd769c5db085c71f54b5f2a27733455fa6a0c6827d7cee6ff5dfab5->leave($__internal_50c35156fdd769c5db085c71f54b5f2a27733455fa6a0c6827d7cee6ff5dfab5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff0d8fc5f1d918a82f7325d7f47607849dc89c1a21ae27aa37a82aa4983e33f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff0d8fc5f1d918a82f7325d7f47607849dc89c1a21ae27aa37a82aa4983e33f0->enter($__internal_ff0d8fc5f1d918a82f7325d7f47607849dc89c1a21ae27aa37a82aa4983e33f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8aacb412750cf72438070b1e6f5a90be336995dd0b1acd156740a9f69d65c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8aacb412750cf72438070b1e6f5a90be336995dd0b1acd156740a9f69d65c4a->enter($__internal_a8aacb412750cf72438070b1e6f5a90be336995dd0b1acd156740a9f69d65c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8aacb412750cf72438070b1e6f5a90be336995dd0b1acd156740a9f69d65c4a->leave($__internal_a8aacb412750cf72438070b1e6f5a90be336995dd0b1acd156740a9f69d65c4a_prof);

        
        $__internal_ff0d8fc5f1d918a82f7325d7f47607849dc89c1a21ae27aa37a82aa4983e33f0->leave($__internal_ff0d8fc5f1d918a82f7325d7f47607849dc89c1a21ae27aa37a82aa4983e33f0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5c6015d25d2faca6b16262c4dcf41eef24c62c9aa19ec728a22d9a3ae55d4c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6015d25d2faca6b16262c4dcf41eef24c62c9aa19ec728a22d9a3ae55d4c15->enter($__internal_5c6015d25d2faca6b16262c4dcf41eef24c62c9aa19ec728a22d9a3ae55d4c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0dabcb2b537a3cbfe3edb40618ae1ffccd2d5e18985a84798aec53a405de65f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dabcb2b537a3cbfe3edb40618ae1ffccd2d5e18985a84798aec53a405de65f8->enter($__internal_0dabcb2b537a3cbfe3edb40618ae1ffccd2d5e18985a84798aec53a405de65f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0dabcb2b537a3cbfe3edb40618ae1ffccd2d5e18985a84798aec53a405de65f8->leave($__internal_0dabcb2b537a3cbfe3edb40618ae1ffccd2d5e18985a84798aec53a405de65f8_prof);

        
        $__internal_5c6015d25d2faca6b16262c4dcf41eef24c62c9aa19ec728a22d9a3ae55d4c15->leave($__internal_5c6015d25d2faca6b16262c4dcf41eef24c62c9aa19ec728a22d9a3ae55d4c15_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_134def4cf84bf4c826a8e85a2fe89c03a884d0bbc6ea0e018d0f7994f0ac5031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_134def4cf84bf4c826a8e85a2fe89c03a884d0bbc6ea0e018d0f7994f0ac5031->enter($__internal_134def4cf84bf4c826a8e85a2fe89c03a884d0bbc6ea0e018d0f7994f0ac5031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2c50246459c4817002f884d4be2761fd38b4ea701a2774b5e69ec3ad3904744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c50246459c4817002f884d4be2761fd38b4ea701a2774b5e69ec3ad3904744->enter($__internal_d2c50246459c4817002f884d4be2761fd38b4ea701a2774b5e69ec3ad3904744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2c50246459c4817002f884d4be2761fd38b4ea701a2774b5e69ec3ad3904744->leave($__internal_d2c50246459c4817002f884d4be2761fd38b4ea701a2774b5e69ec3ad3904744_prof);

        
        $__internal_134def4cf84bf4c826a8e85a2fe89c03a884d0bbc6ea0e018d0f7994f0ac5031->leave($__internal_134def4cf84bf4c826a8e85a2fe89c03a884d0bbc6ea0e018d0f7994f0ac5031_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
