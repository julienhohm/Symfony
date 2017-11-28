<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_c22a544a4dc14cf17e584d40f56fff8560b5e16fbdcfd0cede89186c7c2a6345 extends Twig_Template
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
        $__internal_cd63184df19ac1015dccb8e4a7137ee62958e0cd79364beef92ace1b1de815d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd63184df19ac1015dccb8e4a7137ee62958e0cd79364beef92ace1b1de815d7->enter($__internal_cd63184df19ac1015dccb8e4a7137ee62958e0cd79364beef92ace1b1de815d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cd63184df19ac1015dccb8e4a7137ee62958e0cd79364beef92ace1b1de815d7->leave($__internal_cd63184df19ac1015dccb8e4a7137ee62958e0cd79364beef92ace1b1de815d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
