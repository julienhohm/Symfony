<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8eaa0e9ce7636424c624d1e3524ae94387599e201f95a098025a82cbca056ec1 extends Twig_Template
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
        $__internal_f572f285c4e13a67f0814846c488e23d0bf943d1d9210d704f6afaf0b2951922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f572f285c4e13a67f0814846c488e23d0bf943d1d9210d704f6afaf0b2951922->enter($__internal_f572f285c4e13a67f0814846c488e23d0bf943d1d9210d704f6afaf0b2951922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1333733240e6136c1b50183a847c6103c17adb81074b4b5c8c2a08603c82ce5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1333733240e6136c1b50183a847c6103c17adb81074b4b5c8c2a08603c82ce5b->enter($__internal_1333733240e6136c1b50183a847c6103c17adb81074b4b5c8c2a08603c82ce5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f572f285c4e13a67f0814846c488e23d0bf943d1d9210d704f6afaf0b2951922->leave($__internal_f572f285c4e13a67f0814846c488e23d0bf943d1d9210d704f6afaf0b2951922_prof);

        
        $__internal_1333733240e6136c1b50183a847c6103c17adb81074b4b5c8c2a08603c82ce5b->leave($__internal_1333733240e6136c1b50183a847c6103c17adb81074b4b5c8c2a08603c82ce5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
