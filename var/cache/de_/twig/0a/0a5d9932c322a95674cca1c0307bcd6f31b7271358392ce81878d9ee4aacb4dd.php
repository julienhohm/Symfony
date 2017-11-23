<?php

/* base.html.twig */
class __TwigTemplate_9bd14b42a2a547f89550c15b8517c47cd2f9760ccea1c104d823556fcc4c43e9 extends Twig_Template
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
        $__internal_ee349f5781c0d9272f657dfcd860805523bb22b29d6e9ced23850aa8b22f0071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee349f5781c0d9272f657dfcd860805523bb22b29d6e9ced23850aa8b22f0071->enter($__internal_ee349f5781c0d9272f657dfcd860805523bb22b29d6e9ced23850aa8b22f0071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ee349f5781c0d9272f657dfcd860805523bb22b29d6e9ced23850aa8b22f0071->leave($__internal_ee349f5781c0d9272f657dfcd860805523bb22b29d6e9ced23850aa8b22f0071_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_76808ef3fc3360edf8fc653c0ac854557c2c42468d23fe287e57a3b4dfcd8c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76808ef3fc3360edf8fc653c0ac854557c2c42468d23fe287e57a3b4dfcd8c60->enter($__internal_76808ef3fc3360edf8fc653c0ac854557c2c42468d23fe287e57a3b4dfcd8c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_76808ef3fc3360edf8fc653c0ac854557c2c42468d23fe287e57a3b4dfcd8c60->leave($__internal_76808ef3fc3360edf8fc653c0ac854557c2c42468d23fe287e57a3b4dfcd8c60_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b0b8510969a9956d96a0b35143367a0c122da8911c553a6e1c5e0a1e513542f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b8510969a9956d96a0b35143367a0c122da8911c553a6e1c5e0a1e513542f9->enter($__internal_b0b8510969a9956d96a0b35143367a0c122da8911c553a6e1c5e0a1e513542f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b0b8510969a9956d96a0b35143367a0c122da8911c553a6e1c5e0a1e513542f9->leave($__internal_b0b8510969a9956d96a0b35143367a0c122da8911c553a6e1c5e0a1e513542f9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e21d07b2bacd8103927834f22b33e6b035a21cecb5f869b69b641d6c542cdbb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e21d07b2bacd8103927834f22b33e6b035a21cecb5f869b69b641d6c542cdbb3->enter($__internal_e21d07b2bacd8103927834f22b33e6b035a21cecb5f869b69b641d6c542cdbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e21d07b2bacd8103927834f22b33e6b035a21cecb5f869b69b641d6c542cdbb3->leave($__internal_e21d07b2bacd8103927834f22b33e6b035a21cecb5f869b69b641d6c542cdbb3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fee3484f907c82a898da09caee26aca792c3b4a8f4a9bd3f7b5b0812403a8c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee3484f907c82a898da09caee26aca792c3b4a8f4a9bd3f7b5b0812403a8c8b->enter($__internal_fee3484f907c82a898da09caee26aca792c3b4a8f4a9bd3f7b5b0812403a8c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fee3484f907c82a898da09caee26aca792c3b4a8f4a9bd3f7b5b0812403a8c8b->leave($__internal_fee3484f907c82a898da09caee26aca792c3b4a8f4a9bd3f7b5b0812403a8c8b_prof);

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
