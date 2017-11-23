<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_0125d07052ae61b4a88a5b96d680362dc26b32603d1190faf57e6f46fd988151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_6c802d31cad1abd5229ad361df594021d8057f75fc290bd278af71871719d757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c802d31cad1abd5229ad361df594021d8057f75fc290bd278af71871719d757->enter($__internal_6c802d31cad1abd5229ad361df594021d8057f75fc290bd278af71871719d757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c802d31cad1abd5229ad361df594021d8057f75fc290bd278af71871719d757->leave($__internal_6c802d31cad1abd5229ad361df594021d8057f75fc290bd278af71871719d757_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bb573d4579731f71d910acc70bf1d9ebc4cc735c9de0aa06bf6691a371db7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb573d4579731f71d910acc70bf1d9ebc4cc735c9de0aa06bf6691a371db7e7->enter($__internal_9bb573d4579731f71d910acc70bf1d9ebc4cc735c9de0aa06bf6691a371db7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9bb573d4579731f71d910acc70bf1d9ebc4cc735c9de0aa06bf6691a371db7e7->leave($__internal_9bb573d4579731f71d910acc70bf1d9ebc4cc735c9de0aa06bf6691a371db7e7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_06bc1fc0948b4697a5121ff8c5c9815d44b8911824c4f1fe0a2b7d8bc7fb88ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06bc1fc0948b4697a5121ff8c5c9815d44b8911824c4f1fe0a2b7d8bc7fb88ea->enter($__internal_06bc1fc0948b4697a5121ff8c5c9815d44b8911824c4f1fe0a2b7d8bc7fb88ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_06bc1fc0948b4697a5121ff8c5c9815d44b8911824c4f1fe0a2b7d8bc7fb88ea->leave($__internal_06bc1fc0948b4697a5121ff8c5c9815d44b8911824c4f1fe0a2b7d8bc7fb88ea_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
        return new Twig_Source("", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
