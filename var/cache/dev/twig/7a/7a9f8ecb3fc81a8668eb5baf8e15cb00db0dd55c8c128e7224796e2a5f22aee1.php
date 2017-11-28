<?php

/* JHTourismeBundle::layout.html.twig */
class __TwigTemplate_b9270a048a3dde272060417695eb8aaa57acca19483bc26ff7951407bd1671ce extends Twig_Template
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
        $__internal_5ece752f3a4ffb89e3208bfbe310ebb45eaeda5f2e4d5024524e2d152ff4e772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ece752f3a4ffb89e3208bfbe310ebb45eaeda5f2e4d5024524e2d152ff4e772->enter($__internal_5ece752f3a4ffb89e3208bfbe310ebb45eaeda5f2e4d5024524e2d152ff4e772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

        $__internal_5ac22df577a12ed00500bc4d9dc9238edc9bafc1ea343aee2bd580e69f7d6b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac22df577a12ed00500bc4d9dc9238edc9bafc1ea343aee2bd580e69f7d6b30->enter($__internal_5ac22df577a12ed00500bc4d9dc9238edc9bafc1ea343aee2bd580e69f7d6b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

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
    \t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/css/bulma.css"), "html", null, true);
        echo "\">
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
        
        $__internal_5ece752f3a4ffb89e3208bfbe310ebb45eaeda5f2e4d5024524e2d152ff4e772->leave($__internal_5ece752f3a4ffb89e3208bfbe310ebb45eaeda5f2e4d5024524e2d152ff4e772_prof);

        
        $__internal_5ac22df577a12ed00500bc4d9dc9238edc9bafc1ea343aee2bd580e69f7d6b30->leave($__internal_5ac22df577a12ed00500bc4d9dc9238edc9bafc1ea343aee2bd580e69f7d6b30_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e62a2ba15c8be1294d8e4d5ddb0983cd97439d17f270a394efa934563d17252d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62a2ba15c8be1294d8e4d5ddb0983cd97439d17f270a394efa934563d17252d->enter($__internal_e62a2ba15c8be1294d8e4d5ddb0983cd97439d17f270a394efa934563d17252d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_53b315437d6c6062e7eda0830810eebb418b2a0a8e225a408f11e68527c4fdf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b315437d6c6062e7eda0830810eebb418b2a0a8e225a408f11e68527c4fdf4->enter($__internal_53b315437d6c6062e7eda0830810eebb418b2a0a8e225a408f11e68527c4fdf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JH Tourisme";
        
        $__internal_53b315437d6c6062e7eda0830810eebb418b2a0a8e225a408f11e68527c4fdf4->leave($__internal_53b315437d6c6062e7eda0830810eebb418b2a0a8e225a408f11e68527c4fdf4_prof);

        
        $__internal_e62a2ba15c8be1294d8e4d5ddb0983cd97439d17f270a394efa934563d17252d->leave($__internal_e62a2ba15c8be1294d8e4d5ddb0983cd97439d17f270a394efa934563d17252d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_082b376afdd8bda3a84cb80238f82dc2e04ceb7d685081c9e23b8858d86fc1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082b376afdd8bda3a84cb80238f82dc2e04ceb7d685081c9e23b8858d86fc1ef->enter($__internal_082b376afdd8bda3a84cb80238f82dc2e04ceb7d685081c9e23b8858d86fc1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5b6f994d0e7d90b5de26bffd5adadb9d0ee37e9332d6bdfa124fbd387c704cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6f994d0e7d90b5de26bffd5adadb9d0ee37e9332d6bdfa124fbd387c704cbd->enter($__internal_5b6f994d0e7d90b5de26bffd5adadb9d0ee37e9332d6bdfa124fbd387c704cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    \t";
        
        $__internal_5b6f994d0e7d90b5de26bffd5adadb9d0ee37e9332d6bdfa124fbd387c704cbd->leave($__internal_5b6f994d0e7d90b5de26bffd5adadb9d0ee37e9332d6bdfa124fbd387c704cbd_prof);

        
        $__internal_082b376afdd8bda3a84cb80238f82dc2e04ceb7d685081c9e23b8858d86fc1ef->leave($__internal_082b376afdd8bda3a84cb80238f82dc2e04ceb7d685081c9e23b8858d86fc1ef_prof);

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
        return array (  141 => 34,  132 => 33,  114 => 7,  71 => 35,  69 => 33,  65 => 32,  38 => 8,  34 => 7,  27 => 2,);
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
    \t<link rel=\"stylesheet\" href=\"{{ asset('bundles/css/bulma.css') }}\">
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
</html>", "JHTourismeBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle\\Resources\\views\\layout.html.twig");
    }
}
