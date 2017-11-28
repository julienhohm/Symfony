<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6858e2360e212cd1c30c0d4964f8e8d39604b8bca0dec7f9430f40ea5e8e8cf7 extends Twig_Template
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
        $__internal_33ca7e45468786c81a589ff1b7cc2c21e4a28043ee54bdc75e41fc94650853a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ca7e45468786c81a589ff1b7cc2c21e4a28043ee54bdc75e41fc94650853a6->enter($__internal_33ca7e45468786c81a589ff1b7cc2c21e4a28043ee54bdc75e41fc94650853a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_33ca7e45468786c81a589ff1b7cc2c21e4a28043ee54bdc75e41fc94650853a6->leave($__internal_33ca7e45468786c81a589ff1b7cc2c21e4a28043ee54bdc75e41fc94650853a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
