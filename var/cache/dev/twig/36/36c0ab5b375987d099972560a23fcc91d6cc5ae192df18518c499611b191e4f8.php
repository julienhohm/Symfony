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
        $__internal_881ca2306f5669dbf692b586abb1b49f66c052af79e9bc9286636504e205583e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_881ca2306f5669dbf692b586abb1b49f66c052af79e9bc9286636504e205583e->enter($__internal_881ca2306f5669dbf692b586abb1b49f66c052af79e9bc9286636504e205583e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

        $__internal_fa55d885e45a57be3546d02d60d80100f9f30ad3a22538366933595f61df10db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa55d885e45a57be3546d02d60d80100f9f30ad3a22538366933595f61df10db->enter($__internal_fa55d885e45a57be3546d02d60d80100f9f30ad3a22538366933595f61df10db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::layout.html.twig"));

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
   \t\t<nav class=\"navbar has-shadow\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-brand\">
\t\t\t\t\t<a href=\"\" class=\"navbar-item is-hidden-desktop\">
\t\t\t\t\t\t<span class=\"icon socials\">
\t\t\t\t\t\t\t<i class=\"fa fa-facebook-official fa-2x\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"navbar-item is-hidden-desktop\">
\t\t\t\t\t\t<span class=\"icon socials\">
\t\t\t\t\t\t\t<i class=\"fa fa-twitter fa-2x\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"navbar-burger burger\" data-target=\"navbarMenu\">
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbarMenu\" class=\"navbar-menu\">
\t\t\t\t\t";
        // line 80
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
    \t";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 85
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
        
        $__internal_881ca2306f5669dbf692b586abb1b49f66c052af79e9bc9286636504e205583e->leave($__internal_881ca2306f5669dbf692b586abb1b49f66c052af79e9bc9286636504e205583e_prof);

        
        $__internal_fa55d885e45a57be3546d02d60d80100f9f30ad3a22538366933595f61df10db->leave($__internal_fa55d885e45a57be3546d02d60d80100f9f30ad3a22538366933595f61df10db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e2c0083e324aab4ab7de23f993eb7fa0f1203d28c87211872e418071d24ef3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e2c0083e324aab4ab7de23f993eb7fa0f1203d28c87211872e418071d24ef3d->enter($__internal_3e2c0083e324aab4ab7de23f993eb7fa0f1203d28c87211872e418071d24ef3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a248b31012e986c0b01edf0fc7317dee744a5c6f7075197cda9e1c5cb9f6041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a248b31012e986c0b01edf0fc7317dee744a5c6f7075197cda9e1c5cb9f6041->enter($__internal_4a248b31012e986c0b01edf0fc7317dee744a5c6f7075197cda9e1c5cb9f6041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JH Tourisme";
        
        $__internal_4a248b31012e986c0b01edf0fc7317dee744a5c6f7075197cda9e1c5cb9f6041->leave($__internal_4a248b31012e986c0b01edf0fc7317dee744a5c6f7075197cda9e1c5cb9f6041_prof);

        
        $__internal_3e2c0083e324aab4ab7de23f993eb7fa0f1203d28c87211872e418071d24ef3d->leave($__internal_3e2c0083e324aab4ab7de23f993eb7fa0f1203d28c87211872e418071d24ef3d_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_04b6cb4aa62a09ad9a3c36ff732da643f0f63c8704d452171e7cc73252110327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b6cb4aa62a09ad9a3c36ff732da643f0f63c8704d452171e7cc73252110327->enter($__internal_04b6cb4aa62a09ad9a3c36ff732da643f0f63c8704d452171e7cc73252110327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b4df17b8a9b9321a0f8a642b37e8de16a20f380cb767252e45ee4eb4564fec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4df17b8a9b9321a0f8a642b37e8de16a20f380cb767252e45ee4eb4564fec0->enter($__internal_3b4df17b8a9b9321a0f8a642b37e8de16a20f380cb767252e45ee4eb4564fec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 84
        echo "    \t";
        
        $__internal_3b4df17b8a9b9321a0f8a642b37e8de16a20f380cb767252e45ee4eb4564fec0->leave($__internal_3b4df17b8a9b9321a0f8a642b37e8de16a20f380cb767252e45ee4eb4564fec0_prof);

        
        $__internal_04b6cb4aa62a09ad9a3c36ff732da643f0f63c8704d452171e7cc73252110327->leave($__internal_04b6cb4aa62a09ad9a3c36ff732da643f0f63c8704d452171e7cc73252110327_prof);

    }

    public function getTemplateName()
    {
        return "JHTourismeBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  159 => 84,  150 => 83,  132 => 7,  89 => 85,  87 => 83,  82 => 80,  34 => 7,  27 => 2,);
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
   \t\t<nav class=\"navbar has-shadow\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-brand\">
\t\t\t\t\t<a href=\"\" class=\"navbar-item is-hidden-desktop\">
\t\t\t\t\t\t<span class=\"icon socials\">
\t\t\t\t\t\t\t<i class=\"fa fa-facebook-official fa-2x\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"\" class=\"navbar-item is-hidden-desktop\">
\t\t\t\t\t\t<span class=\"icon socials\">
\t\t\t\t\t\t\t<i class=\"fa fa-twitter fa-2x\"></i>
\t\t\t\t\t\t</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"navbar-burger burger\" data-target=\"navbarMenu\">
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t<span></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbarMenu\" class=\"navbar-menu\">
\t\t\t\t\t{#<div class=\"navbar-start is-hidden-desktop\">
\t\t\t\t\t\t<div class=\"navbar-item\">
\t\t\t\t\t\t\t{foreach \$menus as \$menu}
\t\t\t\t\t\t\t\t<a href=\"{\$menu[\"Url\"]}\" class=\"navbar-item {\$menu['Class']}\">
\t\t\t\t\t\t\t\t\t{\$menu[\"Name\"]}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{/foreach}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"navbar-tabs is-hidden-touch\">
\t\t\t\t\t\t{foreach \$menus as \$menu}
\t\t\t\t\t\t\t<a href=\"{\$menu[\"Url\"]}\" class=\"navbar-item is-tab {\$menu['Class']}\">
\t\t\t\t\t\t\t\t{\$menu[\"Name\"]}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{/foreach}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"navbar-end is-hidden-touch\">
\t\t\t\t\t\t<a href=\"\" class=\"navbar-item\">
\t\t\t\t\t\t\t<span class=\"icon socials\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-facebook-official fa-2x\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"\" class=\"navbar-item\">
\t\t\t\t\t\t\t<span class=\"icon socials\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-twitter fa-2x\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>#}
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
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
