<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8472a2c61093b31931e5effd2c08f217660f70ca7b1d73a848589cde042d1731 extends Twig_Template
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
        $__internal_0b237b881a890d5b610188937436216d2e1432582fdc32beb23b9f6bf9398fdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b237b881a890d5b610188937436216d2e1432582fdc32beb23b9f6bf9398fdd->enter($__internal_0b237b881a890d5b610188937436216d2e1432582fdc32beb23b9f6bf9398fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_111d9119504778310cbc58b60bb39685114b19cc65fa6e5443ff3c1e2d327248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111d9119504778310cbc58b60bb39685114b19cc65fa6e5443ff3c1e2d327248->enter($__internal_111d9119504778310cbc58b60bb39685114b19cc65fa6e5443ff3c1e2d327248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_0b237b881a890d5b610188937436216d2e1432582fdc32beb23b9f6bf9398fdd->leave($__internal_0b237b881a890d5b610188937436216d2e1432582fdc32beb23b9f6bf9398fdd_prof);

        
        $__internal_111d9119504778310cbc58b60bb39685114b19cc65fa6e5443ff3c1e2d327248->leave($__internal_111d9119504778310cbc58b60bb39685114b19cc65fa6e5443ff3c1e2d327248_prof);

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
