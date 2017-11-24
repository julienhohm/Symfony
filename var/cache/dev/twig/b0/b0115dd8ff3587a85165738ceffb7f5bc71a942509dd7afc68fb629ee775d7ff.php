<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_34da8767fa2c8c476073b806318ee4bb40dc965e9f965e49d7b7a318049f74cd extends Twig_Template
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
        $__internal_f65a653a86088782514d9ab81ef5613e5b081f95a9bb6cfa546d03e9846914e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65a653a86088782514d9ab81ef5613e5b081f95a9bb6cfa546d03e9846914e2->enter($__internal_f65a653a86088782514d9ab81ef5613e5b081f95a9bb6cfa546d03e9846914e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_84233cc3dde9cf88f30bd2a19f4b3e0c5e1bdc721c9cd58cd27295bad130bc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84233cc3dde9cf88f30bd2a19f4b3e0c5e1bdc721c9cd58cd27295bad130bc24->enter($__internal_84233cc3dde9cf88f30bd2a19f4b3e0c5e1bdc721c9cd58cd27295bad130bc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f65a653a86088782514d9ab81ef5613e5b081f95a9bb6cfa546d03e9846914e2->leave($__internal_f65a653a86088782514d9ab81ef5613e5b081f95a9bb6cfa546d03e9846914e2_prof);

        
        $__internal_84233cc3dde9cf88f30bd2a19f4b3e0c5e1bdc721c9cd58cd27295bad130bc24->leave($__internal_84233cc3dde9cf88f30bd2a19f4b3e0c5e1bdc721c9cd58cd27295bad130bc24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
