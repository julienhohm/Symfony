<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1a986333b094b87a5e8b136b3a1590ecbde6e661346357fede5bf1e61240b198 extends Twig_Template
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
        $__internal_a6acff4f453a4e72f02471327aef260a741bcf28040d94942c001964c96f5665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6acff4f453a4e72f02471327aef260a741bcf28040d94942c001964c96f5665->enter($__internal_a6acff4f453a4e72f02471327aef260a741bcf28040d94942c001964c96f5665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_442710ad5a87099c0298889465f64801302194de8e592e2221d13efc852ca58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442710ad5a87099c0298889465f64801302194de8e592e2221d13efc852ca58f->enter($__internal_442710ad5a87099c0298889465f64801302194de8e592e2221d13efc852ca58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a6acff4f453a4e72f02471327aef260a741bcf28040d94942c001964c96f5665->leave($__internal_a6acff4f453a4e72f02471327aef260a741bcf28040d94942c001964c96f5665_prof);

        
        $__internal_442710ad5a87099c0298889465f64801302194de8e592e2221d13efc852ca58f->leave($__internal_442710ad5a87099c0298889465f64801302194de8e592e2221d13efc852ca58f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
