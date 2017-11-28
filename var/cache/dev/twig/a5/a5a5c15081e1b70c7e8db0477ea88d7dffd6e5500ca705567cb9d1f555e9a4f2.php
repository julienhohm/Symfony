<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_1d4832064346d30c817a8d6cf92173bad7e7e94580f6330d80f67acbe9b4579a extends Twig_Template
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
        $__internal_8fa3e7128b3f4c8f5be1b52dc025005b669fadba083169284298a6cf13b1912c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa3e7128b3f4c8f5be1b52dc025005b669fadba083169284298a6cf13b1912c->enter($__internal_8fa3e7128b3f4c8f5be1b52dc025005b669fadba083169284298a6cf13b1912c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fa3e7128b3f4c8f5be1b52dc025005b669fadba083169284298a6cf13b1912c->leave($__internal_8fa3e7128b3f4c8f5be1b52dc025005b669fadba083169284298a6cf13b1912c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_66360c2d0a13db97c57a976d90976a68723f90242d89bdd90781647f40343647 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66360c2d0a13db97c57a976d90976a68723f90242d89bdd90781647f40343647->enter($__internal_66360c2d0a13db97c57a976d90976a68723f90242d89bdd90781647f40343647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_66360c2d0a13db97c57a976d90976a68723f90242d89bdd90781647f40343647->leave($__internal_66360c2d0a13db97c57a976d90976a68723f90242d89bdd90781647f40343647_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4946bfa1411e005729381de1540f12a447b17b15d3b03aaf6c0bb38b9405268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4946bfa1411e005729381de1540f12a447b17b15d3b03aaf6c0bb38b9405268->enter($__internal_f4946bfa1411e005729381de1540f12a447b17b15d3b03aaf6c0bb38b9405268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f4946bfa1411e005729381de1540f12a447b17b15d3b03aaf6c0bb38b9405268->leave($__internal_f4946bfa1411e005729381de1540f12a447b17b15d3b03aaf6c0bb38b9405268_prof);

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
