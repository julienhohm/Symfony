<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_b094c28242c8a6aa22c240152eb1e54c1585c524dc3ec0bac29435664712c317 extends Twig_Template
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
        $__internal_1cacbd9e4fbb60cb89348791b088afb01276f4383589a7f34fe89ac9f5fa97ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cacbd9e4fbb60cb89348791b088afb01276f4383589a7f34fe89ac9f5fa97ee->enter($__internal_1cacbd9e4fbb60cb89348791b088afb01276f4383589a7f34fe89ac9f5fa97ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_527e9e1cc99ee7c512ec64d526a0496a8979ebae4ae0f11731f9f7d8267e06c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527e9e1cc99ee7c512ec64d526a0496a8979ebae4ae0f11731f9f7d8267e06c7->enter($__internal_527e9e1cc99ee7c512ec64d526a0496a8979ebae4ae0f11731f9f7d8267e06c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1cacbd9e4fbb60cb89348791b088afb01276f4383589a7f34fe89ac9f5fa97ee->leave($__internal_1cacbd9e4fbb60cb89348791b088afb01276f4383589a7f34fe89ac9f5fa97ee_prof);

        
        $__internal_527e9e1cc99ee7c512ec64d526a0496a8979ebae4ae0f11731f9f7d8267e06c7->leave($__internal_527e9e1cc99ee7c512ec64d526a0496a8979ebae4ae0f11731f9f7d8267e06c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
