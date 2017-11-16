<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c70c05b27d37c0edea3d3826acbd9420e04844a6a0d01d5bf50a4dfaff34b6f9 extends Twig_Template
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
        $__internal_9c59f9a4cc4c7a55eaffb7df5f489b7ea13043c68b808878694db6a199db9b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c59f9a4cc4c7a55eaffb7df5f489b7ea13043c68b808878694db6a199db9b9e->enter($__internal_9c59f9a4cc4c7a55eaffb7df5f489b7ea13043c68b808878694db6a199db9b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e3d06a13f0c63b979cc46edf678de448bd35fb0245227783f4ef2809f3d6484a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d06a13f0c63b979cc46edf678de448bd35fb0245227783f4ef2809f3d6484a->enter($__internal_e3d06a13f0c63b979cc46edf678de448bd35fb0245227783f4ef2809f3d6484a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c59f9a4cc4c7a55eaffb7df5f489b7ea13043c68b808878694db6a199db9b9e->leave($__internal_9c59f9a4cc4c7a55eaffb7df5f489b7ea13043c68b808878694db6a199db9b9e_prof);

        
        $__internal_e3d06a13f0c63b979cc46edf678de448bd35fb0245227783f4ef2809f3d6484a->leave($__internal_e3d06a13f0c63b979cc46edf678de448bd35fb0245227783f4ef2809f3d6484a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0b425f6b8f9cd08cf70394e320e7f48aadfbe053ec05e841d40cf096ea4603d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b425f6b8f9cd08cf70394e320e7f48aadfbe053ec05e841d40cf096ea4603d8->enter($__internal_0b425f6b8f9cd08cf70394e320e7f48aadfbe053ec05e841d40cf096ea4603d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3d034cf78c635f32927f0d026294976d511c86f5f1a321c7b52a3b0fe6d30ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d034cf78c635f32927f0d026294976d511c86f5f1a321c7b52a3b0fe6d30ef8->enter($__internal_3d034cf78c635f32927f0d026294976d511c86f5f1a321c7b52a3b0fe6d30ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3d034cf78c635f32927f0d026294976d511c86f5f1a321c7b52a3b0fe6d30ef8->leave($__internal_3d034cf78c635f32927f0d026294976d511c86f5f1a321c7b52a3b0fe6d30ef8_prof);

        
        $__internal_0b425f6b8f9cd08cf70394e320e7f48aadfbe053ec05e841d40cf096ea4603d8->leave($__internal_0b425f6b8f9cd08cf70394e320e7f48aadfbe053ec05e841d40cf096ea4603d8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb728c20bd19a9a4711d90e8293f6c641d6d6b1cb8bb946bae347b9165bfce0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb728c20bd19a9a4711d90e8293f6c641d6d6b1cb8bb946bae347b9165bfce0a->enter($__internal_fb728c20bd19a9a4711d90e8293f6c641d6d6b1cb8bb946bae347b9165bfce0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f8076ee23646bbc68592fb10e05b30da8e8730359be1ab47c7a1114154d15ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8076ee23646bbc68592fb10e05b30da8e8730359be1ab47c7a1114154d15ea5->enter($__internal_f8076ee23646bbc68592fb10e05b30da8e8730359be1ab47c7a1114154d15ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f8076ee23646bbc68592fb10e05b30da8e8730359be1ab47c7a1114154d15ea5->leave($__internal_f8076ee23646bbc68592fb10e05b30da8e8730359be1ab47c7a1114154d15ea5_prof);

        
        $__internal_fb728c20bd19a9a4711d90e8293f6c641d6d6b1cb8bb946bae347b9165bfce0a->leave($__internal_fb728c20bd19a9a4711d90e8293f6c641d6d6b1cb8bb946bae347b9165bfce0a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e7c971b3f3dd3b219cc06d7d8a95d370d261b5ee20db349e3f3d469f34785e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c971b3f3dd3b219cc06d7d8a95d370d261b5ee20db349e3f3d469f34785e42->enter($__internal_e7c971b3f3dd3b219cc06d7d8a95d370d261b5ee20db349e3f3d469f34785e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eef6d3db44ebdb424108db1ec306bd1dc37c54191f658ead3bed416094aa99e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef6d3db44ebdb424108db1ec306bd1dc37c54191f658ead3bed416094aa99e1->enter($__internal_eef6d3db44ebdb424108db1ec306bd1dc37c54191f658ead3bed416094aa99e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_eef6d3db44ebdb424108db1ec306bd1dc37c54191f658ead3bed416094aa99e1->leave($__internal_eef6d3db44ebdb424108db1ec306bd1dc37c54191f658ead3bed416094aa99e1_prof);

        
        $__internal_e7c971b3f3dd3b219cc06d7d8a95d370d261b5ee20db349e3f3d469f34785e42->leave($__internal_e7c971b3f3dd3b219cc06d7d8a95d370d261b5ee20db349e3f3d469f34785e42_prof);

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
