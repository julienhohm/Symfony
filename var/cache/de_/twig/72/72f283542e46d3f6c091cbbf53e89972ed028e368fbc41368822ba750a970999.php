<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e1e88ef891f86d5a25521bf6498aa5730ba0fa24aaf4761bcc3bb0f067a24ca8 extends Twig_Template
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
        $__internal_0269bda29904967f1a251c9fe2ad3094c7c76a7df1bb1867d9409ef61b6dd52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0269bda29904967f1a251c9fe2ad3094c7c76a7df1bb1867d9409ef61b6dd52d->enter($__internal_0269bda29904967f1a251c9fe2ad3094c7c76a7df1bb1867d9409ef61b6dd52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0269bda29904967f1a251c9fe2ad3094c7c76a7df1bb1867d9409ef61b6dd52d->leave($__internal_0269bda29904967f1a251c9fe2ad3094c7c76a7df1bb1867d9409ef61b6dd52d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
