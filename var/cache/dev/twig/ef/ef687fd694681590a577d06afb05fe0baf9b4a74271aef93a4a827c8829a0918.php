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
        $__internal_cc0bd4fe6a723b2b44bc9daf56a41cb490930b44659a7d5cff2602ed12438b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0bd4fe6a723b2b44bc9daf56a41cb490930b44659a7d5cff2602ed12438b23->enter($__internal_cc0bd4fe6a723b2b44bc9daf56a41cb490930b44659a7d5cff2602ed12438b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3a09c3fda81b3a942212ceefcb02a7d90492a0ca2c2d3168ca3a7638364d527e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a09c3fda81b3a942212ceefcb02a7d90492a0ca2c2d3168ca3a7638364d527e->enter($__internal_3a09c3fda81b3a942212ceefcb02a7d90492a0ca2c2d3168ca3a7638364d527e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc0bd4fe6a723b2b44bc9daf56a41cb490930b44659a7d5cff2602ed12438b23->leave($__internal_cc0bd4fe6a723b2b44bc9daf56a41cb490930b44659a7d5cff2602ed12438b23_prof);

        
        $__internal_3a09c3fda81b3a942212ceefcb02a7d90492a0ca2c2d3168ca3a7638364d527e->leave($__internal_3a09c3fda81b3a942212ceefcb02a7d90492a0ca2c2d3168ca3a7638364d527e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e681a9541951cc2435408a6d2daac253a12ba33be359e61196a729ee4cb71b49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e681a9541951cc2435408a6d2daac253a12ba33be359e61196a729ee4cb71b49->enter($__internal_e681a9541951cc2435408a6d2daac253a12ba33be359e61196a729ee4cb71b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f667cd7a4f82ec6741352ee602cbfeb6b48b47bb68603e2a0220aee16c4a043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f667cd7a4f82ec6741352ee602cbfeb6b48b47bb68603e2a0220aee16c4a043->enter($__internal_2f667cd7a4f82ec6741352ee602cbfeb6b48b47bb68603e2a0220aee16c4a043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f667cd7a4f82ec6741352ee602cbfeb6b48b47bb68603e2a0220aee16c4a043->leave($__internal_2f667cd7a4f82ec6741352ee602cbfeb6b48b47bb68603e2a0220aee16c4a043_prof);

        
        $__internal_e681a9541951cc2435408a6d2daac253a12ba33be359e61196a729ee4cb71b49->leave($__internal_e681a9541951cc2435408a6d2daac253a12ba33be359e61196a729ee4cb71b49_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0401b89dc41ae45571a0b24aa5e4c6defd009f88980c88dfa135b3518aca1d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0401b89dc41ae45571a0b24aa5e4c6defd009f88980c88dfa135b3518aca1d79->enter($__internal_0401b89dc41ae45571a0b24aa5e4c6defd009f88980c88dfa135b3518aca1d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cfec395e345eab8859ffd285bceeef9ba805dc4e4c6c080136c00cc507fbbf81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfec395e345eab8859ffd285bceeef9ba805dc4e4c6c080136c00cc507fbbf81->enter($__internal_cfec395e345eab8859ffd285bceeef9ba805dc4e4c6c080136c00cc507fbbf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cfec395e345eab8859ffd285bceeef9ba805dc4e4c6c080136c00cc507fbbf81->leave($__internal_cfec395e345eab8859ffd285bceeef9ba805dc4e4c6c080136c00cc507fbbf81_prof);

        
        $__internal_0401b89dc41ae45571a0b24aa5e4c6defd009f88980c88dfa135b3518aca1d79->leave($__internal_0401b89dc41ae45571a0b24aa5e4c6defd009f88980c88dfa135b3518aca1d79_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8af6bf1b893b623a6d97abe3b785fc963665ba010b0abaa5310504ffc1522afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af6bf1b893b623a6d97abe3b785fc963665ba010b0abaa5310504ffc1522afb->enter($__internal_8af6bf1b893b623a6d97abe3b785fc963665ba010b0abaa5310504ffc1522afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f9a48a47ba748fb736f845f337252369616bb5dee117bcdb23ce1dc1efe4d604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a48a47ba748fb736f845f337252369616bb5dee117bcdb23ce1dc1efe4d604->enter($__internal_f9a48a47ba748fb736f845f337252369616bb5dee117bcdb23ce1dc1efe4d604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f9a48a47ba748fb736f845f337252369616bb5dee117bcdb23ce1dc1efe4d604->leave($__internal_f9a48a47ba748fb736f845f337252369616bb5dee117bcdb23ce1dc1efe4d604_prof);

        
        $__internal_8af6bf1b893b623a6d97abe3b785fc963665ba010b0abaa5310504ffc1522afb->leave($__internal_8af6bf1b893b623a6d97abe3b785fc963665ba010b0abaa5310504ffc1522afb_prof);

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
