<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_992cf42486638ab58da0083167ec3d46c3d3a34a319d57af5d058ff8fb5091fa extends Twig_Template
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
        $__internal_9dd2a94ca212d1149ad2376a61b5ad4dfaf0ecdbe702b27f19142c0158501b73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd2a94ca212d1149ad2376a61b5ad4dfaf0ecdbe702b27f19142c0158501b73->enter($__internal_9dd2a94ca212d1149ad2376a61b5ad4dfaf0ecdbe702b27f19142c0158501b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_37092709e795ef5523ec4f8df9293b32f08ad42c64b8009203125f1afbcc7d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37092709e795ef5523ec4f8df9293b32f08ad42c64b8009203125f1afbcc7d27->enter($__internal_37092709e795ef5523ec4f8df9293b32f08ad42c64b8009203125f1afbcc7d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_9dd2a94ca212d1149ad2376a61b5ad4dfaf0ecdbe702b27f19142c0158501b73->leave($__internal_9dd2a94ca212d1149ad2376a61b5ad4dfaf0ecdbe702b27f19142c0158501b73_prof);

        
        $__internal_37092709e795ef5523ec4f8df9293b32f08ad42c64b8009203125f1afbcc7d27->leave($__internal_37092709e795ef5523ec4f8df9293b32f08ad42c64b8009203125f1afbcc7d27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
