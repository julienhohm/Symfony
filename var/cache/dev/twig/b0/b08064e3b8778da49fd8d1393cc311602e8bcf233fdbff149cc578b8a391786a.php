<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b95f7ab30d76a04980f24bd0199c881ce189c1a769f07275d0dfd7c1b15da1bf extends Twig_Template
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
        $__internal_0739e74e5eb797f127c101914f401fcf0d3d3e46cc67e450b30b7e7f0041113b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0739e74e5eb797f127c101914f401fcf0d3d3e46cc67e450b30b7e7f0041113b->enter($__internal_0739e74e5eb797f127c101914f401fcf0d3d3e46cc67e450b30b7e7f0041113b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e11610c2507e298eda05983408c0b8eb4b951f2fd48648e7f2dff9ba28494e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11610c2507e298eda05983408c0b8eb4b951f2fd48648e7f2dff9ba28494e5d->enter($__internal_e11610c2507e298eda05983408c0b8eb4b951f2fd48648e7f2dff9ba28494e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0739e74e5eb797f127c101914f401fcf0d3d3e46cc67e450b30b7e7f0041113b->leave($__internal_0739e74e5eb797f127c101914f401fcf0d3d3e46cc67e450b30b7e7f0041113b_prof);

        
        $__internal_e11610c2507e298eda05983408c0b8eb4b951f2fd48648e7f2dff9ba28494e5d->leave($__internal_e11610c2507e298eda05983408c0b8eb4b951f2fd48648e7f2dff9ba28494e5d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc40597164be7d5b138532ab9926e932da6d11806a799eebebb30c3eb85f66cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc40597164be7d5b138532ab9926e932da6d11806a799eebebb30c3eb85f66cd->enter($__internal_bc40597164be7d5b138532ab9926e932da6d11806a799eebebb30c3eb85f66cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f8fc2048820813b190279fd780805608dcc62a04a6e2499320876ca209f405d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8fc2048820813b190279fd780805608dcc62a04a6e2499320876ca209f405d1->enter($__internal_f8fc2048820813b190279fd780805608dcc62a04a6e2499320876ca209f405d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f8fc2048820813b190279fd780805608dcc62a04a6e2499320876ca209f405d1->leave($__internal_f8fc2048820813b190279fd780805608dcc62a04a6e2499320876ca209f405d1_prof);

        
        $__internal_bc40597164be7d5b138532ab9926e932da6d11806a799eebebb30c3eb85f66cd->leave($__internal_bc40597164be7d5b138532ab9926e932da6d11806a799eebebb30c3eb85f66cd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce6a4e35b7923464693db655557ae87e8daf0091f0d4076729df54a38d404dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce6a4e35b7923464693db655557ae87e8daf0091f0d4076729df54a38d404dfe->enter($__internal_ce6a4e35b7923464693db655557ae87e8daf0091f0d4076729df54a38d404dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c6fc2da3ff74f135f635037c31baca2712f6cc02ac7548b1e404eece81ab68fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6fc2da3ff74f135f635037c31baca2712f6cc02ac7548b1e404eece81ab68fd->enter($__internal_c6fc2da3ff74f135f635037c31baca2712f6cc02ac7548b1e404eece81ab68fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6fc2da3ff74f135f635037c31baca2712f6cc02ac7548b1e404eece81ab68fd->leave($__internal_c6fc2da3ff74f135f635037c31baca2712f6cc02ac7548b1e404eece81ab68fd_prof);

        
        $__internal_ce6a4e35b7923464693db655557ae87e8daf0091f0d4076729df54a38d404dfe->leave($__internal_ce6a4e35b7923464693db655557ae87e8daf0091f0d4076729df54a38d404dfe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9d56813fe556d1078f3520e1dcd68c6a24e56cef8484940e211eb0be141f04a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d56813fe556d1078f3520e1dcd68c6a24e56cef8484940e211eb0be141f04a->enter($__internal_a9d56813fe556d1078f3520e1dcd68c6a24e56cef8484940e211eb0be141f04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d9c5969eeaecefbd6216873c0c53c5985d64b47dc5d9b443a68a4c95b442878a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c5969eeaecefbd6216873c0c53c5985d64b47dc5d9b443a68a4c95b442878a->enter($__internal_d9c5969eeaecefbd6216873c0c53c5985d64b47dc5d9b443a68a4c95b442878a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d9c5969eeaecefbd6216873c0c53c5985d64b47dc5d9b443a68a4c95b442878a->leave($__internal_d9c5969eeaecefbd6216873c0c53c5985d64b47dc5d9b443a68a4c95b442878a_prof);

        
        $__internal_a9d56813fe556d1078f3520e1dcd68c6a24e56cef8484940e211eb0be141f04a->leave($__internal_a9d56813fe556d1078f3520e1dcd68c6a24e56cef8484940e211eb0be141f04a_prof);

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
