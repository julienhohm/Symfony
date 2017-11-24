<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ffc5582c0963056776c8881ebd9d9fe496b86e25f88920d82f64d5ac4a05f0f3 extends Twig_Template
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
        $__internal_658483567a2c6a5afcd833a5c017978ffd26d451c25cbe581942f36b435a3870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658483567a2c6a5afcd833a5c017978ffd26d451c25cbe581942f36b435a3870->enter($__internal_658483567a2c6a5afcd833a5c017978ffd26d451c25cbe581942f36b435a3870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1e5dd2d875d1cdf52412528ffde5042f243efca103cc959e663f51dbfd47d01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5dd2d875d1cdf52412528ffde5042f243efca103cc959e663f51dbfd47d01c->enter($__internal_1e5dd2d875d1cdf52412528ffde5042f243efca103cc959e663f51dbfd47d01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_658483567a2c6a5afcd833a5c017978ffd26d451c25cbe581942f36b435a3870->leave($__internal_658483567a2c6a5afcd833a5c017978ffd26d451c25cbe581942f36b435a3870_prof);

        
        $__internal_1e5dd2d875d1cdf52412528ffde5042f243efca103cc959e663f51dbfd47d01c->leave($__internal_1e5dd2d875d1cdf52412528ffde5042f243efca103cc959e663f51dbfd47d01c_prof);

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
