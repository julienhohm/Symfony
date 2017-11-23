<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c33386d1ee4badcfb7d2a28577e0e894e38400f3f8e88a9fad1f32c8255afb80 extends Twig_Template
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
        $__internal_e25da7d68ef99b9ff839cfb527de3c1793a030c865770a5bc8881d8cf0c538b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25da7d68ef99b9ff839cfb527de3c1793a030c865770a5bc8881d8cf0c538b3->enter($__internal_e25da7d68ef99b9ff839cfb527de3c1793a030c865770a5bc8881d8cf0c538b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e25da7d68ef99b9ff839cfb527de3c1793a030c865770a5bc8881d8cf0c538b3->leave($__internal_e25da7d68ef99b9ff839cfb527de3c1793a030c865770a5bc8881d8cf0c538b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
