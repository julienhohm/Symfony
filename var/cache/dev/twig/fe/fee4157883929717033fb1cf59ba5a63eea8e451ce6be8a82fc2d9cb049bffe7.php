<?php

/* form_table_layout.html.twig */
class __TwigTemplate_0ef36048d34be362b097526b5cd52dceb91f9293ea4df239fc49b327ca0ddc97 extends Twig_Template
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
        $__internal_20f8685cfef59980dd72e6cc96e2f5e96f7fe28534921283dee74c707e99fbce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f8685cfef59980dd72e6cc96e2f5e96f7fe28534921283dee74c707e99fbce->enter($__internal_20f8685cfef59980dd72e6cc96e2f5e96f7fe28534921283dee74c707e99fbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_20f8685cfef59980dd72e6cc96e2f5e96f7fe28534921283dee74c707e99fbce->leave($__internal_20f8685cfef59980dd72e6cc96e2f5e96f7fe28534921283dee74c707e99fbce_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2d5dc90545dc4981fc2d380e13e0e49134698cde1f4a2153c31b92b68f3b0728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5dc90545dc4981fc2d380e13e0e49134698cde1f4a2153c31b92b68f3b0728->enter($__internal_2d5dc90545dc4981fc2d380e13e0e49134698cde1f4a2153c31b92b68f3b0728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_2d5dc90545dc4981fc2d380e13e0e49134698cde1f4a2153c31b92b68f3b0728->leave($__internal_2d5dc90545dc4981fc2d380e13e0e49134698cde1f4a2153c31b92b68f3b0728_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5f97c6e132a205ee664101a323783b9a21e1c5f6d0ebf3e2f654043a3ee99743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f97c6e132a205ee664101a323783b9a21e1c5f6d0ebf3e2f654043a3ee99743->enter($__internal_5f97c6e132a205ee664101a323783b9a21e1c5f6d0ebf3e2f654043a3ee99743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_5f97c6e132a205ee664101a323783b9a21e1c5f6d0ebf3e2f654043a3ee99743->leave($__internal_5f97c6e132a205ee664101a323783b9a21e1c5f6d0ebf3e2f654043a3ee99743_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_400ccced72fd60259c6cac14006c75b2d68c16824570ed4e6819b36997e36cca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400ccced72fd60259c6cac14006c75b2d68c16824570ed4e6819b36997e36cca->enter($__internal_400ccced72fd60259c6cac14006c75b2d68c16824570ed4e6819b36997e36cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_400ccced72fd60259c6cac14006c75b2d68c16824570ed4e6819b36997e36cca->leave($__internal_400ccced72fd60259c6cac14006c75b2d68c16824570ed4e6819b36997e36cca_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_3ee270aef47eaeae119a73811e277b5f00862cbc042b26dcaefc0cff664bf203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee270aef47eaeae119a73811e277b5f00862cbc042b26dcaefc0cff664bf203->enter($__internal_3ee270aef47eaeae119a73811e277b5f00862cbc042b26dcaefc0cff664bf203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? null), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? null)) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_3ee270aef47eaeae119a73811e277b5f00862cbc042b26dcaefc0cff664bf203->leave($__internal_3ee270aef47eaeae119a73811e277b5f00862cbc042b26dcaefc0cff664bf203_prof);

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
