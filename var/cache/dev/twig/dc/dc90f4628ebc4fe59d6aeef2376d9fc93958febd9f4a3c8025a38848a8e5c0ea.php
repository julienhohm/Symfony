<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_11ebec060b99916622460165dd17ae6463ec0e5f6087190452de36f305e41674 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e7998eee83c3d1fdaec7c3f4f570213e433c6fa4557a84e2a46a268f7d3d139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7998eee83c3d1fdaec7c3f4f570213e433c6fa4557a84e2a46a268f7d3d139->enter($__internal_2e7998eee83c3d1fdaec7c3f4f570213e433c6fa4557a84e2a46a268f7d3d139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2e7998eee83c3d1fdaec7c3f4f570213e433c6fa4557a84e2a46a268f7d3d139->leave($__internal_2e7998eee83c3d1fdaec7c3f4f570213e433c6fa4557a84e2a46a268f7d3d139_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d2c87225d7401f65af63d6a2d06c01f0114c46043f1748294cd3861ecb93da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2c87225d7401f65af63d6a2d06c01f0114c46043f1748294cd3861ecb93da8->enter($__internal_4d2c87225d7401f65af63d6a2d06c01f0114c46043f1748294cd3861ecb93da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4d2c87225d7401f65af63d6a2d06c01f0114c46043f1748294cd3861ecb93da8->leave($__internal_4d2c87225d7401f65af63d6a2d06c01f0114c46043f1748294cd3861ecb93da8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_15a73ea45fb52d56a6a9426b0f2ee3b415b184b18f7b51e13cecd67cbaed77fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15a73ea45fb52d56a6a9426b0f2ee3b415b184b18f7b51e13cecd67cbaed77fb->enter($__internal_15a73ea45fb52d56a6a9426b0f2ee3b415b184b18f7b51e13cecd67cbaed77fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_15a73ea45fb52d56a6a9426b0f2ee3b415b184b18f7b51e13cecd67cbaed77fb->leave($__internal_15a73ea45fb52d56a6a9426b0f2ee3b415b184b18f7b51e13cecd67cbaed77fb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c6fed1fa67bf6beedf3d5fa9a56449995fbef6431eefe77ab296b6ef992bf9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c6fed1fa67bf6beedf3d5fa9a56449995fbef6431eefe77ab296b6ef992bf9c->enter($__internal_4c6fed1fa67bf6beedf3d5fa9a56449995fbef6431eefe77ab296b6ef992bf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c6fed1fa67bf6beedf3d5fa9a56449995fbef6431eefe77ab296b6ef992bf9c->leave($__internal_4c6fed1fa67bf6beedf3d5fa9a56449995fbef6431eefe77ab296b6ef992bf9c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
