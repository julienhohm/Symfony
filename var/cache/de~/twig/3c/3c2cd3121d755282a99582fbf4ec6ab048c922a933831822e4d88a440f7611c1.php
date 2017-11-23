<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0f823cfc0da8cfb6112c7132a23ddeea41e9cc9c2d0dbe26ed549f1c19c71e56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_f8a932a72b297906dd8a65ee60480e9c703d45789f91bc356dac04d636b2db24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a932a72b297906dd8a65ee60480e9c703d45789f91bc356dac04d636b2db24->enter($__internal_f8a932a72b297906dd8a65ee60480e9c703d45789f91bc356dac04d636b2db24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_00661d2c5c3b5e5ef818dec4cdcb24b14055ba7074501e13cacc2921f535430c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00661d2c5c3b5e5ef818dec4cdcb24b14055ba7074501e13cacc2921f535430c->enter($__internal_00661d2c5c3b5e5ef818dec4cdcb24b14055ba7074501e13cacc2921f535430c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a932a72b297906dd8a65ee60480e9c703d45789f91bc356dac04d636b2db24->leave($__internal_f8a932a72b297906dd8a65ee60480e9c703d45789f91bc356dac04d636b2db24_prof);

        
        $__internal_00661d2c5c3b5e5ef818dec4cdcb24b14055ba7074501e13cacc2921f535430c->leave($__internal_00661d2c5c3b5e5ef818dec4cdcb24b14055ba7074501e13cacc2921f535430c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b17e6b9cf7334814e13dbc1b1a2364317cbe388e912e7a418be90ed9ca985c4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b17e6b9cf7334814e13dbc1b1a2364317cbe388e912e7a418be90ed9ca985c4f->enter($__internal_b17e6b9cf7334814e13dbc1b1a2364317cbe388e912e7a418be90ed9ca985c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_406a32a0137c90280063524ede5b52437a9148ccc2ee121f5e6d8de55764e116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_406a32a0137c90280063524ede5b52437a9148ccc2ee121f5e6d8de55764e116->enter($__internal_406a32a0137c90280063524ede5b52437a9148ccc2ee121f5e6d8de55764e116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_406a32a0137c90280063524ede5b52437a9148ccc2ee121f5e6d8de55764e116->leave($__internal_406a32a0137c90280063524ede5b52437a9148ccc2ee121f5e6d8de55764e116_prof);

        
        $__internal_b17e6b9cf7334814e13dbc1b1a2364317cbe388e912e7a418be90ed9ca985c4f->leave($__internal_b17e6b9cf7334814e13dbc1b1a2364317cbe388e912e7a418be90ed9ca985c4f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2f1f9a9bf65080580bac498a0cf5ce0f711d2123d8c7a6ef5ab4f59e42e46a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f1f9a9bf65080580bac498a0cf5ce0f711d2123d8c7a6ef5ab4f59e42e46a8->enter($__internal_f2f1f9a9bf65080580bac498a0cf5ce0f711d2123d8c7a6ef5ab4f59e42e46a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4cb5f11ae5f45b6e60aa9f9c86c163cb9f5fdc4808e8538280597d420d3bf10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb5f11ae5f45b6e60aa9f9c86c163cb9f5fdc4808e8538280597d420d3bf10f->enter($__internal_4cb5f11ae5f45b6e60aa9f9c86c163cb9f5fdc4808e8538280597d420d3bf10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4cb5f11ae5f45b6e60aa9f9c86c163cb9f5fdc4808e8538280597d420d3bf10f->leave($__internal_4cb5f11ae5f45b6e60aa9f9c86c163cb9f5fdc4808e8538280597d420d3bf10f_prof);

        
        $__internal_f2f1f9a9bf65080580bac498a0cf5ce0f711d2123d8c7a6ef5ab4f59e42e46a8->leave($__internal_f2f1f9a9bf65080580bac498a0cf5ce0f711d2123d8c7a6ef5ab4f59e42e46a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_24128f771109ec9fd4614529b6a3a213f475c570bf2d104244cd291109dc7b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24128f771109ec9fd4614529b6a3a213f475c570bf2d104244cd291109dc7b9f->enter($__internal_24128f771109ec9fd4614529b6a3a213f475c570bf2d104244cd291109dc7b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_75f6671f16464fd109f7dea3fa3cbfbdda7905cd36b66da8a1671cec78a3284a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f6671f16464fd109f7dea3fa3cbfbdda7905cd36b66da8a1671cec78a3284a->enter($__internal_75f6671f16464fd109f7dea3fa3cbfbdda7905cd36b66da8a1671cec78a3284a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_75f6671f16464fd109f7dea3fa3cbfbdda7905cd36b66da8a1671cec78a3284a->leave($__internal_75f6671f16464fd109f7dea3fa3cbfbdda7905cd36b66da8a1671cec78a3284a_prof);

        
        $__internal_24128f771109ec9fd4614529b6a3a213f475c570bf2d104244cd291109dc7b9f->leave($__internal_24128f771109ec9fd4614529b6a3a213f475c570bf2d104244cd291109dc7b9f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
