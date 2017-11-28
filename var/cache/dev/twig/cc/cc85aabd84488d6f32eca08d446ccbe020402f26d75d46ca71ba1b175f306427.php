<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_48dc36324c2344969e564a1c1b004ed9059c9fdc6dc4c4ba680e9059a8679482 extends Twig_Template
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
        $__internal_54fa025e27e58d5e08223bb1f4e33b73cc474e8425aab519ae3663763ad8c08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54fa025e27e58d5e08223bb1f4e33b73cc474e8425aab519ae3663763ad8c08f->enter($__internal_54fa025e27e58d5e08223bb1f4e33b73cc474e8425aab519ae3663763ad8c08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_54fa025e27e58d5e08223bb1f4e33b73cc474e8425aab519ae3663763ad8c08f->leave($__internal_54fa025e27e58d5e08223bb1f4e33b73cc474e8425aab519ae3663763ad8c08f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
