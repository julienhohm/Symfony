<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_b2346d62cd25c43f7b5de769d76e52bb3122738b548a5aedec7d720b30202d8f extends Twig_Template
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
        $__internal_c79873925be3e9a5befd0ccf3c7b4421b08e271a27d744445f503973c987fc1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79873925be3e9a5befd0ccf3c7b4421b08e271a27d744445f503973c987fc1e->enter($__internal_c79873925be3e9a5befd0ccf3c7b4421b08e271a27d744445f503973c987fc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c79873925be3e9a5befd0ccf3c7b4421b08e271a27d744445f503973c987fc1e->leave($__internal_c79873925be3e9a5befd0ccf3c7b4421b08e271a27d744445f503973c987fc1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
