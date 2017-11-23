<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_44cce696d2518e91a95ed8576058e8d4c3fb0dd36d99c78a831221684df058f2 extends Twig_Template
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
        $__internal_e3ac945a71e578111e66dbd723b724cd5dca517dd9d47e02b7add08d0533f075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ac945a71e578111e66dbd723b724cd5dca517dd9d47e02b7add08d0533f075->enter($__internal_e3ac945a71e578111e66dbd723b724cd5dca517dd9d47e02b7add08d0533f075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e3ac945a71e578111e66dbd723b724cd5dca517dd9d47e02b7add08d0533f075->leave($__internal_e3ac945a71e578111e66dbd723b724cd5dca517dd9d47e02b7add08d0533f075_prof);

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
