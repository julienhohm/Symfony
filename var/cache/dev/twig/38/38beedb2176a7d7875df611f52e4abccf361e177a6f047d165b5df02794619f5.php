<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4e01af8ce8baf523efd5a8898ea2d69e264b4291a85d43acd3eb2ccb02c28d2e extends Twig_Template
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
        $__internal_f1a4fc048bebcb31b9f6c306020629f966de2074475d0fa3af304b6231d4dd28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a4fc048bebcb31b9f6c306020629f966de2074475d0fa3af304b6231d4dd28->enter($__internal_f1a4fc048bebcb31b9f6c306020629f966de2074475d0fa3af304b6231d4dd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_95f45cc4bb317958f4aa28620dd979515138d09eb9903b7e1f06264986efdf59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f45cc4bb317958f4aa28620dd979515138d09eb9903b7e1f06264986efdf59->enter($__internal_95f45cc4bb317958f4aa28620dd979515138d09eb9903b7e1f06264986efdf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f1a4fc048bebcb31b9f6c306020629f966de2074475d0fa3af304b6231d4dd28->leave($__internal_f1a4fc048bebcb31b9f6c306020629f966de2074475d0fa3af304b6231d4dd28_prof);

        
        $__internal_95f45cc4bb317958f4aa28620dd979515138d09eb9903b7e1f06264986efdf59->leave($__internal_95f45cc4bb317958f4aa28620dd979515138d09eb9903b7e1f06264986efdf59_prof);

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
