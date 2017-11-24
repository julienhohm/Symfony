<?php

/* @JHTourisme/Tourisme/home.html.twig */
class __TwigTemplate_3e538d3d36f93b5f70dc90b9bc1bfe21dea31e0ab07f9680daf3324f41dbf1af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JHTourismeBundle::layout.html.twig", "@JHTourisme/Tourisme/home.html.twig", 1);
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
        $__internal_0e6543f5705d5e7e6b49685fc85e125a57c09def2c6962d2bafe25753bd3ad34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6543f5705d5e7e6b49685fc85e125a57c09def2c6962d2bafe25753bd3ad34->enter($__internal_0e6543f5705d5e7e6b49685fc85e125a57c09def2c6962d2bafe25753bd3ad34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JHTourisme/Tourisme/home.html.twig"));

        $__internal_b6b4160fb5e05ff9e4c9f1427bdc77a7e0c5738fb2224be3521336342c478051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b4160fb5e05ff9e4c9f1427bdc77a7e0c5738fb2224be3521336342c478051->enter($__internal_b6b4160fb5e05ff9e4c9f1427bdc77a7e0c5738fb2224be3521336342c478051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JHTourisme/Tourisme/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e6543f5705d5e7e6b49685fc85e125a57c09def2c6962d2bafe25753bd3ad34->leave($__internal_0e6543f5705d5e7e6b49685fc85e125a57c09def2c6962d2bafe25753bd3ad34_prof);

        
        $__internal_b6b4160fb5e05ff9e4c9f1427bdc77a7e0c5738fb2224be3521336342c478051->leave($__internal_b6b4160fb5e05ff9e4c9f1427bdc77a7e0c5738fb2224be3521336342c478051_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17d47331f8c9424b61dce4bb0081ccd59880e5af2d6439df3c91bc3c83f368d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d47331f8c9424b61dce4bb0081ccd59880e5af2d6439df3c91bc3c83f368d0->enter($__internal_17d47331f8c9424b61dce4bb0081ccd59880e5af2d6439df3c91bc3c83f368d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9cb6eac5440f2de42ad2fc05b1dc5f1e7f627e865e8a0718a89f5ca86c0c156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9cb6eac5440f2de42ad2fc05b1dc5f1e7f627e865e8a0718a89f5ca86c0c156->enter($__internal_c9cb6eac5440f2de42ad2fc05b1dc5f1e7f627e865e8a0718a89f5ca86c0c156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c9cb6eac5440f2de42ad2fc05b1dc5f1e7f627e865e8a0718a89f5ca86c0c156->leave($__internal_c9cb6eac5440f2de42ad2fc05b1dc5f1e7f627e865e8a0718a89f5ca86c0c156_prof);

        
        $__internal_17d47331f8c9424b61dce4bb0081ccd59880e5af2d6439df3c91bc3c83f368d0->leave($__internal_17d47331f8c9424b61dce4bb0081ccd59880e5af2d6439df3c91bc3c83f368d0_prof);

    }

    public function getTemplateName()
    {
        return "@JHTourisme/Tourisme/home.html.twig";
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
{% endblock %}", "@JHTourisme/Tourisme/home.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle\\Resources\\views\\Tourisme\\home.html.twig");
    }
}
