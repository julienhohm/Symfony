<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_ecbd9ccd1d137e963500eeadc5ce627c66a29d787212188841159b8197f85a72 extends Twig_Template
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
        $__internal_2220b0d92f78b0b30492720ccb6740ab643ec7884763637872a61614ff3bc2c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2220b0d92f78b0b30492720ccb6740ab643ec7884763637872a61614ff3bc2c8->enter($__internal_2220b0d92f78b0b30492720ccb6740ab643ec7884763637872a61614ff3bc2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_229b4823d7f90b2ca10e1ceed2a1a1caa9d9b8c607e19dd71d0979628c62e708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_229b4823d7f90b2ca10e1ceed2a1a1caa9d9b8c607e19dd71d0979628c62e708->enter($__internal_229b4823d7f90b2ca10e1ceed2a1a1caa9d9b8c607e19dd71d0979628c62e708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_2220b0d92f78b0b30492720ccb6740ab643ec7884763637872a61614ff3bc2c8->leave($__internal_2220b0d92f78b0b30492720ccb6740ab643ec7884763637872a61614ff3bc2c8_prof);

        
        $__internal_229b4823d7f90b2ca10e1ceed2a1a1caa9d9b8c607e19dd71d0979628c62e708->leave($__internal_229b4823d7f90b2ca10e1ceed2a1a1caa9d9b8c607e19dd71d0979628c62e708_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
