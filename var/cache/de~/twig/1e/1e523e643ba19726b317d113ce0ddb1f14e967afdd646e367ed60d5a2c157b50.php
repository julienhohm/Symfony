<?php

/* JHTourismeBundle:Tourisme:home.html.twig */
class __TwigTemplate_40da5bd2a9b8bb7b709f20ccedd7e5355684032878134e9dff5c8e5f4cbedf1b extends Twig_Template
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
        $__internal_6c4163b41d58658ab098447c795821474a9b48743f5d1a929c2014606d28dbd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4163b41d58658ab098447c795821474a9b48743f5d1a929c2014606d28dbd0->enter($__internal_6c4163b41d58658ab098447c795821474a9b48743f5d1a929c2014606d28dbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Tourisme:home.html.twig"));

        $__internal_4906f221d9c7005dd578f41e5b3016ed74c8a88ea08752b044e517339d32c5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4906f221d9c7005dd578f41e5b3016ed74c8a88ea08752b044e517339d32c5c0->enter($__internal_4906f221d9c7005dd578f41e5b3016ed74c8a88ea08752b044e517339d32c5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Tourisme:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c4163b41d58658ab098447c795821474a9b48743f5d1a929c2014606d28dbd0->leave($__internal_6c4163b41d58658ab098447c795821474a9b48743f5d1a929c2014606d28dbd0_prof);

        
        $__internal_4906f221d9c7005dd578f41e5b3016ed74c8a88ea08752b044e517339d32c5c0->leave($__internal_4906f221d9c7005dd578f41e5b3016ed74c8a88ea08752b044e517339d32c5c0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c0013ad30f6b3bba743959ce6e88496d2bff65d6def3cfe99a5fff19453ce52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0013ad30f6b3bba743959ce6e88496d2bff65d6def3cfe99a5fff19453ce52->enter($__internal_7c0013ad30f6b3bba743959ce6e88496d2bff65d6def3cfe99a5fff19453ce52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c58d582e11bb87e37c9015d5e28e5f791862be79934ccc665bde6ec161a27890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58d582e11bb87e37c9015d5e28e5f791862be79934ccc665bde6ec161a27890->enter($__internal_c58d582e11bb87e37c9015d5e28e5f791862be79934ccc665bde6ec161a27890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c58d582e11bb87e37c9015d5e28e5f791862be79934ccc665bde6ec161a27890->leave($__internal_c58d582e11bb87e37c9015d5e28e5f791862be79934ccc665bde6ec161a27890_prof);

        
        $__internal_7c0013ad30f6b3bba743959ce6e88496d2bff65d6def3cfe99a5fff19453ce52->leave($__internal_7c0013ad30f6b3bba743959ce6e88496d2bff65d6def3cfe99a5fff19453ce52_prof);

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
