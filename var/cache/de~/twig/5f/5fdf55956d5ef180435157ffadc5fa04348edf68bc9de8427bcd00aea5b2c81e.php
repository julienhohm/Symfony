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
        $__internal_1c47a49f6f66d01fb199d907598b37d7b4edb322b37ecb6dee785a3f6c711243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c47a49f6f66d01fb199d907598b37d7b4edb322b37ecb6dee785a3f6c711243->enter($__internal_1c47a49f6f66d01fb199d907598b37d7b4edb322b37ecb6dee785a3f6c711243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $__internal_8397e81c03b7af321506e8aae78a50720b647e9ded9651ec4b4f8ccf733a4e83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8397e81c03b7af321506e8aae78a50720b647e9ded9651ec4b4f8ccf733a4e83->enter($__internal_8397e81c03b7af321506e8aae78a50720b647e9ded9651ec4b4f8ccf733a4e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c47a49f6f66d01fb199d907598b37d7b4edb322b37ecb6dee785a3f6c711243->leave($__internal_1c47a49f6f66d01fb199d907598b37d7b4edb322b37ecb6dee785a3f6c711243_prof);

        
        $__internal_8397e81c03b7af321506e8aae78a50720b647e9ded9651ec4b4f8ccf733a4e83->leave($__internal_8397e81c03b7af321506e8aae78a50720b647e9ded9651ec4b4f8ccf733a4e83_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2199c9757c4b520d8ac221414c7a2ea0af2d1b5fb4efe630584732bfccd5e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2199c9757c4b520d8ac221414c7a2ea0af2d1b5fb4efe630584732bfccd5e47->enter($__internal_a2199c9757c4b520d8ac221414c7a2ea0af2d1b5fb4efe630584732bfccd5e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d98c13cb92be324396f023e8b0cb6d50648b8f382aaa6346bc7d572392f4d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d98c13cb92be324396f023e8b0cb6d50648b8f382aaa6346bc7d572392f4d91->enter($__internal_0d98c13cb92be324396f023e8b0cb6d50648b8f382aaa6346bc7d572392f4d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<section class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"columns is-multiline is-centered\">
\t\t\t\t<div class=\"column is-12 has-text-centered\">
\t\t\t\t\t<h1 class=\"title\">{@tourisme~activity.title@}</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\">
\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_0d98c13cb92be324396f023e8b0cb6d50648b8f382aaa6346bc7d572392f4d91->leave($__internal_0d98c13cb92be324396f023e8b0cb6d50648b8f382aaa6346bc7d572392f4d91_prof);

        
        $__internal_a2199c9757c4b520d8ac221414c7a2ea0af2d1b5fb4efe630584732bfccd5e47->leave($__internal_a2199c9757c4b520d8ac221414c7a2ea0af2d1b5fb4efe630584732bfccd5e47_prof);

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
        return array (  58 => 27,  49 => 4,  40 => 3,  11 => 1,);
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
\t\t\t\t\t<h1 class=\"title\">{@tourisme~activity.title@}</h1>
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
