<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_fb2104fa7e1229b433c113d994690d41bc7694aa76337c640acd788d9ba1beac extends Twig_Template
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
        $__internal_fbea73a0e743dfff0d3e1b7befb67c7cb3abac1efa7e6e3a9f62263177af0028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbea73a0e743dfff0d3e1b7befb67c7cb3abac1efa7e6e3a9f62263177af0028->enter($__internal_fbea73a0e743dfff0d3e1b7befb67c7cb3abac1efa7e6e3a9f62263177af0028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_4d6ac350cce41063a19c1f469c9482d775a4b3119509b3326c3acdd04e4cd713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6ac350cce41063a19c1f469c9482d775a4b3119509b3326c3acdd04e4cd713->enter($__internal_4d6ac350cce41063a19c1f469c9482d775a4b3119509b3326c3acdd04e4cd713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fbea73a0e743dfff0d3e1b7befb67c7cb3abac1efa7e6e3a9f62263177af0028->leave($__internal_fbea73a0e743dfff0d3e1b7befb67c7cb3abac1efa7e6e3a9f62263177af0028_prof);

        
        $__internal_4d6ac350cce41063a19c1f469c9482d775a4b3119509b3326c3acdd04e4cd713->leave($__internal_4d6ac350cce41063a19c1f469c9482d775a4b3119509b3326c3acdd04e4cd713_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
