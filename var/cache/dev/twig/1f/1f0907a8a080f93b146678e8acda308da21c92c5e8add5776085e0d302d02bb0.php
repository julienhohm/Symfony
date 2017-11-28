<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_8bfe5048b7f01c5d3bf1176b4c23056c6bc6401fd7c5c68c48d42b11ad712132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86b7f2631367fce46f10bb071fe12536e6fa8c15c87ee93cadf4c6dbb8d55bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b7f2631367fce46f10bb071fe12536e6fa8c15c87ee93cadf4c6dbb8d55bb4->enter($__internal_86b7f2631367fce46f10bb071fe12536e6fa8c15c87ee93cadf4c6dbb8d55bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86b7f2631367fce46f10bb071fe12536e6fa8c15c87ee93cadf4c6dbb8d55bb4->leave($__internal_86b7f2631367fce46f10bb071fe12536e6fa8c15c87ee93cadf4c6dbb8d55bb4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aefc310b013e6be232a50f8ad94f7e664448cf19bae0bed66a3c100fc788165d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefc310b013e6be232a50f8ad94f7e664448cf19bae0bed66a3c100fc788165d->enter($__internal_aefc310b013e6be232a50f8ad94f7e664448cf19bae0bed66a3c100fc788165d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_aefc310b013e6be232a50f8ad94f7e664448cf19bae0bed66a3c100fc788165d->leave($__internal_aefc310b013e6be232a50f8ad94f7e664448cf19bae0bed66a3c100fc788165d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_515a6ac74d8591500c8226830d8d7caae1ba35c5aea03e14cdca8322edcff8c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_515a6ac74d8591500c8226830d8d7caae1ba35c5aea03e14cdca8322edcff8c3->enter($__internal_515a6ac74d8591500c8226830d8d7caae1ba35c5aea03e14cdca8322edcff8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? null), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? null), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? null), ($context["line"] ?? null),  -1);
        echo "
</div>
";
        
        $__internal_515a6ac74d8591500c8226830d8d7caae1ba35c5aea03e14cdca8322edcff8c3->leave($__internal_515a6ac74d8591500c8226830d8d7caae1ba35c5aea03e14cdca8322edcff8c3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  69 => 12,  63 => 11,  60 => 10,  54 => 9,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
