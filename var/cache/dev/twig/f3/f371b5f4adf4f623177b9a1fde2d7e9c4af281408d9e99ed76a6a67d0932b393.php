<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_20948cb9484db7b38d80e546e5c25086f5658fbfdceb1e18ad23cb316712d950 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a85b6661998a080a77f86bf2996bf7210ed47203c710e96cc6e339ff29b692a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a85b6661998a080a77f86bf2996bf7210ed47203c710e96cc6e339ff29b692a->enter($__internal_2a85b6661998a080a77f86bf2996bf7210ed47203c710e96cc6e339ff29b692a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_53f4d19a00bb30f8fecff5851c1cd97eaf0713d9b207ad712ca161ee92c3d69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f4d19a00bb30f8fecff5851c1cd97eaf0713d9b207ad712ca161ee92c3d69c->enter($__internal_53f4d19a00bb30f8fecff5851c1cd97eaf0713d9b207ad712ca161ee92c3d69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a85b6661998a080a77f86bf2996bf7210ed47203c710e96cc6e339ff29b692a->leave($__internal_2a85b6661998a080a77f86bf2996bf7210ed47203c710e96cc6e339ff29b692a_prof);

        
        $__internal_53f4d19a00bb30f8fecff5851c1cd97eaf0713d9b207ad712ca161ee92c3d69c->leave($__internal_53f4d19a00bb30f8fecff5851c1cd97eaf0713d9b207ad712ca161ee92c3d69c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_73d4e2e3a69e4346b28dfb27723a67d1c01730a9127316f1b55bee030cab4522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d4e2e3a69e4346b28dfb27723a67d1c01730a9127316f1b55bee030cab4522->enter($__internal_73d4e2e3a69e4346b28dfb27723a67d1c01730a9127316f1b55bee030cab4522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3419aea735ea9840cc21aa1d4124811e6100d0527353b91f0990edad1afffd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3419aea735ea9840cc21aa1d4124811e6100d0527353b91f0990edad1afffd32->enter($__internal_3419aea735ea9840cc21aa1d4124811e6100d0527353b91f0990edad1afffd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_3419aea735ea9840cc21aa1d4124811e6100d0527353b91f0990edad1afffd32->leave($__internal_3419aea735ea9840cc21aa1d4124811e6100d0527353b91f0990edad1afffd32_prof);

        
        $__internal_73d4e2e3a69e4346b28dfb27723a67d1c01730a9127316f1b55bee030cab4522->leave($__internal_73d4e2e3a69e4346b28dfb27723a67d1c01730a9127316f1b55bee030cab4522_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c397c9789a48a5f030a748c2c263624dc0fee6dd167b99436e905a7b0615bf27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c397c9789a48a5f030a748c2c263624dc0fee6dd167b99436e905a7b0615bf27->enter($__internal_c397c9789a48a5f030a748c2c263624dc0fee6dd167b99436e905a7b0615bf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_294047d41b0d86d96983fbfd688ac53b0854c8b323509a1efae6eb1f8bd6979a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294047d41b0d86d96983fbfd688ac53b0854c8b323509a1efae6eb1f8bd6979a->enter($__internal_294047d41b0d86d96983fbfd688ac53b0854c8b323509a1efae6eb1f8bd6979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_294047d41b0d86d96983fbfd688ac53b0854c8b323509a1efae6eb1f8bd6979a->leave($__internal_294047d41b0d86d96983fbfd688ac53b0854c8b323509a1efae6eb1f8bd6979a_prof);

        
        $__internal_c397c9789a48a5f030a748c2c263624dc0fee6dd167b99436e905a7b0615bf27->leave($__internal_c397c9789a48a5f030a748c2c263624dc0fee6dd167b99436e905a7b0615bf27_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
