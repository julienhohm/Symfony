<?php

/* JHTourismeBundle:Tourisme:home.html.twig */
class __TwigTemplate_e114bde8a1c4c9be3bac08602d20cb283fe5e363118d943e9c0b0eb373f06245 extends Twig_Template
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
        $__internal_321dcf82d9bc716fa82e8ab708704fa0bf433a5f8cb440701dab9766406408fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321dcf82d9bc716fa82e8ab708704fa0bf433a5f8cb440701dab9766406408fe->enter($__internal_321dcf82d9bc716fa82e8ab708704fa0bf433a5f8cb440701dab9766406408fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Tourisme:home.html.twig"));

        $__internal_1993669f56f35a5aeaa77c5dcd65be2c5b4868d38b51bd83198befe71f5302e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1993669f56f35a5aeaa77c5dcd65be2c5b4868d38b51bd83198befe71f5302e1->enter($__internal_1993669f56f35a5aeaa77c5dcd65be2c5b4868d38b51bd83198befe71f5302e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Tourisme:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_321dcf82d9bc716fa82e8ab708704fa0bf433a5f8cb440701dab9766406408fe->leave($__internal_321dcf82d9bc716fa82e8ab708704fa0bf433a5f8cb440701dab9766406408fe_prof);

        
        $__internal_1993669f56f35a5aeaa77c5dcd65be2c5b4868d38b51bd83198befe71f5302e1->leave($__internal_1993669f56f35a5aeaa77c5dcd65be2c5b4868d38b51bd83198befe71f5302e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81cfd1622857dca4c65cd763abb76b0ae629d26700b42ef4291bd9212fdf809d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81cfd1622857dca4c65cd763abb76b0ae629d26700b42ef4291bd9212fdf809d->enter($__internal_81cfd1622857dca4c65cd763abb76b0ae629d26700b42ef4291bd9212fdf809d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91de0feaf9828291a162de404f8c6e46d357d161c771bd6b76362f69d2454614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91de0feaf9828291a162de404f8c6e46d357d161c771bd6b76362f69d2454614->enter($__internal_91de0feaf9828291a162de404f8c6e46d357d161c771bd6b76362f69d2454614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91de0feaf9828291a162de404f8c6e46d357d161c771bd6b76362f69d2454614->leave($__internal_91de0feaf9828291a162de404f8c6e46d357d161c771bd6b76362f69d2454614_prof);

        
        $__internal_81cfd1622857dca4c65cd763abb76b0ae629d26700b42ef4291bd9212fdf809d->leave($__internal_81cfd1622857dca4c65cd763abb76b0ae629d26700b42ef4291bd9212fdf809d_prof);

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
