<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_8b91853625937ca0b706069f2003333e79dfb665b20d2b520cd1159247419e93 extends Twig_Template
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
        $__internal_63f260f701dd49415a02ba2020067e3cc5e3d9e10062bb9f3b92e6670dc73739 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f260f701dd49415a02ba2020067e3cc5e3d9e10062bb9f3b92e6670dc73739->enter($__internal_63f260f701dd49415a02ba2020067e3cc5e3d9e10062bb9f3b92e6670dc73739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_63f260f701dd49415a02ba2020067e3cc5e3d9e10062bb9f3b92e6670dc73739->leave($__internal_63f260f701dd49415a02ba2020067e3cc5e3d9e10062bb9f3b92e6670dc73739_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
