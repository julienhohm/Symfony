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
        $__internal_7ba97d452c84c208bcc90e5d1e201355dd470f84cdae59bebfb6db7782c8fcfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba97d452c84c208bcc90e5d1e201355dd470f84cdae59bebfb6db7782c8fcfe->enter($__internal_7ba97d452c84c208bcc90e5d1e201355dd470f84cdae59bebfb6db7782c8fcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fa781170a794314c2dfb7764c26c522e9d44e53a28396c97c6f4d7e651332726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa781170a794314c2dfb7764c26c522e9d44e53a28396c97c6f4d7e651332726->enter($__internal_fa781170a794314c2dfb7764c26c522e9d44e53a28396c97c6f4d7e651332726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ba97d452c84c208bcc90e5d1e201355dd470f84cdae59bebfb6db7782c8fcfe->leave($__internal_7ba97d452c84c208bcc90e5d1e201355dd470f84cdae59bebfb6db7782c8fcfe_prof);

        
        $__internal_fa781170a794314c2dfb7764c26c522e9d44e53a28396c97c6f4d7e651332726->leave($__internal_fa781170a794314c2dfb7764c26c522e9d44e53a28396c97c6f4d7e651332726_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bfb32b4321d7cf59e551604d50877fb446a0b1fefb23d8950ecf28c2d1f1901c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfb32b4321d7cf59e551604d50877fb446a0b1fefb23d8950ecf28c2d1f1901c->enter($__internal_bfb32b4321d7cf59e551604d50877fb446a0b1fefb23d8950ecf28c2d1f1901c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_95e77c2764e1b5005de87f9d5e895ea697c674ac3fac8c65c04205b7f8cc096d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e77c2764e1b5005de87f9d5e895ea697c674ac3fac8c65c04205b7f8cc096d->enter($__internal_95e77c2764e1b5005de87f9d5e895ea697c674ac3fac8c65c04205b7f8cc096d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_95e77c2764e1b5005de87f9d5e895ea697c674ac3fac8c65c04205b7f8cc096d->leave($__internal_95e77c2764e1b5005de87f9d5e895ea697c674ac3fac8c65c04205b7f8cc096d_prof);

        
        $__internal_bfb32b4321d7cf59e551604d50877fb446a0b1fefb23d8950ecf28c2d1f1901c->leave($__internal_bfb32b4321d7cf59e551604d50877fb446a0b1fefb23d8950ecf28c2d1f1901c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16307fa6620eb134b2d0844c45257c0d7a61ccefba29b7939a2400af48123da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16307fa6620eb134b2d0844c45257c0d7a61ccefba29b7939a2400af48123da6->enter($__internal_16307fa6620eb134b2d0844c45257c0d7a61ccefba29b7939a2400af48123da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e663d4f54aab97f1c6dd072045d328ea35bdc950d5a1336f9546697f300b8fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e663d4f54aab97f1c6dd072045d328ea35bdc950d5a1336f9546697f300b8fb2->enter($__internal_e663d4f54aab97f1c6dd072045d328ea35bdc950d5a1336f9546697f300b8fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e663d4f54aab97f1c6dd072045d328ea35bdc950d5a1336f9546697f300b8fb2->leave($__internal_e663d4f54aab97f1c6dd072045d328ea35bdc950d5a1336f9546697f300b8fb2_prof);

        
        $__internal_16307fa6620eb134b2d0844c45257c0d7a61ccefba29b7939a2400af48123da6->leave($__internal_16307fa6620eb134b2d0844c45257c0d7a61ccefba29b7939a2400af48123da6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f14de578ae345a0a61a20a241413e6d0f5d22caec69dbfd84a44a96bb60601d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f14de578ae345a0a61a20a241413e6d0f5d22caec69dbfd84a44a96bb60601d->enter($__internal_6f14de578ae345a0a61a20a241413e6d0f5d22caec69dbfd84a44a96bb60601d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ce9ab58a54c55f881e19289c90cf501050348343b95c0f7bd47bde6886350b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce9ab58a54c55f881e19289c90cf501050348343b95c0f7bd47bde6886350b7->enter($__internal_3ce9ab58a54c55f881e19289c90cf501050348343b95c0f7bd47bde6886350b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3ce9ab58a54c55f881e19289c90cf501050348343b95c0f7bd47bde6886350b7->leave($__internal_3ce9ab58a54c55f881e19289c90cf501050348343b95c0f7bd47bde6886350b7_prof);

        
        $__internal_6f14de578ae345a0a61a20a241413e6d0f5d22caec69dbfd84a44a96bb60601d->leave($__internal_6f14de578ae345a0a61a20a241413e6d0f5d22caec69dbfd84a44a96bb60601d_prof);

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
