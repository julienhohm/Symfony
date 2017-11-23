<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
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
        $__internal_3d429c269bbbba38e2790339f82eb16b194f8cacf119c7084690f1ed67820751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d429c269bbbba38e2790339f82eb16b194f8cacf119c7084690f1ed67820751->enter($__internal_3d429c269bbbba38e2790339f82eb16b194f8cacf119c7084690f1ed67820751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_84605e56005bce7ff788a361b82853a8381e5e629baefd924534ebd255da9a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84605e56005bce7ff788a361b82853a8381e5e629baefd924534ebd255da9a78->enter($__internal_84605e56005bce7ff788a361b82853a8381e5e629baefd924534ebd255da9a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3d429c269bbbba38e2790339f82eb16b194f8cacf119c7084690f1ed67820751->leave($__internal_3d429c269bbbba38e2790339f82eb16b194f8cacf119c7084690f1ed67820751_prof);

        
        $__internal_84605e56005bce7ff788a361b82853a8381e5e629baefd924534ebd255da9a78->leave($__internal_84605e56005bce7ff788a361b82853a8381e5e629baefd924534ebd255da9a78_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_475af8e4b21a7375797d8d2c28babd4f5f66f3c406413bbd26146f8dd19cbe2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475af8e4b21a7375797d8d2c28babd4f5f66f3c406413bbd26146f8dd19cbe2c->enter($__internal_475af8e4b21a7375797d8d2c28babd4f5f66f3c406413bbd26146f8dd19cbe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea4ee33a3b6af32d52dcd308207916f83e4ceeabfe64dec101faaac7fa0b979b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea4ee33a3b6af32d52dcd308207916f83e4ceeabfe64dec101faaac7fa0b979b->enter($__internal_ea4ee33a3b6af32d52dcd308207916f83e4ceeabfe64dec101faaac7fa0b979b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ea4ee33a3b6af32d52dcd308207916f83e4ceeabfe64dec101faaac7fa0b979b->leave($__internal_ea4ee33a3b6af32d52dcd308207916f83e4ceeabfe64dec101faaac7fa0b979b_prof);

        
        $__internal_475af8e4b21a7375797d8d2c28babd4f5f66f3c406413bbd26146f8dd19cbe2c->leave($__internal_475af8e4b21a7375797d8d2c28babd4f5f66f3c406413bbd26146f8dd19cbe2c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_821487f5564680be6d8cbe03e6762e5b91d7e1be0ed0e8f3c3032f25946c3e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_821487f5564680be6d8cbe03e6762e5b91d7e1be0ed0e8f3c3032f25946c3e3a->enter($__internal_821487f5564680be6d8cbe03e6762e5b91d7e1be0ed0e8f3c3032f25946c3e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f81f8acd6b3ee28c9c0b828b195bde2a794825af1ab6cb09c4916119da8d3ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81f8acd6b3ee28c9c0b828b195bde2a794825af1ab6cb09c4916119da8d3ec2->enter($__internal_f81f8acd6b3ee28c9c0b828b195bde2a794825af1ab6cb09c4916119da8d3ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f81f8acd6b3ee28c9c0b828b195bde2a794825af1ab6cb09c4916119da8d3ec2->leave($__internal_f81f8acd6b3ee28c9c0b828b195bde2a794825af1ab6cb09c4916119da8d3ec2_prof);

        
        $__internal_821487f5564680be6d8cbe03e6762e5b91d7e1be0ed0e8f3c3032f25946c3e3a->leave($__internal_821487f5564680be6d8cbe03e6762e5b91d7e1be0ed0e8f3c3032f25946c3e3a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_d280b51b350bc04ca494d4ea9ab6b1edbc530f473d5e55dc569c6f3c31bd0c36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d280b51b350bc04ca494d4ea9ab6b1edbc530f473d5e55dc569c6f3c31bd0c36->enter($__internal_d280b51b350bc04ca494d4ea9ab6b1edbc530f473d5e55dc569c6f3c31bd0c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3bc5bc89aead9eb03b91e5256ee8403312acccc67635c4f8d99b0dc51848a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3bc5bc89aead9eb03b91e5256ee8403312acccc67635c4f8d99b0dc51848a7a->enter($__internal_a3bc5bc89aead9eb03b91e5256ee8403312acccc67635c4f8d99b0dc51848a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a3bc5bc89aead9eb03b91e5256ee8403312acccc67635c4f8d99b0dc51848a7a->leave($__internal_a3bc5bc89aead9eb03b91e5256ee8403312acccc67635c4f8d99b0dc51848a7a_prof);

        
        $__internal_d280b51b350bc04ca494d4ea9ab6b1edbc530f473d5e55dc569c6f3c31bd0c36->leave($__internal_d280b51b350bc04ca494d4ea9ab6b1edbc530f473d5e55dc569c6f3c31bd0c36_prof);

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
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
