<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2a3d078fe6a6569732fb9059afe6eaf01595648b526a957ceea6782d30427a05 extends Twig_Template
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
        $__internal_036800166aa0aae1cc3e7e55688dd1b5ce1f490566cea0cdd4db2c387385d52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_036800166aa0aae1cc3e7e55688dd1b5ce1f490566cea0cdd4db2c387385d52d->enter($__internal_036800166aa0aae1cc3e7e55688dd1b5ce1f490566cea0cdd4db2c387385d52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_7a6f1552a10a95cba284af418a7fa430b1cbf70f2d9228f7bc16dc4eb96fb954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6f1552a10a95cba284af418a7fa430b1cbf70f2d9228f7bc16dc4eb96fb954->enter($__internal_7a6f1552a10a95cba284af418a7fa430b1cbf70f2d9228f7bc16dc4eb96fb954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_036800166aa0aae1cc3e7e55688dd1b5ce1f490566cea0cdd4db2c387385d52d->leave($__internal_036800166aa0aae1cc3e7e55688dd1b5ce1f490566cea0cdd4db2c387385d52d_prof);

        
        $__internal_7a6f1552a10a95cba284af418a7fa430b1cbf70f2d9228f7bc16dc4eb96fb954->leave($__internal_7a6f1552a10a95cba284af418a7fa430b1cbf70f2d9228f7bc16dc4eb96fb954_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
