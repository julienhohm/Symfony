<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_37f9a3dd8fdc8a3ffe38ee5247008f669d98904cbc3850e0ceb25ed59593380a extends Twig_Template
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
        $__internal_43b5663e709b5a1db36b0c627f109e28e92ecf941189de22a2d244fe81ed11f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43b5663e709b5a1db36b0c627f109e28e92ecf941189de22a2d244fe81ed11f0->enter($__internal_43b5663e709b5a1db36b0c627f109e28e92ecf941189de22a2d244fe81ed11f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_43b5663e709b5a1db36b0c627f109e28e92ecf941189de22a2d244fe81ed11f0->leave($__internal_43b5663e709b5a1db36b0c627f109e28e92ecf941189de22a2d244fe81ed11f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
