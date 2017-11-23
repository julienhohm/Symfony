<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_7fdc0c75c0d0d3ac957c81fbd4532b3e912dc50ebaea685d559c5b75f007f8f9 extends Twig_Template
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
        $__internal_b6863d384d612b272d82d29723979aa8e985c53c8819940103251ffca1202963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6863d384d612b272d82d29723979aa8e985c53c8819940103251ffca1202963->enter($__internal_b6863d384d612b272d82d29723979aa8e985c53c8819940103251ffca1202963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : null), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : null), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : null), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6863d384d612b272d82d29723979aa8e985c53c8819940103251ffca1202963->leave($__internal_b6863d384d612b272d82d29723979aa8e985c53c8819940103251ffca1202963_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_47377d36a3d2b3ed95761fe9b71c7f6fb92bcec10f4009fd2a1b49de0b734355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47377d36a3d2b3ed95761fe9b71c7f6fb92bcec10f4009fd2a1b49de0b734355->enter($__internal_47377d36a3d2b3ed95761fe9b71c7f6fb92bcec10f4009fd2a1b49de0b734355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_47377d36a3d2b3ed95761fe9b71c7f6fb92bcec10f4009fd2a1b49de0b734355->leave($__internal_47377d36a3d2b3ed95761fe9b71c7f6fb92bcec10f4009fd2a1b49de0b734355_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eeea6d6c2d0b630c954121103f2a02b83b1cbbdd7d34d4301dd441dce1586e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeea6d6c2d0b630c954121103f2a02b83b1cbbdd7d34d4301dd441dce1586e71->enter($__internal_eeea6d6c2d0b630c954121103f2a02b83b1cbbdd7d34d4301dd441dce1586e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), (isset($context["about"]) ? $context["about"] : null), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), (isset($context["about"]) ? $context["about"] : null), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_eeea6d6c2d0b630c954121103f2a02b83b1cbbdd7d34d4301dd441dce1586e71->leave($__internal_eeea6d6c2d0b630c954121103f2a02b83b1cbbdd7d34d4301dd441dce1586e71_prof);

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
