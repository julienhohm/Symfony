<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c774741d0954d72c7fd4d72d9a7e031a802163f1676f79fe8b6364e19c8446fd extends Twig_Template
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
        $__internal_f4c20d2cbfc2bed61c7112873f9c5157fb2303aefb9082eef661ed3492a588ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c20d2cbfc2bed61c7112873f9c5157fb2303aefb9082eef661ed3492a588ea->enter($__internal_f4c20d2cbfc2bed61c7112873f9c5157fb2303aefb9082eef661ed3492a588ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d31c0009e1ab53a0d936a0aa531ab7353a8e48780388f69c56875b0641b22a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31c0009e1ab53a0d936a0aa531ab7353a8e48780388f69c56875b0641b22a48->enter($__internal_d31c0009e1ab53a0d936a0aa531ab7353a8e48780388f69c56875b0641b22a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_f4c20d2cbfc2bed61c7112873f9c5157fb2303aefb9082eef661ed3492a588ea->leave($__internal_f4c20d2cbfc2bed61c7112873f9c5157fb2303aefb9082eef661ed3492a588ea_prof);

        
        $__internal_d31c0009e1ab53a0d936a0aa531ab7353a8e48780388f69c56875b0641b22a48->leave($__internal_d31c0009e1ab53a0d936a0aa531ab7353a8e48780388f69c56875b0641b22a48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
