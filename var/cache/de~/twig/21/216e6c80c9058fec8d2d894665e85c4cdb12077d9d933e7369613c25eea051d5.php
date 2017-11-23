<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_37a2b8842ee708c26f6fa6e486014cd70fc5b8eb23a3963d7365c6bde6c61abc extends Twig_Template
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
        $__internal_eb77cfc33403a5c27d2022faa8717d5654e20ef118d627c91fe72bb67c1e5811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb77cfc33403a5c27d2022faa8717d5654e20ef118d627c91fe72bb67c1e5811->enter($__internal_eb77cfc33403a5c27d2022faa8717d5654e20ef118d627c91fe72bb67c1e5811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_1fe3ea71caef3f891987b410ef163b80077805e7655507a2c35cf5d1a3e1e76e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe3ea71caef3f891987b410ef163b80077805e7655507a2c35cf5d1a3e1e76e->enter($__internal_1fe3ea71caef3f891987b410ef163b80077805e7655507a2c35cf5d1a3e1e76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_eb77cfc33403a5c27d2022faa8717d5654e20ef118d627c91fe72bb67c1e5811->leave($__internal_eb77cfc33403a5c27d2022faa8717d5654e20ef118d627c91fe72bb67c1e5811_prof);

        
        $__internal_1fe3ea71caef3f891987b410ef163b80077805e7655507a2c35cf5d1a3e1e76e->leave($__internal_1fe3ea71caef3f891987b410ef163b80077805e7655507a2c35cf5d1a3e1e76e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_050b9d2c61373d252e0cd5e1b9f996dc1a5d97def7b0f4866746b369fc1f6527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050b9d2c61373d252e0cd5e1b9f996dc1a5d97def7b0f4866746b369fc1f6527->enter($__internal_050b9d2c61373d252e0cd5e1b9f996dc1a5d97def7b0f4866746b369fc1f6527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5140b99733671aa8c356b093f61076236033253bf6a75918302d00cc8662b2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5140b99733671aa8c356b093f61076236033253bf6a75918302d00cc8662b2c4->enter($__internal_5140b99733671aa8c356b093f61076236033253bf6a75918302d00cc8662b2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5140b99733671aa8c356b093f61076236033253bf6a75918302d00cc8662b2c4->leave($__internal_5140b99733671aa8c356b093f61076236033253bf6a75918302d00cc8662b2c4_prof);

        
        $__internal_050b9d2c61373d252e0cd5e1b9f996dc1a5d97def7b0f4866746b369fc1f6527->leave($__internal_050b9d2c61373d252e0cd5e1b9f996dc1a5d97def7b0f4866746b369fc1f6527_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_93460dd2d55dbc68f9fb844de16677b7e0d33fb71d9a25c5786edadcb54de794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93460dd2d55dbc68f9fb844de16677b7e0d33fb71d9a25c5786edadcb54de794->enter($__internal_93460dd2d55dbc68f9fb844de16677b7e0d33fb71d9a25c5786edadcb54de794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_c1f9dc852f8f7c596d2268d593d6aca4e057de5da60b6367013c4f178e12cad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f9dc852f8f7c596d2268d593d6aca4e057de5da60b6367013c4f178e12cad5->enter($__internal_c1f9dc852f8f7c596d2268d593d6aca4e057de5da60b6367013c4f178e12cad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_c1f9dc852f8f7c596d2268d593d6aca4e057de5da60b6367013c4f178e12cad5->leave($__internal_c1f9dc852f8f7c596d2268d593d6aca4e057de5da60b6367013c4f178e12cad5_prof);

        
        $__internal_93460dd2d55dbc68f9fb844de16677b7e0d33fb71d9a25c5786edadcb54de794->leave($__internal_93460dd2d55dbc68f9fb844de16677b7e0d33fb71d9a25c5786edadcb54de794_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f84ee5b4f3fc02848bb55651a40465543fb9cda853f8719c78526e9be1f1dcac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84ee5b4f3fc02848bb55651a40465543fb9cda853f8719c78526e9be1f1dcac->enter($__internal_f84ee5b4f3fc02848bb55651a40465543fb9cda853f8719c78526e9be1f1dcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_626f22f1d59e86fbeea5121cbd5289b7a9603aca4e011986886a3a4a2f3885d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626f22f1d59e86fbeea5121cbd5289b7a9603aca4e011986886a3a4a2f3885d7->enter($__internal_626f22f1d59e86fbeea5121cbd5289b7a9603aca4e011986886a3a4a2f3885d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_626f22f1d59e86fbeea5121cbd5289b7a9603aca4e011986886a3a4a2f3885d7->leave($__internal_626f22f1d59e86fbeea5121cbd5289b7a9603aca4e011986886a3a4a2f3885d7_prof);

        
        $__internal_f84ee5b4f3fc02848bb55651a40465543fb9cda853f8719c78526e9be1f1dcac->leave($__internal_f84ee5b4f3fc02848bb55651a40465543fb9cda853f8719c78526e9be1f1dcac_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d5d3eeff3c20d0a9b70706985f83d2c2a134d97778ba77402d934b3d3196a728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d3eeff3c20d0a9b70706985f83d2c2a134d97778ba77402d934b3d3196a728->enter($__internal_d5d3eeff3c20d0a9b70706985f83d2c2a134d97778ba77402d934b3d3196a728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_4d098707a366a1deb81df1af1d1143cc809bc33eddc4519cdbc4ab5d7d461a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d098707a366a1deb81df1af1d1143cc809bc33eddc4519cdbc4ab5d7d461a48->enter($__internal_4d098707a366a1deb81df1af1d1143cc809bc33eddc4519cdbc4ab5d7d461a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_ea0723737d44fbdaccff339700c65664f9424833af30726ac3d02f38b51e7818 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_f6ed38f5db4d51fd2900c18aab8ac70dd2ab07cd59144cef3798a7d7d7079c3f = "{{") && ('' === $__internal_f6ed38f5db4d51fd2900c18aab8ac70dd2ab07cd59144cef3798a7d7d7079c3f || 0 === strpos($__internal_ea0723737d44fbdaccff339700c65664f9424833af30726ac3d02f38b51e7818, $__internal_f6ed38f5db4d51fd2900c18aab8ac70dd2ab07cd59144cef3798a7d7d7079c3f)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_4d098707a366a1deb81df1af1d1143cc809bc33eddc4519cdbc4ab5d7d461a48->leave($__internal_4d098707a366a1deb81df1af1d1143cc809bc33eddc4519cdbc4ab5d7d461a48_prof);

        
        $__internal_d5d3eeff3c20d0a9b70706985f83d2c2a134d97778ba77402d934b3d3196a728->leave($__internal_d5d3eeff3c20d0a9b70706985f83d2c2a134d97778ba77402d934b3d3196a728_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_90d4e5c1fe8cf417885b77f018f38fd579ef3815e01f8d48e353cb406591f457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90d4e5c1fe8cf417885b77f018f38fd579ef3815e01f8d48e353cb406591f457->enter($__internal_90d4e5c1fe8cf417885b77f018f38fd579ef3815e01f8d48e353cb406591f457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_d77ca5f828b6e2926d6a0e024fcbdc3587c51676c5f4f3cfa8edf8ecb6562417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77ca5f828b6e2926d6a0e024fcbdc3587c51676c5f4f3cfa8edf8ecb6562417->enter($__internal_d77ca5f828b6e2926d6a0e024fcbdc3587c51676c5f4f3cfa8edf8ecb6562417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_d77ca5f828b6e2926d6a0e024fcbdc3587c51676c5f4f3cfa8edf8ecb6562417->leave($__internal_d77ca5f828b6e2926d6a0e024fcbdc3587c51676c5f4f3cfa8edf8ecb6562417_prof);

        
        $__internal_90d4e5c1fe8cf417885b77f018f38fd579ef3815e01f8d48e353cb406591f457->leave($__internal_90d4e5c1fe8cf417885b77f018f38fd579ef3815e01f8d48e353cb406591f457_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_f5ea3d8ce9bdc119abcd37c8416a0f6847bdc58c8c75da3dc364d625ce8d8460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ea3d8ce9bdc119abcd37c8416a0f6847bdc58c8c75da3dc364d625ce8d8460->enter($__internal_f5ea3d8ce9bdc119abcd37c8416a0f6847bdc58c8c75da3dc364d625ce8d8460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_f0f247a3fd94ba73467948d47c6e63cdb2c4cc60cac737628587d4382d044303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f247a3fd94ba73467948d47c6e63cdb2c4cc60cac737628587d4382d044303->enter($__internal_f0f247a3fd94ba73467948d47c6e63cdb2c4cc60cac737628587d4382d044303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_f0f247a3fd94ba73467948d47c6e63cdb2c4cc60cac737628587d4382d044303->leave($__internal_f0f247a3fd94ba73467948d47c6e63cdb2c4cc60cac737628587d4382d044303_prof);

        
        $__internal_f5ea3d8ce9bdc119abcd37c8416a0f6847bdc58c8c75da3dc364d625ce8d8460->leave($__internal_f5ea3d8ce9bdc119abcd37c8416a0f6847bdc58c8c75da3dc364d625ce8d8460_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_ab7053d9d7dcbc48839d7cad6d58690d0ed1fc67b7dec7632ce8ac0eae3713b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab7053d9d7dcbc48839d7cad6d58690d0ed1fc67b7dec7632ce8ac0eae3713b9->enter($__internal_ab7053d9d7dcbc48839d7cad6d58690d0ed1fc67b7dec7632ce8ac0eae3713b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_54f0f8a8ac13fe4170c6a5f1f4df49686ee4466d1e3bc71e4dadb6b6133079c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f0f8a8ac13fe4170c6a5f1f4df49686ee4466d1e3bc71e4dadb6b6133079c0->enter($__internal_54f0f8a8ac13fe4170c6a5f1f4df49686ee4466d1e3bc71e4dadb6b6133079c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_54f0f8a8ac13fe4170c6a5f1f4df49686ee4466d1e3bc71e4dadb6b6133079c0->leave($__internal_54f0f8a8ac13fe4170c6a5f1f4df49686ee4466d1e3bc71e4dadb6b6133079c0_prof);

        
        $__internal_ab7053d9d7dcbc48839d7cad6d58690d0ed1fc67b7dec7632ce8ac0eae3713b9->leave($__internal_ab7053d9d7dcbc48839d7cad6d58690d0ed1fc67b7dec7632ce8ac0eae3713b9_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_cf79e1e567e8856eb69da96974d9a1c7d42529512b6011d6d4250e8bb414e399 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf79e1e567e8856eb69da96974d9a1c7d42529512b6011d6d4250e8bb414e399->enter($__internal_cf79e1e567e8856eb69da96974d9a1c7d42529512b6011d6d4250e8bb414e399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_bf443f32032f35458604ac14a2d5c24b6fb5ef22d4586c9896680cd0b48cc8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf443f32032f35458604ac14a2d5c24b6fb5ef22d4586c9896680cd0b48cc8c5->enter($__internal_bf443f32032f35458604ac14a2d5c24b6fb5ef22d4586c9896680cd0b48cc8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_bf443f32032f35458604ac14a2d5c24b6fb5ef22d4586c9896680cd0b48cc8c5->leave($__internal_bf443f32032f35458604ac14a2d5c24b6fb5ef22d4586c9896680cd0b48cc8c5_prof);

        
        $__internal_cf79e1e567e8856eb69da96974d9a1c7d42529512b6011d6d4250e8bb414e399->leave($__internal_cf79e1e567e8856eb69da96974d9a1c7d42529512b6011d6d4250e8bb414e399_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_58fa1205af52ff2deaec4e04540ec6fe993971d12fe59a0054492d4a548e558f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58fa1205af52ff2deaec4e04540ec6fe993971d12fe59a0054492d4a548e558f->enter($__internal_58fa1205af52ff2deaec4e04540ec6fe993971d12fe59a0054492d4a548e558f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_05c41a145be0aca3e3f666959ef72492eb7bb4d5eaffb272f6fd7382275322df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c41a145be0aca3e3f666959ef72492eb7bb4d5eaffb272f6fd7382275322df->enter($__internal_05c41a145be0aca3e3f666959ef72492eb7bb4d5eaffb272f6fd7382275322df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_05c41a145be0aca3e3f666959ef72492eb7bb4d5eaffb272f6fd7382275322df->leave($__internal_05c41a145be0aca3e3f666959ef72492eb7bb4d5eaffb272f6fd7382275322df_prof);

        
        $__internal_58fa1205af52ff2deaec4e04540ec6fe993971d12fe59a0054492d4a548e558f->leave($__internal_58fa1205af52ff2deaec4e04540ec6fe993971d12fe59a0054492d4a548e558f_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_2ed2f123c16c0745984a0149bae1fda9cbc299733b4e9d6c697ccd33bc157e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed2f123c16c0745984a0149bae1fda9cbc299733b4e9d6c697ccd33bc157e1e->enter($__internal_2ed2f123c16c0745984a0149bae1fda9cbc299733b4e9d6c697ccd33bc157e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_9e506426fde70e9216c1c27e9e7662c4661b8835900f05628027ea2828f7b776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e506426fde70e9216c1c27e9e7662c4661b8835900f05628027ea2828f7b776->enter($__internal_9e506426fde70e9216c1c27e9e7662c4661b8835900f05628027ea2828f7b776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_9e506426fde70e9216c1c27e9e7662c4661b8835900f05628027ea2828f7b776->leave($__internal_9e506426fde70e9216c1c27e9e7662c4661b8835900f05628027ea2828f7b776_prof);

        
        $__internal_2ed2f123c16c0745984a0149bae1fda9cbc299733b4e9d6c697ccd33bc157e1e->leave($__internal_2ed2f123c16c0745984a0149bae1fda9cbc299733b4e9d6c697ccd33bc157e1e_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c2e667aa75df07084c1506827eb4193ba506f3241746c39912d2178b5c9c4a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2e667aa75df07084c1506827eb4193ba506f3241746c39912d2178b5c9c4a40->enter($__internal_c2e667aa75df07084c1506827eb4193ba506f3241746c39912d2178b5c9c4a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_25ca827295aae0e1796159d2c793b414711d1365db2dbb499042a283c5810314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25ca827295aae0e1796159d2c793b414711d1365db2dbb499042a283c5810314->enter($__internal_25ca827295aae0e1796159d2c793b414711d1365db2dbb499042a283c5810314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_25ca827295aae0e1796159d2c793b414711d1365db2dbb499042a283c5810314->leave($__internal_25ca827295aae0e1796159d2c793b414711d1365db2dbb499042a283c5810314_prof);

        
        $__internal_c2e667aa75df07084c1506827eb4193ba506f3241746c39912d2178b5c9c4a40->leave($__internal_c2e667aa75df07084c1506827eb4193ba506f3241746c39912d2178b5c9c4a40_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_0c42a5290110cddabf6b736815fd5d2b1e4c505d8ae6f104239ccfed574f9b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c42a5290110cddabf6b736815fd5d2b1e4c505d8ae6f104239ccfed574f9b0a->enter($__internal_0c42a5290110cddabf6b736815fd5d2b1e4c505d8ae6f104239ccfed574f9b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_d16d384d4b7e2cdd59435502bfac3b0a79761fe4fee82c47b5d465a978077f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16d384d4b7e2cdd59435502bfac3b0a79761fe4fee82c47b5d465a978077f54->enter($__internal_d16d384d4b7e2cdd59435502bfac3b0a79761fe4fee82c47b5d465a978077f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_d16d384d4b7e2cdd59435502bfac3b0a79761fe4fee82c47b5d465a978077f54->leave($__internal_d16d384d4b7e2cdd59435502bfac3b0a79761fe4fee82c47b5d465a978077f54_prof);

        
        $__internal_0c42a5290110cddabf6b736815fd5d2b1e4c505d8ae6f104239ccfed574f9b0a->leave($__internal_0c42a5290110cddabf6b736815fd5d2b1e4c505d8ae6f104239ccfed574f9b0a_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c19030939896946d061ff98b35a62ab90adacab2ea834430bfa8c476cc205730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19030939896946d061ff98b35a62ab90adacab2ea834430bfa8c476cc205730->enter($__internal_c19030939896946d061ff98b35a62ab90adacab2ea834430bfa8c476cc205730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_bd5e685a03012995f60898d4e0a7b91d807e56d1e70db1e3af0f34f59406828d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5e685a03012995f60898d4e0a7b91d807e56d1e70db1e3af0f34f59406828d->enter($__internal_bd5e685a03012995f60898d4e0a7b91d807e56d1e70db1e3af0f34f59406828d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_bd5e685a03012995f60898d4e0a7b91d807e56d1e70db1e3af0f34f59406828d->leave($__internal_bd5e685a03012995f60898d4e0a7b91d807e56d1e70db1e3af0f34f59406828d_prof);

        
        $__internal_c19030939896946d061ff98b35a62ab90adacab2ea834430bfa8c476cc205730->leave($__internal_c19030939896946d061ff98b35a62ab90adacab2ea834430bfa8c476cc205730_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_81441550da91fbaad899aa77b34dbe3f7dc74b290dcd480ce7f8da3aad6a11a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81441550da91fbaad899aa77b34dbe3f7dc74b290dcd480ce7f8da3aad6a11a4->enter($__internal_81441550da91fbaad899aa77b34dbe3f7dc74b290dcd480ce7f8da3aad6a11a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7c8fdee6590189df339b63a356b0d48b8a2d14eba24ddaaefd4a5f7b9b06abbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8fdee6590189df339b63a356b0d48b8a2d14eba24ddaaefd4a5f7b9b06abbd->enter($__internal_7c8fdee6590189df339b63a356b0d48b8a2d14eba24ddaaefd4a5f7b9b06abbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7c8fdee6590189df339b63a356b0d48b8a2d14eba24ddaaefd4a5f7b9b06abbd->leave($__internal_7c8fdee6590189df339b63a356b0d48b8a2d14eba24ddaaefd4a5f7b9b06abbd_prof);

        
        $__internal_81441550da91fbaad899aa77b34dbe3f7dc74b290dcd480ce7f8da3aad6a11a4->leave($__internal_81441550da91fbaad899aa77b34dbe3f7dc74b290dcd480ce7f8da3aad6a11a4_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7be3eebd71bacfb05d49943504a414e6965eb50b23c258f35b385d2e2ddaa9a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7be3eebd71bacfb05d49943504a414e6965eb50b23c258f35b385d2e2ddaa9a0->enter($__internal_7be3eebd71bacfb05d49943504a414e6965eb50b23c258f35b385d2e2ddaa9a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_4a18b5e1bb419b6e1b32775acb5057e61adaacb58cdaa0dcf35bd4917df770a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a18b5e1bb419b6e1b32775acb5057e61adaacb58cdaa0dcf35bd4917df770a1->enter($__internal_4a18b5e1bb419b6e1b32775acb5057e61adaacb58cdaa0dcf35bd4917df770a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_4a18b5e1bb419b6e1b32775acb5057e61adaacb58cdaa0dcf35bd4917df770a1->leave($__internal_4a18b5e1bb419b6e1b32775acb5057e61adaacb58cdaa0dcf35bd4917df770a1_prof);

        
        $__internal_7be3eebd71bacfb05d49943504a414e6965eb50b23c258f35b385d2e2ddaa9a0->leave($__internal_7be3eebd71bacfb05d49943504a414e6965eb50b23c258f35b385d2e2ddaa9a0_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c50491383bcee74f7320c82db561010e85821cbce8f151fd31ac3ce7fbac4f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50491383bcee74f7320c82db561010e85821cbce8f151fd31ac3ce7fbac4f83->enter($__internal_c50491383bcee74f7320c82db561010e85821cbce8f151fd31ac3ce7fbac4f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_11ccc6426502b7d878b9c86a6cd03e3888dc24076624fa50061f00383c28974a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ccc6426502b7d878b9c86a6cd03e3888dc24076624fa50061f00383c28974a->enter($__internal_11ccc6426502b7d878b9c86a6cd03e3888dc24076624fa50061f00383c28974a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_11ccc6426502b7d878b9c86a6cd03e3888dc24076624fa50061f00383c28974a->leave($__internal_11ccc6426502b7d878b9c86a6cd03e3888dc24076624fa50061f00383c28974a_prof);

        
        $__internal_c50491383bcee74f7320c82db561010e85821cbce8f151fd31ac3ce7fbac4f83->leave($__internal_c50491383bcee74f7320c82db561010e85821cbce8f151fd31ac3ce7fbac4f83_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_acd2ce90e4920af2aa51979e1c0a68b6d8a32ec0e9855d343774b272679bc217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd2ce90e4920af2aa51979e1c0a68b6d8a32ec0e9855d343774b272679bc217->enter($__internal_acd2ce90e4920af2aa51979e1c0a68b6d8a32ec0e9855d343774b272679bc217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_01ae925b6e3fda1822f34f5dc52bd2924cb0be83dbdf01501d8b094860d5e819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01ae925b6e3fda1822f34f5dc52bd2924cb0be83dbdf01501d8b094860d5e819->enter($__internal_01ae925b6e3fda1822f34f5dc52bd2924cb0be83dbdf01501d8b094860d5e819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_01ae925b6e3fda1822f34f5dc52bd2924cb0be83dbdf01501d8b094860d5e819->leave($__internal_01ae925b6e3fda1822f34f5dc52bd2924cb0be83dbdf01501d8b094860d5e819_prof);

        
        $__internal_acd2ce90e4920af2aa51979e1c0a68b6d8a32ec0e9855d343774b272679bc217->leave($__internal_acd2ce90e4920af2aa51979e1c0a68b6d8a32ec0e9855d343774b272679bc217_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_786407e7c5c0a50a1f8931475c98e9c3d0d17863e33ae9c6bb6a49a6bb41eeb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786407e7c5c0a50a1f8931475c98e9c3d0d17863e33ae9c6bb6a49a6bb41eeb3->enter($__internal_786407e7c5c0a50a1f8931475c98e9c3d0d17863e33ae9c6bb6a49a6bb41eeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_78097fd2a976530c2b700fd7d4cc7a6e236d88c189635d513c12f84b90c70d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78097fd2a976530c2b700fd7d4cc7a6e236d88c189635d513c12f84b90c70d2c->enter($__internal_78097fd2a976530c2b700fd7d4cc7a6e236d88c189635d513c12f84b90c70d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 213
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_78097fd2a976530c2b700fd7d4cc7a6e236d88c189635d513c12f84b90c70d2c->leave($__internal_78097fd2a976530c2b700fd7d4cc7a6e236d88c189635d513c12f84b90c70d2c_prof);

        
        $__internal_786407e7c5c0a50a1f8931475c98e9c3d0d17863e33ae9c6bb6a49a6bb41eeb3->leave($__internal_786407e7c5c0a50a1f8931475c98e9c3d0d17863e33ae9c6bb6a49a6bb41eeb3_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7091a5fa68056412ac94e8570061f20c4e6461cd28c7e5938daa2fb9a1c4f40d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7091a5fa68056412ac94e8570061f20c4e6461cd28c7e5938daa2fb9a1c4f40d->enter($__internal_7091a5fa68056412ac94e8570061f20c4e6461cd28c7e5938daa2fb9a1c4f40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e70e300192f667fa0a87a75cbc4b8f13fe9dad7795c1727095381eb84821216a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70e300192f667fa0a87a75cbc4b8f13fe9dad7795c1727095381eb84821216a->enter($__internal_e70e300192f667fa0a87a75cbc4b8f13fe9dad7795c1727095381eb84821216a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_e70e300192f667fa0a87a75cbc4b8f13fe9dad7795c1727095381eb84821216a->leave($__internal_e70e300192f667fa0a87a75cbc4b8f13fe9dad7795c1727095381eb84821216a_prof);

        
        $__internal_7091a5fa68056412ac94e8570061f20c4e6461cd28c7e5938daa2fb9a1c4f40d->leave($__internal_7091a5fa68056412ac94e8570061f20c4e6461cd28c7e5938daa2fb9a1c4f40d_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_963bc765784c6e84e24f0e8a48a1e344a71d32e43ec52f099f59600b0b7555f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_963bc765784c6e84e24f0e8a48a1e344a71d32e43ec52f099f59600b0b7555f2->enter($__internal_963bc765784c6e84e24f0e8a48a1e344a71d32e43ec52f099f59600b0b7555f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6f8329e127ec4b331f518bb85111fc0ad2fc4abbd44ba52deffa45e25ee882ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8329e127ec4b331f518bb85111fc0ad2fc4abbd44ba52deffa45e25ee882ba->enter($__internal_6f8329e127ec4b331f518bb85111fc0ad2fc4abbd44ba52deffa45e25ee882ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_6f8329e127ec4b331f518bb85111fc0ad2fc4abbd44ba52deffa45e25ee882ba->leave($__internal_6f8329e127ec4b331f518bb85111fc0ad2fc4abbd44ba52deffa45e25ee882ba_prof);

        
        $__internal_963bc765784c6e84e24f0e8a48a1e344a71d32e43ec52f099f59600b0b7555f2->leave($__internal_963bc765784c6e84e24f0e8a48a1e344a71d32e43ec52f099f59600b0b7555f2_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_4852f8f14e2feb91c8ecdf503ef9a5f986b8904fddaf800e632f2bbf6695a094 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4852f8f14e2feb91c8ecdf503ef9a5f986b8904fddaf800e632f2bbf6695a094->enter($__internal_4852f8f14e2feb91c8ecdf503ef9a5f986b8904fddaf800e632f2bbf6695a094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_8432de31d6ecc44e33c10848104b398f36c6af323390f6e5b56cdcbd43c865c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8432de31d6ecc44e33c10848104b398f36c6af323390f6e5b56cdcbd43c865c0->enter($__internal_8432de31d6ecc44e33c10848104b398f36c6af323390f6e5b56cdcbd43c865c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_8432de31d6ecc44e33c10848104b398f36c6af323390f6e5b56cdcbd43c865c0->leave($__internal_8432de31d6ecc44e33c10848104b398f36c6af323390f6e5b56cdcbd43c865c0_prof);

        
        $__internal_4852f8f14e2feb91c8ecdf503ef9a5f986b8904fddaf800e632f2bbf6695a094->leave($__internal_4852f8f14e2feb91c8ecdf503ef9a5f986b8904fddaf800e632f2bbf6695a094_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6a03b70a8419a138fa750ce848042b3d1bc71ae00d94837a6567f1d2e803dde8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a03b70a8419a138fa750ce848042b3d1bc71ae00d94837a6567f1d2e803dde8->enter($__internal_6a03b70a8419a138fa750ce848042b3d1bc71ae00d94837a6567f1d2e803dde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e52412e0533a088baae134e28ecd963050d535d86e4e39986a95d8b34a1e3cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52412e0533a088baae134e28ecd963050d535d86e4e39986a95d8b34a1e3cfb->enter($__internal_e52412e0533a088baae134e28ecd963050d535d86e4e39986a95d8b34a1e3cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e52412e0533a088baae134e28ecd963050d535d86e4e39986a95d8b34a1e3cfb->leave($__internal_e52412e0533a088baae134e28ecd963050d535d86e4e39986a95d8b34a1e3cfb_prof);

        
        $__internal_6a03b70a8419a138fa750ce848042b3d1bc71ae00d94837a6567f1d2e803dde8->leave($__internal_6a03b70a8419a138fa750ce848042b3d1bc71ae00d94837a6567f1d2e803dde8_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_479bb93f6022cc1d61f6ca3fbb0f14c0b6c1569f62fc01b4a8dc0b731b58dd1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_479bb93f6022cc1d61f6ca3fbb0f14c0b6c1569f62fc01b4a8dc0b731b58dd1f->enter($__internal_479bb93f6022cc1d61f6ca3fbb0f14c0b6c1569f62fc01b4a8dc0b731b58dd1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_18a9806f87e3633258083ea3b302c82eac5f5c348ec4f53af5dd2a23c6015b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18a9806f87e3633258083ea3b302c82eac5f5c348ec4f53af5dd2a23c6015b57->enter($__internal_18a9806f87e3633258083ea3b302c82eac5f5c348ec4f53af5dd2a23c6015b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_18a9806f87e3633258083ea3b302c82eac5f5c348ec4f53af5dd2a23c6015b57->leave($__internal_18a9806f87e3633258083ea3b302c82eac5f5c348ec4f53af5dd2a23c6015b57_prof);

        
        $__internal_479bb93f6022cc1d61f6ca3fbb0f14c0b6c1569f62fc01b4a8dc0b731b58dd1f->leave($__internal_479bb93f6022cc1d61f6ca3fbb0f14c0b6c1569f62fc01b4a8dc0b731b58dd1f_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_cd463f5b0b540de958ad4b7efd84b402352ae765bd6e41547811eceb8661a3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd463f5b0b540de958ad4b7efd84b402352ae765bd6e41547811eceb8661a3a3->enter($__internal_cd463f5b0b540de958ad4b7efd84b402352ae765bd6e41547811eceb8661a3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_33b84cc36c31cb44704e69a196b93e17295988748501baa0a1cfc4f629c9d607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b84cc36c31cb44704e69a196b93e17295988748501baa0a1cfc4f629c9d607->enter($__internal_33b84cc36c31cb44704e69a196b93e17295988748501baa0a1cfc4f629c9d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_33b84cc36c31cb44704e69a196b93e17295988748501baa0a1cfc4f629c9d607->leave($__internal_33b84cc36c31cb44704e69a196b93e17295988748501baa0a1cfc4f629c9d607_prof);

        
        $__internal_cd463f5b0b540de958ad4b7efd84b402352ae765bd6e41547811eceb8661a3a3->leave($__internal_cd463f5b0b540de958ad4b7efd84b402352ae765bd6e41547811eceb8661a3a3_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a9e39a6aeab473340e941963cd0db200106120f060ea079ddf43cbc292581fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e39a6aeab473340e941963cd0db200106120f060ea079ddf43cbc292581fb8->enter($__internal_a9e39a6aeab473340e941963cd0db200106120f060ea079ddf43cbc292581fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5cdcf81f46fdaf8921c567ad6904eee095f53894242523a00b23e3ae1e674f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdcf81f46fdaf8921c567ad6904eee095f53894242523a00b23e3ae1e674f38->enter($__internal_5cdcf81f46fdaf8921c567ad6904eee095f53894242523a00b23e3ae1e674f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_5cdcf81f46fdaf8921c567ad6904eee095f53894242523a00b23e3ae1e674f38->leave($__internal_5cdcf81f46fdaf8921c567ad6904eee095f53894242523a00b23e3ae1e674f38_prof);

        
        $__internal_a9e39a6aeab473340e941963cd0db200106120f060ea079ddf43cbc292581fb8->leave($__internal_a9e39a6aeab473340e941963cd0db200106120f060ea079ddf43cbc292581fb8_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b3d8bcf43f23358aaa88cf92b785e09940c2c91ff1beb4714b0a87fa02948f68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d8bcf43f23358aaa88cf92b785e09940c2c91ff1beb4714b0a87fa02948f68->enter($__internal_b3d8bcf43f23358aaa88cf92b785e09940c2c91ff1beb4714b0a87fa02948f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_9e785c804624d28883079dadd3d00b65753c02fd5877aa5e7cfcfec49ec70545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e785c804624d28883079dadd3d00b65753c02fd5877aa5e7cfcfec49ec70545->enter($__internal_9e785c804624d28883079dadd3d00b65753c02fd5877aa5e7cfcfec49ec70545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_9e785c804624d28883079dadd3d00b65753c02fd5877aa5e7cfcfec49ec70545->leave($__internal_9e785c804624d28883079dadd3d00b65753c02fd5877aa5e7cfcfec49ec70545_prof);

        
        $__internal_b3d8bcf43f23358aaa88cf92b785e09940c2c91ff1beb4714b0a87fa02948f68->leave($__internal_b3d8bcf43f23358aaa88cf92b785e09940c2c91ff1beb4714b0a87fa02948f68_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3a4b45809071a0a13514198d6c647b5e3cfb078826ac7f4df8a4f918695319b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4b45809071a0a13514198d6c647b5e3cfb078826ac7f4df8a4f918695319b5->enter($__internal_3a4b45809071a0a13514198d6c647b5e3cfb078826ac7f4df8a4f918695319b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_d9b1ab15a58b7586ac616c4401c7c0710931ca8dcde2357d061e5cf9b708e194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b1ab15a58b7586ac616c4401c7c0710931ca8dcde2357d061e5cf9b708e194->enter($__internal_d9b1ab15a58b7586ac616c4401c7c0710931ca8dcde2357d061e5cf9b708e194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
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
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_d9b1ab15a58b7586ac616c4401c7c0710931ca8dcde2357d061e5cf9b708e194->leave($__internal_d9b1ab15a58b7586ac616c4401c7c0710931ca8dcde2357d061e5cf9b708e194_prof);

        
        $__internal_3a4b45809071a0a13514198d6c647b5e3cfb078826ac7f4df8a4f918695319b5->leave($__internal_3a4b45809071a0a13514198d6c647b5e3cfb078826ac7f4df8a4f918695319b5_prof);

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
