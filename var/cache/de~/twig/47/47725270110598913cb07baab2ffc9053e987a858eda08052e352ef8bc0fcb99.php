<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9cf46f58af914c3d12a5c4277e0a560be63bd0b5507b4f462a7c0088cd5b387b extends Twig_Template
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
        $__internal_35e5a9c63e56531b877a40036b1c9f3e132210ab1cb5338c6b28dcca747ae9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e5a9c63e56531b877a40036b1c9f3e132210ab1cb5338c6b28dcca747ae9c0->enter($__internal_35e5a9c63e56531b877a40036b1c9f3e132210ab1cb5338c6b28dcca747ae9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b3771dab32e6a7100cb5b7ceada9d3bc414e903dfae4822f09d3dfb2f0a1ec2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3771dab32e6a7100cb5b7ceada9d3bc414e903dfae4822f09d3dfb2f0a1ec2c->enter($__internal_b3771dab32e6a7100cb5b7ceada9d3bc414e903dfae4822f09d3dfb2f0a1ec2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_35e5a9c63e56531b877a40036b1c9f3e132210ab1cb5338c6b28dcca747ae9c0->leave($__internal_35e5a9c63e56531b877a40036b1c9f3e132210ab1cb5338c6b28dcca747ae9c0_prof);

        
        $__internal_b3771dab32e6a7100cb5b7ceada9d3bc414e903dfae4822f09d3dfb2f0a1ec2c->leave($__internal_b3771dab32e6a7100cb5b7ceada9d3bc414e903dfae4822f09d3dfb2f0a1ec2c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
