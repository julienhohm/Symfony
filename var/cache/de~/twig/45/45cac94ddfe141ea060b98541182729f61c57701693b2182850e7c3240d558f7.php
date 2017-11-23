<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_80ddf62ff8cc628531d3ddca2de175b5b3d29ee6648e08290337d4d064fcc8f9 extends Twig_Template
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
        $__internal_512df5d37fb7775194b434a344fbe733c73ec9e8705df56a829b5b39b2bd94b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_512df5d37fb7775194b434a344fbe733c73ec9e8705df56a829b5b39b2bd94b3->enter($__internal_512df5d37fb7775194b434a344fbe733c73ec9e8705df56a829b5b39b2bd94b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_dc39789b476caf875970e942fa9ee4770a0e840194bca088dd8a9a49d370261e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc39789b476caf875970e942fa9ee4770a0e840194bca088dd8a9a49d370261e->enter($__internal_dc39789b476caf875970e942fa9ee4770a0e840194bca088dd8a9a49d370261e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_512df5d37fb7775194b434a344fbe733c73ec9e8705df56a829b5b39b2bd94b3->leave($__internal_512df5d37fb7775194b434a344fbe733c73ec9e8705df56a829b5b39b2bd94b3_prof);

        
        $__internal_dc39789b476caf875970e942fa9ee4770a0e840194bca088dd8a9a49d370261e->leave($__internal_dc39789b476caf875970e942fa9ee4770a0e840194bca088dd8a9a49d370261e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
