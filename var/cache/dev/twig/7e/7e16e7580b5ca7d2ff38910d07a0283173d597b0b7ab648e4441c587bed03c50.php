<?php

/* JHTourismeBundle:Activity:add.html.twig */
class __TwigTemplate_0460f42f0cb95e8198f279edfd0542f334c8de6600786c5c79eff90cbbefcc32 extends Twig_Template
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
        $__internal_cbd4114d328d05341829b19bf30e1bf56846c3b725d589b330287a0697c74876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd4114d328d05341829b19bf30e1bf56846c3b725d589b330287a0697c74876->enter($__internal_cbd4114d328d05341829b19bf30e1bf56846c3b725d589b330287a0697c74876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $__internal_4dc1628e34f16d1d2ba6ce793194434a33ec8849622cca463fcd772e9847251d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc1628e34f16d1d2ba6ce793194434a33ec8849622cca463fcd772e9847251d->enter($__internal_4dc1628e34f16d1d2ba6ce793194434a33ec8849622cca463fcd772e9847251d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbd4114d328d05341829b19bf30e1bf56846c3b725d589b330287a0697c74876->leave($__internal_cbd4114d328d05341829b19bf30e1bf56846c3b725d589b330287a0697c74876_prof);

        
        $__internal_4dc1628e34f16d1d2ba6ce793194434a33ec8849622cca463fcd772e9847251d->leave($__internal_4dc1628e34f16d1d2ba6ce793194434a33ec8849622cca463fcd772e9847251d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e82e22a23dbf4ff0853ded1b9415d8f497fbe3e613119bfb91f1d9ebab746c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82e22a23dbf4ff0853ded1b9415d8f497fbe3e613119bfb91f1d9ebab746c7a->enter($__internal_e82e22a23dbf4ff0853ded1b9415d8f497fbe3e613119bfb91f1d9ebab746c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1df3262b79660e668357f7b318d01edd523883934a75ba279de29b6deca0681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1df3262b79660e668357f7b318d01edd523883934a75ba279de29b6deca0681->enter($__internal_a1df3262b79660e668357f7b318d01edd523883934a75ba279de29b6deca0681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a1df3262b79660e668357f7b318d01edd523883934a75ba279de29b6deca0681->leave($__internal_a1df3262b79660e668357f7b318d01edd523883934a75ba279de29b6deca0681_prof);

        
        $__internal_e82e22a23dbf4ff0853ded1b9415d8f497fbe3e613119bfb91f1d9ebab746c7a->leave($__internal_e82e22a23dbf4ff0853ded1b9415d8f497fbe3e613119bfb91f1d9ebab746c7a_prof);

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
