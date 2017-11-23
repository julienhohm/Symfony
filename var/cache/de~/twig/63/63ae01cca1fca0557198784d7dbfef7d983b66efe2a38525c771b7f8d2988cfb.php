<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_706943a73a69727d5e5e089c9a20f44ad1296883b63db329c8e7ca7100b2eb50 extends Twig_Template
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
        $__internal_27e2f4ee8ea9471057ae557cde2121359239c33a5fefaf04cd29f65d98d41867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e2f4ee8ea9471057ae557cde2121359239c33a5fefaf04cd29f65d98d41867->enter($__internal_27e2f4ee8ea9471057ae557cde2121359239c33a5fefaf04cd29f65d98d41867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0e377c7c9e9343f1cdb8a605e07bbc331cd0fcfa621ee6ebc541bc477ba70a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e377c7c9e9343f1cdb8a605e07bbc331cd0fcfa621ee6ebc541bc477ba70a7b->enter($__internal_0e377c7c9e9343f1cdb8a605e07bbc331cd0fcfa621ee6ebc541bc477ba70a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_27e2f4ee8ea9471057ae557cde2121359239c33a5fefaf04cd29f65d98d41867->leave($__internal_27e2f4ee8ea9471057ae557cde2121359239c33a5fefaf04cd29f65d98d41867_prof);

        
        $__internal_0e377c7c9e9343f1cdb8a605e07bbc331cd0fcfa621ee6ebc541bc477ba70a7b->leave($__internal_0e377c7c9e9343f1cdb8a605e07bbc331cd0fcfa621ee6ebc541bc477ba70a7b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b246ae3b3c19ba5e621686e181dc669e52f11f865164cce892b9069aef3d38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b246ae3b3c19ba5e621686e181dc669e52f11f865164cce892b9069aef3d38d->enter($__internal_5b246ae3b3c19ba5e621686e181dc669e52f11f865164cce892b9069aef3d38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6555a1d641259acd554533f4d47551993a45189617a977e5a88dd197ee97d1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6555a1d641259acd554533f4d47551993a45189617a977e5a88dd197ee97d1e2->enter($__internal_6555a1d641259acd554533f4d47551993a45189617a977e5a88dd197ee97d1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6555a1d641259acd554533f4d47551993a45189617a977e5a88dd197ee97d1e2->leave($__internal_6555a1d641259acd554533f4d47551993a45189617a977e5a88dd197ee97d1e2_prof);

        
        $__internal_5b246ae3b3c19ba5e621686e181dc669e52f11f865164cce892b9069aef3d38d->leave($__internal_5b246ae3b3c19ba5e621686e181dc669e52f11f865164cce892b9069aef3d38d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
