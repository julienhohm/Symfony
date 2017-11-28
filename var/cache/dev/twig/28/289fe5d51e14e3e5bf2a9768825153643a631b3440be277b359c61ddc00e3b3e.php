<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3a5e2d29263542c6c3d94c144e77daad716e3b5a4dbf58b4e6aaae93a63fbb27 extends Twig_Template
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
        $__internal_10d1b6bba45e9edb1c64c9b2c5542ff18243e1d0b61839936c639b3b8f2b5f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d1b6bba45e9edb1c64c9b2c5542ff18243e1d0b61839936c639b3b8f2b5f80->enter($__internal_10d1b6bba45e9edb1c64c9b2c5542ff18243e1d0b61839936c639b3b8f2b5f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_10d1b6bba45e9edb1c64c9b2c5542ff18243e1d0b61839936c639b3b8f2b5f80->leave($__internal_10d1b6bba45e9edb1c64c9b2c5542ff18243e1d0b61839936c639b3b8f2b5f80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
