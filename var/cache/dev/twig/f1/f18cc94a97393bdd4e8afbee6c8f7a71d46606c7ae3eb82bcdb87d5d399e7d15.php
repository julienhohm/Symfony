<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_26fee7e44f32462a127921ff6a772f38da5144264870a6bb7f22b064eda4ea02 extends Twig_Template
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
        $__internal_6889a4f0d35fdb1f24f1900860f6f2eb28f522fc8fba1b7630af9a5e5b39589e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6889a4f0d35fdb1f24f1900860f6f2eb28f522fc8fba1b7630af9a5e5b39589e->enter($__internal_6889a4f0d35fdb1f24f1900860f6f2eb28f522fc8fba1b7630af9a5e5b39589e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_582d0a8a4654bd5dd0764fb8746befbed29f923c7b9ee3e537c1f261b3fd39ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582d0a8a4654bd5dd0764fb8746befbed29f923c7b9ee3e537c1f261b3fd39ef->enter($__internal_582d0a8a4654bd5dd0764fb8746befbed29f923c7b9ee3e537c1f261b3fd39ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6889a4f0d35fdb1f24f1900860f6f2eb28f522fc8fba1b7630af9a5e5b39589e->leave($__internal_6889a4f0d35fdb1f24f1900860f6f2eb28f522fc8fba1b7630af9a5e5b39589e_prof);

        
        $__internal_582d0a8a4654bd5dd0764fb8746befbed29f923c7b9ee3e537c1f261b3fd39ef->leave($__internal_582d0a8a4654bd5dd0764fb8746befbed29f923c7b9ee3e537c1f261b3fd39ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
