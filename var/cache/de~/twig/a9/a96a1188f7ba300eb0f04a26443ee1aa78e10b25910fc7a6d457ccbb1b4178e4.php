<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7f8854cd010339daaa43e28044d34c6c45501535d47a9b6200e41bb423057965 extends Twig_Template
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
        $__internal_50d3135fdaeae86f4f9be031d29a57b57d7db539d490c2be318e8276ad6cacc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d3135fdaeae86f4f9be031d29a57b57d7db539d490c2be318e8276ad6cacc7->enter($__internal_50d3135fdaeae86f4f9be031d29a57b57d7db539d490c2be318e8276ad6cacc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a50df6f20cd68fc87f2a5c6ff66a32f1e120be6cf2662de540cb7bbb1663055f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50df6f20cd68fc87f2a5c6ff66a32f1e120be6cf2662de540cb7bbb1663055f->enter($__internal_a50df6f20cd68fc87f2a5c6ff66a32f1e120be6cf2662de540cb7bbb1663055f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_50d3135fdaeae86f4f9be031d29a57b57d7db539d490c2be318e8276ad6cacc7->leave($__internal_50d3135fdaeae86f4f9be031d29a57b57d7db539d490c2be318e8276ad6cacc7_prof);

        
        $__internal_a50df6f20cd68fc87f2a5c6ff66a32f1e120be6cf2662de540cb7bbb1663055f->leave($__internal_a50df6f20cd68fc87f2a5c6ff66a32f1e120be6cf2662de540cb7bbb1663055f_prof);

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
