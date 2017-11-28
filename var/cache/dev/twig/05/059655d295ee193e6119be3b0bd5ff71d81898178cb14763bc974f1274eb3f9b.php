<?php

/* base.html.twig */
class __TwigTemplate_e9621cd804be41d49c5330b86d355a0cf345b1a81d15b73d577c73927aa33093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50fb4180b5f56b23c16f676be03551ae19ca43454b44d0ed54d0ace314c88824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50fb4180b5f56b23c16f676be03551ae19ca43454b44d0ed54d0ace314c88824->enter($__internal_50fb4180b5f56b23c16f676be03551ae19ca43454b44d0ed54d0ace314c88824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_50fb4180b5f56b23c16f676be03551ae19ca43454b44d0ed54d0ace314c88824->leave($__internal_50fb4180b5f56b23c16f676be03551ae19ca43454b44d0ed54d0ace314c88824_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ad80af21c772c80fe0bf0244c8fc55457f9b48235cd9ce6e807617a01ea8d3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad80af21c772c80fe0bf0244c8fc55457f9b48235cd9ce6e807617a01ea8d3d->enter($__internal_9ad80af21c772c80fe0bf0244c8fc55457f9b48235cd9ce6e807617a01ea8d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9ad80af21c772c80fe0bf0244c8fc55457f9b48235cd9ce6e807617a01ea8d3d->leave($__internal_9ad80af21c772c80fe0bf0244c8fc55457f9b48235cd9ce6e807617a01ea8d3d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc72baaef5c08cc96dfe3704825ac7b9c4905aebf658edb314938323fc5ceac4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc72baaef5c08cc96dfe3704825ac7b9c4905aebf658edb314938323fc5ceac4->enter($__internal_dc72baaef5c08cc96dfe3704825ac7b9c4905aebf658edb314938323fc5ceac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dc72baaef5c08cc96dfe3704825ac7b9c4905aebf658edb314938323fc5ceac4->leave($__internal_dc72baaef5c08cc96dfe3704825ac7b9c4905aebf658edb314938323fc5ceac4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ea1bcc587f09a5d391a45953ca8cb8fadf01eb5016c60058f8f671962e183a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1bcc587f09a5d391a45953ca8cb8fadf01eb5016c60058f8f671962e183a23->enter($__internal_ea1bcc587f09a5d391a45953ca8cb8fadf01eb5016c60058f8f671962e183a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ea1bcc587f09a5d391a45953ca8cb8fadf01eb5016c60058f8f671962e183a23->leave($__internal_ea1bcc587f09a5d391a45953ca8cb8fadf01eb5016c60058f8f671962e183a23_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5caac595a6fabdfa14a6e0e886661925d96143d653f69154de478929ee9daae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5caac595a6fabdfa14a6e0e886661925d96143d653f69154de478929ee9daae5->enter($__internal_5caac595a6fabdfa14a6e0e886661925d96143d653f69154de478929ee9daae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5caac595a6fabdfa14a6e0e886661925d96143d653f69154de478929ee9daae5->leave($__internal_5caac595a6fabdfa14a6e0e886661925d96143d653f69154de478929ee9daae5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\wamp64\\www\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
