<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_2a45c4e50a1cf1c795e6a8603aeb7882b02c992e84f04313c27bdbc14b89ce1e extends Twig_Template
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
        $__internal_27c04a2e35f18094d9c7d5ff5cd6970bcacbfd6fbe634efab9664e3c68c9f1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c04a2e35f18094d9c7d5ff5cd6970bcacbfd6fbe634efab9664e3c68c9f1c3->enter($__internal_27c04a2e35f18094d9c7d5ff5cd6970bcacbfd6fbe634efab9664e3c68c9f1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_27c04a2e35f18094d9c7d5ff5cd6970bcacbfd6fbe634efab9664e3c68c9f1c3->leave($__internal_27c04a2e35f18094d9c7d5ff5cd6970bcacbfd6fbe634efab9664e3c68c9f1c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
