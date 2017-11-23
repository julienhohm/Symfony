<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_bffaf9d9755501ed04c7795e03960339d240af8a847859b8de2512f721aa506c extends Twig_Template
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
        $__internal_a05f4f33b52404a4ef4fd2e33acd8ec7df2f74c7ba1bf0ee9733ec599da1c36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a05f4f33b52404a4ef4fd2e33acd8ec7df2f74c7ba1bf0ee9733ec599da1c36d->enter($__internal_a05f4f33b52404a4ef4fd2e33acd8ec7df2f74c7ba1bf0ee9733ec599da1c36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a05f4f33b52404a4ef4fd2e33acd8ec7df2f74c7ba1bf0ee9733ec599da1c36d->leave($__internal_a05f4f33b52404a4ef4fd2e33acd8ec7df2f74c7ba1bf0ee9733ec599da1c36d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ccd4fb01b804682187fe936feb821d9a9f25a23361af3a99ccb907f1feb74ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccd4fb01b804682187fe936feb821d9a9f25a23361af3a99ccb907f1feb74ed->enter($__internal_4ccd4fb01b804682187fe936feb821d9a9f25a23361af3a99ccb907f1feb74ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4ccd4fb01b804682187fe936feb821d9a9f25a23361af3a99ccb907f1feb74ed->leave($__internal_4ccd4fb01b804682187fe936feb821d9a9f25a23361af3a99ccb907f1feb74ed_prof);

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
