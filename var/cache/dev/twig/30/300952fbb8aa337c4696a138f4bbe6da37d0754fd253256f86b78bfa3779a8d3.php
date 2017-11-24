<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_40dde7d7a4231c350361a8011f7ce7269fe007f68706f2ade9ad8ff942669975 extends Twig_Template
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
        $__internal_b9fb755f73560e274da132e989551925ed85c6dd15d12763239114f70d0257fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9fb755f73560e274da132e989551925ed85c6dd15d12763239114f70d0257fc->enter($__internal_b9fb755f73560e274da132e989551925ed85c6dd15d12763239114f70d0257fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9636cb118304547d18cdadfbe752e29c60474bffc5d59c0ca88eaeafa671ceb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9636cb118304547d18cdadfbe752e29c60474bffc5d59c0ca88eaeafa671ceb9->enter($__internal_9636cb118304547d18cdadfbe752e29c60474bffc5d59c0ca88eaeafa671ceb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9fb755f73560e274da132e989551925ed85c6dd15d12763239114f70d0257fc->leave($__internal_b9fb755f73560e274da132e989551925ed85c6dd15d12763239114f70d0257fc_prof);

        
        $__internal_9636cb118304547d18cdadfbe752e29c60474bffc5d59c0ca88eaeafa671ceb9->leave($__internal_9636cb118304547d18cdadfbe752e29c60474bffc5d59c0ca88eaeafa671ceb9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e45660b12b925815c42368d1bf4770c3a17663c4c39e96d673866c394ed76e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45660b12b925815c42368d1bf4770c3a17663c4c39e96d673866c394ed76e14->enter($__internal_e45660b12b925815c42368d1bf4770c3a17663c4c39e96d673866c394ed76e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8d2bd1bf5765d7e60bf0647d4e4067d43ae68445a30dfc37140550a6d83b009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d2bd1bf5765d7e60bf0647d4e4067d43ae68445a30dfc37140550a6d83b009->enter($__internal_a8d2bd1bf5765d7e60bf0647d4e4067d43ae68445a30dfc37140550a6d83b009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8d2bd1bf5765d7e60bf0647d4e4067d43ae68445a30dfc37140550a6d83b009->leave($__internal_a8d2bd1bf5765d7e60bf0647d4e4067d43ae68445a30dfc37140550a6d83b009_prof);

        
        $__internal_e45660b12b925815c42368d1bf4770c3a17663c4c39e96d673866c394ed76e14->leave($__internal_e45660b12b925815c42368d1bf4770c3a17663c4c39e96d673866c394ed76e14_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2e5e854bef82a312ad7a70b73c7ef33aee9e862fb502b2aa63e611dd8140cbcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5e854bef82a312ad7a70b73c7ef33aee9e862fb502b2aa63e611dd8140cbcf->enter($__internal_2e5e854bef82a312ad7a70b73c7ef33aee9e862fb502b2aa63e611dd8140cbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a59a448183e494d9d8f435051144c66d590abb990c8d5146e3a8deb3c36e3fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59a448183e494d9d8f435051144c66d590abb990c8d5146e3a8deb3c36e3fc5->enter($__internal_a59a448183e494d9d8f435051144c66d590abb990c8d5146e3a8deb3c36e3fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a59a448183e494d9d8f435051144c66d590abb990c8d5146e3a8deb3c36e3fc5->leave($__internal_a59a448183e494d9d8f435051144c66d590abb990c8d5146e3a8deb3c36e3fc5_prof);

        
        $__internal_2e5e854bef82a312ad7a70b73c7ef33aee9e862fb502b2aa63e611dd8140cbcf->leave($__internal_2e5e854bef82a312ad7a70b73c7ef33aee9e862fb502b2aa63e611dd8140cbcf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6003f64cb1265afc8e7af7a0cc0f527adc51e37fcf61d90d766c39eda2d00d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6003f64cb1265afc8e7af7a0cc0f527adc51e37fcf61d90d766c39eda2d00d2a->enter($__internal_6003f64cb1265afc8e7af7a0cc0f527adc51e37fcf61d90d766c39eda2d00d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_06bc8377adbb7a44882f305c24e02029976e62cfdbe1c4f131c2238b1500e682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06bc8377adbb7a44882f305c24e02029976e62cfdbe1c4f131c2238b1500e682->enter($__internal_06bc8377adbb7a44882f305c24e02029976e62cfdbe1c4f131c2238b1500e682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_06bc8377adbb7a44882f305c24e02029976e62cfdbe1c4f131c2238b1500e682->leave($__internal_06bc8377adbb7a44882f305c24e02029976e62cfdbe1c4f131c2238b1500e682_prof);

        
        $__internal_6003f64cb1265afc8e7af7a0cc0f527adc51e37fcf61d90d766c39eda2d00d2a->leave($__internal_6003f64cb1265afc8e7af7a0cc0f527adc51e37fcf61d90d766c39eda2d00d2a_prof);

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
