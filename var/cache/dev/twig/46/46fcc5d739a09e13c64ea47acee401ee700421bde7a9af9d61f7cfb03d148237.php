<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_02e99a03a2ef687a1beb8cd3666febd37eb1a3152f5d92d75f6391122bca1244 extends Twig_Template
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
        $__internal_39cfec235b0149bb99f3560c23ec257c8c3a9482cd8a09cfedb19607b76aadd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39cfec235b0149bb99f3560c23ec257c8c3a9482cd8a09cfedb19607b76aadd5->enter($__internal_39cfec235b0149bb99f3560c23ec257c8c3a9482cd8a09cfedb19607b76aadd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_f1001f6556029979c0386766f36d73314b6197f89100b1a49927b7cee24f8431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1001f6556029979c0386766f36d73314b6197f89100b1a49927b7cee24f8431->enter($__internal_f1001f6556029979c0386766f36d73314b6197f89100b1a49927b7cee24f8431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_39cfec235b0149bb99f3560c23ec257c8c3a9482cd8a09cfedb19607b76aadd5->leave($__internal_39cfec235b0149bb99f3560c23ec257c8c3a9482cd8a09cfedb19607b76aadd5_prof);

        
        $__internal_f1001f6556029979c0386766f36d73314b6197f89100b1a49927b7cee24f8431->leave($__internal_f1001f6556029979c0386766f36d73314b6197f89100b1a49927b7cee24f8431_prof);

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
