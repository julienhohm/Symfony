<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2e11a1222113dec10900bcee1486f07b0611cffdb87cb0dae4f0c2f772dcfdcd extends Twig_Template
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
        $__internal_6a536035114b05efc9f8bebbbd4c1e1f3c6a5f53176464845d1ebbed1372ffa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a536035114b05efc9f8bebbbd4c1e1f3c6a5f53176464845d1ebbed1372ffa6->enter($__internal_6a536035114b05efc9f8bebbbd4c1e1f3c6a5f53176464845d1ebbed1372ffa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6a536035114b05efc9f8bebbbd4c1e1f3c6a5f53176464845d1ebbed1372ffa6->leave($__internal_6a536035114b05efc9f8bebbbd4c1e1f3c6a5f53176464845d1ebbed1372ffa6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
