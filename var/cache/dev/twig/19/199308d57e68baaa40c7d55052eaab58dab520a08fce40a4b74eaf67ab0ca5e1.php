<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_789163728dc51694048a0c7872a695fe7b90a680e2b2dde8fdc9effef9ce74b1 extends Twig_Template
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
        $__internal_87d92527a55e1a20cbc2e51f32fb25f83b175a940b6cff7a7907855aee5f33a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87d92527a55e1a20cbc2e51f32fb25f83b175a940b6cff7a7907855aee5f33a1->enter($__internal_87d92527a55e1a20cbc2e51f32fb25f83b175a940b6cff7a7907855aee5f33a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_87d92527a55e1a20cbc2e51f32fb25f83b175a940b6cff7a7907855aee5f33a1->leave($__internal_87d92527a55e1a20cbc2e51f32fb25f83b175a940b6cff7a7907855aee5f33a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
