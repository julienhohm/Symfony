<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_e26819f51523b377e887d87fc7c0338f1c904b322e65a529d4a86bd51ac0ab6f extends Twig_Template
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
        $__internal_0b830b6b58c19bbb4662fe664355139a3ea7ab02df2e8771a31c167ceef788af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b830b6b58c19bbb4662fe664355139a3ea7ab02df2e8771a31c167ceef788af->enter($__internal_0b830b6b58c19bbb4662fe664355139a3ea7ab02df2e8771a31c167ceef788af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_e1b3a174efbe56dc41d679b2ec1eceb4121c638a11054dd2b1307d1d6b85c240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b3a174efbe56dc41d679b2ec1eceb4121c638a11054dd2b1307d1d6b85c240->enter($__internal_e1b3a174efbe56dc41d679b2ec1eceb4121c638a11054dd2b1307d1d6b85c240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0b830b6b58c19bbb4662fe664355139a3ea7ab02df2e8771a31c167ceef788af->leave($__internal_0b830b6b58c19bbb4662fe664355139a3ea7ab02df2e8771a31c167ceef788af_prof);

        
        $__internal_e1b3a174efbe56dc41d679b2ec1eceb4121c638a11054dd2b1307d1d6b85c240->leave($__internal_e1b3a174efbe56dc41d679b2ec1eceb4121c638a11054dd2b1307d1d6b85c240_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
