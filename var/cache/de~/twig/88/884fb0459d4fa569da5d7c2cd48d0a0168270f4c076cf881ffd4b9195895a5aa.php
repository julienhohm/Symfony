<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c02706646be8830cee863351d5254b7b2c6abdc404e878e9f3360bec0b7bc527 extends Twig_Template
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
        $__internal_aa9ea593e05e5090a91da76957d96a6997c27e87a976aa74933691e114df1b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9ea593e05e5090a91da76957d96a6997c27e87a976aa74933691e114df1b91->enter($__internal_aa9ea593e05e5090a91da76957d96a6997c27e87a976aa74933691e114df1b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_15d8b764f59280c30fc8b63d7759d7c21d7606b53cc0705649394afc4bca2357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d8b764f59280c30fc8b63d7759d7c21d7606b53cc0705649394afc4bca2357->enter($__internal_15d8b764f59280c30fc8b63d7759d7c21d7606b53cc0705649394afc4bca2357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_aa9ea593e05e5090a91da76957d96a6997c27e87a976aa74933691e114df1b91->leave($__internal_aa9ea593e05e5090a91da76957d96a6997c27e87a976aa74933691e114df1b91_prof);

        
        $__internal_15d8b764f59280c30fc8b63d7759d7c21d7606b53cc0705649394afc4bca2357->leave($__internal_15d8b764f59280c30fc8b63d7759d7c21d7606b53cc0705649394afc4bca2357_prof);

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
