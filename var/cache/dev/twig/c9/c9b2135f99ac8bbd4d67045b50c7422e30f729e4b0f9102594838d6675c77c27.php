<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d11cbdf64e7fb3d374c87fcdd598a98dae51609b9a05afc1633ef255f0cb3bf6 extends Twig_Template
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
        $__internal_c9671dd07ca82569d67b92bf7139fc177690b905ec2ab59942cdccb24f15d606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9671dd07ca82569d67b92bf7139fc177690b905ec2ab59942cdccb24f15d606->enter($__internal_c9671dd07ca82569d67b92bf7139fc177690b905ec2ab59942cdccb24f15d606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3b58bb5fb6263727b40caf62c1efe3e8d8e006b78bc3bede3ef5e036e278b8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b58bb5fb6263727b40caf62c1efe3e8d8e006b78bc3bede3ef5e036e278b8b0->enter($__internal_3b58bb5fb6263727b40caf62c1efe3e8d8e006b78bc3bede3ef5e036e278b8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c9671dd07ca82569d67b92bf7139fc177690b905ec2ab59942cdccb24f15d606->leave($__internal_c9671dd07ca82569d67b92bf7139fc177690b905ec2ab59942cdccb24f15d606_prof);

        
        $__internal_3b58bb5fb6263727b40caf62c1efe3e8d8e006b78bc3bede3ef5e036e278b8b0->leave($__internal_3b58bb5fb6263727b40caf62c1efe3e8d8e006b78bc3bede3ef5e036e278b8b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
