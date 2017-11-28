<?php

/* JHTourismeBundle:Activity:add.html.twig */
class __TwigTemplate_3acdabb3941cbdb30e75dab09d6c0199f67ace271721f1f7e39481c90d251609 extends Twig_Template
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
        $__internal_fcd0419fd13d0ef1e0994b11d1be8a12ed65027bdd7a3d4b1329d76ceaf4291f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcd0419fd13d0ef1e0994b11d1be8a12ed65027bdd7a3d4b1329d76ceaf4291f->enter($__internal_fcd0419fd13d0ef1e0994b11d1be8a12ed65027bdd7a3d4b1329d76ceaf4291f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $__internal_2c67216aed47004dececf5b39b06bfaba67c503a320529436c87dd5359cdcf0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c67216aed47004dececf5b39b06bfaba67c503a320529436c87dd5359cdcf0d->enter($__internal_2c67216aed47004dececf5b39b06bfaba67c503a320529436c87dd5359cdcf0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcd0419fd13d0ef1e0994b11d1be8a12ed65027bdd7a3d4b1329d76ceaf4291f->leave($__internal_fcd0419fd13d0ef1e0994b11d1be8a12ed65027bdd7a3d4b1329d76ceaf4291f_prof);

        
        $__internal_2c67216aed47004dececf5b39b06bfaba67c503a320529436c87dd5359cdcf0d->leave($__internal_2c67216aed47004dececf5b39b06bfaba67c503a320529436c87dd5359cdcf0d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bbf5960288ba482aef7bff271e2e6146bcae8a98da4e61c9767ee70852443e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bbf5960288ba482aef7bff271e2e6146bcae8a98da4e61c9767ee70852443e3->enter($__internal_1bbf5960288ba482aef7bff271e2e6146bcae8a98da4e61c9767ee70852443e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df0f2278cd8024bb300d3b7bd494d2c7cbfcc6208bc6e7d1a63582202d83d67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0f2278cd8024bb300d3b7bd494d2c7cbfcc6208bc6e7d1a63582202d83d67d->enter($__internal_df0f2278cd8024bb300d3b7bd494d2c7cbfcc6208bc6e7d1a63582202d83d67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                    
                    <div class=\"field\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Nom :"));
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Description :"));
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "textarea")));
        echo "
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Adresse :"));
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "textarea")));
        echo "
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Site internet :"));
        echo "
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
                        </div>
                    </div>
                    
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "button is-primary")));
        echo "
                    
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                    
                    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                    
\t\t\t\t\t";
        // line 69
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_df0f2278cd8024bb300d3b7bd494d2c7cbfcc6208bc6e7d1a63582202d83d67d->leave($__internal_df0f2278cd8024bb300d3b7bd494d2c7cbfcc6208bc6e7d1a63582202d83d67d_prof);

        
        $__internal_1bbf5960288ba482aef7bff271e2e6146bcae8a98da4e61c9767ee70852443e3->leave($__internal_1bbf5960288ba482aef7bff271e2e6146bcae8a98da4e61c9767ee70852443e3_prof);

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
        return array (  154 => 69,  149 => 51,  144 => 49,  139 => 47,  132 => 43,  127 => 41,  123 => 40,  115 => 35,  110 => 33,  106 => 32,  98 => 27,  93 => 25,  89 => 24,  81 => 19,  76 => 17,  72 => 16,  66 => 13,  61 => 11,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
                    {{ form_start(form) }}
                    
                    {{ form_errors(form) }}
                    
                    <div class=\"field\">
                        {{ form_label(form.name, \"Nom :\", {'label_attr': {'class': 'label'}}) }}
                        {{ form_errors(form.name) }}
                        <div class=\"control\">
                            {{ form_widget(form.name, {'attr': {'class': 'input'}}) }}
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        {{ form_label(form.description, \"Description :\", {'label_attr': {'class': 'label'}}) }}
                        {{ form_errors(form.description) }}
                        <div class=\"control\">
                            {{ form_widget(form.description, {'attr': {'class': 'textarea'}}) }}
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        {{ form_label(form.address, \"Adresse :\", {'label_attr': {'class': 'label'}}) }}
                        {{ form_errors(form.address) }}
                        <div class=\"control\">
                            {{ form_widget(form.address, {'attr': {'class': 'textarea'}}) }}
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        {{ form_label(form.website, \"Site internet :\", {'label_attr': {'class': 'label'}}) }}
                        {{ form_errors(form.website) }}
                        <div class=\"control\">
                            {{ form_widget(form.website, {'attr': {'class': 'input'}}) }}
                        </div>
                    </div>
                    
                    {{ form_widget(form.save, {'attr': {'class': 'button is-primary'}}) }}
                    
                    {{ form_rest(form) }}
                    
                    {{ form_end(form) }}
                    
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
