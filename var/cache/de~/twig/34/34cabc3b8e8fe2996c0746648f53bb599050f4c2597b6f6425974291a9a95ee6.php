<?php

/* JHTourismeBundle::menu.html.twig */
class __TwigTemplate_f98b9aa4d909c056c94cb49826a5bc1b29f7da66ef21d009704d83a7b1ad4a9f extends Twig_Template
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
        $__internal_92097ff9f9b3f1d6aa53f375ede46e54f9bb1f1e780e0edb21124bd311c3afdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92097ff9f9b3f1d6aa53f375ede46e54f9bb1f1e780e0edb21124bd311c3afdb->enter($__internal_92097ff9f9b3f1d6aa53f375ede46e54f9bb1f1e780e0edb21124bd311c3afdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::menu.html.twig"));

        $__internal_d603242fde28b6543f72ce6aebf83949b0eaf56aaaf6dce38e8e993b7f0cf0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d603242fde28b6543f72ce6aebf83949b0eaf56aaaf6dce38e8e993b7f0cf0b7->enter($__internal_d603242fde28b6543f72ce6aebf83949b0eaf56aaaf6dce38e8e993b7f0cf0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::menu.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["navbar"]) ? $context["navbar"] : $this->getContext($context, "navbar")));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["navbar"]) ? $context["navbar"] : $this->getContext($context, "navbar")));
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
        
        $__internal_92097ff9f9b3f1d6aa53f375ede46e54f9bb1f1e780e0edb21124bd311c3afdb->leave($__internal_92097ff9f9b3f1d6aa53f375ede46e54f9bb1f1e780e0edb21124bd311c3afdb_prof);

        
        $__internal_d603242fde28b6543f72ce6aebf83949b0eaf56aaaf6dce38e8e993b7f0cf0b7->leave($__internal_d603242fde28b6543f72ce6aebf83949b0eaf56aaaf6dce38e8e993b7f0cf0b7_prof);

    }

    public function getTemplateName()
    {
        return "JHTourismeBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 36,  81 => 33,  76 => 32,  72 => 31,  67 => 28,  58 => 25,  53 => 24,  49 => 23,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar has-shadow\">
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
\t\t\t\t\t{% for menu in navbar %}
\t\t\t\t\t\t<a href=\"{{ menu.url }}\" class=\"navbar-item\">
\t\t\t\t\t\t\t{{ menu.name }}
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"navbar-tabs is-hidden-touch\">
\t\t\t\t{% for menu in navbar %}
\t\t\t\t\t<a href=\"{{ path(menu.url) }}\" class=\"navbar-item is-tab\">
\t\t\t\t\t\t{{ menu.name }}
\t\t\t\t\t</a>
\t\t\t\t{% endfor %}
\t\t\t</div>
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
</nav>", "JHTourismeBundle::menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle\\Resources\\views\\menu.html.twig");
    }
}
