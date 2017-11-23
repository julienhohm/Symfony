<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_1b7389255059d592ecc7b779fbf2067194387f6cc4c74a6d866122918305e594 extends Twig_Template
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
        $__internal_5ce826ec7f070e73b2f7d0001fc88baa8eb6b08fe84c97a6f5c5d725b56af317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce826ec7f070e73b2f7d0001fc88baa8eb6b08fe84c97a6f5c5d725b56af317->enter($__internal_5ce826ec7f070e73b2f7d0001fc88baa8eb6b08fe84c97a6f5c5d725b56af317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5ce826ec7f070e73b2f7d0001fc88baa8eb6b08fe84c97a6f5c5d725b56af317->leave($__internal_5ce826ec7f070e73b2f7d0001fc88baa8eb6b08fe84c97a6f5c5d725b56af317_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
