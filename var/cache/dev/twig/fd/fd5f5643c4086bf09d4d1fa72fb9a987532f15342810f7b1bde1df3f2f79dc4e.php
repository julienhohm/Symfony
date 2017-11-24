<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1253556a646148b46732b4956f595bc68f998958627453acf22d0f1af8679245 extends Twig_Template
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
        $__internal_b28ee9ba43550f145992618ac187daad6774e077dbd6805aceb8a4f32a9fbd0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b28ee9ba43550f145992618ac187daad6774e077dbd6805aceb8a4f32a9fbd0b->enter($__internal_b28ee9ba43550f145992618ac187daad6774e077dbd6805aceb8a4f32a9fbd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_4c4340445107aa2f9a68cce43cc28ade476c0e245a9b31b9eb9fd923ba6a1f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4340445107aa2f9a68cce43cc28ade476c0e245a9b31b9eb9fd923ba6a1f21->enter($__internal_4c4340445107aa2f9a68cce43cc28ade476c0e245a9b31b9eb9fd923ba6a1f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b28ee9ba43550f145992618ac187daad6774e077dbd6805aceb8a4f32a9fbd0b->leave($__internal_b28ee9ba43550f145992618ac187daad6774e077dbd6805aceb8a4f32a9fbd0b_prof);

        
        $__internal_4c4340445107aa2f9a68cce43cc28ade476c0e245a9b31b9eb9fd923ba6a1f21->leave($__internal_4c4340445107aa2f9a68cce43cc28ade476c0e245a9b31b9eb9fd923ba6a1f21_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebb30cfc6479477e2e1c58f39f79337acf88f6cd628bbd22336228f5b8d42d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb30cfc6479477e2e1c58f39f79337acf88f6cd628bbd22336228f5b8d42d8b->enter($__internal_ebb30cfc6479477e2e1c58f39f79337acf88f6cd628bbd22336228f5b8d42d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb64def3afc1e7cd3f5c1c8b9a6394b910165dc5dcdf9f1563ef547ac455b869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb64def3afc1e7cd3f5c1c8b9a6394b910165dc5dcdf9f1563ef547ac455b869->enter($__internal_fb64def3afc1e7cd3f5c1c8b9a6394b910165dc5dcdf9f1563ef547ac455b869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fb64def3afc1e7cd3f5c1c8b9a6394b910165dc5dcdf9f1563ef547ac455b869->leave($__internal_fb64def3afc1e7cd3f5c1c8b9a6394b910165dc5dcdf9f1563ef547ac455b869_prof);

        
        $__internal_ebb30cfc6479477e2e1c58f39f79337acf88f6cd628bbd22336228f5b8d42d8b->leave($__internal_ebb30cfc6479477e2e1c58f39f79337acf88f6cd628bbd22336228f5b8d42d8b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3371fa06ac8311617cd69b8e42bb40ffe99eb4009755dcbac7cc10f73c3917dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3371fa06ac8311617cd69b8e42bb40ffe99eb4009755dcbac7cc10f73c3917dc->enter($__internal_3371fa06ac8311617cd69b8e42bb40ffe99eb4009755dcbac7cc10f73c3917dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03ba89ec7fdba5d0b1af67efcbf26279743c30df2f7834440310bfb933477c72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ba89ec7fdba5d0b1af67efcbf26279743c30df2f7834440310bfb933477c72->enter($__internal_03ba89ec7fdba5d0b1af67efcbf26279743c30df2f7834440310bfb933477c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_03ba89ec7fdba5d0b1af67efcbf26279743c30df2f7834440310bfb933477c72->leave($__internal_03ba89ec7fdba5d0b1af67efcbf26279743c30df2f7834440310bfb933477c72_prof);

        
        $__internal_3371fa06ac8311617cd69b8e42bb40ffe99eb4009755dcbac7cc10f73c3917dc->leave($__internal_3371fa06ac8311617cd69b8e42bb40ffe99eb4009755dcbac7cc10f73c3917dc_prof);

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
