<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_ea2bf1adf33610aae7127de23eabd4c76f592d519eb929223d1b452c817795d5 extends Twig_Template
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
        $__internal_a119d448d8320f9541ba5c4176b1cc52496fc794d2ae75b9feea2c0a8cec4cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a119d448d8320f9541ba5c4176b1cc52496fc794d2ae75b9feea2c0a8cec4cdb->enter($__internal_a119d448d8320f9541ba5c4176b1cc52496fc794d2ae75b9feea2c0a8cec4cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_46700c958b74afa92b47b8910103c154079ccfaa069b6e932d607e588da58c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46700c958b74afa92b47b8910103c154079ccfaa069b6e932d607e588da58c5d->enter($__internal_46700c958b74afa92b47b8910103c154079ccfaa069b6e932d607e588da58c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a119d448d8320f9541ba5c4176b1cc52496fc794d2ae75b9feea2c0a8cec4cdb->leave($__internal_a119d448d8320f9541ba5c4176b1cc52496fc794d2ae75b9feea2c0a8cec4cdb_prof);

        
        $__internal_46700c958b74afa92b47b8910103c154079ccfaa069b6e932d607e588da58c5d->leave($__internal_46700c958b74afa92b47b8910103c154079ccfaa069b6e932d607e588da58c5d_prof);

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
