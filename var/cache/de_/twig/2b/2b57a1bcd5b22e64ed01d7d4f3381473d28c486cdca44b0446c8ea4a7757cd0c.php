<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3c07b64ad3510b3d1331b9b1e3b9c7c23e028643ece1c2625664eac8244244b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_b86c53fa7b90028c8145ac7f9d025460ebefd63b7a9787ff8496ff30d8df8c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86c53fa7b90028c8145ac7f9d025460ebefd63b7a9787ff8496ff30d8df8c14->enter($__internal_b86c53fa7b90028c8145ac7f9d025460ebefd63b7a9787ff8496ff30d8df8c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b86c53fa7b90028c8145ac7f9d025460ebefd63b7a9787ff8496ff30d8df8c14->leave($__internal_b86c53fa7b90028c8145ac7f9d025460ebefd63b7a9787ff8496ff30d8df8c14_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2174f6b5cfa194f538e0d8f080125e3a691b83231a9911a9e026223b25ac46d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2174f6b5cfa194f538e0d8f080125e3a691b83231a9911a9e026223b25ac46d8->enter($__internal_2174f6b5cfa194f538e0d8f080125e3a691b83231a9911a9e026223b25ac46d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2174f6b5cfa194f538e0d8f080125e3a691b83231a9911a9e026223b25ac46d8->leave($__internal_2174f6b5cfa194f538e0d8f080125e3a691b83231a9911a9e026223b25ac46d8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7543b7af1e153d608213a1e74fc6aacbd8204945dad3f1a1c414270fed9d2032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7543b7af1e153d608213a1e74fc6aacbd8204945dad3f1a1c414270fed9d2032->enter($__internal_7543b7af1e153d608213a1e74fc6aacbd8204945dad3f1a1c414270fed9d2032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7543b7af1e153d608213a1e74fc6aacbd8204945dad3f1a1c414270fed9d2032->leave($__internal_7543b7af1e153d608213a1e74fc6aacbd8204945dad3f1a1c414270fed9d2032_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9f6034b212afc74b22bbc5e0c0c81bffa36bfeaed65a3218887d960ffdac894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f6034b212afc74b22bbc5e0c0c81bffa36bfeaed65a3218887d960ffdac894->enter($__internal_c9f6034b212afc74b22bbc5e0c0c81bffa36bfeaed65a3218887d960ffdac894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : null))));
        echo "
";
        
        $__internal_c9f6034b212afc74b22bbc5e0c0c81bffa36bfeaed65a3218887d960ffdac894->leave($__internal_c9f6034b212afc74b22bbc5e0c0c81bffa36bfeaed65a3218887d960ffdac894_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
        return new Twig_Source("", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
