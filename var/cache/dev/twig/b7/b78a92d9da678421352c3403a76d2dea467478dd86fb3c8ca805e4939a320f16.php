<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6a523ded7db85c60d66359ccbf04efb533eeb0ba30dee6b79bfe8c8916ace336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_2f277d594244a02efb25bec76d3e6a7bd405ed50def5b92608000439ff06ba2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f277d594244a02efb25bec76d3e6a7bd405ed50def5b92608000439ff06ba2f->enter($__internal_2f277d594244a02efb25bec76d3e6a7bd405ed50def5b92608000439ff06ba2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_514cefe8ea1fb75dd24d50f3aa12c4dee71d31c447e994636af02973c4264998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514cefe8ea1fb75dd24d50f3aa12c4dee71d31c447e994636af02973c4264998->enter($__internal_514cefe8ea1fb75dd24d50f3aa12c4dee71d31c447e994636af02973c4264998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f277d594244a02efb25bec76d3e6a7bd405ed50def5b92608000439ff06ba2f->leave($__internal_2f277d594244a02efb25bec76d3e6a7bd405ed50def5b92608000439ff06ba2f_prof);

        
        $__internal_514cefe8ea1fb75dd24d50f3aa12c4dee71d31c447e994636af02973c4264998->leave($__internal_514cefe8ea1fb75dd24d50f3aa12c4dee71d31c447e994636af02973c4264998_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76d6f7819352c30bf7471b6f036bf2f41374f2a74cf9f0dc6cc3ac83928ebedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d6f7819352c30bf7471b6f036bf2f41374f2a74cf9f0dc6cc3ac83928ebedb->enter($__internal_76d6f7819352c30bf7471b6f036bf2f41374f2a74cf9f0dc6cc3ac83928ebedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c23bd0de7c19fdd0043f0a897d026e713a72fa60e52ea5e822d245460aa9ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c23bd0de7c19fdd0043f0a897d026e713a72fa60e52ea5e822d245460aa9ff4->enter($__internal_0c23bd0de7c19fdd0043f0a897d026e713a72fa60e52ea5e822d245460aa9ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0c23bd0de7c19fdd0043f0a897d026e713a72fa60e52ea5e822d245460aa9ff4->leave($__internal_0c23bd0de7c19fdd0043f0a897d026e713a72fa60e52ea5e822d245460aa9ff4_prof);

        
        $__internal_76d6f7819352c30bf7471b6f036bf2f41374f2a74cf9f0dc6cc3ac83928ebedb->leave($__internal_76d6f7819352c30bf7471b6f036bf2f41374f2a74cf9f0dc6cc3ac83928ebedb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_550aff38c5a4abff1e95da615da72482ac7361f68f7eda22d38407e2a5567f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550aff38c5a4abff1e95da615da72482ac7361f68f7eda22d38407e2a5567f50->enter($__internal_550aff38c5a4abff1e95da615da72482ac7361f68f7eda22d38407e2a5567f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f2992a8d327ab05e1003ecf74b3ffcca1fac9faf952a9f4962748cd1d2645cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2992a8d327ab05e1003ecf74b3ffcca1fac9faf952a9f4962748cd1d2645cd2->enter($__internal_f2992a8d327ab05e1003ecf74b3ffcca1fac9faf952a9f4962748cd1d2645cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_f2992a8d327ab05e1003ecf74b3ffcca1fac9faf952a9f4962748cd1d2645cd2->leave($__internal_f2992a8d327ab05e1003ecf74b3ffcca1fac9faf952a9f4962748cd1d2645cd2_prof);

        
        $__internal_550aff38c5a4abff1e95da615da72482ac7361f68f7eda22d38407e2a5567f50->leave($__internal_550aff38c5a4abff1e95da615da72482ac7361f68f7eda22d38407e2a5567f50_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
