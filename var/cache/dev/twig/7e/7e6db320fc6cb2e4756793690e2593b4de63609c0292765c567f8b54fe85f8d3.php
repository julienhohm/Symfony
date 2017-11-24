<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_cd01f0532a053df441c0291a483537c5b39dae9131dea8f326950f7bc65f147f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_18c46bc3c8683bf7b206e18a0a454b753e36f49066308e4ea49b07e596e3a225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c46bc3c8683bf7b206e18a0a454b753e36f49066308e4ea49b07e596e3a225->enter($__internal_18c46bc3c8683bf7b206e18a0a454b753e36f49066308e4ea49b07e596e3a225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_9973c3e3f67f1b47a55cce78c745d60d6cfb16b8ab187b415d226127ca8666f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9973c3e3f67f1b47a55cce78c745d60d6cfb16b8ab187b415d226127ca8666f9->enter($__internal_9973c3e3f67f1b47a55cce78c745d60d6cfb16b8ab187b415d226127ca8666f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_18c46bc3c8683bf7b206e18a0a454b753e36f49066308e4ea49b07e596e3a225->leave($__internal_18c46bc3c8683bf7b206e18a0a454b753e36f49066308e4ea49b07e596e3a225_prof);

        
        $__internal_9973c3e3f67f1b47a55cce78c745d60d6cfb16b8ab187b415d226127ca8666f9->leave($__internal_9973c3e3f67f1b47a55cce78c745d60d6cfb16b8ab187b415d226127ca8666f9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_60833fa7aac074f5f5ddb62dab3e85c02d7b71d81ea148fae11fcdd57cb6a4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60833fa7aac074f5f5ddb62dab3e85c02d7b71d81ea148fae11fcdd57cb6a4df->enter($__internal_60833fa7aac074f5f5ddb62dab3e85c02d7b71d81ea148fae11fcdd57cb6a4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b00fffed71c7766113883489d14a1b3d4c7913f8f218f6df6ab0fd8baf813daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00fffed71c7766113883489d14a1b3d4c7913f8f218f6df6ab0fd8baf813daa->enter($__internal_b00fffed71c7766113883489d14a1b3d4c7913f8f218f6df6ab0fd8baf813daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b00fffed71c7766113883489d14a1b3d4c7913f8f218f6df6ab0fd8baf813daa->leave($__internal_b00fffed71c7766113883489d14a1b3d4c7913f8f218f6df6ab0fd8baf813daa_prof);

        
        $__internal_60833fa7aac074f5f5ddb62dab3e85c02d7b71d81ea148fae11fcdd57cb6a4df->leave($__internal_60833fa7aac074f5f5ddb62dab3e85c02d7b71d81ea148fae11fcdd57cb6a4df_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
