<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_be0016c466a443902fe62c0272819c79a303e5c7509323b540eb9cecfcd2a045 extends Twig_Template
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
        $__internal_5c00dea41bf49a6d03dc9f7d7521d83e2c2ad8407c7463721e6466e2ab1babc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c00dea41bf49a6d03dc9f7d7521d83e2c2ad8407c7463721e6466e2ab1babc6->enter($__internal_5c00dea41bf49a6d03dc9f7d7521d83e2c2ad8407c7463721e6466e2ab1babc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5c00dea41bf49a6d03dc9f7d7521d83e2c2ad8407c7463721e6466e2ab1babc6->leave($__internal_5c00dea41bf49a6d03dc9f7d7521d83e2c2ad8407c7463721e6466e2ab1babc6_prof);

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
