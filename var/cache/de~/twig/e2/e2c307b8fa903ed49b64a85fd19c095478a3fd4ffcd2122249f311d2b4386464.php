<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4bb7a418deb75e4d57cbdc911417b03a3a155027b92ffac152ba20e558ae2b8f extends Twig_Template
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
        $__internal_47212f753029d2a59137cfe90623e677219c5239cc74eb28bd9c9bafe138c572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47212f753029d2a59137cfe90623e677219c5239cc74eb28bd9c9bafe138c572->enter($__internal_47212f753029d2a59137cfe90623e677219c5239cc74eb28bd9c9bafe138c572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_ef8d417ac4a14ddcbf1049b2b7c4e1ebe5bfe43aee5bc14b4ed1be473b21b349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8d417ac4a14ddcbf1049b2b7c4e1ebe5bfe43aee5bc14b4ed1be473b21b349->enter($__internal_ef8d417ac4a14ddcbf1049b2b7c4e1ebe5bfe43aee5bc14b4ed1be473b21b349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_47212f753029d2a59137cfe90623e677219c5239cc74eb28bd9c9bafe138c572->leave($__internal_47212f753029d2a59137cfe90623e677219c5239cc74eb28bd9c9bafe138c572_prof);

        
        $__internal_ef8d417ac4a14ddcbf1049b2b7c4e1ebe5bfe43aee5bc14b4ed1be473b21b349->leave($__internal_ef8d417ac4a14ddcbf1049b2b7c4e1ebe5bfe43aee5bc14b4ed1be473b21b349_prof);

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
