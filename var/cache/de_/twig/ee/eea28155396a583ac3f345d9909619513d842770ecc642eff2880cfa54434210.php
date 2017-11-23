<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8713e88d6a6b6531524582e1359c4effa313b591589b9cd52a0291b7d774b6b3 extends Twig_Template
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
        $__internal_590aeee0151e451726972f1361c967628d9d5e816862dd4840d1f8a2bcffcbe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_590aeee0151e451726972f1361c967628d9d5e816862dd4840d1f8a2bcffcbe3->enter($__internal_590aeee0151e451726972f1361c967628d9d5e816862dd4840d1f8a2bcffcbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_590aeee0151e451726972f1361c967628d9d5e816862dd4840d1f8a2bcffcbe3->leave($__internal_590aeee0151e451726972f1361c967628d9d5e816862dd4840d1f8a2bcffcbe3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
