<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_3f4be76438903ef0010349d4966ec15dab0d1fcef5f0b841ba4b81f9393df312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4a47e481b8fa93dc80873c61858d2d79857bf112f8aa1679c4d3fe698d90eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a47e481b8fa93dc80873c61858d2d79857bf112f8aa1679c4d3fe698d90eef->enter($__internal_d4a47e481b8fa93dc80873c61858d2d79857bf112f8aa1679c4d3fe698d90eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_d4a47e481b8fa93dc80873c61858d2d79857bf112f8aa1679c4d3fe698d90eef->leave($__internal_d4a47e481b8fa93dc80873c61858d2d79857bf112f8aa1679c4d3fe698d90eef_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_01a7e1f953e27756eae103d2b82b0f0e1f945727463caf2f6958531f0c6ac9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a7e1f953e27756eae103d2b82b0f0e1f945727463caf2f6958531f0c6ac9a5->enter($__internal_01a7e1f953e27756eae103d2b82b0f0e1f945727463caf2f6958531f0c6ac9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_01a7e1f953e27756eae103d2b82b0f0e1f945727463caf2f6958531f0c6ac9a5->leave($__internal_01a7e1f953e27756eae103d2b82b0f0e1f945727463caf2f6958531f0c6ac9a5_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_045e4c5a6403eae5764c3cb02409bb76cb8f5984196f349dcec0286800062c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_045e4c5a6403eae5764c3cb02409bb76cb8f5984196f349dcec0286800062c68->enter($__internal_045e4c5a6403eae5764c3cb02409bb76cb8f5984196f349dcec0286800062c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_045e4c5a6403eae5764c3cb02409bb76cb8f5984196f349dcec0286800062c68->leave($__internal_045e4c5a6403eae5764c3cb02409bb76cb8f5984196f349dcec0286800062c68_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ddedcbe44ba2653f26137de45be5245b972073cd19aef9b831ed01eba768d1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddedcbe44ba2653f26137de45be5245b972073cd19aef9b831ed01eba768d1be->enter($__internal_ddedcbe44ba2653f26137de45be5245b972073cd19aef9b831ed01eba768d1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_ddedcbe44ba2653f26137de45be5245b972073cd19aef9b831ed01eba768d1be->leave($__internal_ddedcbe44ba2653f26137de45be5245b972073cd19aef9b831ed01eba768d1be_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2b4803f276c2fe6794b8314771b9433086f0bf4899003054f267bb431af2af0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4803f276c2fe6794b8314771b9433086f0bf4899003054f267bb431af2af0d->enter($__internal_2b4803f276c2fe6794b8314771b9433086f0bf4899003054f267bb431af2af0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : null), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : null))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_2b4803f276c2fe6794b8314771b9433086f0bf4899003054f267bb431af2af0d->leave($__internal_2b4803f276c2fe6794b8314771b9433086f0bf4899003054f267bb431af2af0d_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c37d663ab8bbf7170042a8f6530dfb0d7fd0581630d8b00522f81ed9a17a2613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c37d663ab8bbf7170042a8f6530dfb0d7fd0581630d8b00522f81ed9a17a2613->enter($__internal_c37d663ab8bbf7170042a8f6530dfb0d7fd0581630d8b00522f81ed9a17a2613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c37d663ab8bbf7170042a8f6530dfb0d7fd0581630d8b00522f81ed9a17a2613->leave($__internal_c37d663ab8bbf7170042a8f6530dfb0d7fd0581630d8b00522f81ed9a17a2613_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_1ff476fc15852eb9f4b92b6bb3f8a6e124b82adcf425ee938d5941b07ed97192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ff476fc15852eb9f4b92b6bb3f8a6e124b82adcf425ee938d5941b07ed97192->enter($__internal_1ff476fc15852eb9f4b92b6bb3f8a6e124b82adcf425ee938d5941b07ed97192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_1ff476fc15852eb9f4b92b6bb3f8a6e124b82adcf425ee938d5941b07ed97192->leave($__internal_1ff476fc15852eb9f4b92b6bb3f8a6e124b82adcf425ee938d5941b07ed97192_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_2ceb6c1b7c45ac350468fc58bf03cbe17c3b6cda5131b20e374b4ecba33dfd04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ceb6c1b7c45ac350468fc58bf03cbe17c3b6cda5131b20e374b4ecba33dfd04->enter($__internal_2ceb6c1b7c45ac350468fc58bf03cbe17c3b6cda5131b20e374b4ecba33dfd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : null)) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2ceb6c1b7c45ac350468fc58bf03cbe17c3b6cda5131b20e374b4ecba33dfd04->leave($__internal_2ceb6c1b7c45ac350468fc58bf03cbe17c3b6cda5131b20e374b4ecba33dfd04_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_111612a4760e219873d78f8a0a22de1bf2dfdc814e8c56539867c6e9a76c7638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_111612a4760e219873d78f8a0a22de1bf2dfdc814e8c56539867c6e9a76c7638->enter($__internal_111612a4760e219873d78f8a0a22de1bf2dfdc814e8c56539867c6e9a76c7638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_111612a4760e219873d78f8a0a22de1bf2dfdc814e8c56539867c6e9a76c7638->leave($__internal_111612a4760e219873d78f8a0a22de1bf2dfdc814e8c56539867c6e9a76c7638_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_b9550dfed82ae4153414a6c92f6ba7bc1687deb24750914ceb4a7aceabc56e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9550dfed82ae4153414a6c92f6ba7bc1687deb24750914ceb4a7aceabc56e05->enter($__internal_b9550dfed82ae4153414a6c92f6ba7bc1687deb24750914ceb4a7aceabc56e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b9550dfed82ae4153414a6c92f6ba7bc1687deb24750914ceb4a7aceabc56e05->leave($__internal_b9550dfed82ae4153414a6c92f6ba7bc1687deb24750914ceb4a7aceabc56e05_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_a0f11874e8291730e599357bd3a1fcb19905fba54afe031d9e79d0372f209eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f11874e8291730e599357bd3a1fcb19905fba54afe031d9e79d0372f209eb3->enter($__internal_a0f11874e8291730e599357bd3a1fcb19905fba54afe031d9e79d0372f209eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_a0f11874e8291730e599357bd3a1fcb19905fba54afe031d9e79d0372f209eb3->leave($__internal_a0f11874e8291730e599357bd3a1fcb19905fba54afe031d9e79d0372f209eb3_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  327 => 80,  321 => 79,  309 => 73,  305 => 72,  301 => 71,  298 => 70,  296 => 69,  290 => 68,  278 => 62,  274 => 61,  270 => 60,  267 => 59,  265 => 58,  259 => 57,  247 => 51,  243 => 50,  239 => 49,  235 => 48,  228 => 47,  226 => 46,  220 => 45,  213 => 42,  207 => 41,  200 => 38,  194 => 37,  187 => 34,  184 => 33,  182 => 32,  180 => 31,  176 => 30,  174 => 29,  168 => 28,  162 => 27,  155 => 22,  149 => 21,  140 => 16,  137 => 15,  131 => 13,  128 => 12,  126 => 11,  120 => 10,  113 => 5,  111 => 4,  105 => 3,  98 => 79,  95 => 78,  93 => 68,  90 => 67,  88 => 57,  85 => 56,  83 => 45,  80 => 44,  78 => 41,  75 => 40,  73 => 37,  70 => 36,  68 => 27,  65 => 26,  62 => 24,  60 => 21,  57 => 20,  55 => 10,  52 => 9,  49 => 7,  47 => 3,  44 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
