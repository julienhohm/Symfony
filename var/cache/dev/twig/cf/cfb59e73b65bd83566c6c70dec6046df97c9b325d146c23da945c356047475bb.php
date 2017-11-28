<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_cc4d6699477834ee147cc5d5040fed05ffa855c701b7478ee78cc842f5db11ac extends Twig_Template
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
        $__internal_a4ea5ed5e7052bf5f388206e4f2bde241ced186ebc47214b05a24718989a8d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ea5ed5e7052bf5f388206e4f2bde241ced186ebc47214b05a24718989a8d9c->enter($__internal_a4ea5ed5e7052bf5f388206e4f2bde241ced186ebc47214b05a24718989a8d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a4ea5ed5e7052bf5f388206e4f2bde241ced186ebc47214b05a24718989a8d9c->leave($__internal_a4ea5ed5e7052bf5f388206e4f2bde241ced186ebc47214b05a24718989a8d9c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a44bbcf3aa1056e70656b2842cb141c25d5165ff283536c870015cfb5e974b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44bbcf3aa1056e70656b2842cb141c25d5165ff283536c870015cfb5e974b8b->enter($__internal_a44bbcf3aa1056e70656b2842cb141c25d5165ff283536c870015cfb5e974b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a44bbcf3aa1056e70656b2842cb141c25d5165ff283536c870015cfb5e974b8b->leave($__internal_a44bbcf3aa1056e70656b2842cb141c25d5165ff283536c870015cfb5e974b8b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
