<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e5e331f03c08eca44dcc133a5b98da5de68bf15f53ca0cfa8193d830a1f0a8a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3de2e5ae411701f4233259af67861f8e9f781f5ee2edec1fd4dd03846febe2e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de2e5ae411701f4233259af67861f8e9f781f5ee2edec1fd4dd03846febe2e9->enter($__internal_3de2e5ae411701f4233259af67861f8e9f781f5ee2edec1fd4dd03846febe2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3de2e5ae411701f4233259af67861f8e9f781f5ee2edec1fd4dd03846febe2e9->leave($__internal_3de2e5ae411701f4233259af67861f8e9f781f5ee2edec1fd4dd03846febe2e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d09b4f7e5d1f8e98cb792dd455c566b5e3195ebb63e380174594726f171d3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d09b4f7e5d1f8e98cb792dd455c566b5e3195ebb63e380174594726f171d3bd->enter($__internal_7d09b4f7e5d1f8e98cb792dd455c566b5e3195ebb63e380174594726f171d3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d09b4f7e5d1f8e98cb792dd455c566b5e3195ebb63e380174594726f171d3bd->leave($__internal_7d09b4f7e5d1f8e98cb792dd455c566b5e3195ebb63e380174594726f171d3bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_add0f7a031878512e6e4b08cf4f7b1be69e81f8018e3bf5ec8821ee9e529df96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add0f7a031878512e6e4b08cf4f7b1be69e81f8018e3bf5ec8821ee9e529df96->enter($__internal_add0f7a031878512e6e4b08cf4f7b1be69e81f8018e3bf5ec8821ee9e529df96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_add0f7a031878512e6e4b08cf4f7b1be69e81f8018e3bf5ec8821ee9e529df96->leave($__internal_add0f7a031878512e6e4b08cf4f7b1be69e81f8018e3bf5ec8821ee9e529df96_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4f95b499a214d65b9c907531bc9d1b6992324cd1959dff42ac5393c1ffb74ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f95b499a214d65b9c907531bc9d1b6992324cd1959dff42ac5393c1ffb74ae->enter($__internal_e4f95b499a214d65b9c907531bc9d1b6992324cd1959dff42ac5393c1ffb74ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : null))));
        echo "
";
        
        $__internal_e4f95b499a214d65b9c907531bc9d1b6992324cd1959dff42ac5393c1ffb74ae->leave($__internal_e4f95b499a214d65b9c907531bc9d1b6992324cd1959dff42ac5393c1ffb74ae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
