<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2ab1c6c4208a205987a23ebcb3ca2eff89e6f04e3b9eef954130e8647e804a2b extends Twig_Template
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
        $__internal_8bd4ec0cf2ff91a4f9df7ae5878ccbcd191f3b62d7e28633133e03aabc995819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd4ec0cf2ff91a4f9df7ae5878ccbcd191f3b62d7e28633133e03aabc995819->enter($__internal_8bd4ec0cf2ff91a4f9df7ae5878ccbcd191f3b62d7e28633133e03aabc995819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fb56e1515f7ea7b10f318615690dc997900577f6021cefccb57fa423af4e1f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb56e1515f7ea7b10f318615690dc997900577f6021cefccb57fa423af4e1f9a->enter($__internal_fb56e1515f7ea7b10f318615690dc997900577f6021cefccb57fa423af4e1f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8bd4ec0cf2ff91a4f9df7ae5878ccbcd191f3b62d7e28633133e03aabc995819->leave($__internal_8bd4ec0cf2ff91a4f9df7ae5878ccbcd191f3b62d7e28633133e03aabc995819_prof);

        
        $__internal_fb56e1515f7ea7b10f318615690dc997900577f6021cefccb57fa423af4e1f9a->leave($__internal_fb56e1515f7ea7b10f318615690dc997900577f6021cefccb57fa423af4e1f9a_prof);

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
