<?php

/* JHTourismeBundle::layout.html.twig */
class __TwigTemplate_aafec24866ea630e55347a147a6474466c679f874c4883739d4528318ab7362b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1569a740a49a8accce2b60f0249cb039901a7f6462259708678b29dce1e3974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1569a740a49a8accce2b60f0249cb039901a7f6462259708678b29dce1e3974->enter($__internal_e1569a740a49a8accce2b60f0249cb039901a7f6462259708678b29dce1e3974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

        $__internal_1a55889351ae35aea3e84d1f2f2570d5c8b098de23781993be5004fdbfd3587c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a55889351ae35aea3e84d1f2f2570d5c8b098de23781993be5004fdbfd3587c->enter($__internal_1a55889351ae35aea3e84d1f2f2570d5c8b098de23781993be5004fdbfd3587c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE HTML>
<html>
  \t<head>
    \t<meta charset=\"utf-8\">
    \t<title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    \t<link rel=\"stylesheet\" href=\"../bundles/css/bulma.css\">
  \t</head>
  \t<body>
  \t\t<header class=\"hero is-primary\">
\t\t\t<div class=\"hero-body\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"columns is-vcentered\">
\t\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t\t<h1 class=\"title\">
\t\t\t\t\t\t\t\tHero title
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h2 class=\"subtitle\">
\t\t\t\t\t\t\t\tHero subtitle
\t\t\t\t\t\t\t</h2>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"column is-narrow\">
\t\t\t\t\t\t\t<figure class=\"image is-128x128\">
\t\t\t\t\t\t\t\t<img src=\"http://via.placeholder.com/128x128\" alt=\"\"/>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
   \t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JHTourismeBundle:Tourisme:showNavbar"));
        echo "
    \t";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "    \t<footer class=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"columns is-variable is-8\">
\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<h4 class=\"title is-4 has-text-weight-semibold\">Plan du site</h4>
\t\t\t\t\t\t\t<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora veniam est sapiente natus repudiandae totam iusto laborum, nobis impedit? Est?</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<h4 class=\"title is-4 has-text-weight-semibold\">A propos</h4>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit debitis sunt ad sapiente quo, saepe molestias magnam iste iure quas?
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<h4 class=\"title is-4 has-text-weight-semibold\">Contacts</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"content has-text-centered is-size-7\">
\t\t\t\t<p>
\t\t\t\t\tRéalisé par Julien Hohm - Propulsé par <a href=\"http://bulma.io\">Bulma.io</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</body>
</html>";
        
        $__internal_e1569a740a49a8accce2b60f0249cb039901a7f6462259708678b29dce1e3974->leave($__internal_e1569a740a49a8accce2b60f0249cb039901a7f6462259708678b29dce1e3974_prof);

        
        $__internal_1a55889351ae35aea3e84d1f2f2570d5c8b098de23781993be5004fdbfd3587c->leave($__internal_1a55889351ae35aea3e84d1f2f2570d5c8b098de23781993be5004fdbfd3587c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d2790667e8e89f252b1e414a01aa4a912be39fc3a234844a1d19a551a1c15a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d2790667e8e89f252b1e414a01aa4a912be39fc3a234844a1d19a551a1c15a9->enter($__internal_7d2790667e8e89f252b1e414a01aa4a912be39fc3a234844a1d19a551a1c15a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7ae69460a41652560918b869a5deedccca20ff4e1fd698bb555f93858ef615ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae69460a41652560918b869a5deedccca20ff4e1fd698bb555f93858ef615ec->enter($__internal_7ae69460a41652560918b869a5deedccca20ff4e1fd698bb555f93858ef615ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JH Tourisme";
        
        $__internal_7ae69460a41652560918b869a5deedccca20ff4e1fd698bb555f93858ef615ec->leave($__internal_7ae69460a41652560918b869a5deedccca20ff4e1fd698bb555f93858ef615ec_prof);

        
        $__internal_7d2790667e8e89f252b1e414a01aa4a912be39fc3a234844a1d19a551a1c15a9->leave($__internal_7d2790667e8e89f252b1e414a01aa4a912be39fc3a234844a1d19a551a1c15a9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_975ca34848aa50219618680cacbd41c72e6ded532eae6047ca95e78c2e4439c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975ca34848aa50219618680cacbd41c72e6ded532eae6047ca95e78c2e4439c9->enter($__internal_975ca34848aa50219618680cacbd41c72e6ded532eae6047ca95e78c2e4439c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1fa65f4e1feec684204d36010271d61f7f5ba513f2ea7ddfc794917c58e276ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa65f4e1feec684204d36010271d61f7f5ba513f2ea7ddfc794917c58e276ce->enter($__internal_1fa65f4e1feec684204d36010271d61f7f5ba513f2ea7ddfc794917c58e276ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    \t";
        
        $__internal_1fa65f4e1feec684204d36010271d61f7f5ba513f2ea7ddfc794917c58e276ce->leave($__internal_1fa65f4e1feec684204d36010271d61f7f5ba513f2ea7ddfc794917c58e276ce_prof);

        
        $__internal_975ca34848aa50219618680cacbd41c72e6ded532eae6047ca95e78c2e4439c9->leave($__internal_975ca34848aa50219618680cacbd41c72e6ded532eae6047ca95e78c2e4439c9_prof);

    }

    public function getTemplateName()
    {
        return "JHTourismeBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  129 => 33,  111 => 7,  68 => 35,  66 => 33,  62 => 32,  34 => 7,  27 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

<!DOCTYPE HTML>
<html>
  \t<head>
    \t<meta charset=\"utf-8\">
    \t<title>{% block title %}JH Tourisme{% endblock %}</title>
    \t<link rel=\"stylesheet\" href=\"../bundles/css/bulma.css\">
  \t</head>
  \t<body>
  \t\t<header class=\"hero is-primary\">
\t\t\t<div class=\"hero-body\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"columns is-vcentered\">
\t\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t\t<h1 class=\"title\">
\t\t\t\t\t\t\t\tHero title
\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t<h2 class=\"subtitle\">
\t\t\t\t\t\t\t\tHero subtitle
\t\t\t\t\t\t\t</h2>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"column is-narrow\">
\t\t\t\t\t\t\t<figure class=\"image is-128x128\">
\t\t\t\t\t\t\t\t<img src=\"http://via.placeholder.com/128x128\" alt=\"\"/>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
   \t\t{{ render(controller(\"JHTourismeBundle:Tourisme:showNavbar\")) }}
    \t{% block body %}
    \t{% endblock %}
    \t<footer class=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"columns is-variable is-8\">
\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<h4 class=\"title is-4 has-text-weight-semibold\">Plan du site</h4>
\t\t\t\t\t\t\t<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora veniam est sapiente natus repudiandae totam iusto laborum, nobis impedit? Est?</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<h4 class=\"title is-4 has-text-weight-semibold\">A propos</h4>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit debitis sunt ad sapiente quo, saepe molestias magnam iste iure quas?
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"column\">
\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<h4 class=\"title is-4 has-text-weight-semibold\">Contacts</h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"content has-text-centered is-size-7\">
\t\t\t\t<p>
\t\t\t\t\tRéalisé par Julien Hohm - Propulsé par <a href=\"http://bulma.io\">Bulma.io</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</body>
</html>", "JHTourismeBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle/Resources/views/layout.html.twig");
    }
}
