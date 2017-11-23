<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_49bfa1451cd364892a60f89c919591d85176fd772eeb7079629d27a8ce3e0b45 extends Twig_Template
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
        $__internal_2e35d09d50fa3b22f32b756e5e1bf93f3fec56b35c99ef729ea738123b0bf7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e35d09d50fa3b22f32b756e5e1bf93f3fec56b35c99ef729ea738123b0bf7fa->enter($__internal_2e35d09d50fa3b22f32b756e5e1bf93f3fec56b35c99ef729ea738123b0bf7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_2e35d09d50fa3b22f32b756e5e1bf93f3fec56b35c99ef729ea738123b0bf7fa->leave($__internal_2e35d09d50fa3b22f32b756e5e1bf93f3fec56b35c99ef729ea738123b0bf7fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
