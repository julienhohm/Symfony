<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8ec21a639de0744ae512996b64518518ac794da75e130fb04d27789b18894725 extends Twig_Template
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
        $__internal_b4cc9f689d426b01d1b603aad78b3db75bc40d715bad28b414201ddf7d7a0cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4cc9f689d426b01d1b603aad78b3db75bc40d715bad28b414201ddf7d7a0cdd->enter($__internal_b4cc9f689d426b01d1b603aad78b3db75bc40d715bad28b414201ddf7d7a0cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_fc80d8e21a815e2fd3c3a5a90f2d0be6629bd18728d7248bd156310aeff26936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc80d8e21a815e2fd3c3a5a90f2d0be6629bd18728d7248bd156310aeff26936->enter($__internal_fc80d8e21a815e2fd3c3a5a90f2d0be6629bd18728d7248bd156310aeff26936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b4cc9f689d426b01d1b603aad78b3db75bc40d715bad28b414201ddf7d7a0cdd->leave($__internal_b4cc9f689d426b01d1b603aad78b3db75bc40d715bad28b414201ddf7d7a0cdd_prof);

        
        $__internal_fc80d8e21a815e2fd3c3a5a90f2d0be6629bd18728d7248bd156310aeff26936->leave($__internal_fc80d8e21a815e2fd3c3a5a90f2d0be6629bd18728d7248bd156310aeff26936_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0eb2684e2b4b4023614f883d65a4fba886c320d2138fc9fba947e98da3bc6c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb2684e2b4b4023614f883d65a4fba886c320d2138fc9fba947e98da3bc6c86->enter($__internal_0eb2684e2b4b4023614f883d65a4fba886c320d2138fc9fba947e98da3bc6c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_df81488996d3efc4b3e67432506011ebdd6911ff4fde5b5eb6f471f69bcce6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df81488996d3efc4b3e67432506011ebdd6911ff4fde5b5eb6f471f69bcce6c1->enter($__internal_df81488996d3efc4b3e67432506011ebdd6911ff4fde5b5eb6f471f69bcce6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_df81488996d3efc4b3e67432506011ebdd6911ff4fde5b5eb6f471f69bcce6c1->leave($__internal_df81488996d3efc4b3e67432506011ebdd6911ff4fde5b5eb6f471f69bcce6c1_prof);

        
        $__internal_0eb2684e2b4b4023614f883d65a4fba886c320d2138fc9fba947e98da3bc6c86->leave($__internal_0eb2684e2b4b4023614f883d65a4fba886c320d2138fc9fba947e98da3bc6c86_prof);

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
