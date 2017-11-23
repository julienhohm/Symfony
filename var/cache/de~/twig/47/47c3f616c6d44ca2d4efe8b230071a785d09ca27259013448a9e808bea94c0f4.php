<?php

/* form_table_layout.html.twig */
class __TwigTemplate_456d5c2c6ebe0756a0457d9f93d7f0e6fc0108837c5eb99b36b6babbb56966ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d25fd9e5e5454cb6a050292bf0c9fe8f33ff297612eb767674eaaab72869946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d25fd9e5e5454cb6a050292bf0c9fe8f33ff297612eb767674eaaab72869946->enter($__internal_4d25fd9e5e5454cb6a050292bf0c9fe8f33ff297612eb767674eaaab72869946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_aa36f3f13503a05aa17bbfdd9e94ccb2ea80fc4d5e193d11a0ea1b93757fbd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa36f3f13503a05aa17bbfdd9e94ccb2ea80fc4d5e193d11a0ea1b93757fbd3a->enter($__internal_aa36f3f13503a05aa17bbfdd9e94ccb2ea80fc4d5e193d11a0ea1b93757fbd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_4d25fd9e5e5454cb6a050292bf0c9fe8f33ff297612eb767674eaaab72869946->leave($__internal_4d25fd9e5e5454cb6a050292bf0c9fe8f33ff297612eb767674eaaab72869946_prof);

        
        $__internal_aa36f3f13503a05aa17bbfdd9e94ccb2ea80fc4d5e193d11a0ea1b93757fbd3a->leave($__internal_aa36f3f13503a05aa17bbfdd9e94ccb2ea80fc4d5e193d11a0ea1b93757fbd3a_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_789d530a3b27d76d1693ee6e285183cf4be1a74b151f6964a4dd62139ef81783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_789d530a3b27d76d1693ee6e285183cf4be1a74b151f6964a4dd62139ef81783->enter($__internal_789d530a3b27d76d1693ee6e285183cf4be1a74b151f6964a4dd62139ef81783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ed35130a60d60c2825c1da0cb36e92a6cbf651d6d43b7defab829ee253bea27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed35130a60d60c2825c1da0cb36e92a6cbf651d6d43b7defab829ee253bea27f->enter($__internal_ed35130a60d60c2825c1da0cb36e92a6cbf651d6d43b7defab829ee253bea27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_ed35130a60d60c2825c1da0cb36e92a6cbf651d6d43b7defab829ee253bea27f->leave($__internal_ed35130a60d60c2825c1da0cb36e92a6cbf651d6d43b7defab829ee253bea27f_prof);

        
        $__internal_789d530a3b27d76d1693ee6e285183cf4be1a74b151f6964a4dd62139ef81783->leave($__internal_789d530a3b27d76d1693ee6e285183cf4be1a74b151f6964a4dd62139ef81783_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a7a69696d62618c760be28a0421757dc91e1562c528b666e5c0a02369429f50a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a69696d62618c760be28a0421757dc91e1562c528b666e5c0a02369429f50a->enter($__internal_a7a69696d62618c760be28a0421757dc91e1562c528b666e5c0a02369429f50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_9315e97d0eb6b8f023753a6c6dab043c27ae4a7f332663779916f70a822fe180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9315e97d0eb6b8f023753a6c6dab043c27ae4a7f332663779916f70a822fe180->enter($__internal_9315e97d0eb6b8f023753a6c6dab043c27ae4a7f332663779916f70a822fe180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_9315e97d0eb6b8f023753a6c6dab043c27ae4a7f332663779916f70a822fe180->leave($__internal_9315e97d0eb6b8f023753a6c6dab043c27ae4a7f332663779916f70a822fe180_prof);

        
        $__internal_a7a69696d62618c760be28a0421757dc91e1562c528b666e5c0a02369429f50a->leave($__internal_a7a69696d62618c760be28a0421757dc91e1562c528b666e5c0a02369429f50a_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_3137769a76a3f76826ab70ac341641b42bd927734f803cbeb3b73336972dfb2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3137769a76a3f76826ab70ac341641b42bd927734f803cbeb3b73336972dfb2d->enter($__internal_3137769a76a3f76826ab70ac341641b42bd927734f803cbeb3b73336972dfb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_c507c4b7ff46d7d2ee152f289d4a3a6551df9ca3b2df800ce676d0a8351a8f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c507c4b7ff46d7d2ee152f289d4a3a6551df9ca3b2df800ce676d0a8351a8f4f->enter($__internal_c507c4b7ff46d7d2ee152f289d4a3a6551df9ca3b2df800ce676d0a8351a8f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_c507c4b7ff46d7d2ee152f289d4a3a6551df9ca3b2df800ce676d0a8351a8f4f->leave($__internal_c507c4b7ff46d7d2ee152f289d4a3a6551df9ca3b2df800ce676d0a8351a8f4f_prof);

        
        $__internal_3137769a76a3f76826ab70ac341641b42bd927734f803cbeb3b73336972dfb2d->leave($__internal_3137769a76a3f76826ab70ac341641b42bd927734f803cbeb3b73336972dfb2d_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_b8c8fd7c52ccab87e5f0733b55556a2112fdda0d4ce0d156ad29849fa54aa466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c8fd7c52ccab87e5f0733b55556a2112fdda0d4ce0d156ad29849fa54aa466->enter($__internal_b8c8fd7c52ccab87e5f0733b55556a2112fdda0d4ce0d156ad29849fa54aa466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_aa0ba71b7a6874333d1109d61a905c74cf3375ee0e39511bef76911456590c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa0ba71b7a6874333d1109d61a905c74cf3375ee0e39511bef76911456590c94->enter($__internal_aa0ba71b7a6874333d1109d61a905c74cf3375ee0e39511bef76911456590c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_aa0ba71b7a6874333d1109d61a905c74cf3375ee0e39511bef76911456590c94->leave($__internal_aa0ba71b7a6874333d1109d61a905c74cf3375ee0e39511bef76911456590c94_prof);

        
        $__internal_b8c8fd7c52ccab87e5f0733b55556a2112fdda0d4ce0d156ad29849fa54aa466->leave($__internal_b8c8fd7c52ccab87e5f0733b55556a2112fdda0d4ce0d156ad29849fa54aa466_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
