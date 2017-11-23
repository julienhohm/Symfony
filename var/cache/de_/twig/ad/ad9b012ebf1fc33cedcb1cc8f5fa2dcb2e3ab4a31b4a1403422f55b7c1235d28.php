<?php

/* form_table_layout.html.twig */
class __TwigTemplate_3317b5e5bcde1380a6f607af2e5a1e808d32970fac3bc906ab307b91dd079f27 extends Twig_Template
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
        $__internal_c4e0f6bd739224a641d4f996bcad3b4adc08da46c3856ca9a112a02bfd1f9328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e0f6bd739224a641d4f996bcad3b4adc08da46c3856ca9a112a02bfd1f9328->enter($__internal_c4e0f6bd739224a641d4f996bcad3b4adc08da46c3856ca9a112a02bfd1f9328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_c4e0f6bd739224a641d4f996bcad3b4adc08da46c3856ca9a112a02bfd1f9328->leave($__internal_c4e0f6bd739224a641d4f996bcad3b4adc08da46c3856ca9a112a02bfd1f9328_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aec7f72fe4b4db4b1bbc4eaff498c06cf7d8efeca3dda4b9b55a0b79540a5ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec7f72fe4b4db4b1bbc4eaff498c06cf7d8efeca3dda4b9b55a0b79540a5ab0->enter($__internal_aec7f72fe4b4db4b1bbc4eaff498c06cf7d8efeca3dda4b9b55a0b79540a5ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_aec7f72fe4b4db4b1bbc4eaff498c06cf7d8efeca3dda4b9b55a0b79540a5ab0->leave($__internal_aec7f72fe4b4db4b1bbc4eaff498c06cf7d8efeca3dda4b9b55a0b79540a5ab0_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_843f66d25d2134c631d242440412b509ab7710ef3908efb933c49f01c5098500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843f66d25d2134c631d242440412b509ab7710ef3908efb933c49f01c5098500->enter($__internal_843f66d25d2134c631d242440412b509ab7710ef3908efb933c49f01c5098500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_843f66d25d2134c631d242440412b509ab7710ef3908efb933c49f01c5098500->leave($__internal_843f66d25d2134c631d242440412b509ab7710ef3908efb933c49f01c5098500_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_fde7471a5ed47cfb9cc25369bcdc51fb314daef4b53fd11759be250c1fb1ea42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde7471a5ed47cfb9cc25369bcdc51fb314daef4b53fd11759be250c1fb1ea42->enter($__internal_fde7471a5ed47cfb9cc25369bcdc51fb314daef4b53fd11759be250c1fb1ea42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_fde7471a5ed47cfb9cc25369bcdc51fb314daef4b53fd11759be250c1fb1ea42->leave($__internal_fde7471a5ed47cfb9cc25369bcdc51fb314daef4b53fd11759be250c1fb1ea42_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_3952d10d128d835402bfe820a3b9edbcb3bdf880c1865f029718b57127eabad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3952d10d128d835402bfe820a3b9edbcb3bdf880c1865f029718b57127eabad0->enter($__internal_3952d10d128d835402bfe820a3b9edbcb3bdf880c1865f029718b57127eabad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_3952d10d128d835402bfe820a3b9edbcb3bdf880c1865f029718b57127eabad0->leave($__internal_3952d10d128d835402bfe820a3b9edbcb3bdf880c1865f029718b57127eabad0_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  139 => 42,  137 => 41,  133 => 38,  131 => 37,  128 => 35,  126 => 34,  122 => 33,  116 => 32,  108 => 28,  106 => 27,  103 => 25,  97 => 24,  89 => 20,  87 => 19,  83 => 16,  77 => 15,  69 => 11,  67 => 10,  65 => 9,  62 => 7,  60 => 6,  57 => 4,  51 => 3,  44 => 32,  42 => 24,  40 => 15,  38 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_table_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
