<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_bace693dc90fa8e6dcd3a778ec655c5da5c04107bfb2aaa58f81314d02b704a0 extends Twig_Template
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
        $__internal_d6f1209223962db1fe2d0c7d7fcabbda90c4ad3575723b6dc72f6fe0c64416e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f1209223962db1fe2d0c7d7fcabbda90c4ad3575723b6dc72f6fe0c64416e0->enter($__internal_d6f1209223962db1fe2d0c7d7fcabbda90c4ad3575723b6dc72f6fe0c64416e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e1ce2c299e580dd8ee46f5076f6aa01d6398745ffe6af4f16383ba035eaff58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ce2c299e580dd8ee46f5076f6aa01d6398745ffe6af4f16383ba035eaff58a->enter($__internal_e1ce2c299e580dd8ee46f5076f6aa01d6398745ffe6af4f16383ba035eaff58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d6f1209223962db1fe2d0c7d7fcabbda90c4ad3575723b6dc72f6fe0c64416e0->leave($__internal_d6f1209223962db1fe2d0c7d7fcabbda90c4ad3575723b6dc72f6fe0c64416e0_prof);

        
        $__internal_e1ce2c299e580dd8ee46f5076f6aa01d6398745ffe6af4f16383ba035eaff58a->leave($__internal_e1ce2c299e580dd8ee46f5076f6aa01d6398745ffe6af4f16383ba035eaff58a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
