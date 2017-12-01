<?php

/* JHTourismeBundle::layout.html.twig */
class __TwigTemplate_8b477c8bebe603c6514794cef2e419de72b8e05c38d4928e4bab0e314f30d76f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_548027c1cfde0c983bcb13e970e642dc18beb98c39a3b11340fde266a83de46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548027c1cfde0c983bcb13e970e642dc18beb98c39a3b11340fde266a83de46b->enter($__internal_548027c1cfde0c983bcb13e970e642dc18beb98c39a3b11340fde266a83de46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

        $__internal_4b8a965135128f4ecbdb5404b5e28db088470814162e174973478d474375f824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8a965135128f4ecbdb5404b5e28db088470814162e174973478d474375f824->enter($__internal_4b8a965135128f4ecbdb5404b5e28db088470814162e174973478d474375f824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

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
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        
        ";
        // line 12
        $this->displayBlock('javascript', $context, $blocks);
        // line 14
        echo "  \t</head>
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
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JHTourismeBundle:Tourisme:showNavbar"));
        echo "
    \t";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
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
        
        $__internal_548027c1cfde0c983bcb13e970e642dc18beb98c39a3b11340fde266a83de46b->leave($__internal_548027c1cfde0c983bcb13e970e642dc18beb98c39a3b11340fde266a83de46b_prof);

        
        $__internal_4b8a965135128f4ecbdb5404b5e28db088470814162e174973478d474375f824->leave($__internal_4b8a965135128f4ecbdb5404b5e28db088470814162e174973478d474375f824_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_92468265fcf84efc7d9cd6474d0b0b4a547dfbe29d4239d0ec75295cbc44550f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92468265fcf84efc7d9cd6474d0b0b4a547dfbe29d4239d0ec75295cbc44550f->enter($__internal_92468265fcf84efc7d9cd6474d0b0b4a547dfbe29d4239d0ec75295cbc44550f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f621897876712881275d4b7c9550027fa3fedc9d45c5dd62afa0179e654db029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f621897876712881275d4b7c9550027fa3fedc9d45c5dd62afa0179e654db029->enter($__internal_f621897876712881275d4b7c9550027fa3fedc9d45c5dd62afa0179e654db029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JH Tourisme";
        
        $__internal_f621897876712881275d4b7c9550027fa3fedc9d45c5dd62afa0179e654db029->leave($__internal_f621897876712881275d4b7c9550027fa3fedc9d45c5dd62afa0179e654db029_prof);

        
        $__internal_92468265fcf84efc7d9cd6474d0b0b4a547dfbe29d4239d0ec75295cbc44550f->leave($__internal_92468265fcf84efc7d9cd6474d0b0b4a547dfbe29d4239d0ec75295cbc44550f_prof);

    }

    // line 12
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6f3902bcabc974c1706005a535106ec96aac59797bc1d237e86a81d2105492e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3902bcabc974c1706005a535106ec96aac59797bc1d237e86a81d2105492e9->enter($__internal_6f3902bcabc974c1706005a535106ec96aac59797bc1d237e86a81d2105492e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_de0bc437327002f8136fce9b1814ae85a9c1b27a18a6aa74178f869012b9f65c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0bc437327002f8136fce9b1814ae85a9c1b27a18a6aa74178f869012b9f65c->enter($__internal_de0bc437327002f8136fce9b1814ae85a9c1b27a18a6aa74178f869012b9f65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 13
        echo "        ";
        
        $__internal_de0bc437327002f8136fce9b1814ae85a9c1b27a18a6aa74178f869012b9f65c->leave($__internal_de0bc437327002f8136fce9b1814ae85a9c1b27a18a6aa74178f869012b9f65c_prof);

        
        $__internal_6f3902bcabc974c1706005a535106ec96aac59797bc1d237e86a81d2105492e9->leave($__internal_6f3902bcabc974c1706005a535106ec96aac59797bc1d237e86a81d2105492e9_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e0f4aa18ab424c813c5cb891d70bbed26a426b77c5d4104bddd417fe5ae62c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0f4aa18ab424c813c5cb891d70bbed26a426b77c5d4104bddd417fe5ae62c1->enter($__internal_9e0f4aa18ab424c813c5cb891d70bbed26a426b77c5d4104bddd417fe5ae62c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d27b3a162df574abba5f2564b2df107e67bee28a80ecdfc1e732ffcef65925b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d27b3a162df574abba5f2564b2df107e67bee28a80ecdfc1e732ffcef65925b->enter($__internal_7d27b3a162df574abba5f2564b2df107e67bee28a80ecdfc1e732ffcef65925b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    \t";
        
        $__internal_7d27b3a162df574abba5f2564b2df107e67bee28a80ecdfc1e732ffcef65925b->leave($__internal_7d27b3a162df574abba5f2564b2df107e67bee28a80ecdfc1e732ffcef65925b_prof);

        
        $__internal_9e0f4aa18ab424c813c5cb891d70bbed26a426b77c5d4104bddd417fe5ae62c1->leave($__internal_9e0f4aa18ab424c813c5cb891d70bbed26a426b77c5d4104bddd417fe5ae62c1_prof);

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
        return array (  174 => 39,  165 => 38,  155 => 13,  146 => 12,  128 => 7,  85 => 40,  83 => 38,  79 => 37,  54 => 14,  52 => 12,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  28 => 2,);
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
        <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
        <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
        
        {% block javascript %}
        {% endblock %}
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
