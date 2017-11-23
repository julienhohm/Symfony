<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9ba68c83c2c30f20ee1f3c04d495bd7f8d503cc4c3445d9733f151ba3ac36a92 extends Twig_Template
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
        $__internal_009b3fb92b537f0e8f7e215889c5e0395989b0e27d1a170357bdbefec2043c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009b3fb92b537f0e8f7e215889c5e0395989b0e27d1a170357bdbefec2043c04->enter($__internal_009b3fb92b537f0e8f7e215889c5e0395989b0e27d1a170357bdbefec2043c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e0be8fd2c9977fcc851440320b3970a1b546e552849572d0769047ba4bd6ebb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0be8fd2c9977fcc851440320b3970a1b546e552849572d0769047ba4bd6ebb0->enter($__internal_e0be8fd2c9977fcc851440320b3970a1b546e552849572d0769047ba4bd6ebb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_009b3fb92b537f0e8f7e215889c5e0395989b0e27d1a170357bdbefec2043c04->leave($__internal_009b3fb92b537f0e8f7e215889c5e0395989b0e27d1a170357bdbefec2043c04_prof);

        
        $__internal_e0be8fd2c9977fcc851440320b3970a1b546e552849572d0769047ba4bd6ebb0->leave($__internal_e0be8fd2c9977fcc851440320b3970a1b546e552849572d0769047ba4bd6ebb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
