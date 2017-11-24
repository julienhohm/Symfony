<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_480ba7d04fc94ef386e136e55a55f06aebe94fc5cb26400d9f83c8a7ebd9a03f extends Twig_Template
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
        $__internal_c7b71c7fc1d01d281fff25f806e66144e9f2ba7a2584b065e1dc1b172e844724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b71c7fc1d01d281fff25f806e66144e9f2ba7a2584b065e1dc1b172e844724->enter($__internal_c7b71c7fc1d01d281fff25f806e66144e9f2ba7a2584b065e1dc1b172e844724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_e0809d17cfaebf5a091f364b24409976817b90e287d20f92154ec86832b57859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0809d17cfaebf5a091f364b24409976817b90e287d20f92154ec86832b57859->enter($__internal_e0809d17cfaebf5a091f364b24409976817b90e287d20f92154ec86832b57859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c7b71c7fc1d01d281fff25f806e66144e9f2ba7a2584b065e1dc1b172e844724->leave($__internal_c7b71c7fc1d01d281fff25f806e66144e9f2ba7a2584b065e1dc1b172e844724_prof);

        
        $__internal_e0809d17cfaebf5a091f364b24409976817b90e287d20f92154ec86832b57859->leave($__internal_e0809d17cfaebf5a091f364b24409976817b90e287d20f92154ec86832b57859_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
