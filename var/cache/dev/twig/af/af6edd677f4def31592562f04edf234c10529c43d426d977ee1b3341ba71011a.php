<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_edf58e9eebc3ee350bde014d0a827730b4c2501c79baa078d306516d85b70674 extends Twig_Template
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
        $__internal_5bc9eb13e496b5484809610015ba182d93394381b8c3269581c1c455c7ec3a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bc9eb13e496b5484809610015ba182d93394381b8c3269581c1c455c7ec3a43->enter($__internal_5bc9eb13e496b5484809610015ba182d93394381b8c3269581c1c455c7ec3a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1efdcd873c71a3f37c8ca1fee52b2afe6fa520b5fa7bcc0035f908d8925feeed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1efdcd873c71a3f37c8ca1fee52b2afe6fa520b5fa7bcc0035f908d8925feeed->enter($__internal_1efdcd873c71a3f37c8ca1fee52b2afe6fa520b5fa7bcc0035f908d8925feeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5bc9eb13e496b5484809610015ba182d93394381b8c3269581c1c455c7ec3a43->leave($__internal_5bc9eb13e496b5484809610015ba182d93394381b8c3269581c1c455c7ec3a43_prof);

        
        $__internal_1efdcd873c71a3f37c8ca1fee52b2afe6fa520b5fa7bcc0035f908d8925feeed->leave($__internal_1efdcd873c71a3f37c8ca1fee52b2afe6fa520b5fa7bcc0035f908d8925feeed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
