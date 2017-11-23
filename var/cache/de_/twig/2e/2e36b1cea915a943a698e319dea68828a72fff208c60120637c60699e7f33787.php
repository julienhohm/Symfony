<?php

/* @JHTourisme/Activity/add.html.twig */
class __TwigTemplate_18ba94e9ce91f6940705940e80ee378d64ad20185f78684de6509c757bd60fb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JHTourismeBundle::layout.html.twig", "@JHTourisme/Activity/add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JHTourismeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b916ec391b2d4d204fcefdb5bd200eacb8f2f10c98aa65f24dd071e91da60df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b916ec391b2d4d204fcefdb5bd200eacb8f2f10c98aa65f24dd071e91da60df9->enter($__internal_b916ec391b2d4d204fcefdb5bd200eacb8f2f10c98aa65f24dd071e91da60df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JHTourisme/Activity/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b916ec391b2d4d204fcefdb5bd200eacb8f2f10c98aa65f24dd071e91da60df9->leave($__internal_b916ec391b2d4d204fcefdb5bd200eacb8f2f10c98aa65f24dd071e91da60df9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f95cbec0bb8a6369c4ef19068eb67498e013d5f6938491fcd0db28162234bb98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95cbec0bb8a6369c4ef19068eb67498e013d5f6938491fcd0db28162234bb98->enter($__internal_f95cbec0bb8a6369c4ef19068eb67498e013d5f6938491fcd0db28162234bb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<section class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"columns is-multiline is-centered\">
\t\t\t\t<div class=\"column is-12 has-text-centered\">
\t\t\t\t\t<h1 class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add.title"), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\">
\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_f95cbec0bb8a6369c4ef19068eb67498e013d5f6938491fcd0db28162234bb98->leave($__internal_f95cbec0bb8a6369c4ef19068eb67498e013d5f6938491fcd0db28162234bb98_prof);

    }

    public function getTemplateName()
    {
        return "@JHTourisme/Activity/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 27,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JHTourisme/Activity/add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle\\Resources\\views\\Activity\\add.html.twig");
    }
}
