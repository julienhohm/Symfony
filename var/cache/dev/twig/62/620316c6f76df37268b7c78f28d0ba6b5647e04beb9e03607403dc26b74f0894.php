<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_af6092474556d59b2056973638b1922c770e3833f54c7a92242747fb2a0a8402 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e40b06f22a084b0ea9439f0a4846433b8924eb94d0650e583f86359d62a22915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e40b06f22a084b0ea9439f0a4846433b8924eb94d0650e583f86359d62a22915->enter($__internal_e40b06f22a084b0ea9439f0a4846433b8924eb94d0650e583f86359d62a22915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e03464b7d4299359b9327599a6eada8d704a8a5c1b0b578946637de68335a609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e03464b7d4299359b9327599a6eada8d704a8a5c1b0b578946637de68335a609->enter($__internal_e03464b7d4299359b9327599a6eada8d704a8a5c1b0b578946637de68335a609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e40b06f22a084b0ea9439f0a4846433b8924eb94d0650e583f86359d62a22915->leave($__internal_e40b06f22a084b0ea9439f0a4846433b8924eb94d0650e583f86359d62a22915_prof);

        
        $__internal_e03464b7d4299359b9327599a6eada8d704a8a5c1b0b578946637de68335a609->leave($__internal_e03464b7d4299359b9327599a6eada8d704a8a5c1b0b578946637de68335a609_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
