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
        $__internal_71bb3228cc9a6d52a4ac4c43fc97cc9013861d675c45d9b1f94d5497c3019cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71bb3228cc9a6d52a4ac4c43fc97cc9013861d675c45d9b1f94d5497c3019cfa->enter($__internal_71bb3228cc9a6d52a4ac4c43fc97cc9013861d675c45d9b1f94d5497c3019cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

        $__internal_47ead8dec035dadec21993cab9a185d45af0cb3b6fdc27ad50883561898d8b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ead8dec035dadec21993cab9a185d45af0cb3b6fdc27ad50883561898d8b47->enter($__internal_47ead8dec035dadec21993cab9a185d45af0cb3b6fdc27ad50883561898d8b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/jhtourisme/css/bulma.css"), "html", null, true);
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
        
        $__internal_71bb3228cc9a6d52a4ac4c43fc97cc9013861d675c45d9b1f94d5497c3019cfa->leave($__internal_71bb3228cc9a6d52a4ac4c43fc97cc9013861d675c45d9b1f94d5497c3019cfa_prof);

        
        $__internal_47ead8dec035dadec21993cab9a185d45af0cb3b6fdc27ad50883561898d8b47->leave($__internal_47ead8dec035dadec21993cab9a185d45af0cb3b6fdc27ad50883561898d8b47_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02c03dd3276829241be271973adcdcd3ad64cdba9437ac6086789a853bce5bef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c03dd3276829241be271973adcdcd3ad64cdba9437ac6086789a853bce5bef->enter($__internal_02c03dd3276829241be271973adcdcd3ad64cdba9437ac6086789a853bce5bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f9b7c45498072510d7e7b29fb05768a413753073dadb6383742e373182552f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9b7c45498072510d7e7b29fb05768a413753073dadb6383742e373182552f5->enter($__internal_3f9b7c45498072510d7e7b29fb05768a413753073dadb6383742e373182552f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JH Tourisme";
        
        $__internal_3f9b7c45498072510d7e7b29fb05768a413753073dadb6383742e373182552f5->leave($__internal_3f9b7c45498072510d7e7b29fb05768a413753073dadb6383742e373182552f5_prof);

        
        $__internal_02c03dd3276829241be271973adcdcd3ad64cdba9437ac6086789a853bce5bef->leave($__internal_02c03dd3276829241be271973adcdcd3ad64cdba9437ac6086789a853bce5bef_prof);

    }

    // line 12
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_9c1e5dc901a539d7219ef8d7fb25ec1db60119d483cf2a94ba5a42f725fd1fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c1e5dc901a539d7219ef8d7fb25ec1db60119d483cf2a94ba5a42f725fd1fa1->enter($__internal_9c1e5dc901a539d7219ef8d7fb25ec1db60119d483cf2a94ba5a42f725fd1fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_a4ede48ede610b6fd62f0cf88f46f1dbd1939c62810561ef4c5341b0fcfeafa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ede48ede610b6fd62f0cf88f46f1dbd1939c62810561ef4c5341b0fcfeafa2->enter($__internal_a4ede48ede610b6fd62f0cf88f46f1dbd1939c62810561ef4c5341b0fcfeafa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 13
        echo "        ";
        
        $__internal_a4ede48ede610b6fd62f0cf88f46f1dbd1939c62810561ef4c5341b0fcfeafa2->leave($__internal_a4ede48ede610b6fd62f0cf88f46f1dbd1939c62810561ef4c5341b0fcfeafa2_prof);

        
        $__internal_9c1e5dc901a539d7219ef8d7fb25ec1db60119d483cf2a94ba5a42f725fd1fa1->leave($__internal_9c1e5dc901a539d7219ef8d7fb25ec1db60119d483cf2a94ba5a42f725fd1fa1_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cf017cd5656397f48706fee848d9692ae056fcf5907f3a5165bc65710858c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cf017cd5656397f48706fee848d9692ae056fcf5907f3a5165bc65710858c45->enter($__internal_5cf017cd5656397f48706fee848d9692ae056fcf5907f3a5165bc65710858c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_725abf1b0f365e10ea5fe1e0a047622ae150e86e298cb0a8b91236fb3fa07b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725abf1b0f365e10ea5fe1e0a047622ae150e86e298cb0a8b91236fb3fa07b83->enter($__internal_725abf1b0f365e10ea5fe1e0a047622ae150e86e298cb0a8b91236fb3fa07b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "    \t";
        
        $__internal_725abf1b0f365e10ea5fe1e0a047622ae150e86e298cb0a8b91236fb3fa07b83->leave($__internal_725abf1b0f365e10ea5fe1e0a047622ae150e86e298cb0a8b91236fb3fa07b83_prof);

        
        $__internal_5cf017cd5656397f48706fee848d9692ae056fcf5907f3a5165bc65710858c45->leave($__internal_5cf017cd5656397f48706fee848d9692ae056fcf5907f3a5165bc65710858c45_prof);

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
    \t<link rel=\"stylesheet\" href=\"{{ asset('bundles/jhtourisme/css/bulma.css') }}\">
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
