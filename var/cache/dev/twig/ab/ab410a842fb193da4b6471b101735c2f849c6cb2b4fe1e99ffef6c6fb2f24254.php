<?php

/* JHTourismeBundle::menu.html.twig */
class __TwigTemplate_614469d4a7dfd6ee931af5a3402d68122f6dc42d83ab8279e8f405d7996c45b7 extends Twig_Template
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
        $__internal_c0ea22e7320394208ecb9d529ec433a03951a41e9ec47040d60a81d2a02376be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ea22e7320394208ecb9d529ec433a03951a41e9ec47040d60a81d2a02376be->enter($__internal_c0ea22e7320394208ecb9d529ec433a03951a41e9ec47040d60a81d2a02376be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::menu.html.twig"));

        $__internal_b822e13054cff5674505ed28ac39d52bf9acb679aafddaef3ae4d2d377dadbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b822e13054cff5674505ed28ac39d52bf9acb679aafddaef3ae4d2d377dadbaf->enter($__internal_b822e13054cff5674505ed28ac39d52bf9acb679aafddaef3ae4d2d377dadbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::menu.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable(($context["navbar"] ?? $this->getContext($context, "navbar")));
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
        $context['_seq'] = twig_ensure_traversable(($context["navbar"] ?? $this->getContext($context, "navbar")));
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
        
        $__internal_c0ea22e7320394208ecb9d529ec433a03951a41e9ec47040d60a81d2a02376be->leave($__internal_c0ea22e7320394208ecb9d529ec433a03951a41e9ec47040d60a81d2a02376be_prof);

        
        $__internal_b822e13054cff5674505ed28ac39d52bf9acb679aafddaef3ae4d2d377dadbaf->leave($__internal_b822e13054cff5674505ed28ac39d52bf9acb679aafddaef3ae4d2d377dadbaf_prof);

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
</nav>", "JHTourismeBundle::menu.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle/Resources/views/menu.html.twig");
    }
}
