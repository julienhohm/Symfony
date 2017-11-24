<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_79fd4dc20dac5c3d1fbecfb0258b595f3b2311e486bf28752724406086231de7 extends Twig_Template
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
        $__internal_18663b1a056438722aa0fa2fc53cf279268f7bee4076ed4a47bf7bfca1156047 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18663b1a056438722aa0fa2fc53cf279268f7bee4076ed4a47bf7bfca1156047->enter($__internal_18663b1a056438722aa0fa2fc53cf279268f7bee4076ed4a47bf7bfca1156047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e587544011b48fa15e7e95a00e9969c1ecd97ca7123863e7951d8ead38f09584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e587544011b48fa15e7e95a00e9969c1ecd97ca7123863e7951d8ead38f09584->enter($__internal_e587544011b48fa15e7e95a00e9969c1ecd97ca7123863e7951d8ead38f09584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_18663b1a056438722aa0fa2fc53cf279268f7bee4076ed4a47bf7bfca1156047->leave($__internal_18663b1a056438722aa0fa2fc53cf279268f7bee4076ed4a47bf7bfca1156047_prof);

        
        $__internal_e587544011b48fa15e7e95a00e9969c1ecd97ca7123863e7951d8ead38f09584->leave($__internal_e587544011b48fa15e7e95a00e9969c1ecd97ca7123863e7951d8ead38f09584_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
