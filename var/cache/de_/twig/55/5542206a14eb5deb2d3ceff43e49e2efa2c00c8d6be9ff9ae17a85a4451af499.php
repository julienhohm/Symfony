<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6237d1381274846a424ede5c36528f40ccd83ccc91c94c49ef4ad5fcb1bc5a4b extends Twig_Template
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
        $__internal_7b0a5cd94a881a275731cec4afb58d709c211a2e5d0c15f2836bc5ceb3b428a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0a5cd94a881a275731cec4afb58d709c211a2e5d0c15f2836bc5ceb3b428a9->enter($__internal_7b0a5cd94a881a275731cec4afb58d709c211a2e5d0c15f2836bc5ceb3b428a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7b0a5cd94a881a275731cec4afb58d709c211a2e5d0c15f2836bc5ceb3b428a9->leave($__internal_7b0a5cd94a881a275731cec4afb58d709c211a2e5d0c15f2836bc5ceb3b428a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
