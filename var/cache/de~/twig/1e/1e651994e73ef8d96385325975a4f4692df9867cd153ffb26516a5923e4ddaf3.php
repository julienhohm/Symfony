<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_32c1e2dd51908b999fd6d04a140dfe953f2babe834a00a161265969b76654424 extends Twig_Template
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
        $__internal_f49a32fb0cf4723d052f344f174e18acd939805e7f7e238d205e8392c0b539bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49a32fb0cf4723d052f344f174e18acd939805e7f7e238d205e8392c0b539bc->enter($__internal_f49a32fb0cf4723d052f344f174e18acd939805e7f7e238d205e8392c0b539bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_844a96b174e3e5d94419adcc495a53edb21291ce7dcb86e941a31631396d24f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844a96b174e3e5d94419adcc495a53edb21291ce7dcb86e941a31631396d24f3->enter($__internal_844a96b174e3e5d94419adcc495a53edb21291ce7dcb86e941a31631396d24f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_f49a32fb0cf4723d052f344f174e18acd939805e7f7e238d205e8392c0b539bc->leave($__internal_f49a32fb0cf4723d052f344f174e18acd939805e7f7e238d205e8392c0b539bc_prof);

        
        $__internal_844a96b174e3e5d94419adcc495a53edb21291ce7dcb86e941a31631396d24f3->leave($__internal_844a96b174e3e5d94419adcc495a53edb21291ce7dcb86e941a31631396d24f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
