<?php

/* JHTourismeBundle:Activity:add.html.twig */
class __TwigTemplate_48be25a8668678ac051a979a096f8805a93043c73340bed8c8bf1a59332f0cbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JHTourismeBundle::layout.html.twig", "JHTourismeBundle:Activity:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JHTourismeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3a52847f1e6fe336d2eae05b272b235bf96b51040a4f03781132d02cefbc7a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a52847f1e6fe336d2eae05b272b235bf96b51040a4f03781132d02cefbc7a14->enter($__internal_3a52847f1e6fe336d2eae05b272b235bf96b51040a4f03781132d02cefbc7a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $__internal_430cc8994af0b2bc706c1daac1b13d70d7d93f2409694b53650164dbeb377629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430cc8994af0b2bc706c1daac1b13d70d7d93f2409694b53650164dbeb377629->enter($__internal_430cc8994af0b2bc706c1daac1b13d70d7d93f2409694b53650164dbeb377629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a52847f1e6fe336d2eae05b272b235bf96b51040a4f03781132d02cefbc7a14->leave($__internal_3a52847f1e6fe336d2eae05b272b235bf96b51040a4f03781132d02cefbc7a14_prof);

        
        $__internal_430cc8994af0b2bc706c1daac1b13d70d7d93f2409694b53650164dbeb377629->leave($__internal_430cc8994af0b2bc706c1daac1b13d70d7d93f2409694b53650164dbeb377629_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fccf0fce9c4ca87cf5a60c65b56e8ab6bd9277442848bb118c1e950f28548c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fccf0fce9c4ca87cf5a60c65b56e8ab6bd9277442848bb118c1e950f28548c6->enter($__internal_7fccf0fce9c4ca87cf5a60c65b56e8ab6bd9277442848bb118c1e950f28548c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e1b7ca7c6fbf619b5c243157c0d0ea49d4cf9c7aa625193dc623911c4c40732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1b7ca7c6fbf619b5c243157c0d0ea49d4cf9c7aa625193dc623911c4c40732->enter($__internal_7e1b7ca7c6fbf619b5c243157c0d0ea49d4cf9c7aa625193dc623911c4c40732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<section class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"columns is-multiline is-centered\">
\t\t\t\t<div class=\"column is-12 has-text-centered\">
\t\t\t\t\t<h1 class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add.title"), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\">
\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_7e1b7ca7c6fbf619b5c243157c0d0ea49d4cf9c7aa625193dc623911c4c40732->leave($__internal_7e1b7ca7c6fbf619b5c243157c0d0ea49d4cf9c7aa625193dc623911c4c40732_prof);

        
        $__internal_7fccf0fce9c4ca87cf5a60c65b56e8ab6bd9277442848bb118c1e950f28548c6->leave($__internal_7fccf0fce9c4ca87cf5a60c65b56e8ab6bd9277442848bb118c1e950f28548c6_prof);

    }

    public function getTemplateName()
    {
        return "JHTourismeBundle:Activity:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 27,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JHTourismeBundle::layout.html.twig\" %}

{% block body %}
\t<section class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"columns is-multiline is-centered\">
\t\t\t\t<div class=\"column is-12 has-text-centered\">
\t\t\t\t\t<h1 class=\"title\">{{ 'add.title'|trans }}</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\">
\t\t\t\t\t{#{form \$form, 'form:saveActivity'}
\t\t\t\t\t\t{formcontrols}
\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t{ctrl_label}
\t\t\t\t\t\t\t<div class=\"control\">
\t\t\t\t\t\t\t\t{ctrl_control}\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{/formcontrols}

\t\t\t\t\t\t<div class=\"field\">
\t\t\t\t\t\t\t<div class=\"control\">
\t\t\t\t\t\t\t\t{formsubmit}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{/form}#}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}", "JHTourismeBundle:Activity:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle\\Resources\\views\\Activity\\add.html.twig");
    }
}
