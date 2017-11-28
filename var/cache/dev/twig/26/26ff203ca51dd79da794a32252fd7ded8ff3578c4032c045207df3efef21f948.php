<?php

/* JHTourismeBundle:Tourisme:home.html.twig */
class __TwigTemplate_2f93bd9c2f14dd473f42ecc30cde071d1f67d3fffe776835c7bc249a2266e860 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JHTourismeBundle::layout.html.twig", "JHTourismeBundle:Tourisme:home.html.twig", 1);
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
        $__internal_775b026f1363d0432039f6b25ada0a2aa9c09bc2e5429042f0144dba8344bc84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_775b026f1363d0432039f6b25ada0a2aa9c09bc2e5429042f0144dba8344bc84->enter($__internal_775b026f1363d0432039f6b25ada0a2aa9c09bc2e5429042f0144dba8344bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Tourisme:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_775b026f1363d0432039f6b25ada0a2aa9c09bc2e5429042f0144dba8344bc84->leave($__internal_775b026f1363d0432039f6b25ada0a2aa9c09bc2e5429042f0144dba8344bc84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99b63ba4718a29a94038cf2fa1ecf0fbcabec69aa129af698d5f4a7b46654ab7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99b63ba4718a29a94038cf2fa1ecf0fbcabec69aa129af698d5f4a7b46654ab7->enter($__internal_99b63ba4718a29a94038cf2fa1ecf0fbcabec69aa129af698d5f4a7b46654ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<section class=\"section\">
\t\t<div class=\"container has-text-centered\">
\t\t\t<div class=\"columns is-multiline\">
\t\t\t\t<div class=\"column is-12\">
\t\t\t\t\t<h1 class=\"title\">Mon titre</h1>
\t\t\t\t\t<h2 class=\"subtitle\">Mon soustitre</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\">
\t\t\t\t\t<div class=\"columns is-vcentered\">
\t\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t\t<div id=\"map\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi maiores iure eveniet saepe quidem officia illum quos, explicabo atque sint.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa blanditiis cum ipsam voluptatem repellat, hic maxime nemo dolorum consequatur inventore!
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa blanditiis cum ipsam voluptatem repellat, hic maxime nemo dolorum consequatur inventore!
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t\t
\t\t</div>
\t</section>
";
        
        $__internal_99b63ba4718a29a94038cf2fa1ecf0fbcabec69aa129af698d5f4a7b46654ab7->leave($__internal_99b63ba4718a29a94038cf2fa1ecf0fbcabec69aa129af698d5f4a7b46654ab7_prof);

    }

    public function getTemplateName()
    {
        return "JHTourismeBundle:Tourisme:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JHTourismeBundle:Tourisme:home.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle/Resources/views/Tourisme/home.html.twig");
    }
}
