<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4c71843004658eea480d1426f79a80653b7afafba1c2049cb195499103285b50 extends Twig_Template
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
        $__internal_15ef0ee52ec70dde55900cbe631b608f107cc1c174e7e1f405bf4c60b954d033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ef0ee52ec70dde55900cbe631b608f107cc1c174e7e1f405bf4c60b954d033->enter($__internal_15ef0ee52ec70dde55900cbe631b608f107cc1c174e7e1f405bf4c60b954d033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_172691b618cf771b96c3853240e6e64bb20e577ed0fe46eea617fbfe244cc1d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172691b618cf771b96c3853240e6e64bb20e577ed0fe46eea617fbfe244cc1d3->enter($__internal_172691b618cf771b96c3853240e6e64bb20e577ed0fe46eea617fbfe244cc1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_15ef0ee52ec70dde55900cbe631b608f107cc1c174e7e1f405bf4c60b954d033->leave($__internal_15ef0ee52ec70dde55900cbe631b608f107cc1c174e7e1f405bf4c60b954d033_prof);

        
        $__internal_172691b618cf771b96c3853240e6e64bb20e577ed0fe46eea617fbfe244cc1d3->leave($__internal_172691b618cf771b96c3853240e6e64bb20e577ed0fe46eea617fbfe244cc1d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
