<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_02c1f16ca8e5c3114caa69487d7586bd1311c35f97d7c9e8a7db11cad366dc66 extends Twig_Template
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
        $__internal_0c7c9958ecbc22e7d9705d9784f776fb734563b2acf1519e92daab769fb2bbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c7c9958ecbc22e7d9705d9784f776fb734563b2acf1519e92daab769fb2bbb5->enter($__internal_0c7c9958ecbc22e7d9705d9784f776fb734563b2acf1519e92daab769fb2bbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_7aa100ffc879770d08f58d216b90e0ad43de3fe2b5c5ef6642175d30730d90dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa100ffc879770d08f58d216b90e0ad43de3fe2b5c5ef6642175d30730d90dd->enter($__internal_7aa100ffc879770d08f58d216b90e0ad43de3fe2b5c5ef6642175d30730d90dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0c7c9958ecbc22e7d9705d9784f776fb734563b2acf1519e92daab769fb2bbb5->leave($__internal_0c7c9958ecbc22e7d9705d9784f776fb734563b2acf1519e92daab769fb2bbb5_prof);

        
        $__internal_7aa100ffc879770d08f58d216b90e0ad43de3fe2b5c5ef6642175d30730d90dd->leave($__internal_7aa100ffc879770d08f58d216b90e0ad43de3fe2b5c5ef6642175d30730d90dd_prof);

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
