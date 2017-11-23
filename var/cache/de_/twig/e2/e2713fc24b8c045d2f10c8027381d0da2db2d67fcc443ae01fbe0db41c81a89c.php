<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6feecc6ed61e86fc2cab2b6f356aa0d9c61e0d7431f3b8757f553c445727b24c extends Twig_Template
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
        $__internal_98e272d4eef904eea74aab2a8805a40d4e76bd6207557eac89296d41310e2616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98e272d4eef904eea74aab2a8805a40d4e76bd6207557eac89296d41310e2616->enter($__internal_98e272d4eef904eea74aab2a8805a40d4e76bd6207557eac89296d41310e2616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_98e272d4eef904eea74aab2a8805a40d4e76bd6207557eac89296d41310e2616->leave($__internal_98e272d4eef904eea74aab2a8805a40d4e76bd6207557eac89296d41310e2616_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
