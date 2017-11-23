<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f9fb4ba5cf8647b4985631d770b4d7b78bcebfd0d668622a3902f1e5263298be extends Twig_Template
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
        $__internal_15efe30d49033271664800ce834f1b35afadd0a09b61d4a77e54dbf332935522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15efe30d49033271664800ce834f1b35afadd0a09b61d4a77e54dbf332935522->enter($__internal_15efe30d49033271664800ce834f1b35afadd0a09b61d4a77e54dbf332935522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_73efef9eb431271add47e145a59264f36f635c5c55b922055ca7f9f492ec4e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73efef9eb431271add47e145a59264f36f635c5c55b922055ca7f9f492ec4e87->enter($__internal_73efef9eb431271add47e145a59264f36f635c5c55b922055ca7f9f492ec4e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_15efe30d49033271664800ce834f1b35afadd0a09b61d4a77e54dbf332935522->leave($__internal_15efe30d49033271664800ce834f1b35afadd0a09b61d4a77e54dbf332935522_prof);

        
        $__internal_73efef9eb431271add47e145a59264f36f635c5c55b922055ca7f9f492ec4e87->leave($__internal_73efef9eb431271add47e145a59264f36f635c5c55b922055ca7f9f492ec4e87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
