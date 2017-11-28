<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fd65a9f9c40b7cc4c00dfdcf553eefad8ba057fc0346ccdf4c693a5543a1b60d extends Twig_Template
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
        $__internal_0c26ee9178c306655403a21ffd7f021ed5f7bb8cdcaf664bb4f9989262794ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c26ee9178c306655403a21ffd7f021ed5f7bb8cdcaf664bb4f9989262794ddb->enter($__internal_0c26ee9178c306655403a21ffd7f021ed5f7bb8cdcaf664bb4f9989262794ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0c26ee9178c306655403a21ffd7f021ed5f7bb8cdcaf664bb4f9989262794ddb->leave($__internal_0c26ee9178c306655403a21ffd7f021ed5f7bb8cdcaf664bb4f9989262794ddb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
