<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_9f7234df0f6d1e16e4c452ac140962af92cbe6287511d877313f557871f839e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92911551810d38965df162ae4925364ec32b49191e6088c86ebf1679e60fddcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92911551810d38965df162ae4925364ec32b49191e6088c86ebf1679e60fddcb->enter($__internal_92911551810d38965df162ae4925364ec32b49191e6088c86ebf1679e60fddcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92911551810d38965df162ae4925364ec32b49191e6088c86ebf1679e60fddcb->leave($__internal_92911551810d38965df162ae4925364ec32b49191e6088c86ebf1679e60fddcb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f6466cd23576ca9cd7f5a21ff8e4455b45fe9d58e5625abc92aa241990ca939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6466cd23576ca9cd7f5a21ff8e4455b45fe9d58e5625abc92aa241990ca939->enter($__internal_7f6466cd23576ca9cd7f5a21ff8e4455b45fe9d58e5625abc92aa241990ca939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7f6466cd23576ca9cd7f5a21ff8e4455b45fe9d58e5625abc92aa241990ca939->leave($__internal_7f6466cd23576ca9cd7f5a21ff8e4455b45fe9d58e5625abc92aa241990ca939_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_69fbed8c37a72856a4e90d3de16b1a8e8fc163ebd61cdb48ed8b0d56ea85d01d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69fbed8c37a72856a4e90d3de16b1a8e8fc163ebd61cdb48ed8b0d56ea85d01d->enter($__internal_69fbed8c37a72856a4e90d3de16b1a8e8fc163ebd61cdb48ed8b0d56ea85d01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : null), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_69fbed8c37a72856a4e90d3de16b1a8e8fc163ebd61cdb48ed8b0d56ea85d01d->leave($__internal_69fbed8c37a72856a4e90d3de16b1a8e8fc163ebd61cdb48ed8b0d56ea85d01d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
