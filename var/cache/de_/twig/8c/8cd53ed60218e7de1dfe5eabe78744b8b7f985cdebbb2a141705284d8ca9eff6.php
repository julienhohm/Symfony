<?php

/* ::base.html.twig */
class __TwigTemplate_d56bf0e281362d45e4a618552f70a6e68dea2c73b873e24e3f635c89ce33ef3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cae82e684947d54938d350672df45fadba73bc36cac920f7bee7be80b5f4aefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cae82e684947d54938d350672df45fadba73bc36cac920f7bee7be80b5f4aefc->enter($__internal_cae82e684947d54938d350672df45fadba73bc36cac920f7bee7be80b5f4aefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cae82e684947d54938d350672df45fadba73bc36cac920f7bee7be80b5f4aefc->leave($__internal_cae82e684947d54938d350672df45fadba73bc36cac920f7bee7be80b5f4aefc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_03fd6b54e79a058f3bd5719f1bf6b8c95c6d333f528443fb8fe365788ef454a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fd6b54e79a058f3bd5719f1bf6b8c95c6d333f528443fb8fe365788ef454a8->enter($__internal_03fd6b54e79a058f3bd5719f1bf6b8c95c6d333f528443fb8fe365788ef454a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03fd6b54e79a058f3bd5719f1bf6b8c95c6d333f528443fb8fe365788ef454a8->leave($__internal_03fd6b54e79a058f3bd5719f1bf6b8c95c6d333f528443fb8fe365788ef454a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2b5feb2fe6ab571a4f7653990a72ed74bea1b6259ac295eafba1253503613aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5feb2fe6ab571a4f7653990a72ed74bea1b6259ac295eafba1253503613aa4->enter($__internal_2b5feb2fe6ab571a4f7653990a72ed74bea1b6259ac295eafba1253503613aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2b5feb2fe6ab571a4f7653990a72ed74bea1b6259ac295eafba1253503613aa4->leave($__internal_2b5feb2fe6ab571a4f7653990a72ed74bea1b6259ac295eafba1253503613aa4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_36587ad18ce9f1cb8b50a13206b6da9a4429071e7528f525e6a6e9b77fcedd87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36587ad18ce9f1cb8b50a13206b6da9a4429071e7528f525e6a6e9b77fcedd87->enter($__internal_36587ad18ce9f1cb8b50a13206b6da9a4429071e7528f525e6a6e9b77fcedd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_36587ad18ce9f1cb8b50a13206b6da9a4429071e7528f525e6a6e9b77fcedd87->leave($__internal_36587ad18ce9f1cb8b50a13206b6da9a4429071e7528f525e6a6e9b77fcedd87_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8aaff2e0a75b668718d27cc34cd397295f2f3e83d7f4f65672517c6c2132cebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aaff2e0a75b668718d27cc34cd397295f2f3e83d7f4f65672517c6c2132cebf->enter($__internal_8aaff2e0a75b668718d27cc34cd397295f2f3e83d7f4f65672517c6c2132cebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8aaff2e0a75b668718d27cc34cd397295f2f3e83d7f4f65672517c6c2132cebf->leave($__internal_8aaff2e0a75b668718d27cc34cd397295f2f3e83d7f4f65672517c6c2132cebf_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "C:\\wamp64\\www\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
