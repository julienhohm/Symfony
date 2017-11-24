<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bf17eba1dbe554d212c6673c6cfa53b874b049465ab3c9367b046d5004d53c67 extends Twig_Template
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
        $__internal_b8d5cd938a3492b8e9a004a368a3b5502cfa6da9801ec17da532c90af7a0957d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d5cd938a3492b8e9a004a368a3b5502cfa6da9801ec17da532c90af7a0957d->enter($__internal_b8d5cd938a3492b8e9a004a368a3b5502cfa6da9801ec17da532c90af7a0957d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_2ef40bb961fbf682175ebef0a33a3c459b00ff7e4932f8ccd0a4787d73f0e5c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef40bb961fbf682175ebef0a33a3c459b00ff7e4932f8ccd0a4787d73f0e5c2->enter($__internal_2ef40bb961fbf682175ebef0a33a3c459b00ff7e4932f8ccd0a4787d73f0e5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_b8d5cd938a3492b8e9a004a368a3b5502cfa6da9801ec17da532c90af7a0957d->leave($__internal_b8d5cd938a3492b8e9a004a368a3b5502cfa6da9801ec17da532c90af7a0957d_prof);

        
        $__internal_2ef40bb961fbf682175ebef0a33a3c459b00ff7e4932f8ccd0a4787d73f0e5c2->leave($__internal_2ef40bb961fbf682175ebef0a33a3c459b00ff7e4932f8ccd0a4787d73f0e5c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
