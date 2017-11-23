<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_673fe3ba4983d51b7cae290d66088054512e0b920257a64bcbcaf7564562a928 extends Twig_Template
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
        $__internal_4624b927f2cf17bbad82c62c54c74551dae13a4bafe995ab7cd6a4de45071d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4624b927f2cf17bbad82c62c54c74551dae13a4bafe995ab7cd6a4de45071d04->enter($__internal_4624b927f2cf17bbad82c62c54c74551dae13a4bafe995ab7cd6a4de45071d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_418f9598764dbc71f069d6da46dd0079048e145183782225030da7d3e54267c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418f9598764dbc71f069d6da46dd0079048e145183782225030da7d3e54267c4->enter($__internal_418f9598764dbc71f069d6da46dd0079048e145183782225030da7d3e54267c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4624b927f2cf17bbad82c62c54c74551dae13a4bafe995ab7cd6a4de45071d04->leave($__internal_4624b927f2cf17bbad82c62c54c74551dae13a4bafe995ab7cd6a4de45071d04_prof);

        
        $__internal_418f9598764dbc71f069d6da46dd0079048e145183782225030da7d3e54267c4->leave($__internal_418f9598764dbc71f069d6da46dd0079048e145183782225030da7d3e54267c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
