<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_111d59b413361a5c199b84ce7a2a9ccc55d09953faae1d87c5d37facc7f0537e extends Twig_Template
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
        $__internal_148f83901e0862445927ce1877f99a38e57c547a8e94118ecb6cc6937a7a2979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_148f83901e0862445927ce1877f99a38e57c547a8e94118ecb6cc6937a7a2979->enter($__internal_148f83901e0862445927ce1877f99a38e57c547a8e94118ecb6cc6937a7a2979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_874af5ba0b9f7d0666be4d1d2011c89097026b9258f81dc516f93224444e8291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874af5ba0b9f7d0666be4d1d2011c89097026b9258f81dc516f93224444e8291->enter($__internal_874af5ba0b9f7d0666be4d1d2011c89097026b9258f81dc516f93224444e8291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_148f83901e0862445927ce1877f99a38e57c547a8e94118ecb6cc6937a7a2979->leave($__internal_148f83901e0862445927ce1877f99a38e57c547a8e94118ecb6cc6937a7a2979_prof);

        
        $__internal_874af5ba0b9f7d0666be4d1d2011c89097026b9258f81dc516f93224444e8291->leave($__internal_874af5ba0b9f7d0666be4d1d2011c89097026b9258f81dc516f93224444e8291_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
