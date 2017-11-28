<?php

/* @JHTourisme/layout.html.twig */
class __TwigTemplate_f2e8473eea13aac026f5c60e17d486c53e7ea6e3280b74c29ddc3f56aa92835b extends Twig_Template
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
        $__internal_9f5196ae7658b613d559267f1f1e0b50f93130547a5bcc037838e2c62c43fe43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5196ae7658b613d559267f1f1e0b50f93130547a5bcc037838e2c62c43fe43->enter($__internal_9f5196ae7658b613d559267f1f1e0b50f93130547a5bcc037838e2c62c43fe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JHTourisme/layout.html.twig"));

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
        
        $__internal_9f5196ae7658b613d559267f1f1e0b50f93130547a5bcc037838e2c62c43fe43->leave($__internal_9f5196ae7658b613d559267f1f1e0b50f93130547a5bcc037838e2c62c43fe43_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_60376f5c8ea1412a01f8ba0bd7894e25ee92b5c36ce979324dfcb9223f7cad9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60376f5c8ea1412a01f8ba0bd7894e25ee92b5c36ce979324dfcb9223f7cad9b->enter($__internal_60376f5c8ea1412a01f8ba0bd7894e25ee92b5c36ce979324dfcb9223f7cad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "JH Tourisme";
        
        $__internal_60376f5c8ea1412a01f8ba0bd7894e25ee92b5c36ce979324dfcb9223f7cad9b->leave($__internal_60376f5c8ea1412a01f8ba0bd7894e25ee92b5c36ce979324dfcb9223f7cad9b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfa570355053a0155b670ed90ac343e527ce0faf9e01e3e14b9da2e2d282733a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa570355053a0155b670ed90ac343e527ce0faf9e01e3e14b9da2e2d282733a->enter($__internal_bfa570355053a0155b670ed90ac343e527ce0faf9e01e3e14b9da2e2d282733a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "    \t";
        
        $__internal_bfa570355053a0155b670ed90ac343e527ce0faf9e01e3e14b9da2e2d282733a->leave($__internal_bfa570355053a0155b670ed90ac343e527ce0faf9e01e3e14b9da2e2d282733a_prof);

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
        return array (  126 => 34,  120 => 33,  108 => 7,  68 => 35,  66 => 33,  62 => 32,  35 => 8,  31 => 7,  24 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JHTourisme/layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle\\Resources\\views\\layout.html.twig");
    }
}
