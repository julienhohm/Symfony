<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_84cc671909b7a8d151fc2e6bad4f9ffebb4cab4735e927a310fde078842cd166 extends Twig_Template
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
        $__internal_af252c5f1745f52d82de7e186152bab466a43277751320c9bbb1d82f272d29d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af252c5f1745f52d82de7e186152bab466a43277751320c9bbb1d82f272d29d4->enter($__internal_af252c5f1745f52d82de7e186152bab466a43277751320c9bbb1d82f272d29d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3472ee938d7f734e9439cbd62ee53e843e02f5fa976c0515903f97c28e00ded4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3472ee938d7f734e9439cbd62ee53e843e02f5fa976c0515903f97c28e00ded4->enter($__internal_3472ee938d7f734e9439cbd62ee53e843e02f5fa976c0515903f97c28e00ded4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_af252c5f1745f52d82de7e186152bab466a43277751320c9bbb1d82f272d29d4->leave($__internal_af252c5f1745f52d82de7e186152bab466a43277751320c9bbb1d82f272d29d4_prof);

        
        $__internal_3472ee938d7f734e9439cbd62ee53e843e02f5fa976c0515903f97c28e00ded4->leave($__internal_3472ee938d7f734e9439cbd62ee53e843e02f5fa976c0515903f97c28e00ded4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
