<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5822d3460f5b5c665527d0073ce22f4bdcfc309a4bc147201be78260895e60e6 extends Twig_Template
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
        $__internal_8c32ce75ff7526e651b8a219cc3b9dfe2e6d388ff6a92084be921c7e5b65c0e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c32ce75ff7526e651b8a219cc3b9dfe2e6d388ff6a92084be921c7e5b65c0e9->enter($__internal_8c32ce75ff7526e651b8a219cc3b9dfe2e6d388ff6a92084be921c7e5b65c0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c32ce75ff7526e651b8a219cc3b9dfe2e6d388ff6a92084be921c7e5b65c0e9->leave($__internal_8c32ce75ff7526e651b8a219cc3b9dfe2e6d388ff6a92084be921c7e5b65c0e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3a9e176ef43e1dcfe5fa383c25ef5b5668ec500aadbd83ffd8490068c8674ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9e176ef43e1dcfe5fa383c25ef5b5668ec500aadbd83ffd8490068c8674ea0->enter($__internal_3a9e176ef43e1dcfe5fa383c25ef5b5668ec500aadbd83ffd8490068c8674ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3a9e176ef43e1dcfe5fa383c25ef5b5668ec500aadbd83ffd8490068c8674ea0->leave($__internal_3a9e176ef43e1dcfe5fa383c25ef5b5668ec500aadbd83ffd8490068c8674ea0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_794cc2588d0a0308723d47d27001de2985a5bcdb00cc03af302bdb26ed61ef7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794cc2588d0a0308723d47d27001de2985a5bcdb00cc03af302bdb26ed61ef7d->enter($__internal_794cc2588d0a0308723d47d27001de2985a5bcdb00cc03af302bdb26ed61ef7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_794cc2588d0a0308723d47d27001de2985a5bcdb00cc03af302bdb26ed61ef7d->leave($__internal_794cc2588d0a0308723d47d27001de2985a5bcdb00cc03af302bdb26ed61ef7d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d625139e682274caa40f479140ddf3bf2234821ba7b7b4ef78a3e88aecf7c42f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d625139e682274caa40f479140ddf3bf2234821ba7b7b4ef78a3e88aecf7c42f->enter($__internal_d625139e682274caa40f479140ddf3bf2234821ba7b7b4ef78a3e88aecf7c42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? null))));
        echo "
";
        
        $__internal_d625139e682274caa40f479140ddf3bf2234821ba7b7b4ef78a3e88aecf7c42f->leave($__internal_d625139e682274caa40f479140ddf3bf2234821ba7b7b4ef78a3e88aecf7c42f_prof);

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
