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
        $__internal_31d12044e1227afa11077727f51e371026946f6a33d4b19344241fef7fea38f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d12044e1227afa11077727f51e371026946f6a33d4b19344241fef7fea38f8->enter($__internal_31d12044e1227afa11077727f51e371026946f6a33d4b19344241fef7fea38f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_77fddc561224344a84f59a27ad09d84aacc9ee853c43fbae54ae7bf603200b84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fddc561224344a84f59a27ad09d84aacc9ee853c43fbae54ae7bf603200b84->enter($__internal_77fddc561224344a84f59a27ad09d84aacc9ee853c43fbae54ae7bf603200b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d12044e1227afa11077727f51e371026946f6a33d4b19344241fef7fea38f8->leave($__internal_31d12044e1227afa11077727f51e371026946f6a33d4b19344241fef7fea38f8_prof);

        
        $__internal_77fddc561224344a84f59a27ad09d84aacc9ee853c43fbae54ae7bf603200b84->leave($__internal_77fddc561224344a84f59a27ad09d84aacc9ee853c43fbae54ae7bf603200b84_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_35ead80658274e64c8e363c689276f660a4b3a4cb459b9f0ac7c2c94284e7ce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ead80658274e64c8e363c689276f660a4b3a4cb459b9f0ac7c2c94284e7ce3->enter($__internal_35ead80658274e64c8e363c689276f660a4b3a4cb459b9f0ac7c2c94284e7ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_201ce47f712cdc8259651d56dba245463cd7807b7e5f2a48d485018dc0c49788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201ce47f712cdc8259651d56dba245463cd7807b7e5f2a48d485018dc0c49788->enter($__internal_201ce47f712cdc8259651d56dba245463cd7807b7e5f2a48d485018dc0c49788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_201ce47f712cdc8259651d56dba245463cd7807b7e5f2a48d485018dc0c49788->leave($__internal_201ce47f712cdc8259651d56dba245463cd7807b7e5f2a48d485018dc0c49788_prof);

        
        $__internal_35ead80658274e64c8e363c689276f660a4b3a4cb459b9f0ac7c2c94284e7ce3->leave($__internal_35ead80658274e64c8e363c689276f660a4b3a4cb459b9f0ac7c2c94284e7ce3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16b3c285c3566d007da586a728c1b247d1da5a397004ab9e9e0dd4c09c0ab961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b3c285c3566d007da586a728c1b247d1da5a397004ab9e9e0dd4c09c0ab961->enter($__internal_16b3c285c3566d007da586a728c1b247d1da5a397004ab9e9e0dd4c09c0ab961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_119f1babf8f707071b1ca04e52b9c856c398d011fc3b597d431a48f668e9cacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119f1babf8f707071b1ca04e52b9c856c398d011fc3b597d431a48f668e9cacb->enter($__internal_119f1babf8f707071b1ca04e52b9c856c398d011fc3b597d431a48f668e9cacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_119f1babf8f707071b1ca04e52b9c856c398d011fc3b597d431a48f668e9cacb->leave($__internal_119f1babf8f707071b1ca04e52b9c856c398d011fc3b597d431a48f668e9cacb_prof);

        
        $__internal_16b3c285c3566d007da586a728c1b247d1da5a397004ab9e9e0dd4c09c0ab961->leave($__internal_16b3c285c3566d007da586a728c1b247d1da5a397004ab9e9e0dd4c09c0ab961_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19a940028d60dcfe4b05ea32acda2779a1b7517996051d02164d3bece698eb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a940028d60dcfe4b05ea32acda2779a1b7517996051d02164d3bece698eb21->enter($__internal_19a940028d60dcfe4b05ea32acda2779a1b7517996051d02164d3bece698eb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_19e9b8d08b529ff83f5a91ad0c27630e2df95f33621124d5180d54d40decbd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e9b8d08b529ff83f5a91ad0c27630e2df95f33621124d5180d54d40decbd77->enter($__internal_19e9b8d08b529ff83f5a91ad0c27630e2df95f33621124d5180d54d40decbd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_19e9b8d08b529ff83f5a91ad0c27630e2df95f33621124d5180d54d40decbd77->leave($__internal_19e9b8d08b529ff83f5a91ad0c27630e2df95f33621124d5180d54d40decbd77_prof);

        
        $__internal_19a940028d60dcfe4b05ea32acda2779a1b7517996051d02164d3bece698eb21->leave($__internal_19a940028d60dcfe4b05ea32acda2779a1b7517996051d02164d3bece698eb21_prof);

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
