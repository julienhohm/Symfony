<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_79f4f975998be03add3fce45c7240a150ebaa70fa5c800b3164b5c427dab3f43 extends Twig_Template
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
        $__internal_3770badaee28d727c56206e7b2c249b9cf7f5880fea688d40694853ca2a27580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3770badaee28d727c56206e7b2c249b9cf7f5880fea688d40694853ca2a27580->enter($__internal_3770badaee28d727c56206e7b2c249b9cf7f5880fea688d40694853ca2a27580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c8ded5418dc706150b2867beaa49a4d83d958fb62e31c2d84d5cba7c1ef36394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ded5418dc706150b2867beaa49a4d83d958fb62e31c2d84d5cba7c1ef36394->enter($__internal_c8ded5418dc706150b2867beaa49a4d83d958fb62e31c2d84d5cba7c1ef36394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_3770badaee28d727c56206e7b2c249b9cf7f5880fea688d40694853ca2a27580->leave($__internal_3770badaee28d727c56206e7b2c249b9cf7f5880fea688d40694853ca2a27580_prof);

        
        $__internal_c8ded5418dc706150b2867beaa49a4d83d958fb62e31c2d84d5cba7c1ef36394->leave($__internal_c8ded5418dc706150b2867beaa49a4d83d958fb62e31c2d84d5cba7c1ef36394_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
