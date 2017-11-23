<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_d9846c673203cf8b449787aec7e32cf9f1c6d41718edac1a26b8d09aa286c188 extends Twig_Template
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
        $__internal_f0fefca1236154cadfc633ce6daf663a50784a6bcc25ebe602c30bc43ba4c9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fefca1236154cadfc633ce6daf663a50784a6bcc25ebe602c30bc43ba4c9ba->enter($__internal_f0fefca1236154cadfc633ce6daf663a50784a6bcc25ebe602c30bc43ba4c9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f0fefca1236154cadfc633ce6daf663a50784a6bcc25ebe602c30bc43ba4c9ba->leave($__internal_f0fefca1236154cadfc633ce6daf663a50784a6bcc25ebe602c30bc43ba4c9ba_prof);

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
