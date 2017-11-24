<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_914874d3da876f894a48e992d9bf7c9e4751bc264ff32959e2659779e5ffc6da extends Twig_Template
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
        $__internal_e8b85e2f575b211da4c2faf1e592b4bdb1963cfba29c60cc742ac5729da4182f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b85e2f575b211da4c2faf1e592b4bdb1963cfba29c60cc742ac5729da4182f->enter($__internal_e8b85e2f575b211da4c2faf1e592b4bdb1963cfba29c60cc742ac5729da4182f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ca1ef273c34848dd0939434fe6cfea893a2c7fa4dc8a37c0370412a5ef4da4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1ef273c34848dd0939434fe6cfea893a2c7fa4dc8a37c0370412a5ef4da4c2->enter($__internal_ca1ef273c34848dd0939434fe6cfea893a2c7fa4dc8a37c0370412a5ef4da4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e8b85e2f575b211da4c2faf1e592b4bdb1963cfba29c60cc742ac5729da4182f->leave($__internal_e8b85e2f575b211da4c2faf1e592b4bdb1963cfba29c60cc742ac5729da4182f_prof);

        
        $__internal_ca1ef273c34848dd0939434fe6cfea893a2c7fa4dc8a37c0370412a5ef4da4c2->leave($__internal_ca1ef273c34848dd0939434fe6cfea893a2c7fa4dc8a37c0370412a5ef4da4c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
