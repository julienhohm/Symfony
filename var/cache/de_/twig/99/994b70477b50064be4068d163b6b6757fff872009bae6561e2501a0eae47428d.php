<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6af55270bc4ec768a27fe8820c4969283ed9fa33515f3ac8bc7d9ad4050aee7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4f48068bac741bb6fa947c70e9f4bb795c173537a6c338ee836825d6df9b2a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f48068bac741bb6fa947c70e9f4bb795c173537a6c338ee836825d6df9b2a2b->enter($__internal_4f48068bac741bb6fa947c70e9f4bb795c173537a6c338ee836825d6df9b2a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f48068bac741bb6fa947c70e9f4bb795c173537a6c338ee836825d6df9b2a2b->leave($__internal_4f48068bac741bb6fa947c70e9f4bb795c173537a6c338ee836825d6df9b2a2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_915829bacc3d893b1b6a23aee7511376279aea2095a54acd8a56b9bf1a348201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915829bacc3d893b1b6a23aee7511376279aea2095a54acd8a56b9bf1a348201->enter($__internal_915829bacc3d893b1b6a23aee7511376279aea2095a54acd8a56b9bf1a348201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_915829bacc3d893b1b6a23aee7511376279aea2095a54acd8a56b9bf1a348201->leave($__internal_915829bacc3d893b1b6a23aee7511376279aea2095a54acd8a56b9bf1a348201_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f4b760eab3edcb66387568445c0dae4f5ad64e2673c3da43964071287284281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4b760eab3edcb66387568445c0dae4f5ad64e2673c3da43964071287284281->enter($__internal_8f4b760eab3edcb66387568445c0dae4f5ad64e2673c3da43964071287284281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8f4b760eab3edcb66387568445c0dae4f5ad64e2673c3da43964071287284281->leave($__internal_8f4b760eab3edcb66387568445c0dae4f5ad64e2673c3da43964071287284281_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8762d8c827ef126959c6a209a07be84b0885c45a94ff82adab9b50464c361d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8762d8c827ef126959c6a209a07be84b0885c45a94ff82adab9b50464c361d5f->enter($__internal_8762d8c827ef126959c6a209a07be84b0885c45a94ff82adab9b50464c361d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </div>
    ";
        }
        
        $__internal_8762d8c827ef126959c6a209a07be84b0885c45a94ff82adab9b50464c361d5f->leave($__internal_8762d8c827ef126959c6a209a07be84b0885c45a94ff82adab9b50464c361d5f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
