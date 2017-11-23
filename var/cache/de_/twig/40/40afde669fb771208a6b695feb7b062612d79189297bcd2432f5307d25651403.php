<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_0a92623112780b4565d544491a3af4a5735b0a90ba9a0fab78a5d56764b6e417 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cc99e50c64fcc2f1d4f499e4ae54062a5ce4a49123caacae56d69959d5414b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc99e50c64fcc2f1d4f499e4ae54062a5ce4a49123caacae56d69959d5414b3->enter($__internal_1cc99e50c64fcc2f1d4f499e4ae54062a5ce4a49123caacae56d69959d5414b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cc99e50c64fcc2f1d4f499e4ae54062a5ce4a49123caacae56d69959d5414b3->leave($__internal_1cc99e50c64fcc2f1d4f499e4ae54062a5ce4a49123caacae56d69959d5414b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e2ea8f0c4ff38c2493e7f484340813ac14c0d8069cdb49beee120ef44e32f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2ea8f0c4ff38c2493e7f484340813ac14c0d8069cdb49beee120ef44e32f66->enter($__internal_8e2ea8f0c4ff38c2493e7f484340813ac14c0d8069cdb49beee120ef44e32f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_8e2ea8f0c4ff38c2493e7f484340813ac14c0d8069cdb49beee120ef44e32f66->leave($__internal_8e2ea8f0c4ff38c2493e7f484340813ac14c0d8069cdb49beee120ef44e32f66_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c79c035602e3879241920355d77f54e18099f3d224bba28fd6a1b87b430438b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79c035602e3879241920355d77f54e18099f3d224bba28fd6a1b87b430438b2->enter($__internal_c79c035602e3879241920355d77f54e18099f3d224bba28fd6a1b87b430438b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : null), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : null), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : null), (isset($context["line"]) ? $context["line"] : null),  -1);
        echo "
</div>
";
        
        $__internal_c79c035602e3879241920355d77f54e18099f3d224bba28fd6a1b87b430438b2->leave($__internal_c79c035602e3879241920355d77f54e18099f3d224bba28fd6a1b87b430438b2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  69 => 12,  63 => 11,  60 => 10,  54 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
