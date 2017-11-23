<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_5d44f4360e3e9feaa1cb73971eb6fabaa095559369b7e994fd34bbc4f47465d7 extends Twig_Template
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
        $__internal_524cf39b95ef32e96af9f47268dbff3ea7592b127a73a64c6156608ee0ba38fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524cf39b95ef32e96af9f47268dbff3ea7592b127a73a64c6156608ee0ba38fd->enter($__internal_524cf39b95ef32e96af9f47268dbff3ea7592b127a73a64c6156608ee0ba38fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_952acaf55705e9be61d0309addc59d20be698e0623a00f4520722640d9f70ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952acaf55705e9be61d0309addc59d20be698e0623a00f4520722640d9f70ef1->enter($__internal_952acaf55705e9be61d0309addc59d20be698e0623a00f4520722640d9f70ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_524cf39b95ef32e96af9f47268dbff3ea7592b127a73a64c6156608ee0ba38fd->leave($__internal_524cf39b95ef32e96af9f47268dbff3ea7592b127a73a64c6156608ee0ba38fd_prof);

        
        $__internal_952acaf55705e9be61d0309addc59d20be698e0623a00f4520722640d9f70ef1->leave($__internal_952acaf55705e9be61d0309addc59d20be698e0623a00f4520722640d9f70ef1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
