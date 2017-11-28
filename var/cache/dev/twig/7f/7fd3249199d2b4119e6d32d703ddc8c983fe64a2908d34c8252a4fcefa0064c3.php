<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_07c6685873c206aec00b88a4afba90ccc0afb7e0996cee4a3aedbf1e32522e28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_9e7fd85757eee9a18ecc739ac7875f99b35d9035190feab605ae30acd9de22a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e7fd85757eee9a18ecc739ac7875f99b35d9035190feab605ae30acd9de22a5->enter($__internal_9e7fd85757eee9a18ecc739ac7875f99b35d9035190feab605ae30acd9de22a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e7fd85757eee9a18ecc739ac7875f99b35d9035190feab605ae30acd9de22a5->leave($__internal_9e7fd85757eee9a18ecc739ac7875f99b35d9035190feab605ae30acd9de22a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb9eba03de83117361892f8cb6eecf8ccf884b672a040dde77e65cd1b76a5312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9eba03de83117361892f8cb6eecf8ccf884b672a040dde77e65cd1b76a5312->enter($__internal_eb9eba03de83117361892f8cb6eecf8ccf884b672a040dde77e65cd1b76a5312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_eb9eba03de83117361892f8cb6eecf8ccf884b672a040dde77e65cd1b76a5312->leave($__internal_eb9eba03de83117361892f8cb6eecf8ccf884b672a040dde77e65cd1b76a5312_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_58a8228b15db33ae77e45793b695d053dc55428a007981b0773a6eef1eba5e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a8228b15db33ae77e45793b695d053dc55428a007981b0773a6eef1eba5e46->enter($__internal_58a8228b15db33ae77e45793b695d053dc55428a007981b0773a6eef1eba5e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? null), "html", null, true);
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
        
        $__internal_58a8228b15db33ae77e45793b695d053dc55428a007981b0773a6eef1eba5e46->leave($__internal_58a8228b15db33ae77e45793b695d053dc55428a007981b0773a6eef1eba5e46_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
        return new Twig_Source("", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
