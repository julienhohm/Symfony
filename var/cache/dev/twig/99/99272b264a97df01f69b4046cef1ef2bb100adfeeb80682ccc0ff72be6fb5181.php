<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_0c43d32cf737ba1f3c931c45f96023f7f224f015d0da55a2ed73c92414d07599 extends Twig_Template
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
        $__internal_3a853886c94f5b770397c1428ea459fb8517a913e425e55d7be9e7edfeaa8420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a853886c94f5b770397c1428ea459fb8517a913e425e55d7be9e7edfeaa8420->enter($__internal_3a853886c94f5b770397c1428ea459fb8517a913e425e55d7be9e7edfeaa8420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_43f62f639e94cd721b6f222b76234233d6d70bf5e2102e4781b99ee8905dda9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f62f639e94cd721b6f222b76234233d6d70bf5e2102e4781b99ee8905dda9e->enter($__internal_43f62f639e94cd721b6f222b76234233d6d70bf5e2102e4781b99ee8905dda9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3a853886c94f5b770397c1428ea459fb8517a913e425e55d7be9e7edfeaa8420->leave($__internal_3a853886c94f5b770397c1428ea459fb8517a913e425e55d7be9e7edfeaa8420_prof);

        
        $__internal_43f62f639e94cd721b6f222b76234233d6d70bf5e2102e4781b99ee8905dda9e->leave($__internal_43f62f639e94cd721b6f222b76234233d6d70bf5e2102e4781b99ee8905dda9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
