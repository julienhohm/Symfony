<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_015fbe973407581a1de05f9425ad6229256c285cb77440d2f9a87815104ebbcb extends Twig_Template
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
        $__internal_b4747296a481279812b01c6665c7153ad35ecb31f58387f65f3c0d858f79d58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4747296a481279812b01c6665c7153ad35ecb31f58387f65f3c0d858f79d58b->enter($__internal_b4747296a481279812b01c6665c7153ad35ecb31f58387f65f3c0d858f79d58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4747296a481279812b01c6665c7153ad35ecb31f58387f65f3c0d858f79d58b->leave($__internal_b4747296a481279812b01c6665c7153ad35ecb31f58387f65f3c0d858f79d58b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67ee6ab943b4a28f7228797830af757cba984fe79603ba6ed286e2e58109c144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ee6ab943b4a28f7228797830af757cba984fe79603ba6ed286e2e58109c144->enter($__internal_67ee6ab943b4a28f7228797830af757cba984fe79603ba6ed286e2e58109c144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_67ee6ab943b4a28f7228797830af757cba984fe79603ba6ed286e2e58109c144->leave($__internal_67ee6ab943b4a28f7228797830af757cba984fe79603ba6ed286e2e58109c144_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c37ea441bdee54af41741d6a5d3992b8edea24cdf969d1e5b295cadd988cbaf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37ea441bdee54af41741d6a5d3992b8edea24cdf969d1e5b295cadd988cbaf8->enter($__internal_c37ea441bdee54af41741d6a5d3992b8edea24cdf969d1e5b295cadd988cbaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? null), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? null), ($context["line"] ?? null),  -1);
        echo "
</div>
";
        
        $__internal_c37ea441bdee54af41741d6a5d3992b8edea24cdf969d1e5b295cadd988cbaf8->leave($__internal_c37ea441bdee54af41741d6a5d3992b8edea24cdf969d1e5b295cadd988cbaf8_prof);

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
