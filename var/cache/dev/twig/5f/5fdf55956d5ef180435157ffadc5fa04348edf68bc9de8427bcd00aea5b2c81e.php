<?php

/* JHTourismeBundle:Activity:add.html.twig */
class __TwigTemplate_7da0631698098c9f433b3ad00c943d3aa13274b42e4172f1b978b870c4db75c9 extends Twig_Template
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
        $__internal_03c30c301d58c120f101a642a0a044359adf428ca07a20f71c5c6195cd4dfec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c30c301d58c120f101a642a0a044359adf428ca07a20f71c5c6195cd4dfec7->enter($__internal_03c30c301d58c120f101a642a0a044359adf428ca07a20f71c5c6195cd4dfec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $__internal_c69b72a3bcebe6c5788221dfea355b4986cbd33ccd62e5710261ebe20517ad0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69b72a3bcebe6c5788221dfea355b4986cbd33ccd62e5710261ebe20517ad0c->enter($__internal_c69b72a3bcebe6c5788221dfea355b4986cbd33ccd62e5710261ebe20517ad0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c30c301d58c120f101a642a0a044359adf428ca07a20f71c5c6195cd4dfec7->leave($__internal_03c30c301d58c120f101a642a0a044359adf428ca07a20f71c5c6195cd4dfec7_prof);

        
        $__internal_c69b72a3bcebe6c5788221dfea355b4986cbd33ccd62e5710261ebe20517ad0c->leave($__internal_c69b72a3bcebe6c5788221dfea355b4986cbd33ccd62e5710261ebe20517ad0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f571f77516714c3c7bf6a700fb06ab83e39a9a421bc935d9d9a7bc24df27d6db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f571f77516714c3c7bf6a700fb06ab83e39a9a421bc935d9d9a7bc24df27d6db->enter($__internal_f571f77516714c3c7bf6a700fb06ab83e39a9a421bc935d9d9a7bc24df27d6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fddd95a0459cb0ab8ee09571aa6a6759a89a155792a1b7459240a633de54b4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fddd95a0459cb0ab8ee09571aa6a6759a89a155792a1b7459240a633de54b4e0->enter($__internal_fddd95a0459cb0ab8ee09571aa6a6759a89a155792a1b7459240a633de54b4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fddd95a0459cb0ab8ee09571aa6a6759a89a155792a1b7459240a633de54b4e0->leave($__internal_fddd95a0459cb0ab8ee09571aa6a6759a89a155792a1b7459240a633de54b4e0_prof);

        
        $__internal_f571f77516714c3c7bf6a700fb06ab83e39a9a421bc935d9d9a7bc24df27d6db->leave($__internal_f571f77516714c3c7bf6a700fb06ab83e39a9a421bc935d9d9a7bc24df27d6db_prof);

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
{% endblock %}", "JHTourismeBundle:Activity:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle/Resources/views/Activity/add.html.twig");
    }
}
