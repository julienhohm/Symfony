<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2469ecb5cf3e075367343b6f22045d4dcf2577b9a0f902fada5445d8fb8ea0f9 extends Twig_Template
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
        $__internal_fbbf333fd38761b26f6c5feb41d2bde6d5e1755c23dadcb0733ee2de703c09a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbf333fd38761b26f6c5feb41d2bde6d5e1755c23dadcb0733ee2de703c09a1->enter($__internal_fbbf333fd38761b26f6c5feb41d2bde6d5e1755c23dadcb0733ee2de703c09a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_99de3e9bebb06c95b82acd5f50ed9b4008bfdad7e26fe7673929c693aec4ce3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99de3e9bebb06c95b82acd5f50ed9b4008bfdad7e26fe7673929c693aec4ce3a->enter($__internal_99de3e9bebb06c95b82acd5f50ed9b4008bfdad7e26fe7673929c693aec4ce3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fbbf333fd38761b26f6c5feb41d2bde6d5e1755c23dadcb0733ee2de703c09a1->leave($__internal_fbbf333fd38761b26f6c5feb41d2bde6d5e1755c23dadcb0733ee2de703c09a1_prof);

        
        $__internal_99de3e9bebb06c95b82acd5f50ed9b4008bfdad7e26fe7673929c693aec4ce3a->leave($__internal_99de3e9bebb06c95b82acd5f50ed9b4008bfdad7e26fe7673929c693aec4ce3a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
