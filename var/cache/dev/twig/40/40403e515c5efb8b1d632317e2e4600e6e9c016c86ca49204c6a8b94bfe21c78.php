<?php

/* @JHTourisme/Activity/add.html.twig */
class __TwigTemplate_3acdabb3941cbdb30e75dab09d6c0199f67ace271721f1f7e39481c90d251609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JHTourismeBundle::layout.html.twig", "@JHTourisme/Activity/add.html.twig", 1);
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
        $__internal_a194fb701017a0573875ad85f7f053cdd3781396a4ceb1225644f4156b81363b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a194fb701017a0573875ad85f7f053cdd3781396a4ceb1225644f4156b81363b->enter($__internal_a194fb701017a0573875ad85f7f053cdd3781396a4ceb1225644f4156b81363b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JHTourisme/Activity/add.html.twig"));

        $__internal_ce8505c16a22c25ac4e2ba3b353c762027c0a53863812f834d9949aa14ff5f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8505c16a22c25ac4e2ba3b353c762027c0a53863812f834d9949aa14ff5f63->enter($__internal_ce8505c16a22c25ac4e2ba3b353c762027c0a53863812f834d9949aa14ff5f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JHTourisme/Activity/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a194fb701017a0573875ad85f7f053cdd3781396a4ceb1225644f4156b81363b->leave($__internal_a194fb701017a0573875ad85f7f053cdd3781396a4ceb1225644f4156b81363b_prof);

        
        $__internal_ce8505c16a22c25ac4e2ba3b353c762027c0a53863812f834d9949aa14ff5f63->leave($__internal_ce8505c16a22c25ac4e2ba3b353c762027c0a53863812f834d9949aa14ff5f63_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_897190147764a70ba0356739748c307d72f9d8b1a660b173c8ad30dc2e7eebdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897190147764a70ba0356739748c307d72f9d8b1a660b173c8ad30dc2e7eebdb->enter($__internal_897190147764a70ba0356739748c307d72f9d8b1a660b173c8ad30dc2e7eebdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acec437b3eac1a7673a7871e7b92e895f4f9f9a6298b7532668cdae6a42a9b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acec437b3eac1a7673a7871e7b92e895f4f9f9a6298b7532668cdae6a42a9b1e->enter($__internal_acec437b3eac1a7673a7871e7b92e895f4f9f9a6298b7532668cdae6a42a9b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_acec437b3eac1a7673a7871e7b92e895f4f9f9a6298b7532668cdae6a42a9b1e->leave($__internal_acec437b3eac1a7673a7871e7b92e895f4f9f9a6298b7532668cdae6a42a9b1e_prof);

        
        $__internal_897190147764a70ba0356739748c307d72f9d8b1a660b173c8ad30dc2e7eebdb->leave($__internal_897190147764a70ba0356739748c307d72f9d8b1a660b173c8ad30dc2e7eebdb_prof);

    }

    public function getTemplateName()
    {
        return "@JHTourisme/Activity/add.html.twig";
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
{% endblock %}", "@JHTourisme/Activity/add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle\\Resources\\views\\Activity\\add.html.twig");
    }
}
