<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_775e7953803d17a1c912b990a490f260d8490fd2b1aa8af0dc8ba82834f3e93d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_289dea569ff5aebad94a75e5fe47a2d90f564c2834ab8601c7ac4844e6237ea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289dea569ff5aebad94a75e5fe47a2d90f564c2834ab8601c7ac4844e6237ea2->enter($__internal_289dea569ff5aebad94a75e5fe47a2d90f564c2834ab8601c7ac4844e6237ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_289dea569ff5aebad94a75e5fe47a2d90f564c2834ab8601c7ac4844e6237ea2->leave($__internal_289dea569ff5aebad94a75e5fe47a2d90f564c2834ab8601c7ac4844e6237ea2_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b40237810d75a0f961a800e9d020c77cb8d47a8689d3a70e956815a957131766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40237810d75a0f961a800e9d020c77cb8d47a8689d3a70e956815a957131766->enter($__internal_b40237810d75a0f961a800e9d020c77cb8d47a8689d3a70e956815a957131766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b40237810d75a0f961a800e9d020c77cb8d47a8689d3a70e956815a957131766->leave($__internal_b40237810d75a0f961a800e9d020c77cb8d47a8689d3a70e956815a957131766_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4688393af6a3d30d51c9adc27b777febc9cf2d519c00a3f67b2c69b2cf6e95a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4688393af6a3d30d51c9adc27b777febc9cf2d519c00a3f67b2c69b2cf6e95a3->enter($__internal_4688393af6a3d30d51c9adc27b777febc9cf2d519c00a3f67b2c69b2cf6e95a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4688393af6a3d30d51c9adc27b777febc9cf2d519c00a3f67b2c69b2cf6e95a3->leave($__internal_4688393af6a3d30d51c9adc27b777febc9cf2d519c00a3f67b2c69b2cf6e95a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 21,  69 => 20,  63 => 19,  52 => 14,  46 => 12,  40 => 11,  33 => 1,  31 => 7,  30 => 6,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
