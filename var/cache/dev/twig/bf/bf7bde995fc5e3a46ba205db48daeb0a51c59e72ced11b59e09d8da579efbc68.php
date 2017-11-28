<?php

/* @JHTourisme/menu.html.twig */
class __TwigTemplate_210134379c0ff32330a340b62ff1209f737d729b9f867695103c30892994e455 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e3779e816bdddbc956bf94ce9e7ddce5597ff9c51f31a5e474aff425a7697fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3779e816bdddbc956bf94ce9e7ddce5597ff9c51f31a5e474aff425a7697fe->enter($__internal_3e3779e816bdddbc956bf94ce9e7ddce5597ff9c51f31a5e474aff425a7697fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JHTourisme/menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar has-shadow\">
\t<div class=\"container\">
\t\t<div class=\"navbar-brand\">
\t\t\t<a href=\"\" class=\"navbar-item is-hidden-desktop\">
\t\t\t\t<span class=\"icon socials\">
\t\t\t\t\t<i class=\"fa fa-facebook-official fa-2x\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<a href=\"\" class=\"navbar-item is-hidden-desktop\">
\t\t\t\t<span class=\"icon socials\">
\t\t\t\t\t<i class=\"fa fa-twitter fa-2x\"></i>
\t\t\t\t</span>
\t\t\t</a>
\t\t\t<div class=\"navbar-burger burger\" data-target=\"navbarMenu\">
\t\t\t<span></span>
\t\t\t<span></span>
\t\t\t<span></span>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"navbarMenu\" class=\"navbar-menu\">
\t\t\t<div class=\"navbar-start is-hidden-desktop\">
\t\t\t\t<div class=\"navbar-item\">
\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navbar"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 24
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "url", array()), "html", null, true);
            echo "\" class=\"navbar-item\">
\t\t\t\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "name", array()), "html", null, true);
            echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"navbar-tabs is-hidden-touch\">
\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navbar"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 32
            echo "\t\t\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["menu"], "url", array()));
            echo "\" class=\"navbar-item is-tab\">
\t\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "name", array()), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t</div>
\t\t\t<div class=\"navbar-end is-hidden-touch\">
\t\t\t\t<a href=\"\" class=\"navbar-item\">
\t\t\t\t\t<span class=\"icon socials\">
\t\t\t\t\t\t<i class=\"fa fa-facebook-official fa-2x\"></i>
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<a href=\"\" class=\"navbar-item\">
\t\t\t\t\t<span class=\"icon socials\">
\t\t\t\t\t\t<i class=\"fa fa-twitter fa-2x\"></i>
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</nav>";
        
        $__internal_3e3779e816bdddbc956bf94ce9e7ddce5597ff9c51f31a5e474aff425a7697fe->leave($__internal_3e3779e816bdddbc956bf94ce9e7ddce5597ff9c51f31a5e474aff425a7697fe_prof);

    }

    public function getTemplateName()
    {
        return "@JHTourisme/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 36,  78 => 33,  73 => 32,  69 => 31,  64 => 28,  55 => 25,  50 => 24,  46 => 23,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JHTourisme/menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle\\Resources\\views\\menu.html.twig");
    }
}
