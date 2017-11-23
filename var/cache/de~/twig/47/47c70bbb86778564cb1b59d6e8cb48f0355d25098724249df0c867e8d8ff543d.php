<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a30f2aba0e86f2e9a213ae7a3327eaa0620e5565a69a9236ddba978599211e79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3395ccf05026034b60387d8df688f90ec1cad2d2bb708f4335b253a7108394e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3395ccf05026034b60387d8df688f90ec1cad2d2bb708f4335b253a7108394e9->enter($__internal_3395ccf05026034b60387d8df688f90ec1cad2d2bb708f4335b253a7108394e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_97d0d1a47a94274fd9679bcd72fa6cc3c630916e64e98bf1c445fe3d4352ac97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d0d1a47a94274fd9679bcd72fa6cc3c630916e64e98bf1c445fe3d4352ac97->enter($__internal_97d0d1a47a94274fd9679bcd72fa6cc3c630916e64e98bf1c445fe3d4352ac97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3395ccf05026034b60387d8df688f90ec1cad2d2bb708f4335b253a7108394e9->leave($__internal_3395ccf05026034b60387d8df688f90ec1cad2d2bb708f4335b253a7108394e9_prof);

        
        $__internal_97d0d1a47a94274fd9679bcd72fa6cc3c630916e64e98bf1c445fe3d4352ac97->leave($__internal_97d0d1a47a94274fd9679bcd72fa6cc3c630916e64e98bf1c445fe3d4352ac97_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4824c8a9a7ef84ef1753c6c1445f3d5a709a7140e8060aedb57b02804c7eb91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4824c8a9a7ef84ef1753c6c1445f3d5a709a7140e8060aedb57b02804c7eb91e->enter($__internal_4824c8a9a7ef84ef1753c6c1445f3d5a709a7140e8060aedb57b02804c7eb91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_57a13febb607af45bf7037257cee1aa349bfc5382988d4fd221535b2b575e267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a13febb607af45bf7037257cee1aa349bfc5382988d4fd221535b2b575e267->enter($__internal_57a13febb607af45bf7037257cee1aa349bfc5382988d4fd221535b2b575e267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_57a13febb607af45bf7037257cee1aa349bfc5382988d4fd221535b2b575e267->leave($__internal_57a13febb607af45bf7037257cee1aa349bfc5382988d4fd221535b2b575e267_prof);

        
        $__internal_4824c8a9a7ef84ef1753c6c1445f3d5a709a7140e8060aedb57b02804c7eb91e->leave($__internal_4824c8a9a7ef84ef1753c6c1445f3d5a709a7140e8060aedb57b02804c7eb91e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cff9ea2a4d3e0a9e41054331d3719da300c5a67545e5fd1231c320f8fef7e0e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff9ea2a4d3e0a9e41054331d3719da300c5a67545e5fd1231c320f8fef7e0e5->enter($__internal_cff9ea2a4d3e0a9e41054331d3719da300c5a67545e5fd1231c320f8fef7e0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_026aac9f506e5ea4bf262bdcd4d7406f687e291e9fd4f842eeb20237907f2687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026aac9f506e5ea4bf262bdcd4d7406f687e291e9fd4f842eeb20237907f2687->enter($__internal_026aac9f506e5ea4bf262bdcd4d7406f687e291e9fd4f842eeb20237907f2687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_026aac9f506e5ea4bf262bdcd4d7406f687e291e9fd4f842eeb20237907f2687->leave($__internal_026aac9f506e5ea4bf262bdcd4d7406f687e291e9fd4f842eeb20237907f2687_prof);

        
        $__internal_cff9ea2a4d3e0a9e41054331d3719da300c5a67545e5fd1231c320f8fef7e0e5->leave($__internal_cff9ea2a4d3e0a9e41054331d3719da300c5a67545e5fd1231c320f8fef7e0e5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
