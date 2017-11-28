<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fe829ba08b32c87c079ca90cba8322ea9d496130bff8a72401d777d76d4db7d4 extends Twig_Template
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
        $__internal_8ef9964016df5e896a6f3ec5bfab046d0a11f7c2eeea1c91340275aef3db1cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef9964016df5e896a6f3ec5bfab046d0a11f7c2eeea1c91340275aef3db1cdb->enter($__internal_8ef9964016df5e896a6f3ec5bfab046d0a11f7c2eeea1c91340275aef3db1cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8ef9964016df5e896a6f3ec5bfab046d0a11f7c2eeea1c91340275aef3db1cdb->leave($__internal_8ef9964016df5e896a6f3ec5bfab046d0a11f7c2eeea1c91340275aef3db1cdb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
