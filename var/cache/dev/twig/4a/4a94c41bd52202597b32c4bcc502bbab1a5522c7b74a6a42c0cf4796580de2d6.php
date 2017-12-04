<?php

/* JHTourismeBundle:Tourisme:home.html.twig */
class __TwigTemplate_b98a645aa8265460fe66bc65f9e86e424a19ffb5b106d1cb0e7031f5ade32ae0 extends Twig_Template
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
        $__internal_e70a469c101a6c5176063c8504c7c086bc3cff50317ed1cfddc0aca92ecff9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70a469c101a6c5176063c8504c7c086bc3cff50317ed1cfddc0aca92ecff9d5->enter($__internal_e70a469c101a6c5176063c8504c7c086bc3cff50317ed1cfddc0aca92ecff9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Tourisme:home.html.twig"));

        $__internal_21b6efa9e5f12cea1305ec37f0be50d406164462ae95c9cfc6de8dd31d8f4b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b6efa9e5f12cea1305ec37f0be50d406164462ae95c9cfc6de8dd31d8f4b77->enter($__internal_21b6efa9e5f12cea1305ec37f0be50d406164462ae95c9cfc6de8dd31d8f4b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Tourisme:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e70a469c101a6c5176063c8504c7c086bc3cff50317ed1cfddc0aca92ecff9d5->leave($__internal_e70a469c101a6c5176063c8504c7c086bc3cff50317ed1cfddc0aca92ecff9d5_prof);

        
        $__internal_21b6efa9e5f12cea1305ec37f0be50d406164462ae95c9cfc6de8dd31d8f4b77->leave($__internal_21b6efa9e5f12cea1305ec37f0be50d406164462ae95c9cfc6de8dd31d8f4b77_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_176e315673af3c3347c5aa145c4b925cd1768ad67be248ee34bd9cc3e2e3c31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176e315673af3c3347c5aa145c4b925cd1768ad67be248ee34bd9cc3e2e3c31b->enter($__internal_176e315673af3c3347c5aa145c4b925cd1768ad67be248ee34bd9cc3e2e3c31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4aa310eb62eb7397ccf3f27dfc1c2fd0faf703f29a7293d6eee3cc35ad6bbf08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa310eb62eb7397ccf3f27dfc1c2fd0faf703f29a7293d6eee3cc35ad6bbf08->enter($__internal_4aa310eb62eb7397ccf3f27dfc1c2fd0faf703f29a7293d6eee3cc35ad6bbf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4aa310eb62eb7397ccf3f27dfc1c2fd0faf703f29a7293d6eee3cc35ad6bbf08->leave($__internal_4aa310eb62eb7397ccf3f27dfc1c2fd0faf703f29a7293d6eee3cc35ad6bbf08_prof);

        
        $__internal_176e315673af3c3347c5aa145c4b925cd1768ad67be248ee34bd9cc3e2e3c31b->leave($__internal_176e315673af3c3347c5aa145c4b925cd1768ad67be248ee34bd9cc3e2e3c31b_prof);

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
{% endblock %}", "JHTourismeBundle:Tourisme:home.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle/Resources/views/Tourisme/home.html.twig");
    }
}
