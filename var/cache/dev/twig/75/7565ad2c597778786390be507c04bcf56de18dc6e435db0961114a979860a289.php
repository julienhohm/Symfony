<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_32dbe1040762404f84b179b6ca6de9b18ad77c95d44d4d1c820386fabcd1bd15 extends Twig_Template
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
        $__internal_b9f737e758231e0c8eef70df7faf12d4904a0230fa9345f90eeb701eefa99f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f737e758231e0c8eef70df7faf12d4904a0230fa9345f90eeb701eefa99f86->enter($__internal_b9f737e758231e0c8eef70df7faf12d4904a0230fa9345f90eeb701eefa99f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b9f737e758231e0c8eef70df7faf12d4904a0230fa9345f90eeb701eefa99f86->leave($__internal_b9f737e758231e0c8eef70df7faf12d4904a0230fa9345f90eeb701eefa99f86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
