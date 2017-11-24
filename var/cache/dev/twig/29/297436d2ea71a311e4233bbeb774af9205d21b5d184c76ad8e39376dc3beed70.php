<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d2fb6d43772f1ccfaa1d2a53f822e25a293fb346b9844a31875a1dc9c10173f3 extends Twig_Template
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
        $__internal_1da12939cfb895a208196ddf247f770ba84e241667570a588163e00d6ac9d746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da12939cfb895a208196ddf247f770ba84e241667570a588163e00d6ac9d746->enter($__internal_1da12939cfb895a208196ddf247f770ba84e241667570a588163e00d6ac9d746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0e12a9a613f2a2e66a3adf95606864cba5be77b640da22e099fc049eb8994d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e12a9a613f2a2e66a3adf95606864cba5be77b640da22e099fc049eb8994d53->enter($__internal_0e12a9a613f2a2e66a3adf95606864cba5be77b640da22e099fc049eb8994d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1da12939cfb895a208196ddf247f770ba84e241667570a588163e00d6ac9d746->leave($__internal_1da12939cfb895a208196ddf247f770ba84e241667570a588163e00d6ac9d746_prof);

        
        $__internal_0e12a9a613f2a2e66a3adf95606864cba5be77b640da22e099fc049eb8994d53->leave($__internal_0e12a9a613f2a2e66a3adf95606864cba5be77b640da22e099fc049eb8994d53_prof);

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
