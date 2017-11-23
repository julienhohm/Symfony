<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9315749591aa794155b0f9fe33972797a4c914346f2d327997b3a10837efc19b extends Twig_Template
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
        $__internal_4dccc95e263614e7fc7073546ca5f8ec63c3f60b22c302ed22a5b12af4e70590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dccc95e263614e7fc7073546ca5f8ec63c3f60b22c302ed22a5b12af4e70590->enter($__internal_4dccc95e263614e7fc7073546ca5f8ec63c3f60b22c302ed22a5b12af4e70590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4a004a483cd450dd59599eaf3bf9884bd71f5c62ea97737ff99f1378622cc7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a004a483cd450dd59599eaf3bf9884bd71f5c62ea97737ff99f1378622cc7eb->enter($__internal_4a004a483cd450dd59599eaf3bf9884bd71f5c62ea97737ff99f1378622cc7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dccc95e263614e7fc7073546ca5f8ec63c3f60b22c302ed22a5b12af4e70590->leave($__internal_4dccc95e263614e7fc7073546ca5f8ec63c3f60b22c302ed22a5b12af4e70590_prof);

        
        $__internal_4a004a483cd450dd59599eaf3bf9884bd71f5c62ea97737ff99f1378622cc7eb->leave($__internal_4a004a483cd450dd59599eaf3bf9884bd71f5c62ea97737ff99f1378622cc7eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d1c64355d3ece7eba9509027a0a835700e6dc31cb9f58d81f6fec2cb6ab72d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1c64355d3ece7eba9509027a0a835700e6dc31cb9f58d81f6fec2cb6ab72d9->enter($__internal_3d1c64355d3ece7eba9509027a0a835700e6dc31cb9f58d81f6fec2cb6ab72d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8ca91eb8bb3d59a403d1ab3a4b307abd41ba71a43c323c29f0ebda3bf7a0da51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca91eb8bb3d59a403d1ab3a4b307abd41ba71a43c323c29f0ebda3bf7a0da51->enter($__internal_8ca91eb8bb3d59a403d1ab3a4b307abd41ba71a43c323c29f0ebda3bf7a0da51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8ca91eb8bb3d59a403d1ab3a4b307abd41ba71a43c323c29f0ebda3bf7a0da51->leave($__internal_8ca91eb8bb3d59a403d1ab3a4b307abd41ba71a43c323c29f0ebda3bf7a0da51_prof);

        
        $__internal_3d1c64355d3ece7eba9509027a0a835700e6dc31cb9f58d81f6fec2cb6ab72d9->leave($__internal_3d1c64355d3ece7eba9509027a0a835700e6dc31cb9f58d81f6fec2cb6ab72d9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_deff0e52be7822826c3f8aab9ecd856b901d11c5a72bd8949391514b118b26db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deff0e52be7822826c3f8aab9ecd856b901d11c5a72bd8949391514b118b26db->enter($__internal_deff0e52be7822826c3f8aab9ecd856b901d11c5a72bd8949391514b118b26db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11209f4103ccb75f3bbfbe66cce8c9fe537408d4e0a73f60c3482b3171eb9622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11209f4103ccb75f3bbfbe66cce8c9fe537408d4e0a73f60c3482b3171eb9622->enter($__internal_11209f4103ccb75f3bbfbe66cce8c9fe537408d4e0a73f60c3482b3171eb9622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_11209f4103ccb75f3bbfbe66cce8c9fe537408d4e0a73f60c3482b3171eb9622->leave($__internal_11209f4103ccb75f3bbfbe66cce8c9fe537408d4e0a73f60c3482b3171eb9622_prof);

        
        $__internal_deff0e52be7822826c3f8aab9ecd856b901d11c5a72bd8949391514b118b26db->leave($__internal_deff0e52be7822826c3f8aab9ecd856b901d11c5a72bd8949391514b118b26db_prof);

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
