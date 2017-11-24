<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
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
        $__internal_50f45364c608161dcdacfbc9fc783fa2720f1e2fa93bc2e91f679fb060fb6cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50f45364c608161dcdacfbc9fc783fa2720f1e2fa93bc2e91f679fb060fb6cd1->enter($__internal_50f45364c608161dcdacfbc9fc783fa2720f1e2fa93bc2e91f679fb060fb6cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_11fa4513047fbcfaec58fa18b53f9e3c349f6498d9b6a5350b4e1eec002ed398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11fa4513047fbcfaec58fa18b53f9e3c349f6498d9b6a5350b4e1eec002ed398->enter($__internal_11fa4513047fbcfaec58fa18b53f9e3c349f6498d9b6a5350b4e1eec002ed398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50f45364c608161dcdacfbc9fc783fa2720f1e2fa93bc2e91f679fb060fb6cd1->leave($__internal_50f45364c608161dcdacfbc9fc783fa2720f1e2fa93bc2e91f679fb060fb6cd1_prof);

        
        $__internal_11fa4513047fbcfaec58fa18b53f9e3c349f6498d9b6a5350b4e1eec002ed398->leave($__internal_11fa4513047fbcfaec58fa18b53f9e3c349f6498d9b6a5350b4e1eec002ed398_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d2561e7c554eea312516bbe5af903b67f10cf07a50a898dab664d9c0ec1982a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2561e7c554eea312516bbe5af903b67f10cf07a50a898dab664d9c0ec1982a->enter($__internal_2d2561e7c554eea312516bbe5af903b67f10cf07a50a898dab664d9c0ec1982a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f3b74aa54f157aff8ee8b9f24195c65d5acfbb8292cc9732a736d5ed2ea10d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3b74aa54f157aff8ee8b9f24195c65d5acfbb8292cc9732a736d5ed2ea10d0->enter($__internal_6f3b74aa54f157aff8ee8b9f24195c65d5acfbb8292cc9732a736d5ed2ea10d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6f3b74aa54f157aff8ee8b9f24195c65d5acfbb8292cc9732a736d5ed2ea10d0->leave($__internal_6f3b74aa54f157aff8ee8b9f24195c65d5acfbb8292cc9732a736d5ed2ea10d0_prof);

        
        $__internal_2d2561e7c554eea312516bbe5af903b67f10cf07a50a898dab664d9c0ec1982a->leave($__internal_2d2561e7c554eea312516bbe5af903b67f10cf07a50a898dab664d9c0ec1982a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2aac0436f0c1aeae46bfd6605ab35c6f1ed1546b22cb6cc7521c38c8b933349d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aac0436f0c1aeae46bfd6605ab35c6f1ed1546b22cb6cc7521c38c8b933349d->enter($__internal_2aac0436f0c1aeae46bfd6605ab35c6f1ed1546b22cb6cc7521c38c8b933349d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cf8523dd7a338c5729f3be0b2a51b04d38dda3516913199800691a1663a03eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf8523dd7a338c5729f3be0b2a51b04d38dda3516913199800691a1663a03eb3->enter($__internal_cf8523dd7a338c5729f3be0b2a51b04d38dda3516913199800691a1663a03eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cf8523dd7a338c5729f3be0b2a51b04d38dda3516913199800691a1663a03eb3->leave($__internal_cf8523dd7a338c5729f3be0b2a51b04d38dda3516913199800691a1663a03eb3_prof);

        
        $__internal_2aac0436f0c1aeae46bfd6605ab35c6f1ed1546b22cb6cc7521c38c8b933349d->leave($__internal_2aac0436f0c1aeae46bfd6605ab35c6f1ed1546b22cb6cc7521c38c8b933349d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_514b0505f41fe4db903aab1665a5bba162d41df616073a91838229e37fa490b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_514b0505f41fe4db903aab1665a5bba162d41df616073a91838229e37fa490b9->enter($__internal_514b0505f41fe4db903aab1665a5bba162d41df616073a91838229e37fa490b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee4e2e56afe04f2d43eeaa57f86d05f7302d70184268e5aa8f3d75d8c1f90815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4e2e56afe04f2d43eeaa57f86d05f7302d70184268e5aa8f3d75d8c1f90815->enter($__internal_ee4e2e56afe04f2d43eeaa57f86d05f7302d70184268e5aa8f3d75d8c1f90815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee4e2e56afe04f2d43eeaa57f86d05f7302d70184268e5aa8f3d75d8c1f90815->leave($__internal_ee4e2e56afe04f2d43eeaa57f86d05f7302d70184268e5aa8f3d75d8c1f90815_prof);

        
        $__internal_514b0505f41fe4db903aab1665a5bba162d41df616073a91838229e37fa490b9->leave($__internal_514b0505f41fe4db903aab1665a5bba162d41df616073a91838229e37fa490b9_prof);

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
