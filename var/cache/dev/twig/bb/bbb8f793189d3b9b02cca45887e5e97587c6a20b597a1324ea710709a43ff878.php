<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0b55c40f26989719a56c2e810a90c00892b4f42794df74f5f76bcba2e796d3b0 extends Twig_Template
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
        $__internal_ecf3f53bac59c6d8e2054640425eda45c32338aed7a80198c5b811e3c8e7cb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf3f53bac59c6d8e2054640425eda45c32338aed7a80198c5b811e3c8e7cb17->enter($__internal_ecf3f53bac59c6d8e2054640425eda45c32338aed7a80198c5b811e3c8e7cb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ecf3f53bac59c6d8e2054640425eda45c32338aed7a80198c5b811e3c8e7cb17->leave($__internal_ecf3f53bac59c6d8e2054640425eda45c32338aed7a80198c5b811e3c8e7cb17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
