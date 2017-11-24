<?php

/* form_table_layout.html.twig */
class __TwigTemplate_b4ea34ee317421f01863344ec8868c5a8e666a0a86386209dc3ddfc3a19886c9 extends Twig_Template
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
        $__internal_e996ae29120ecaae7a72c1b269baa1e9b66ceb09f92fe801d84a5e797217d1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e996ae29120ecaae7a72c1b269baa1e9b66ceb09f92fe801d84a5e797217d1fa->enter($__internal_e996ae29120ecaae7a72c1b269baa1e9b66ceb09f92fe801d84a5e797217d1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_73651f3f200fb0fe7300e7b0448e5a994426c44f17e07153079af8f57d6aea40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73651f3f200fb0fe7300e7b0448e5a994426c44f17e07153079af8f57d6aea40->enter($__internal_73651f3f200fb0fe7300e7b0448e5a994426c44f17e07153079af8f57d6aea40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_e996ae29120ecaae7a72c1b269baa1e9b66ceb09f92fe801d84a5e797217d1fa->leave($__internal_e996ae29120ecaae7a72c1b269baa1e9b66ceb09f92fe801d84a5e797217d1fa_prof);

        
        $__internal_73651f3f200fb0fe7300e7b0448e5a994426c44f17e07153079af8f57d6aea40->leave($__internal_73651f3f200fb0fe7300e7b0448e5a994426c44f17e07153079af8f57d6aea40_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_44d20d3316d6bbdba84a1272fed9cc13bf6c0d80daa1cc91955d00c488175704 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d20d3316d6bbdba84a1272fed9cc13bf6c0d80daa1cc91955d00c488175704->enter($__internal_44d20d3316d6bbdba84a1272fed9cc13bf6c0d80daa1cc91955d00c488175704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_7100dbe326ccbcd5dc7e82dcdf13b46a55357220ccc1fdf58bb8f3e6393ff6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7100dbe326ccbcd5dc7e82dcdf13b46a55357220ccc1fdf58bb8f3e6393ff6ba->enter($__internal_7100dbe326ccbcd5dc7e82dcdf13b46a55357220ccc1fdf58bb8f3e6393ff6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_7100dbe326ccbcd5dc7e82dcdf13b46a55357220ccc1fdf58bb8f3e6393ff6ba->leave($__internal_7100dbe326ccbcd5dc7e82dcdf13b46a55357220ccc1fdf58bb8f3e6393ff6ba_prof);

        
        $__internal_44d20d3316d6bbdba84a1272fed9cc13bf6c0d80daa1cc91955d00c488175704->leave($__internal_44d20d3316d6bbdba84a1272fed9cc13bf6c0d80daa1cc91955d00c488175704_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b604bf71521caff9636ca2178210229a084aec19dbf604ed6cf7d62c8c8d159c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b604bf71521caff9636ca2178210229a084aec19dbf604ed6cf7d62c8c8d159c->enter($__internal_b604bf71521caff9636ca2178210229a084aec19dbf604ed6cf7d62c8c8d159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_dccf1af03f0af2d0add11d320b7770c4d32536e41aaa477837709a956d8b5f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dccf1af03f0af2d0add11d320b7770c4d32536e41aaa477837709a956d8b5f00->enter($__internal_dccf1af03f0af2d0add11d320b7770c4d32536e41aaa477837709a956d8b5f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_dccf1af03f0af2d0add11d320b7770c4d32536e41aaa477837709a956d8b5f00->leave($__internal_dccf1af03f0af2d0add11d320b7770c4d32536e41aaa477837709a956d8b5f00_prof);

        
        $__internal_b604bf71521caff9636ca2178210229a084aec19dbf604ed6cf7d62c8c8d159c->leave($__internal_b604bf71521caff9636ca2178210229a084aec19dbf604ed6cf7d62c8c8d159c_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_5d1dbb228182299f99bc6919aa24301d1ce9a579256cd99eda903d53ef400107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1dbb228182299f99bc6919aa24301d1ce9a579256cd99eda903d53ef400107->enter($__internal_5d1dbb228182299f99bc6919aa24301d1ce9a579256cd99eda903d53ef400107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_37c8bc7d4c18c2fc598afb406f2597850d093847939a1ea6af3575744de3e9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c8bc7d4c18c2fc598afb406f2597850d093847939a1ea6af3575744de3e9da->enter($__internal_37c8bc7d4c18c2fc598afb406f2597850d093847939a1ea6af3575744de3e9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_37c8bc7d4c18c2fc598afb406f2597850d093847939a1ea6af3575744de3e9da->leave($__internal_37c8bc7d4c18c2fc598afb406f2597850d093847939a1ea6af3575744de3e9da_prof);

        
        $__internal_5d1dbb228182299f99bc6919aa24301d1ce9a579256cd99eda903d53ef400107->leave($__internal_5d1dbb228182299f99bc6919aa24301d1ce9a579256cd99eda903d53ef400107_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_937a4cdf28887916abd0ece0fb2a3e3d9358d518dce2f7ba9b16e3eb059d4bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_937a4cdf28887916abd0ece0fb2a3e3d9358d518dce2f7ba9b16e3eb059d4bca->enter($__internal_937a4cdf28887916abd0ece0fb2a3e3d9358d518dce2f7ba9b16e3eb059d4bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_c904b3ae8dc99fee9be5053a60df440b95f5d5415de0f16def18834d6ba976a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c904b3ae8dc99fee9be5053a60df440b95f5d5415de0f16def18834d6ba976a8->enter($__internal_c904b3ae8dc99fee9be5053a60df440b95f5d5415de0f16def18834d6ba976a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_c904b3ae8dc99fee9be5053a60df440b95f5d5415de0f16def18834d6ba976a8->leave($__internal_c904b3ae8dc99fee9be5053a60df440b95f5d5415de0f16def18834d6ba976a8_prof);

        
        $__internal_937a4cdf28887916abd0ece0fb2a3e3d9358d518dce2f7ba9b16e3eb059d4bca->leave($__internal_937a4cdf28887916abd0ece0fb2a3e3d9358d518dce2f7ba9b16e3eb059d4bca_prof);

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
