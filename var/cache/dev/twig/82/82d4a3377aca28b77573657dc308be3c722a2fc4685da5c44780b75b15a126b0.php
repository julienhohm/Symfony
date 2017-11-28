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
        $__internal_4f4984779fe1826d65ae56a78968710a302684ff217a9cf91232bfc16a1e9a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4984779fe1826d65ae56a78968710a302684ff217a9cf91232bfc16a1e9a32->enter($__internal_4f4984779fe1826d65ae56a78968710a302684ff217a9cf91232bfc16a1e9a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f4ad5016e022f8465292098e482ee9689622e75dc47ff1c2dcc3717614ac35ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ad5016e022f8465292098e482ee9689622e75dc47ff1c2dcc3717614ac35ea->enter($__internal_f4ad5016e022f8465292098e482ee9689622e75dc47ff1c2dcc3717614ac35ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f4984779fe1826d65ae56a78968710a302684ff217a9cf91232bfc16a1e9a32->leave($__internal_4f4984779fe1826d65ae56a78968710a302684ff217a9cf91232bfc16a1e9a32_prof);

        
        $__internal_f4ad5016e022f8465292098e482ee9689622e75dc47ff1c2dcc3717614ac35ea->leave($__internal_f4ad5016e022f8465292098e482ee9689622e75dc47ff1c2dcc3717614ac35ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cad7154d95b770719b43e778607e06a02e0c6b10c521362365986c9b6c0cd1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cad7154d95b770719b43e778607e06a02e0c6b10c521362365986c9b6c0cd1ff->enter($__internal_cad7154d95b770719b43e778607e06a02e0c6b10c521362365986c9b6c0cd1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6521209948b2156d8661d2f1b82f4776eeb722fef628efa6e7d376b4e379abbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6521209948b2156d8661d2f1b82f4776eeb722fef628efa6e7d376b4e379abbd->enter($__internal_6521209948b2156d8661d2f1b82f4776eeb722fef628efa6e7d376b4e379abbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6521209948b2156d8661d2f1b82f4776eeb722fef628efa6e7d376b4e379abbd->leave($__internal_6521209948b2156d8661d2f1b82f4776eeb722fef628efa6e7d376b4e379abbd_prof);

        
        $__internal_cad7154d95b770719b43e778607e06a02e0c6b10c521362365986c9b6c0cd1ff->leave($__internal_cad7154d95b770719b43e778607e06a02e0c6b10c521362365986c9b6c0cd1ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0ff81a5db4912a191bd63a1867df2ea6ed29484bbcc50b310ea70bee7b4631da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ff81a5db4912a191bd63a1867df2ea6ed29484bbcc50b310ea70bee7b4631da->enter($__internal_0ff81a5db4912a191bd63a1867df2ea6ed29484bbcc50b310ea70bee7b4631da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6c8902ab89f1988acda26ea350805f04404ccd9d16d51199e501436e2d3dbf02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8902ab89f1988acda26ea350805f04404ccd9d16d51199e501436e2d3dbf02->enter($__internal_6c8902ab89f1988acda26ea350805f04404ccd9d16d51199e501436e2d3dbf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6c8902ab89f1988acda26ea350805f04404ccd9d16d51199e501436e2d3dbf02->leave($__internal_6c8902ab89f1988acda26ea350805f04404ccd9d16d51199e501436e2d3dbf02_prof);

        
        $__internal_0ff81a5db4912a191bd63a1867df2ea6ed29484bbcc50b310ea70bee7b4631da->leave($__internal_0ff81a5db4912a191bd63a1867df2ea6ed29484bbcc50b310ea70bee7b4631da_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bcb52dd1aba2e67d3fef84935af07f6c8caa12e9f70e475e7dda17f7210491c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bcb52dd1aba2e67d3fef84935af07f6c8caa12e9f70e475e7dda17f7210491c->enter($__internal_3bcb52dd1aba2e67d3fef84935af07f6c8caa12e9f70e475e7dda17f7210491c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c4f62cf28468065401036a98b52bad0acb470ae8171d731fbc5fb89b1324c1de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4f62cf28468065401036a98b52bad0acb470ae8171d731fbc5fb89b1324c1de->enter($__internal_c4f62cf28468065401036a98b52bad0acb470ae8171d731fbc5fb89b1324c1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4f62cf28468065401036a98b52bad0acb470ae8171d731fbc5fb89b1324c1de->leave($__internal_c4f62cf28468065401036a98b52bad0acb470ae8171d731fbc5fb89b1324c1de_prof);

        
        $__internal_3bcb52dd1aba2e67d3fef84935af07f6c8caa12e9f70e475e7dda17f7210491c->leave($__internal_3bcb52dd1aba2e67d3fef84935af07f6c8caa12e9f70e475e7dda17f7210491c_prof);

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
