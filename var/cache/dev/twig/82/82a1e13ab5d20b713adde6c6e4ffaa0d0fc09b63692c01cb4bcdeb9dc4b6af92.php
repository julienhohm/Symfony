<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_74727915a16a30cedb3e8e427bf809141bcef7f372a0790616e6282d63135a0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74727915a16a30cedb3e8e427bf809141bcef7f372a0790616e6282d63135a0a->enter($__internal_74727915a16a30cedb3e8e427bf809141bcef7f372a0790616e6282d63135a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_00a01f095d77d0d3e648284575125a8aaa9c0db4f462a40887bc3c3381ac033f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a01f095d77d0d3e648284575125a8aaa9c0db4f462a40887bc3c3381ac033f->enter($__internal_00a01f095d77d0d3e648284575125a8aaa9c0db4f462a40887bc3c3381ac033f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74727915a16a30cedb3e8e427bf809141bcef7f372a0790616e6282d63135a0a->leave($__internal_74727915a16a30cedb3e8e427bf809141bcef7f372a0790616e6282d63135a0a_prof);

        
        $__internal_00a01f095d77d0d3e648284575125a8aaa9c0db4f462a40887bc3c3381ac033f->leave($__internal_00a01f095d77d0d3e648284575125a8aaa9c0db4f462a40887bc3c3381ac033f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2d5369218c5dbdd2ccaf3298dbf43a0ff98177b76702cfb34a5115e4c74ecac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d5369218c5dbdd2ccaf3298dbf43a0ff98177b76702cfb34a5115e4c74ecac->enter($__internal_c2d5369218c5dbdd2ccaf3298dbf43a0ff98177b76702cfb34a5115e4c74ecac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_217bd6e124027199f9268c3ca2ae3b2ec6ae62d720b0af65e7f62be2471bb16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217bd6e124027199f9268c3ca2ae3b2ec6ae62d720b0af65e7f62be2471bb16c->enter($__internal_217bd6e124027199f9268c3ca2ae3b2ec6ae62d720b0af65e7f62be2471bb16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_217bd6e124027199f9268c3ca2ae3b2ec6ae62d720b0af65e7f62be2471bb16c->leave($__internal_217bd6e124027199f9268c3ca2ae3b2ec6ae62d720b0af65e7f62be2471bb16c_prof);

        
        $__internal_c2d5369218c5dbdd2ccaf3298dbf43a0ff98177b76702cfb34a5115e4c74ecac->leave($__internal_c2d5369218c5dbdd2ccaf3298dbf43a0ff98177b76702cfb34a5115e4c74ecac_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e41c2dd42157f45a887db3d6c737b687c0251412a89af28b5ca4a7f7d0e777fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41c2dd42157f45a887db3d6c737b687c0251412a89af28b5ca4a7f7d0e777fb->enter($__internal_e41c2dd42157f45a887db3d6c737b687c0251412a89af28b5ca4a7f7d0e777fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a573cc7af3efe1ebab8f6db51fcfa3033b4a4d50dfc121d2a5b06fc4d7d36ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a573cc7af3efe1ebab8f6db51fcfa3033b4a4d50dfc121d2a5b06fc4d7d36ff->enter($__internal_8a573cc7af3efe1ebab8f6db51fcfa3033b4a4d50dfc121d2a5b06fc4d7d36ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8a573cc7af3efe1ebab8f6db51fcfa3033b4a4d50dfc121d2a5b06fc4d7d36ff->leave($__internal_8a573cc7af3efe1ebab8f6db51fcfa3033b4a4d50dfc121d2a5b06fc4d7d36ff_prof);

        
        $__internal_e41c2dd42157f45a887db3d6c737b687c0251412a89af28b5ca4a7f7d0e777fb->leave($__internal_e41c2dd42157f45a887db3d6c737b687c0251412a89af28b5ca4a7f7d0e777fb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f84b310272a1f481302e696e8a47f1120d4a44dad15bb3df0b5b7ecdecb1747a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84b310272a1f481302e696e8a47f1120d4a44dad15bb3df0b5b7ecdecb1747a->enter($__internal_f84b310272a1f481302e696e8a47f1120d4a44dad15bb3df0b5b7ecdecb1747a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_103c5e78af7685ccc33814a5b708598cd8e55514cf716d67db6f5e70198518e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103c5e78af7685ccc33814a5b708598cd8e55514cf716d67db6f5e70198518e3->enter($__internal_103c5e78af7685ccc33814a5b708598cd8e55514cf716d67db6f5e70198518e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_103c5e78af7685ccc33814a5b708598cd8e55514cf716d67db6f5e70198518e3->leave($__internal_103c5e78af7685ccc33814a5b708598cd8e55514cf716d67db6f5e70198518e3_prof);

        
        $__internal_f84b310272a1f481302e696e8a47f1120d4a44dad15bb3df0b5b7ecdecb1747a->leave($__internal_f84b310272a1f481302e696e8a47f1120d4a44dad15bb3df0b5b7ecdecb1747a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
