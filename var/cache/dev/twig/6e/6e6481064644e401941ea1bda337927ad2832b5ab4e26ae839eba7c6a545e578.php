<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_312165c3fd0d8df11716037030315b8c8406b5879e95356ac2e02ad0c07d808c extends Twig_Template
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
        $__internal_7e9b55eed25f38666117e3fac5919f4721cfba692a42f7fb433811e49a5b948d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9b55eed25f38666117e3fac5919f4721cfba692a42f7fb433811e49a5b948d->enter($__internal_7e9b55eed25f38666117e3fac5919f4721cfba692a42f7fb433811e49a5b948d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e9b55eed25f38666117e3fac5919f4721cfba692a42f7fb433811e49a5b948d->leave($__internal_7e9b55eed25f38666117e3fac5919f4721cfba692a42f7fb433811e49a5b948d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8887bf605516040873632a7b3b1397a90f3d00eafa9e088e060112db9250b1e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8887bf605516040873632a7b3b1397a90f3d00eafa9e088e060112db9250b1e0->enter($__internal_8887bf605516040873632a7b3b1397a90f3d00eafa9e088e060112db9250b1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8887bf605516040873632a7b3b1397a90f3d00eafa9e088e060112db9250b1e0->leave($__internal_8887bf605516040873632a7b3b1397a90f3d00eafa9e088e060112db9250b1e0_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e3dfc74fb68ddcaa96bbcd2efe2d92e6759e7ed573ffd5b2fc15240cdd0c8ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3dfc74fb68ddcaa96bbcd2efe2d92e6759e7ed573ffd5b2fc15240cdd0c8ef0->enter($__internal_e3dfc74fb68ddcaa96bbcd2efe2d92e6759e7ed573ffd5b2fc15240cdd0c8ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e3dfc74fb68ddcaa96bbcd2efe2d92e6759e7ed573ffd5b2fc15240cdd0c8ef0->leave($__internal_e3dfc74fb68ddcaa96bbcd2efe2d92e6759e7ed573ffd5b2fc15240cdd0c8ef0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f45064c64e635c9a52773beaccc892747516407b5d41c4b67f124c654efcd433 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45064c64e635c9a52773beaccc892747516407b5d41c4b67f124c654efcd433->enter($__internal_f45064c64e635c9a52773beaccc892747516407b5d41c4b67f124c654efcd433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? null), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? null))));
            echo "
        </div>
    ";
        }
        
        $__internal_f45064c64e635c9a52773beaccc892747516407b5d41c4b67f124c654efcd433->leave($__internal_f45064c64e635c9a52773beaccc892747516407b5d41c4b67f124c654efcd433_prof);

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
        return new Twig_Source("", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
