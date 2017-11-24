<?php

/* @JHTourisme/layout.html.twig */
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
        $__internal_00fdead445442d2d6e0c6d90aa1851d6aff238c6b734fda7d802216fe6ba4208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00fdead445442d2d6e0c6d90aa1851d6aff238c6b734fda7d802216fe6ba4208->enter($__internal_00fdead445442d2d6e0c6d90aa1851d6aff238c6b734fda7d802216fe6ba4208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JHTourisme/layout.html.twig"));

        $__internal_4a91e14a077984c36313414316848209177ba0d245ca612ec1a3710e303108d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a91e14a077984c36313414316848209177ba0d245ca612ec1a3710e303108d1->enter($__internal_4a91e14a077984c36313414316848209177ba0d245ca612ec1a3710e303108d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JHTourisme/layout.html.twig"));

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
        
        $__internal_00fdead445442d2d6e0c6d90aa1851d6aff238c6b734fda7d802216fe6ba4208->leave($__internal_00fdead445442d2d6e0c6d90aa1851d6aff238c6b734fda7d802216fe6ba4208_prof);

        
        $__internal_4a91e14a077984c36313414316848209177ba0d245ca612ec1a3710e303108d1->leave($__internal_4a91e14a077984c36313414316848209177ba0d245ca612ec1a3710e303108d1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_82067f72e2d212dfb1a44ce67eddbdbf0e568cc3809543af6ef21163818f9652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82067f72e2d212dfb1a44ce67eddbdbf0e568cc3809543af6ef21163818f9652->enter($__internal_82067f72e2d212dfb1a44ce67eddbdbf0e568cc3809543af6ef21163818f9652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ca290d12d28e01cac1e81bcbda500120d780064053112abe2faa0c0f59186a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ca290d12d28e01cac1e81bcbda500120d780064053112abe2faa0c0f59186a0->enter($__internal_6ca290d12d28e01cac1e81bcbda500120d780064053112abe2faa0c0f59186a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JH Tourisme";
        
        $__internal_6ca290d12d28e01cac1e81bcbda500120d780064053112abe2faa0c0f59186a0->leave($__internal_6ca290d12d28e01cac1e81bcbda500120d780064053112abe2faa0c0f59186a0_prof);

        
        $__internal_82067f72e2d212dfb1a44ce67eddbdbf0e568cc3809543af6ef21163818f9652->leave($__internal_82067f72e2d212dfb1a44ce67eddbdbf0e568cc3809543af6ef21163818f9652_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3f84e82decc90278d5c09c86460f103d447e1c7ee05e19d88cc516ae015694e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f84e82decc90278d5c09c86460f103d447e1c7ee05e19d88cc516ae015694e->enter($__internal_a3f84e82decc90278d5c09c86460f103d447e1c7ee05e19d88cc516ae015694e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56fe97fd85b6c9ce34fdd09c9fb1cad1bb7d97ef79bab5b5641b89d6d0978488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56fe97fd85b6c9ce34fdd09c9fb1cad1bb7d97ef79bab5b5641b89d6d0978488->enter($__internal_56fe97fd85b6c9ce34fdd09c9fb1cad1bb7d97ef79bab5b5641b89d6d0978488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    \t";
        
        $__internal_56fe97fd85b6c9ce34fdd09c9fb1cad1bb7d97ef79bab5b5641b89d6d0978488->leave($__internal_56fe97fd85b6c9ce34fdd09c9fb1cad1bb7d97ef79bab5b5641b89d6d0978488_prof);

        
        $__internal_a3f84e82decc90278d5c09c86460f103d447e1c7ee05e19d88cc516ae015694e->leave($__internal_a3f84e82decc90278d5c09c86460f103d447e1c7ee05e19d88cc516ae015694e_prof);

    }

    public function getTemplateName()
    {
        return "@JHTourisme/layout.html.twig";
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
</html>", "@JHTourisme/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle\\Resources\\views\\layout.html.twig");
    }
}
