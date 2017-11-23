<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_c27f1ba123db635bd69144e397b436314f7384881ee2673ff2194cbaf57c379d extends Twig_Template
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
        $__internal_c901211da88e86629fdc04dd3b1b0847db6fbc988413105de0f4aee110a9943e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c901211da88e86629fdc04dd3b1b0847db6fbc988413105de0f4aee110a9943e->enter($__internal_c901211da88e86629fdc04dd3b1b0847db6fbc988413105de0f4aee110a9943e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : null), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : null), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : null), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c901211da88e86629fdc04dd3b1b0847db6fbc988413105de0f4aee110a9943e->leave($__internal_c901211da88e86629fdc04dd3b1b0847db6fbc988413105de0f4aee110a9943e_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a4686e835800fa910d4fda562f67a1b61f0e145ff1857cf64ddd1074527bbf16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4686e835800fa910d4fda562f67a1b61f0e145ff1857cf64ddd1074527bbf16->enter($__internal_a4686e835800fa910d4fda562f67a1b61f0e145ff1857cf64ddd1074527bbf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), (isset($context["about"]) ? $context["about"] : null), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), (isset($context["about"]) ? $context["about"] : null), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_a4686e835800fa910d4fda562f67a1b61f0e145ff1857cf64ddd1074527bbf16->leave($__internal_a4686e835800fa910d4fda562f67a1b61f0e145ff1857cf64ddd1074527bbf16_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc8a5f1aa1a26276dcc3d4cf274d718b3fe9dfaabf11a9482e821e91a31094d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8a5f1aa1a26276dcc3d4cf274d718b3fe9dfaabf11a9482e821e91a31094d5->enter($__internal_bc8a5f1aa1a26276dcc3d4cf274d718b3fe9dfaabf11a9482e821e91a31094d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), (isset($context["about"]) ? $context["about"] : null), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), (isset($context["about"]) ? $context["about"] : null), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bc8a5f1aa1a26276dcc3d4cf274d718b3fe9dfaabf11a9482e821e91a31094d5->leave($__internal_bc8a5f1aa1a26276dcc3d4cf274d718b3fe9dfaabf11a9482e821e91a31094d5_prof);

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
