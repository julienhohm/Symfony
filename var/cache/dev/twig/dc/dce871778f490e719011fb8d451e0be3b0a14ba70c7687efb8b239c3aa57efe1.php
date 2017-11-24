<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_8d916e35dbfeb62bffe2fd925abd67f884e254f4cce2c5f22f79847f139b56ee extends Twig_Template
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
        $__internal_c5abf71c3c65da21976de2b5e08ff0eb8a22af56e443e462e11554151ec86add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5abf71c3c65da21976de2b5e08ff0eb8a22af56e443e462e11554151ec86add->enter($__internal_c5abf71c3c65da21976de2b5e08ff0eb8a22af56e443e462e11554151ec86add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_479d3e8e1c5a54a1ddb13a3cd8304904eff286e26b876eeaeef03677373d6b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479d3e8e1c5a54a1ddb13a3cd8304904eff286e26b876eeaeef03677373d6b47->enter($__internal_479d3e8e1c5a54a1ddb13a3cd8304904eff286e26b876eeaeef03677373d6b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c5abf71c3c65da21976de2b5e08ff0eb8a22af56e443e462e11554151ec86add->leave($__internal_c5abf71c3c65da21976de2b5e08ff0eb8a22af56e443e462e11554151ec86add_prof);

        
        $__internal_479d3e8e1c5a54a1ddb13a3cd8304904eff286e26b876eeaeef03677373d6b47->leave($__internal_479d3e8e1c5a54a1ddb13a3cd8304904eff286e26b876eeaeef03677373d6b47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
