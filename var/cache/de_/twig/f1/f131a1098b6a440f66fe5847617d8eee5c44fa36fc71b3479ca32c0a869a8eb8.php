<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_e27ce8f81c70edb6fa1fe06abfa75910f8025350e2838cf86e42d0612f894f42 extends Twig_Template
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
        $__internal_a491ae8ca37af6d06ce29862a47992ce98333b67edaa72291b3802247497db01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a491ae8ca37af6d06ce29862a47992ce98333b67edaa72291b3802247497db01->enter($__internal_a491ae8ca37af6d06ce29862a47992ce98333b67edaa72291b3802247497db01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a491ae8ca37af6d06ce29862a47992ce98333b67edaa72291b3802247497db01->leave($__internal_a491ae8ca37af6d06ce29862a47992ce98333b67edaa72291b3802247497db01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
