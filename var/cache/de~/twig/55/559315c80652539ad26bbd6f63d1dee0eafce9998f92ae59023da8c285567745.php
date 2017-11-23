<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ec4593bfa186f1b70277da279fdda44bdd8cb917c21e7dd4151f9c252561a1a2 extends Twig_Template
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
        $__internal_0ec4288676670cfc57e04748cc6d22cd3ff5af12bd90e4ad5997a5f362cbcd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec4288676670cfc57e04748cc6d22cd3ff5af12bd90e4ad5997a5f362cbcd2e->enter($__internal_0ec4288676670cfc57e04748cc6d22cd3ff5af12bd90e4ad5997a5f362cbcd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_4050e7041f10683ceac6ac95fa54d90ff676bf58a442a47d87eb581964d8a408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4050e7041f10683ceac6ac95fa54d90ff676bf58a442a47d87eb581964d8a408->enter($__internal_4050e7041f10683ceac6ac95fa54d90ff676bf58a442a47d87eb581964d8a408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_0ec4288676670cfc57e04748cc6d22cd3ff5af12bd90e4ad5997a5f362cbcd2e->leave($__internal_0ec4288676670cfc57e04748cc6d22cd3ff5af12bd90e4ad5997a5f362cbcd2e_prof);

        
        $__internal_4050e7041f10683ceac6ac95fa54d90ff676bf58a442a47d87eb581964d8a408->leave($__internal_4050e7041f10683ceac6ac95fa54d90ff676bf58a442a47d87eb581964d8a408_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
