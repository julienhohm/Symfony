<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d0cc874a15ba03d6860ca783300b94a4b2c0425724b1b25b68a1f8579cb9fa3f extends Twig_Template
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
        $__internal_65843ac75ce594a4b335f313c4679eab81d7fc99ed9d7d028ec1f1cfbb1c9808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65843ac75ce594a4b335f313c4679eab81d7fc99ed9d7d028ec1f1cfbb1c9808->enter($__internal_65843ac75ce594a4b335f313c4679eab81d7fc99ed9d7d028ec1f1cfbb1c9808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_65843ac75ce594a4b335f313c4679eab81d7fc99ed9d7d028ec1f1cfbb1c9808->leave($__internal_65843ac75ce594a4b335f313c4679eab81d7fc99ed9d7d028ec1f1cfbb1c9808_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c65df85d88acba060a412ccab8ea5cfb23eb49cafe33c7814a2cd2dc187689db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65df85d88acba060a412ccab8ea5cfb23eb49cafe33c7814a2cd2dc187689db->enter($__internal_c65df85d88acba060a412ccab8ea5cfb23eb49cafe33c7814a2cd2dc187689db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c65df85d88acba060a412ccab8ea5cfb23eb49cafe33c7814a2cd2dc187689db->leave($__internal_c65df85d88acba060a412ccab8ea5cfb23eb49cafe33c7814a2cd2dc187689db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
        return new Twig_Source("", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
