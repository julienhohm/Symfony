<?php

/* JHTourismeBundle::menu.html.twig */
class __TwigTemplate_ddd36a63b09b795aaac0ca642b5748556d898af508f0ed81009294df0905c794 extends Twig_Template
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
        $__internal_6c1ffcfd6e4bbf3ba7ec615736101a9ba6014ee27ce29cb8cbf1d14a22340629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c1ffcfd6e4bbf3ba7ec615736101a9ba6014ee27ce29cb8cbf1d14a22340629->enter($__internal_6c1ffcfd6e4bbf3ba7ec615736101a9ba6014ee27ce29cb8cbf1d14a22340629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::menu.html.twig"));

        $__internal_baf978efd74462ae53baf50cdd18974ec5ca63c3f04fd5ea28a0a37e39b5e1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf978efd74462ae53baf50cdd18974ec5ca63c3f04fd5ea28a0a37e39b5e1da->enter($__internal_baf978efd74462ae53baf50cdd18974ec5ca63c3f04fd5ea28a0a37e39b5e1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle::menu.html.twig"));

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
        
        $__internal_6c1ffcfd6e4bbf3ba7ec615736101a9ba6014ee27ce29cb8cbf1d14a22340629->leave($__internal_6c1ffcfd6e4bbf3ba7ec615736101a9ba6014ee27ce29cb8cbf1d14a22340629_prof);

        
        $__internal_baf978efd74462ae53baf50cdd18974ec5ca63c3f04fd5ea28a0a37e39b5e1da->leave($__internal_baf978efd74462ae53baf50cdd18974ec5ca63c3f04fd5ea28a0a37e39b5e1da_prof);

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
