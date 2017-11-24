<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_10f6101ecd7ac1a0be1907c372495ed7e194300a9674f771a52cbbea2c5441a5 extends Twig_Template
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
        $__internal_52dce419488d30e38de4684fd27b6eb245a87afd1acb7c120a35717356e73213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52dce419488d30e38de4684fd27b6eb245a87afd1acb7c120a35717356e73213->enter($__internal_52dce419488d30e38de4684fd27b6eb245a87afd1acb7c120a35717356e73213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_c88118633d02a1b1aa8e0ae767fe8b3825899d80a972a292aa9bdd7e53b1ccb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88118633d02a1b1aa8e0ae767fe8b3825899d80a972a292aa9bdd7e53b1ccb8->enter($__internal_c88118633d02a1b1aa8e0ae767fe8b3825899d80a972a292aa9bdd7e53b1ccb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_52dce419488d30e38de4684fd27b6eb245a87afd1acb7c120a35717356e73213->leave($__internal_52dce419488d30e38de4684fd27b6eb245a87afd1acb7c120a35717356e73213_prof);

        
        $__internal_c88118633d02a1b1aa8e0ae767fe8b3825899d80a972a292aa9bdd7e53b1ccb8->leave($__internal_c88118633d02a1b1aa8e0ae767fe8b3825899d80a972a292aa9bdd7e53b1ccb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
