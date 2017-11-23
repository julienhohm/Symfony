<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bfdf5f48270eec122759eb29c1a1a8652992f6e0f9e1100cc46ff0e8144e9117 extends Twig_Template
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
        $__internal_eec876ec02aed259e323edcf2115e28ffedf1e0d6f41c96cfffc32e075e68766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec876ec02aed259e323edcf2115e28ffedf1e0d6f41c96cfffc32e075e68766->enter($__internal_eec876ec02aed259e323edcf2115e28ffedf1e0d6f41c96cfffc32e075e68766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_eec876ec02aed259e323edcf2115e28ffedf1e0d6f41c96cfffc32e075e68766->leave($__internal_eec876ec02aed259e323edcf2115e28ffedf1e0d6f41c96cfffc32e075e68766_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
