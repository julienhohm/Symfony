<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b1ae45e6c525af639d29c6ee237b9149c3c15a6d09b3bcb07fc13f114b2cf538 extends Twig_Template
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
        $__internal_8d37db76ec6584d13eaea41021a0ef43f54b27e5032a55f3a95ec6f77bc10802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d37db76ec6584d13eaea41021a0ef43f54b27e5032a55f3a95ec6f77bc10802->enter($__internal_8d37db76ec6584d13eaea41021a0ef43f54b27e5032a55f3a95ec6f77bc10802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_283301191c5cd18a19f42d736a0261ae51a7f1ed1a91fff4b6cdc54a71f4ed41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_283301191c5cd18a19f42d736a0261ae51a7f1ed1a91fff4b6cdc54a71f4ed41->enter($__internal_283301191c5cd18a19f42d736a0261ae51a7f1ed1a91fff4b6cdc54a71f4ed41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8d37db76ec6584d13eaea41021a0ef43f54b27e5032a55f3a95ec6f77bc10802->leave($__internal_8d37db76ec6584d13eaea41021a0ef43f54b27e5032a55f3a95ec6f77bc10802_prof);

        
        $__internal_283301191c5cd18a19f42d736a0261ae51a7f1ed1a91fff4b6cdc54a71f4ed41->leave($__internal_283301191c5cd18a19f42d736a0261ae51a7f1ed1a91fff4b6cdc54a71f4ed41_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_67b6337f9441f384fc8f546a2b9afc3d3985f80f22f9776a13a08188504ddea1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b6337f9441f384fc8f546a2b9afc3d3985f80f22f9776a13a08188504ddea1->enter($__internal_67b6337f9441f384fc8f546a2b9afc3d3985f80f22f9776a13a08188504ddea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e018e2ada4826abcd7bc4057dc49733cd69cc28e0792c0ebcd883347dd29b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e018e2ada4826abcd7bc4057dc49733cd69cc28e0792c0ebcd883347dd29b35->enter($__internal_1e018e2ada4826abcd7bc4057dc49733cd69cc28e0792c0ebcd883347dd29b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1e018e2ada4826abcd7bc4057dc49733cd69cc28e0792c0ebcd883347dd29b35->leave($__internal_1e018e2ada4826abcd7bc4057dc49733cd69cc28e0792c0ebcd883347dd29b35_prof);

        
        $__internal_67b6337f9441f384fc8f546a2b9afc3d3985f80f22f9776a13a08188504ddea1->leave($__internal_67b6337f9441f384fc8f546a2b9afc3d3985f80f22f9776a13a08188504ddea1_prof);

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
