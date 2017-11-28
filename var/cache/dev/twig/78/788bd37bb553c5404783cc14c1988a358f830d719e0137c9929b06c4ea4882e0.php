<?php

/* JHTourismeBundle:Activity:add.html.twig */
class __TwigTemplate_17255d9a47a511b1a7257b5eba6f86807bc4bdc0df243094c36c5338bc01da78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JHTourismeBundle::layout.html.twig", "JHTourismeBundle:Activity:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JHTourismeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1ddd436139004285eb15a80f8e5b626b186bf57e9401332f5bacbbcb6f5a782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ddd436139004285eb15a80f8e5b626b186bf57e9401332f5bacbbcb6f5a782->enter($__internal_b1ddd436139004285eb15a80f8e5b626b186bf57e9401332f5bacbbcb6f5a782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ddd436139004285eb15a80f8e5b626b186bf57e9401332f5bacbbcb6f5a782->leave($__internal_b1ddd436139004285eb15a80f8e5b626b186bf57e9401332f5bacbbcb6f5a782_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33cf283275a1cad73e7362524fec764c5bde40f0d3505a240213ec81d1d8c830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33cf283275a1cad73e7362524fec764c5bde40f0d3505a240213ec81d1d8c830->enter($__internal_33cf283275a1cad73e7362524fec764c5bde40f0d3505a240213ec81d1d8c830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<section class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"columns is-multiline is-centered\">
\t\t\t\t<div class=\"column is-12 has-text-centered\">
\t\t\t\t\t<h1 class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add.title"), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\">
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                    
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
                    
                    <div class=\"field\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Nom :"));
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Description :"));
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", array()), 'widget', array("attr" => array("class" => "textarea")));
        echo "
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "address", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Adresse :"));
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "address", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "address", array()), 'widget', array("attr" => array("class" => "textarea")));
        echo "
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "website", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Site internet :"));
        echo "
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "website", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "website", array()), 'widget', array("attr" => array("class" => "input")));
        echo "
                        </div>
                    </div>
                    
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "button is-primary")));
        echo "
                    
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                    
                    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                    
\t\t\t\t\t";
        // line 69
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_33cf283275a1cad73e7362524fec764c5bde40f0d3505a240213ec81d1d8c830->leave($__internal_33cf283275a1cad73e7362524fec764c5bde40f0d3505a240213ec81d1d8c830_prof);

    }

    public function getTemplateName()
    {
        return "JHTourismeBundle:Activity:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 69,  140 => 51,  135 => 49,  130 => 47,  123 => 43,  118 => 41,  114 => 40,  106 => 35,  101 => 33,  97 => 32,  89 => 27,  84 => 25,  80 => 24,  72 => 19,  67 => 17,  63 => 16,  57 => 13,  52 => 11,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JHTourismeBundle:Activity:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle/Resources/views/Activity/add.html.twig");
    }
}
