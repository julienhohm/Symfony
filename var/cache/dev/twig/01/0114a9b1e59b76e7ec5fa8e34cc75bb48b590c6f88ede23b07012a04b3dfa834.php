<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_391ccd7106190a5ef61f274acac8efc064979e8b43b9c9bcb332bef3815ea85f extends Twig_Template
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
        $__internal_b61a66d010c3c3f0a137ad8d7c4f5c9624edc6a9bfd2422113f4e5ae53c9c61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61a66d010c3c3f0a137ad8d7c4f5c9624edc6a9bfd2422113f4e5ae53c9c61f->enter($__internal_b61a66d010c3c3f0a137ad8d7c4f5c9624edc6a9bfd2422113f4e5ae53c9c61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b61a66d010c3c3f0a137ad8d7c4f5c9624edc6a9bfd2422113f4e5ae53c9c61f->leave($__internal_b61a66d010c3c3f0a137ad8d7c4f5c9624edc6a9bfd2422113f4e5ae53c9c61f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
