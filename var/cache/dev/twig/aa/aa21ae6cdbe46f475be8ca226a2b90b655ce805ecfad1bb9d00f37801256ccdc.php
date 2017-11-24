<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_77a1fdcb3d733a62eca66f75da0ab332c7a0043cd01c9cce54e958e43fc839a9 extends Twig_Template
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
        $__internal_cfc1106c377c2d4c06a92cd893274f809ef3dd34a0536a08fb11fd2676081dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc1106c377c2d4c06a92cd893274f809ef3dd34a0536a08fb11fd2676081dd7->enter($__internal_cfc1106c377c2d4c06a92cd893274f809ef3dd34a0536a08fb11fd2676081dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_d29e0047df5945fe4a3b01ff6d6d20c8814938fc0e739477d948bd4b33c6f3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29e0047df5945fe4a3b01ff6d6d20c8814938fc0e739477d948bd4b33c6f3e6->enter($__internal_d29e0047df5945fe4a3b01ff6d6d20c8814938fc0e739477d948bd4b33c6f3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cfc1106c377c2d4c06a92cd893274f809ef3dd34a0536a08fb11fd2676081dd7->leave($__internal_cfc1106c377c2d4c06a92cd893274f809ef3dd34a0536a08fb11fd2676081dd7_prof);

        
        $__internal_d29e0047df5945fe4a3b01ff6d6d20c8814938fc0e739477d948bd4b33c6f3e6->leave($__internal_d29e0047df5945fe4a3b01ff6d6d20c8814938fc0e739477d948bd4b33c6f3e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
