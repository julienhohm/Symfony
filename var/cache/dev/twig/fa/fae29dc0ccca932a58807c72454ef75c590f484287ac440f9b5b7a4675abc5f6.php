<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7562857aca52310c17a50a222acd11171f07b3ade68326030c41d7f175640304 extends Twig_Template
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
        $__internal_a0b3462605872cd5beb01c7ce19b27e7c15e2338859abb751b4cae528fff491f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b3462605872cd5beb01c7ce19b27e7c15e2338859abb751b4cae528fff491f->enter($__internal_a0b3462605872cd5beb01c7ce19b27e7c15e2338859abb751b4cae528fff491f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_a0b3462605872cd5beb01c7ce19b27e7c15e2338859abb751b4cae528fff491f->leave($__internal_a0b3462605872cd5beb01c7ce19b27e7c15e2338859abb751b4cae528fff491f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
