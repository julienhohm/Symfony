<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_20b3e78f9ba7ee2537c9bcb6e8979af69dccc81268833ffa6d12d4fde6758868 extends Twig_Template
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
        $__internal_476317d7552d59173e18d6e5309d57c21ba479edce3761228f00a0a5488155e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476317d7552d59173e18d6e5309d57c21ba479edce3761228f00a0a5488155e9->enter($__internal_476317d7552d59173e18d6e5309d57c21ba479edce3761228f00a0a5488155e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_69f14377866a6c62870c7415c8d64f4fed7d00046c3adc7080ed0251578481d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f14377866a6c62870c7415c8d64f4fed7d00046c3adc7080ed0251578481d1->enter($__internal_69f14377866a6c62870c7415c8d64f4fed7d00046c3adc7080ed0251578481d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_476317d7552d59173e18d6e5309d57c21ba479edce3761228f00a0a5488155e9->leave($__internal_476317d7552d59173e18d6e5309d57c21ba479edce3761228f00a0a5488155e9_prof);

        
        $__internal_69f14377866a6c62870c7415c8d64f4fed7d00046c3adc7080ed0251578481d1->leave($__internal_69f14377866a6c62870c7415c8d64f4fed7d00046c3adc7080ed0251578481d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
