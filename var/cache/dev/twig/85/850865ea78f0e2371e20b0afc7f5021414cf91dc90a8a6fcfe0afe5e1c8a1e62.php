<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bd7f8a780af153f7b032cdcf8ff8bed527ab6abfb102758ecf7625f9382938d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_842a284c42acc38b238c9546ceb147514131de5018aabf665d09d3434f478d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842a284c42acc38b238c9546ceb147514131de5018aabf665d09d3434f478d61->enter($__internal_842a284c42acc38b238c9546ceb147514131de5018aabf665d09d3434f478d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a38f87e4c726263a45edd090e45342f9b4382bde7811036eb4bf9b9fef59509b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38f87e4c726263a45edd090e45342f9b4382bde7811036eb4bf9b9fef59509b->enter($__internal_a38f87e4c726263a45edd090e45342f9b4382bde7811036eb4bf9b9fef59509b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_842a284c42acc38b238c9546ceb147514131de5018aabf665d09d3434f478d61->leave($__internal_842a284c42acc38b238c9546ceb147514131de5018aabf665d09d3434f478d61_prof);

        
        $__internal_a38f87e4c726263a45edd090e45342f9b4382bde7811036eb4bf9b9fef59509b->leave($__internal_a38f87e4c726263a45edd090e45342f9b4382bde7811036eb4bf9b9fef59509b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad6635769aded837c5eb7c925ae46ad927ce1cfaeca96fe71e81e1cb3b0542c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6635769aded837c5eb7c925ae46ad927ce1cfaeca96fe71e81e1cb3b0542c2->enter($__internal_ad6635769aded837c5eb7c925ae46ad927ce1cfaeca96fe71e81e1cb3b0542c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1b30b701363f041cf6e43001761ed661c229681bac5483da6da27da5e803cf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b30b701363f041cf6e43001761ed661c229681bac5483da6da27da5e803cf1a->enter($__internal_1b30b701363f041cf6e43001761ed661c229681bac5483da6da27da5e803cf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1b30b701363f041cf6e43001761ed661c229681bac5483da6da27da5e803cf1a->leave($__internal_1b30b701363f041cf6e43001761ed661c229681bac5483da6da27da5e803cf1a_prof);

        
        $__internal_ad6635769aded837c5eb7c925ae46ad927ce1cfaeca96fe71e81e1cb3b0542c2->leave($__internal_ad6635769aded837c5eb7c925ae46ad927ce1cfaeca96fe71e81e1cb3b0542c2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c316c414e646cf647429069e7a300f0ce4255a24175442f20294c6411ac14036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c316c414e646cf647429069e7a300f0ce4255a24175442f20294c6411ac14036->enter($__internal_c316c414e646cf647429069e7a300f0ce4255a24175442f20294c6411ac14036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33108301b82f99be4e8f447175bcc24dedf1efceab4b9975e425004fd81663ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33108301b82f99be4e8f447175bcc24dedf1efceab4b9975e425004fd81663ec->enter($__internal_33108301b82f99be4e8f447175bcc24dedf1efceab4b9975e425004fd81663ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33108301b82f99be4e8f447175bcc24dedf1efceab4b9975e425004fd81663ec->leave($__internal_33108301b82f99be4e8f447175bcc24dedf1efceab4b9975e425004fd81663ec_prof);

        
        $__internal_c316c414e646cf647429069e7a300f0ce4255a24175442f20294c6411ac14036->leave($__internal_c316c414e646cf647429069e7a300f0ce4255a24175442f20294c6411ac14036_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_afc47385a69ea16e760748248372163407ace08c9a84a75b28d416333a7b6d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc47385a69ea16e760748248372163407ace08c9a84a75b28d416333a7b6d73->enter($__internal_afc47385a69ea16e760748248372163407ace08c9a84a75b28d416333a7b6d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7fe90ade69a28e944d305ea516a10e6577e6837fe54443999f0846f60c18121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7fe90ade69a28e944d305ea516a10e6577e6837fe54443999f0846f60c18121->enter($__internal_f7fe90ade69a28e944d305ea516a10e6577e6837fe54443999f0846f60c18121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f7fe90ade69a28e944d305ea516a10e6577e6837fe54443999f0846f60c18121->leave($__internal_f7fe90ade69a28e944d305ea516a10e6577e6837fe54443999f0846f60c18121_prof);

        
        $__internal_afc47385a69ea16e760748248372163407ace08c9a84a75b28d416333a7b6d73->leave($__internal_afc47385a69ea16e760748248372163407ace08c9a84a75b28d416333a7b6d73_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
