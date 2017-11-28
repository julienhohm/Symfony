<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_9fe807a8bf27d339b1cedcd58dacce585ce85a5afaa830af9df76e79497fc47c extends Twig_Template
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
        $__internal_984b2df223517820e53b115b8dc9cff79d66631527776e5cb62071d10185c30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984b2df223517820e53b115b8dc9cff79d66631527776e5cb62071d10185c30c->enter($__internal_984b2df223517820e53b115b8dc9cff79d66631527776e5cb62071d10185c30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? null), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_984b2df223517820e53b115b8dc9cff79d66631527776e5cb62071d10185c30c->leave($__internal_984b2df223517820e53b115b8dc9cff79d66631527776e5cb62071d10185c30c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_b5b4471a995d4beaf983a88de370373ef0838f4d049dc06b2cc7b74f0b1e370c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b4471a995d4beaf983a88de370373ef0838f4d049dc06b2cc7b74f0b1e370c->enter($__internal_b5b4471a995d4beaf983a88de370373ef0838f4d049dc06b2cc7b74f0b1e370c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b5b4471a995d4beaf983a88de370373ef0838f4d049dc06b2cc7b74f0b1e370c->leave($__internal_b5b4471a995d4beaf983a88de370373ef0838f4d049dc06b2cc7b74f0b1e370c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_adaa6698515a138696f8fbf34d8e757b9486862c22a6bdfa9f1b822324fa3793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adaa6698515a138696f8fbf34d8e757b9486862c22a6bdfa9f1b822324fa3793->enter($__internal_adaa6698515a138696f8fbf34d8e757b9486862c22a6bdfa9f1b822324fa3793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? null), ($context["about"] ?? null), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_adaa6698515a138696f8fbf34d8e757b9486862c22a6bdfa9f1b822324fa3793->leave($__internal_adaa6698515a138696f8fbf34d8e757b9486862c22a6bdfa9f1b822324fa3793_prof);

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
        return new Twig_Source("", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
