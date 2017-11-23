<?php

/* JHTourismeBundle:Tourisme:home.html.twig */
class __TwigTemplate_72f580fea183c8d08bc01ae8465bdab5d1e4c8c712d980d5d454408fba614464 extends Twig_Template
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
        $__internal_2157dd37b30d9e37e9afe52619e0bd093826b84f33c24477094989e3e76b3e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2157dd37b30d9e37e9afe52619e0bd093826b84f33c24477094989e3e76b3e5f->enter($__internal_2157dd37b30d9e37e9afe52619e0bd093826b84f33c24477094989e3e76b3e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Tourisme:home.html.twig"));

        $__internal_78f68754737aa3ab5d69c0751ddf9412268f4728ceb7af8dbedfaa2f2b50aa67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f68754737aa3ab5d69c0751ddf9412268f4728ceb7af8dbedfaa2f2b50aa67->enter($__internal_78f68754737aa3ab5d69c0751ddf9412268f4728ceb7af8dbedfaa2f2b50aa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Tourisme:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2157dd37b30d9e37e9afe52619e0bd093826b84f33c24477094989e3e76b3e5f->leave($__internal_2157dd37b30d9e37e9afe52619e0bd093826b84f33c24477094989e3e76b3e5f_prof);

        
        $__internal_78f68754737aa3ab5d69c0751ddf9412268f4728ceb7af8dbedfaa2f2b50aa67->leave($__internal_78f68754737aa3ab5d69c0751ddf9412268f4728ceb7af8dbedfaa2f2b50aa67_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6157212b120968f6a8c8c951771703b3d5147f88fc4db745c37c5ff91e6e1139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6157212b120968f6a8c8c951771703b3d5147f88fc4db745c37c5ff91e6e1139->enter($__internal_6157212b120968f6a8c8c951771703b3d5147f88fc4db745c37c5ff91e6e1139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58a1c05fd3f2cdb86bafcaf2cb77b0a1838030776f9e76ece481d1cc22ed6c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58a1c05fd3f2cdb86bafcaf2cb77b0a1838030776f9e76ece481d1cc22ed6c01->enter($__internal_58a1c05fd3f2cdb86bafcaf2cb77b0a1838030776f9e76ece481d1cc22ed6c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_58a1c05fd3f2cdb86bafcaf2cb77b0a1838030776f9e76ece481d1cc22ed6c01->leave($__internal_58a1c05fd3f2cdb86bafcaf2cb77b0a1838030776f9e76ece481d1cc22ed6c01_prof);

        
        $__internal_6157212b120968f6a8c8c951771703b3d5147f88fc4db745c37c5ff91e6e1139->leave($__internal_6157212b120968f6a8c8c951771703b3d5147f88fc4db745c37c5ff91e6e1139_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JHTourismeBundle::layout.html.twig\" %}

{% block body %}
\t<section class=\"section\">
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
{% endblock %}", "JHTourismeBundle:Tourisme:home.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle\\Resources\\views\\Tourisme\\home.html.twig");
    }
}
