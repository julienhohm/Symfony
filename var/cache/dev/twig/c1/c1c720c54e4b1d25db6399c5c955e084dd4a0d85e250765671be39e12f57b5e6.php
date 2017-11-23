<?php

/* JHTourismeBundle::layout.html.twig */
class __TwigTemplate_e6256db11a718cd7bccbed095efa18882b0834c4daf4574b2a834761782466c2 extends Twig_Template
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
        $__internal_056247c6d8d2da86cf2cdc59b8cd0b5c3d78149056c024452bb1efb153eaa6f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056247c6d8d2da86cf2cdc59b8cd0b5c3d78149056c024452bb1efb153eaa6f1->enter($__internal_056247c6d8d2da86cf2cdc59b8cd0b5c3d78149056c024452bb1efb153eaa6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

        $__internal_13a12bbc1ae81c11ec7ca0a4a832a5a77437993bda1e569f757777ea4f7cfb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a12bbc1ae81c11ec7ca0a4a832a5a77437993bda1e569f757777ea4f7cfb9a->enter($__internal_13a12bbc1ae81c11ec7ca0a4a832a5a77437993bda1e569f757777ea4f7cfb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

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
        
        $__internal_056247c6d8d2da86cf2cdc59b8cd0b5c3d78149056c024452bb1efb153eaa6f1->leave($__internal_056247c6d8d2da86cf2cdc59b8cd0b5c3d78149056c024452bb1efb153eaa6f1_prof);

        
        $__internal_13a12bbc1ae81c11ec7ca0a4a832a5a77437993bda1e569f757777ea4f7cfb9a->leave($__internal_13a12bbc1ae81c11ec7ca0a4a832a5a77437993bda1e569f757777ea4f7cfb9a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1714928d1238be0f893afcd6842b023a5a7beed5724b18e759a731e39021445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1714928d1238be0f893afcd6842b023a5a7beed5724b18e759a731e39021445->enter($__internal_f1714928d1238be0f893afcd6842b023a5a7beed5724b18e759a731e39021445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4f8c39d505017253d3032cc09d1173297a95c96d38dac9a96d3ac90d35d3f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f8c39d505017253d3032cc09d1173297a95c96d38dac9a96d3ac90d35d3f05->enter($__internal_f4f8c39d505017253d3032cc09d1173297a95c96d38dac9a96d3ac90d35d3f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JH Tourisme";
        
        $__internal_f4f8c39d505017253d3032cc09d1173297a95c96d38dac9a96d3ac90d35d3f05->leave($__internal_f4f8c39d505017253d3032cc09d1173297a95c96d38dac9a96d3ac90d35d3f05_prof);

        
        $__internal_f1714928d1238be0f893afcd6842b023a5a7beed5724b18e759a731e39021445->leave($__internal_f1714928d1238be0f893afcd6842b023a5a7beed5724b18e759a731e39021445_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc5273c44c0861a976beb53ce478f2779b7ceb193ef30adb16d7c446b54a4755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5273c44c0861a976beb53ce478f2779b7ceb193ef30adb16d7c446b54a4755->enter($__internal_cc5273c44c0861a976beb53ce478f2779b7ceb193ef30adb16d7c446b54a4755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e0e89e8a13e52f808a9c2ffc56fbf6746570d28a1fe9f3a1534f4062f274a176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e89e8a13e52f808a9c2ffc56fbf6746570d28a1fe9f3a1534f4062f274a176->enter($__internal_e0e89e8a13e52f808a9c2ffc56fbf6746570d28a1fe9f3a1534f4062f274a176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    \t";
        
        $__internal_e0e89e8a13e52f808a9c2ffc56fbf6746570d28a1fe9f3a1534f4062f274a176->leave($__internal_e0e89e8a13e52f808a9c2ffc56fbf6746570d28a1fe9f3a1534f4062f274a176_prof);

        
        $__internal_cc5273c44c0861a976beb53ce478f2779b7ceb193ef30adb16d7c446b54a4755->leave($__internal_cc5273c44c0861a976beb53ce478f2779b7ceb193ef30adb16d7c446b54a4755_prof);

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
</html>", "JHTourismeBundle::layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle/Resources/views/layout.html.twig");
    }
}
