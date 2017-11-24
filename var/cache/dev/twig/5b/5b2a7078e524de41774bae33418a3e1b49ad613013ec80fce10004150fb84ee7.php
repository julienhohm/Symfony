<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_b97c24f02b523010f6e619dbc68117d78317b430717261b4fe46ca39cfd6ecc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9184adcc5f2eb8c4d754befeccbba53f2fd2938e7f719179bc533bec946dc676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9184adcc5f2eb8c4d754befeccbba53f2fd2938e7f719179bc533bec946dc676->enter($__internal_9184adcc5f2eb8c4d754befeccbba53f2fd2938e7f719179bc533bec946dc676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_62611f6c156428528fa4c80057d3980c3585255bbb529cc4677e24bb5c61a55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62611f6c156428528fa4c80057d3980c3585255bbb529cc4677e24bb5c61a55f->enter($__internal_62611f6c156428528fa4c80057d3980c3585255bbb529cc4677e24bb5c61a55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_9184adcc5f2eb8c4d754befeccbba53f2fd2938e7f719179bc533bec946dc676->leave($__internal_9184adcc5f2eb8c4d754befeccbba53f2fd2938e7f719179bc533bec946dc676_prof);

        
        $__internal_62611f6c156428528fa4c80057d3980c3585255bbb529cc4677e24bb5c61a55f->leave($__internal_62611f6c156428528fa4c80057d3980c3585255bbb529cc4677e24bb5c61a55f_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_a20827fd3e1711725a9ef99801ca7a4f0052095f8f498049a4d0a9a7bb875557 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a20827fd3e1711725a9ef99801ca7a4f0052095f8f498049a4d0a9a7bb875557->enter($__internal_a20827fd3e1711725a9ef99801ca7a4f0052095f8f498049a4d0a9a7bb875557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_89e2e04334d6849d1a9720a150823b1b5668be4971f6c0f042d114187e17f651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e2e04334d6849d1a9720a150823b1b5668be4971f6c0f042d114187e17f651->enter($__internal_89e2e04334d6849d1a9720a150823b1b5668be4971f6c0f042d114187e17f651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_89e2e04334d6849d1a9720a150823b1b5668be4971f6c0f042d114187e17f651->leave($__internal_89e2e04334d6849d1a9720a150823b1b5668be4971f6c0f042d114187e17f651_prof);

        
        $__internal_a20827fd3e1711725a9ef99801ca7a4f0052095f8f498049a4d0a9a7bb875557->leave($__internal_a20827fd3e1711725a9ef99801ca7a4f0052095f8f498049a4d0a9a7bb875557_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f14fdbf9f525e86e511293ff77738605388a1fc543655b9bc192b2420227fd50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f14fdbf9f525e86e511293ff77738605388a1fc543655b9bc192b2420227fd50->enter($__internal_f14fdbf9f525e86e511293ff77738605388a1fc543655b9bc192b2420227fd50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_25739e3e1a45f3fea4b819b02141c3f6928464f3eed6a45a909c8d5242fcfdf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25739e3e1a45f3fea4b819b02141c3f6928464f3eed6a45a909c8d5242fcfdf5->enter($__internal_25739e3e1a45f3fea4b819b02141c3f6928464f3eed6a45a909c8d5242fcfdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_25739e3e1a45f3fea4b819b02141c3f6928464f3eed6a45a909c8d5242fcfdf5->leave($__internal_25739e3e1a45f3fea4b819b02141c3f6928464f3eed6a45a909c8d5242fcfdf5_prof);

        
        $__internal_f14fdbf9f525e86e511293ff77738605388a1fc543655b9bc192b2420227fd50->leave($__internal_f14fdbf9f525e86e511293ff77738605388a1fc543655b9bc192b2420227fd50_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_fc979d5453b06b4c48dc50ada1b95f6900c8180a8fb912fd2989496553a29429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc979d5453b06b4c48dc50ada1b95f6900c8180a8fb912fd2989496553a29429->enter($__internal_fc979d5453b06b4c48dc50ada1b95f6900c8180a8fb912fd2989496553a29429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_27e62e672617f345c7035607e4d81e5c7cf453dbe95f3cdc2539ccfec0eb91e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e62e672617f345c7035607e4d81e5c7cf453dbe95f3cdc2539ccfec0eb91e4->enter($__internal_27e62e672617f345c7035607e4d81e5c7cf453dbe95f3cdc2539ccfec0eb91e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_27e62e672617f345c7035607e4d81e5c7cf453dbe95f3cdc2539ccfec0eb91e4->leave($__internal_27e62e672617f345c7035607e4d81e5c7cf453dbe95f3cdc2539ccfec0eb91e4_prof);

        
        $__internal_fc979d5453b06b4c48dc50ada1b95f6900c8180a8fb912fd2989496553a29429->leave($__internal_fc979d5453b06b4c48dc50ada1b95f6900c8180a8fb912fd2989496553a29429_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_47f4b774f79819f7041dd80e8f409cc2ae6cf7eff5fea29cdd10d9b9052f291f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f4b774f79819f7041dd80e8f409cc2ae6cf7eff5fea29cdd10d9b9052f291f->enter($__internal_47f4b774f79819f7041dd80e8f409cc2ae6cf7eff5fea29cdd10d9b9052f291f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_94acd22f4d36b77fc755970a843714a1c7f9de38bbf613fa701746393fa4f439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94acd22f4d36b77fc755970a843714a1c7f9de38bbf613fa701746393fa4f439->enter($__internal_94acd22f4d36b77fc755970a843714a1c7f9de38bbf613fa701746393fa4f439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_182bef5b99ade8d49fcbacfac8cef09d8c233f14c920f30e260080498bbcce0d = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_1702656f4c9f2f77d5b48d2f1e96b6a2c43c7603e3b332ed87b861b16edfb222 = "{{") && ('' === $__internal_1702656f4c9f2f77d5b48d2f1e96b6a2c43c7603e3b332ed87b861b16edfb222 || 0 === strpos($__internal_182bef5b99ade8d49fcbacfac8cef09d8c233f14c920f30e260080498bbcce0d, $__internal_1702656f4c9f2f77d5b48d2f1e96b6a2c43c7603e3b332ed87b861b16edfb222)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_94acd22f4d36b77fc755970a843714a1c7f9de38bbf613fa701746393fa4f439->leave($__internal_94acd22f4d36b77fc755970a843714a1c7f9de38bbf613fa701746393fa4f439_prof);

        
        $__internal_47f4b774f79819f7041dd80e8f409cc2ae6cf7eff5fea29cdd10d9b9052f291f->leave($__internal_47f4b774f79819f7041dd80e8f409cc2ae6cf7eff5fea29cdd10d9b9052f291f_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d74651ee1f4c71635a10ff9630679c55990ff84dc76b3a4638d2a507a157a11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74651ee1f4c71635a10ff9630679c55990ff84dc76b3a4638d2a507a157a11d->enter($__internal_d74651ee1f4c71635a10ff9630679c55990ff84dc76b3a4638d2a507a157a11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_b106a74abf61cba668cb88fa0fd3a2e36b4cec5985e9ee53f49378036658642d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b106a74abf61cba668cb88fa0fd3a2e36b4cec5985e9ee53f49378036658642d->enter($__internal_b106a74abf61cba668cb88fa0fd3a2e36b4cec5985e9ee53f49378036658642d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_b106a74abf61cba668cb88fa0fd3a2e36b4cec5985e9ee53f49378036658642d->leave($__internal_b106a74abf61cba668cb88fa0fd3a2e36b4cec5985e9ee53f49378036658642d_prof);

        
        $__internal_d74651ee1f4c71635a10ff9630679c55990ff84dc76b3a4638d2a507a157a11d->leave($__internal_d74651ee1f4c71635a10ff9630679c55990ff84dc76b3a4638d2a507a157a11d_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_52d585fbd2a72f390520a08ca670971f69022438ce1adf7f42d99251956cd7a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d585fbd2a72f390520a08ca670971f69022438ce1adf7f42d99251956cd7a6->enter($__internal_52d585fbd2a72f390520a08ca670971f69022438ce1adf7f42d99251956cd7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_016a76ae05c3c4628ea5abb2d7ddb1ecd684cfebe1a59e43395ee32d2ab78d28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016a76ae05c3c4628ea5abb2d7ddb1ecd684cfebe1a59e43395ee32d2ab78d28->enter($__internal_016a76ae05c3c4628ea5abb2d7ddb1ecd684cfebe1a59e43395ee32d2ab78d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_016a76ae05c3c4628ea5abb2d7ddb1ecd684cfebe1a59e43395ee32d2ab78d28->leave($__internal_016a76ae05c3c4628ea5abb2d7ddb1ecd684cfebe1a59e43395ee32d2ab78d28_prof);

        
        $__internal_52d585fbd2a72f390520a08ca670971f69022438ce1adf7f42d99251956cd7a6->leave($__internal_52d585fbd2a72f390520a08ca670971f69022438ce1adf7f42d99251956cd7a6_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_b1deb2e970e3d039bb73316a59ab52dc9f38ce2e90d7f54c39892bbadd5eaea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1deb2e970e3d039bb73316a59ab52dc9f38ce2e90d7f54c39892bbadd5eaea3->enter($__internal_b1deb2e970e3d039bb73316a59ab52dc9f38ce2e90d7f54c39892bbadd5eaea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_b9f3dd398dec1cd85f4077c275e58b19d43cc284c04edcf42020bd761ca54ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f3dd398dec1cd85f4077c275e58b19d43cc284c04edcf42020bd761ca54ed4->enter($__internal_b9f3dd398dec1cd85f4077c275e58b19d43cc284c04edcf42020bd761ca54ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_b9f3dd398dec1cd85f4077c275e58b19d43cc284c04edcf42020bd761ca54ed4->leave($__internal_b9f3dd398dec1cd85f4077c275e58b19d43cc284c04edcf42020bd761ca54ed4_prof);

        
        $__internal_b1deb2e970e3d039bb73316a59ab52dc9f38ce2e90d7f54c39892bbadd5eaea3->leave($__internal_b1deb2e970e3d039bb73316a59ab52dc9f38ce2e90d7f54c39892bbadd5eaea3_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d7aa9f090ca5bd99d147b7c4b57066707f74265150643068fdb406ae43c8ccbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7aa9f090ca5bd99d147b7c4b57066707f74265150643068fdb406ae43c8ccbc->enter($__internal_d7aa9f090ca5bd99d147b7c4b57066707f74265150643068fdb406ae43c8ccbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_c2a679ab01d72f25e3c667ee0177cfdee7a05282e3d4c8083cd301ea863b49b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a679ab01d72f25e3c667ee0177cfdee7a05282e3d4c8083cd301ea863b49b1->enter($__internal_c2a679ab01d72f25e3c667ee0177cfdee7a05282e3d4c8083cd301ea863b49b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_c2a679ab01d72f25e3c667ee0177cfdee7a05282e3d4c8083cd301ea863b49b1->leave($__internal_c2a679ab01d72f25e3c667ee0177cfdee7a05282e3d4c8083cd301ea863b49b1_prof);

        
        $__internal_d7aa9f090ca5bd99d147b7c4b57066707f74265150643068fdb406ae43c8ccbc->leave($__internal_d7aa9f090ca5bd99d147b7c4b57066707f74265150643068fdb406ae43c8ccbc_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_949b61880b57dfa54ab13baaee07176342d0d3c52f05e9f84292b4d79837e88e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949b61880b57dfa54ab13baaee07176342d0d3c52f05e9f84292b4d79837e88e->enter($__internal_949b61880b57dfa54ab13baaee07176342d0d3c52f05e9f84292b4d79837e88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_6d55132b09f6fffc4544b7e2bd61391f0b3c30301872565a3518a392beb53f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d55132b09f6fffc4544b7e2bd61391f0b3c30301872565a3518a392beb53f8e->enter($__internal_6d55132b09f6fffc4544b7e2bd61391f0b3c30301872565a3518a392beb53f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_6d55132b09f6fffc4544b7e2bd61391f0b3c30301872565a3518a392beb53f8e->leave($__internal_6d55132b09f6fffc4544b7e2bd61391f0b3c30301872565a3518a392beb53f8e_prof);

        
        $__internal_949b61880b57dfa54ab13baaee07176342d0d3c52f05e9f84292b4d79837e88e->leave($__internal_949b61880b57dfa54ab13baaee07176342d0d3c52f05e9f84292b4d79837e88e_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_347595af2da1838ecb7b5d32ee50ec9d53683f3968a9281040dbb5e3a3b6ac19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347595af2da1838ecb7b5d32ee50ec9d53683f3968a9281040dbb5e3a3b6ac19->enter($__internal_347595af2da1838ecb7b5d32ee50ec9d53683f3968a9281040dbb5e3a3b6ac19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_5e5582e88b89e064a73ad962bcef879a9c92f3a99f1fca38f46adae3790f98cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e5582e88b89e064a73ad962bcef879a9c92f3a99f1fca38f46adae3790f98cd->enter($__internal_5e5582e88b89e064a73ad962bcef879a9c92f3a99f1fca38f46adae3790f98cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_5e5582e88b89e064a73ad962bcef879a9c92f3a99f1fca38f46adae3790f98cd->leave($__internal_5e5582e88b89e064a73ad962bcef879a9c92f3a99f1fca38f46adae3790f98cd_prof);

        
        $__internal_347595af2da1838ecb7b5d32ee50ec9d53683f3968a9281040dbb5e3a3b6ac19->leave($__internal_347595af2da1838ecb7b5d32ee50ec9d53683f3968a9281040dbb5e3a3b6ac19_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_90f35e35cc6697e47e7c5369964dae0d64278f80e192494a180be1213c7b1a5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f35e35cc6697e47e7c5369964dae0d64278f80e192494a180be1213c7b1a5b->enter($__internal_90f35e35cc6697e47e7c5369964dae0d64278f80e192494a180be1213c7b1a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f690d27ef458a74dcf23b8e8e4bfc4c8dd7d054eceaab98e7719f22e1c14e492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f690d27ef458a74dcf23b8e8e4bfc4c8dd7d054eceaab98e7719f22e1c14e492->enter($__internal_f690d27ef458a74dcf23b8e8e4bfc4c8dd7d054eceaab98e7719f22e1c14e492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_f690d27ef458a74dcf23b8e8e4bfc4c8dd7d054eceaab98e7719f22e1c14e492->leave($__internal_f690d27ef458a74dcf23b8e8e4bfc4c8dd7d054eceaab98e7719f22e1c14e492_prof);

        
        $__internal_90f35e35cc6697e47e7c5369964dae0d64278f80e192494a180be1213c7b1a5b->leave($__internal_90f35e35cc6697e47e7c5369964dae0d64278f80e192494a180be1213c7b1a5b_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0af53f416664779fbc29ddbb95ed1355c1b83d8c0011fc96f9d3f54d8fcf5ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af53f416664779fbc29ddbb95ed1355c1b83d8c0011fc96f9d3f54d8fcf5ebe->enter($__internal_0af53f416664779fbc29ddbb95ed1355c1b83d8c0011fc96f9d3f54d8fcf5ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_70422938206589b305c3e1a785befb7a1d33becb83c4596fc34ee95a8f49c9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70422938206589b305c3e1a785befb7a1d33becb83c4596fc34ee95a8f49c9ad->enter($__internal_70422938206589b305c3e1a785befb7a1d33becb83c4596fc34ee95a8f49c9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_70422938206589b305c3e1a785befb7a1d33becb83c4596fc34ee95a8f49c9ad->leave($__internal_70422938206589b305c3e1a785befb7a1d33becb83c4596fc34ee95a8f49c9ad_prof);

        
        $__internal_0af53f416664779fbc29ddbb95ed1355c1b83d8c0011fc96f9d3f54d8fcf5ebe->leave($__internal_0af53f416664779fbc29ddbb95ed1355c1b83d8c0011fc96f9d3f54d8fcf5ebe_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_afc4b6746119a59cbaa777e7de3398e6af99ffb1a4d247e4c4d79c7a66a225e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc4b6746119a59cbaa777e7de3398e6af99ffb1a4d247e4c4d79c7a66a225e4->enter($__internal_afc4b6746119a59cbaa777e7de3398e6af99ffb1a4d247e4c4d79c7a66a225e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_2e88a9f478dd65e486bf1a78c12323f4ced4a2cf7c476c2884c55c8b21769cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e88a9f478dd65e486bf1a78c12323f4ced4a2cf7c476c2884c55c8b21769cbe->enter($__internal_2e88a9f478dd65e486bf1a78c12323f4ced4a2cf7c476c2884c55c8b21769cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_2e88a9f478dd65e486bf1a78c12323f4ced4a2cf7c476c2884c55c8b21769cbe->leave($__internal_2e88a9f478dd65e486bf1a78c12323f4ced4a2cf7c476c2884c55c8b21769cbe_prof);

        
        $__internal_afc4b6746119a59cbaa777e7de3398e6af99ffb1a4d247e4c4d79c7a66a225e4->leave($__internal_afc4b6746119a59cbaa777e7de3398e6af99ffb1a4d247e4c4d79c7a66a225e4_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_11cf20ea8e26703ce6f9feb2f94f21f852bd6a1217e4109a3537fd030ffed5bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11cf20ea8e26703ce6f9feb2f94f21f852bd6a1217e4109a3537fd030ffed5bb->enter($__internal_11cf20ea8e26703ce6f9feb2f94f21f852bd6a1217e4109a3537fd030ffed5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_558cccd0a803371ec940a813ebc1e407dca7f0a1bf958e89e39831c8e3f67e8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558cccd0a803371ec940a813ebc1e407dca7f0a1bf958e89e39831c8e3f67e8b->enter($__internal_558cccd0a803371ec940a813ebc1e407dca7f0a1bf958e89e39831c8e3f67e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_558cccd0a803371ec940a813ebc1e407dca7f0a1bf958e89e39831c8e3f67e8b->leave($__internal_558cccd0a803371ec940a813ebc1e407dca7f0a1bf958e89e39831c8e3f67e8b_prof);

        
        $__internal_11cf20ea8e26703ce6f9feb2f94f21f852bd6a1217e4109a3537fd030ffed5bb->leave($__internal_11cf20ea8e26703ce6f9feb2f94f21f852bd6a1217e4109a3537fd030ffed5bb_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_ed35e2a0e5df835553ad7d16266b6deecab150864dc0479981cac66ebb819678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed35e2a0e5df835553ad7d16266b6deecab150864dc0479981cac66ebb819678->enter($__internal_ed35e2a0e5df835553ad7d16266b6deecab150864dc0479981cac66ebb819678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_c197f3d265b902536384441226cc95459f8586d33dec7eb9252368dd69be9973 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c197f3d265b902536384441226cc95459f8586d33dec7eb9252368dd69be9973->enter($__internal_c197f3d265b902536384441226cc95459f8586d33dec7eb9252368dd69be9973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_c197f3d265b902536384441226cc95459f8586d33dec7eb9252368dd69be9973->leave($__internal_c197f3d265b902536384441226cc95459f8586d33dec7eb9252368dd69be9973_prof);

        
        $__internal_ed35e2a0e5df835553ad7d16266b6deecab150864dc0479981cac66ebb819678->leave($__internal_ed35e2a0e5df835553ad7d16266b6deecab150864dc0479981cac66ebb819678_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_40d8b0c4fc9d1c8038c6466103b6ef4b522415003fa5ee89be218cd2b57ab495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d8b0c4fc9d1c8038c6466103b6ef4b522415003fa5ee89be218cd2b57ab495->enter($__internal_40d8b0c4fc9d1c8038c6466103b6ef4b522415003fa5ee89be218cd2b57ab495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c3e2f6722ae28f65c990e5704cfaeffb289e2bc23fbe7558924425fabdb374a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e2f6722ae28f65c990e5704cfaeffb289e2bc23fbe7558924425fabdb374a6->enter($__internal_c3e2f6722ae28f65c990e5704cfaeffb289e2bc23fbe7558924425fabdb374a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c3e2f6722ae28f65c990e5704cfaeffb289e2bc23fbe7558924425fabdb374a6->leave($__internal_c3e2f6722ae28f65c990e5704cfaeffb289e2bc23fbe7558924425fabdb374a6_prof);

        
        $__internal_40d8b0c4fc9d1c8038c6466103b6ef4b522415003fa5ee89be218cd2b57ab495->leave($__internal_40d8b0c4fc9d1c8038c6466103b6ef4b522415003fa5ee89be218cd2b57ab495_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b4110b752c1f918254cf1ef57d0b3e9b4fd86d1368435a84770ce23f78514d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4110b752c1f918254cf1ef57d0b3e9b4fd86d1368435a84770ce23f78514d75->enter($__internal_b4110b752c1f918254cf1ef57d0b3e9b4fd86d1368435a84770ce23f78514d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_d0132b2f8f9f0838324ba2cf9b0cc14b4873152fce24564ca666038b2fb809ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0132b2f8f9f0838324ba2cf9b0cc14b4873152fce24564ca666038b2fb809ca->enter($__internal_d0132b2f8f9f0838324ba2cf9b0cc14b4873152fce24564ca666038b2fb809ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d0132b2f8f9f0838324ba2cf9b0cc14b4873152fce24564ca666038b2fb809ca->leave($__internal_d0132b2f8f9f0838324ba2cf9b0cc14b4873152fce24564ca666038b2fb809ca_prof);

        
        $__internal_b4110b752c1f918254cf1ef57d0b3e9b4fd86d1368435a84770ce23f78514d75->leave($__internal_b4110b752c1f918254cf1ef57d0b3e9b4fd86d1368435a84770ce23f78514d75_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_b929285e1fff868966519b06b293f2d44bd530bdcdc0330c880c2e8d73f27d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b929285e1fff868966519b06b293f2d44bd530bdcdc0330c880c2e8d73f27d49->enter($__internal_b929285e1fff868966519b06b293f2d44bd530bdcdc0330c880c2e8d73f27d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_bf3527042b1737cd9d1c53f82c56c0da7cf472b9522069f49e96a1a4ddfe8cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3527042b1737cd9d1c53f82c56c0da7cf472b9522069f49e96a1a4ddfe8cc9->enter($__internal_bf3527042b1737cd9d1c53f82c56c0da7cf472b9522069f49e96a1a4ddfe8cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_bf3527042b1737cd9d1c53f82c56c0da7cf472b9522069f49e96a1a4ddfe8cc9->leave($__internal_bf3527042b1737cd9d1c53f82c56c0da7cf472b9522069f49e96a1a4ddfe8cc9_prof);

        
        $__internal_b929285e1fff868966519b06b293f2d44bd530bdcdc0330c880c2e8d73f27d49->leave($__internal_b929285e1fff868966519b06b293f2d44bd530bdcdc0330c880c2e8d73f27d49_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fcae63a15353a9781f99c41b4a552a25b67069cbbeeadd13fc54a8476dc00e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcae63a15353a9781f99c41b4a552a25b67069cbbeeadd13fc54a8476dc00e9b->enter($__internal_fcae63a15353a9781f99c41b4a552a25b67069cbbeeadd13fc54a8476dc00e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4e8f814c6fdf1125322c57fe10ce2f379ec9f8474417202945fd69518bc81743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8f814c6fdf1125322c57fe10ce2f379ec9f8474417202945fd69518bc81743->enter($__internal_4e8f814c6fdf1125322c57fe10ce2f379ec9f8474417202945fd69518bc81743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_4e8f814c6fdf1125322c57fe10ce2f379ec9f8474417202945fd69518bc81743->leave($__internal_4e8f814c6fdf1125322c57fe10ce2f379ec9f8474417202945fd69518bc81743_prof);

        
        $__internal_fcae63a15353a9781f99c41b4a552a25b67069cbbeeadd13fc54a8476dc00e9b->leave($__internal_fcae63a15353a9781f99c41b4a552a25b67069cbbeeadd13fc54a8476dc00e9b_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_108e58d08c00ca86609ba4c6da1cc62beb00b7c5a9b49359d0afa2ef334c68e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108e58d08c00ca86609ba4c6da1cc62beb00b7c5a9b49359d0afa2ef334c68e8->enter($__internal_108e58d08c00ca86609ba4c6da1cc62beb00b7c5a9b49359d0afa2ef334c68e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0b72a3bb726d3da29cecdafb58889ed11eb05f04f54354f36d64adff999e86d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b72a3bb726d3da29cecdafb58889ed11eb05f04f54354f36d64adff999e86d8->enter($__internal_0b72a3bb726d3da29cecdafb58889ed11eb05f04f54354f36d64adff999e86d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_0b72a3bb726d3da29cecdafb58889ed11eb05f04f54354f36d64adff999e86d8->leave($__internal_0b72a3bb726d3da29cecdafb58889ed11eb05f04f54354f36d64adff999e86d8_prof);

        
        $__internal_108e58d08c00ca86609ba4c6da1cc62beb00b7c5a9b49359d0afa2ef334c68e8->leave($__internal_108e58d08c00ca86609ba4c6da1cc62beb00b7c5a9b49359d0afa2ef334c68e8_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_a32a37431d11e39da210e9f0b0b43132c65df1aafad314cadee1001be89aacc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a32a37431d11e39da210e9f0b0b43132c65df1aafad314cadee1001be89aacc7->enter($__internal_a32a37431d11e39da210e9f0b0b43132c65df1aafad314cadee1001be89aacc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_57d866931082d38f859f323d7503187723fdd95bb4286bda865ae5a32cbcf3cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57d866931082d38f859f323d7503187723fdd95bb4286bda865ae5a32cbcf3cb->enter($__internal_57d866931082d38f859f323d7503187723fdd95bb4286bda865ae5a32cbcf3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_57d866931082d38f859f323d7503187723fdd95bb4286bda865ae5a32cbcf3cb->leave($__internal_57d866931082d38f859f323d7503187723fdd95bb4286bda865ae5a32cbcf3cb_prof);

        
        $__internal_a32a37431d11e39da210e9f0b0b43132c65df1aafad314cadee1001be89aacc7->leave($__internal_a32a37431d11e39da210e9f0b0b43132c65df1aafad314cadee1001be89aacc7_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_cef9a5588cb2c9de255f6053d13a1fad3d768eac99e79eb3a3d2a7b098f2ded8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cef9a5588cb2c9de255f6053d13a1fad3d768eac99e79eb3a3d2a7b098f2ded8->enter($__internal_cef9a5588cb2c9de255f6053d13a1fad3d768eac99e79eb3a3d2a7b098f2ded8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_aed1916e12c78f137cb1ae0fe68b96ab578fb2707fc0e897db2692c18ba1d48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed1916e12c78f137cb1ae0fe68b96ab578fb2707fc0e897db2692c18ba1d48a->enter($__internal_aed1916e12c78f137cb1ae0fe68b96ab578fb2707fc0e897db2692c18ba1d48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aed1916e12c78f137cb1ae0fe68b96ab578fb2707fc0e897db2692c18ba1d48a->leave($__internal_aed1916e12c78f137cb1ae0fe68b96ab578fb2707fc0e897db2692c18ba1d48a_prof);

        
        $__internal_cef9a5588cb2c9de255f6053d13a1fad3d768eac99e79eb3a3d2a7b098f2ded8->leave($__internal_cef9a5588cb2c9de255f6053d13a1fad3d768eac99e79eb3a3d2a7b098f2ded8_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_a51c9663a850a3d2c80d45e60deb470db6d4ba9da63dee851800003124c40b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51c9663a850a3d2c80d45e60deb470db6d4ba9da63dee851800003124c40b66->enter($__internal_a51c9663a850a3d2c80d45e60deb470db6d4ba9da63dee851800003124c40b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_942c6716ff9b0d118230069b103e7d7adee575d9f848db922214870cb8b24205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942c6716ff9b0d118230069b103e7d7adee575d9f848db922214870cb8b24205->enter($__internal_942c6716ff9b0d118230069b103e7d7adee575d9f848db922214870cb8b24205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_942c6716ff9b0d118230069b103e7d7adee575d9f848db922214870cb8b24205->leave($__internal_942c6716ff9b0d118230069b103e7d7adee575d9f848db922214870cb8b24205_prof);

        
        $__internal_a51c9663a850a3d2c80d45e60deb470db6d4ba9da63dee851800003124c40b66->leave($__internal_a51c9663a850a3d2c80d45e60deb470db6d4ba9da63dee851800003124c40b66_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_1cb45650bd1ed8f6e74f2fe265802a59fa1895aed8a8481bc43f6f693e11aa8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb45650bd1ed8f6e74f2fe265802a59fa1895aed8a8481bc43f6f693e11aa8f->enter($__internal_1cb45650bd1ed8f6e74f2fe265802a59fa1895aed8a8481bc43f6f693e11aa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_c048439ebe5b197e0b44d7fa1da5705cfd06e0921cf630e9138000ebf2c20c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c048439ebe5b197e0b44d7fa1da5705cfd06e0921cf630e9138000ebf2c20c7c->enter($__internal_c048439ebe5b197e0b44d7fa1da5705cfd06e0921cf630e9138000ebf2c20c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c048439ebe5b197e0b44d7fa1da5705cfd06e0921cf630e9138000ebf2c20c7c->leave($__internal_c048439ebe5b197e0b44d7fa1da5705cfd06e0921cf630e9138000ebf2c20c7c_prof);

        
        $__internal_1cb45650bd1ed8f6e74f2fe265802a59fa1895aed8a8481bc43f6f693e11aa8f->leave($__internal_1cb45650bd1ed8f6e74f2fe265802a59fa1895aed8a8481bc43f6f693e11aa8f_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_bca51e994382e8f7432e242c077bdcd1d326620340276491b2e1cb5444ea1636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bca51e994382e8f7432e242c077bdcd1d326620340276491b2e1cb5444ea1636->enter($__internal_bca51e994382e8f7432e242c077bdcd1d326620340276491b2e1cb5444ea1636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6b89d2670352b6417aa02f5a2f5d99a0fca175585fd16d013b33e3e06d178af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b89d2670352b6417aa02f5a2f5d99a0fca175585fd16d013b33e3e06d178af1->enter($__internal_6b89d2670352b6417aa02f5a2f5d99a0fca175585fd16d013b33e3e06d178af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_6b89d2670352b6417aa02f5a2f5d99a0fca175585fd16d013b33e3e06d178af1->leave($__internal_6b89d2670352b6417aa02f5a2f5d99a0fca175585fd16d013b33e3e06d178af1_prof);

        
        $__internal_bca51e994382e8f7432e242c077bdcd1d326620340276491b2e1cb5444ea1636->leave($__internal_bca51e994382e8f7432e242c077bdcd1d326620340276491b2e1cb5444ea1636_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_5ffa0676fa5b3203d4e0217822dd3279a570ec2bf79b0e7eac926de6865aa7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffa0676fa5b3203d4e0217822dd3279a570ec2bf79b0e7eac926de6865aa7dc->enter($__internal_5ffa0676fa5b3203d4e0217822dd3279a570ec2bf79b0e7eac926de6865aa7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_236a5615c8cd69a7f30866b489bad3183011dd42bdb49731e3a6f39b6bb05058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236a5615c8cd69a7f30866b489bad3183011dd42bdb49731e3a6f39b6bb05058->enter($__internal_236a5615c8cd69a7f30866b489bad3183011dd42bdb49731e3a6f39b6bb05058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_236a5615c8cd69a7f30866b489bad3183011dd42bdb49731e3a6f39b6bb05058->leave($__internal_236a5615c8cd69a7f30866b489bad3183011dd42bdb49731e3a6f39b6bb05058_prof);

        
        $__internal_5ffa0676fa5b3203d4e0217822dd3279a570ec2bf79b0e7eac926de6865aa7dc->leave($__internal_5ffa0676fa5b3203d4e0217822dd3279a570ec2bf79b0e7eac926de6865aa7dc_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_87401fe186fcf438a8376f00fa1f9d90cbb335b755b37218ebe90f5a130359e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87401fe186fcf438a8376f00fa1f9d90cbb335b755b37218ebe90f5a130359e7->enter($__internal_87401fe186fcf438a8376f00fa1f9d90cbb335b755b37218ebe90f5a130359e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5135f659c438403349a9a7bc5baf634c3233230cddbec244bb69c35c2f1415e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5135f659c438403349a9a7bc5baf634c3233230cddbec244bb69c35c2f1415e5->enter($__internal_5135f659c438403349a9a7bc5baf634c3233230cddbec244bb69c35c2f1415e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_5135f659c438403349a9a7bc5baf634c3233230cddbec244bb69c35c2f1415e5->leave($__internal_5135f659c438403349a9a7bc5baf634c3233230cddbec244bb69c35c2f1415e5_prof);

        
        $__internal_87401fe186fcf438a8376f00fa1f9d90cbb335b755b37218ebe90f5a130359e7->leave($__internal_87401fe186fcf438a8376f00fa1f9d90cbb335b755b37218ebe90f5a130359e7_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
