<?php

/* JHTourismeBundle:Activity:add.html.twig */
class __TwigTemplate_3588157d563856067edb9f944017ebe02f156a93f56f18fe152dc2daaa295348 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JHTourismeBundle::layout.html.twig", "JHTourismeBundle:Activity:add.html.twig", 1);
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
        $__internal_6d18cfcf50b54766e7ed1013a89ee26ba83ec012449b61edfb79655b8b6db39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d18cfcf50b54766e7ed1013a89ee26ba83ec012449b61edfb79655b8b6db39d->enter($__internal_6d18cfcf50b54766e7ed1013a89ee26ba83ec012449b61edfb79655b8b6db39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d18cfcf50b54766e7ed1013a89ee26ba83ec012449b61edfb79655b8b6db39d->leave($__internal_6d18cfcf50b54766e7ed1013a89ee26ba83ec012449b61edfb79655b8b6db39d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_83ce6a67a600122b30049311be63c48fb72edbca4be180e65c90876369d02068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ce6a67a600122b30049311be63c48fb72edbca4be180e65c90876369d02068->enter($__internal_83ce6a67a600122b30049311be63c48fb72edbca4be180e65c90876369d02068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_83ce6a67a600122b30049311be63c48fb72edbca4be180e65c90876369d02068->leave($__internal_83ce6a67a600122b30049311be63c48fb72edbca4be180e65c90876369d02068_prof);

    }

    public function getTemplateName()
    {
        return "JHTourismeBundle:Activity:add.html.twig";
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
        return new Twig_Source("", "JHTourismeBundle:Activity:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle/Resources/views/Activity/add.html.twig");
    }
}
