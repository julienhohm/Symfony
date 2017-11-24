<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_acb45a52ee70b90b49d96d2b9e5659196e1fe27be6dc98ffd3017547487a65be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_004ad2740223fb84f2f7663e902a89b8fc8ec7b429b9c3e1cb65085fd2d343bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004ad2740223fb84f2f7663e902a89b8fc8ec7b429b9c3e1cb65085fd2d343bf->enter($__internal_004ad2740223fb84f2f7663e902a89b8fc8ec7b429b9c3e1cb65085fd2d343bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_0d1cdd90db7f537ff28864815f66974e9e444b8a7d4b4e38c15048df092f0b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1cdd90db7f537ff28864815f66974e9e444b8a7d4b4e38c15048df092f0b2a->enter($__internal_0d1cdd90db7f537ff28864815f66974e9e444b8a7d4b4e38c15048df092f0b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_004ad2740223fb84f2f7663e902a89b8fc8ec7b429b9c3e1cb65085fd2d343bf->leave($__internal_004ad2740223fb84f2f7663e902a89b8fc8ec7b429b9c3e1cb65085fd2d343bf_prof);

        
        $__internal_0d1cdd90db7f537ff28864815f66974e9e444b8a7d4b4e38c15048df092f0b2a->leave($__internal_0d1cdd90db7f537ff28864815f66974e9e444b8a7d4b4e38c15048df092f0b2a_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8a1a98b8bf7a9a0fc98cbab484445509170d74f71a3732fc7beaaf9ea79c7db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1a98b8bf7a9a0fc98cbab484445509170d74f71a3732fc7beaaf9ea79c7db6->enter($__internal_8a1a98b8bf7a9a0fc98cbab484445509170d74f71a3732fc7beaaf9ea79c7db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_92d558894c96f0e88d76b46a0af6c324403c33e953f932611cdb341b8bacdbcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d558894c96f0e88d76b46a0af6c324403c33e953f932611cdb341b8bacdbcc->enter($__internal_92d558894c96f0e88d76b46a0af6c324403c33e953f932611cdb341b8bacdbcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_92d558894c96f0e88d76b46a0af6c324403c33e953f932611cdb341b8bacdbcc->leave($__internal_92d558894c96f0e88d76b46a0af6c324403c33e953f932611cdb341b8bacdbcc_prof);

        
        $__internal_8a1a98b8bf7a9a0fc98cbab484445509170d74f71a3732fc7beaaf9ea79c7db6->leave($__internal_8a1a98b8bf7a9a0fc98cbab484445509170d74f71a3732fc7beaaf9ea79c7db6_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2545df84f6a94185fb14d937e1cd36226f4b3f6dffe5c3b189897e86a00770d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2545df84f6a94185fb14d937e1cd36226f4b3f6dffe5c3b189897e86a00770d1->enter($__internal_2545df84f6a94185fb14d937e1cd36226f4b3f6dffe5c3b189897e86a00770d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_856b5996eacf9fd83ee87a678e9c3d5e09e186b2dd21b21d0aa5fb1226d0440f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_856b5996eacf9fd83ee87a678e9c3d5e09e186b2dd21b21d0aa5fb1226d0440f->enter($__internal_856b5996eacf9fd83ee87a678e9c3d5e09e186b2dd21b21d0aa5fb1226d0440f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_856b5996eacf9fd83ee87a678e9c3d5e09e186b2dd21b21d0aa5fb1226d0440f->leave($__internal_856b5996eacf9fd83ee87a678e9c3d5e09e186b2dd21b21d0aa5fb1226d0440f_prof);

        
        $__internal_2545df84f6a94185fb14d937e1cd36226f4b3f6dffe5c3b189897e86a00770d1->leave($__internal_2545df84f6a94185fb14d937e1cd36226f4b3f6dffe5c3b189897e86a00770d1_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_69d4f68b686da9f41d543523e456ff782faf70aef695cff317a3a60aebfd0010 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d4f68b686da9f41d543523e456ff782faf70aef695cff317a3a60aebfd0010->enter($__internal_69d4f68b686da9f41d543523e456ff782faf70aef695cff317a3a60aebfd0010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_21953b6189178c27fd7e7dc66028d87257c4e05d2fae413764752ab51d7f1fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21953b6189178c27fd7e7dc66028d87257c4e05d2fae413764752ab51d7f1fe1->enter($__internal_21953b6189178c27fd7e7dc66028d87257c4e05d2fae413764752ab51d7f1fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_21953b6189178c27fd7e7dc66028d87257c4e05d2fae413764752ab51d7f1fe1->leave($__internal_21953b6189178c27fd7e7dc66028d87257c4e05d2fae413764752ab51d7f1fe1_prof);

        
        $__internal_69d4f68b686da9f41d543523e456ff782faf70aef695cff317a3a60aebfd0010->leave($__internal_69d4f68b686da9f41d543523e456ff782faf70aef695cff317a3a60aebfd0010_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_99d09aeadf8040b89b507ed4a513815a1f54375add0823b2f724cc240bc943eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d09aeadf8040b89b507ed4a513815a1f54375add0823b2f724cc240bc943eb->enter($__internal_99d09aeadf8040b89b507ed4a513815a1f54375add0823b2f724cc240bc943eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3148c8897c3f274a5d8ce6de6a6308752a126180379ac76cd8351f9876938782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3148c8897c3f274a5d8ce6de6a6308752a126180379ac76cd8351f9876938782->enter($__internal_3148c8897c3f274a5d8ce6de6a6308752a126180379ac76cd8351f9876938782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_3148c8897c3f274a5d8ce6de6a6308752a126180379ac76cd8351f9876938782->leave($__internal_3148c8897c3f274a5d8ce6de6a6308752a126180379ac76cd8351f9876938782_prof);

        
        $__internal_99d09aeadf8040b89b507ed4a513815a1f54375add0823b2f724cc240bc943eb->leave($__internal_99d09aeadf8040b89b507ed4a513815a1f54375add0823b2f724cc240bc943eb_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_fac6d50197a46da1a14b83957c1888ad267ecbbeb59d8b9c3b9124a3bbfbcfe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac6d50197a46da1a14b83957c1888ad267ecbbeb59d8b9c3b9124a3bbfbcfe3->enter($__internal_fac6d50197a46da1a14b83957c1888ad267ecbbeb59d8b9c3b9124a3bbfbcfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_f26e3e5ead36871f060459a2ad9eb2dc7e5073141f02d10db57a478a2f3e6d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26e3e5ead36871f060459a2ad9eb2dc7e5073141f02d10db57a478a2f3e6d4b->enter($__internal_f26e3e5ead36871f060459a2ad9eb2dc7e5073141f02d10db57a478a2f3e6d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_f26e3e5ead36871f060459a2ad9eb2dc7e5073141f02d10db57a478a2f3e6d4b->leave($__internal_f26e3e5ead36871f060459a2ad9eb2dc7e5073141f02d10db57a478a2f3e6d4b_prof);

        
        $__internal_fac6d50197a46da1a14b83957c1888ad267ecbbeb59d8b9c3b9124a3bbfbcfe3->leave($__internal_fac6d50197a46da1a14b83957c1888ad267ecbbeb59d8b9c3b9124a3bbfbcfe3_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2fab022e5f5b784f7b7d88c2975f2497f24840d2434bfaf2f2f140c86d8e1de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fab022e5f5b784f7b7d88c2975f2497f24840d2434bfaf2f2f140c86d8e1de2->enter($__internal_2fab022e5f5b784f7b7d88c2975f2497f24840d2434bfaf2f2f140c86d8e1de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_616fb55329b17f514ea3e5999566640434de985d0cf94217214e3d9276f2cb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616fb55329b17f514ea3e5999566640434de985d0cf94217214e3d9276f2cb55->enter($__internal_616fb55329b17f514ea3e5999566640434de985d0cf94217214e3d9276f2cb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_616fb55329b17f514ea3e5999566640434de985d0cf94217214e3d9276f2cb55->leave($__internal_616fb55329b17f514ea3e5999566640434de985d0cf94217214e3d9276f2cb55_prof);

        
        $__internal_2fab022e5f5b784f7b7d88c2975f2497f24840d2434bfaf2f2f140c86d8e1de2->leave($__internal_2fab022e5f5b784f7b7d88c2975f2497f24840d2434bfaf2f2f140c86d8e1de2_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_5154df180e6a80a28adf46439c6c8e86814719f260ae6a2769ec87acb4b7860f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5154df180e6a80a28adf46439c6c8e86814719f260ae6a2769ec87acb4b7860f->enter($__internal_5154df180e6a80a28adf46439c6c8e86814719f260ae6a2769ec87acb4b7860f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d513feef720a0e8a2db6cf86f3b3b8645fb83bd3a3a85ab1cf98b84f88161471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d513feef720a0e8a2db6cf86f3b3b8645fb83bd3a3a85ab1cf98b84f88161471->enter($__internal_d513feef720a0e8a2db6cf86f3b3b8645fb83bd3a3a85ab1cf98b84f88161471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_d513feef720a0e8a2db6cf86f3b3b8645fb83bd3a3a85ab1cf98b84f88161471->leave($__internal_d513feef720a0e8a2db6cf86f3b3b8645fb83bd3a3a85ab1cf98b84f88161471_prof);

        
        $__internal_5154df180e6a80a28adf46439c6c8e86814719f260ae6a2769ec87acb4b7860f->leave($__internal_5154df180e6a80a28adf46439c6c8e86814719f260ae6a2769ec87acb4b7860f_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_4e820a399671dcfdaa62c881a84f2c520b4ee5b11d79f785c603eb27deda002d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e820a399671dcfdaa62c881a84f2c520b4ee5b11d79f785c603eb27deda002d->enter($__internal_4e820a399671dcfdaa62c881a84f2c520b4ee5b11d79f785c603eb27deda002d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_3591e6c45e8d8d361b563d67941c6b56fc38b1684f47484f353db013ab5f350c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3591e6c45e8d8d361b563d67941c6b56fc38b1684f47484f353db013ab5f350c->enter($__internal_3591e6c45e8d8d361b563d67941c6b56fc38b1684f47484f353db013ab5f350c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_3591e6c45e8d8d361b563d67941c6b56fc38b1684f47484f353db013ab5f350c->leave($__internal_3591e6c45e8d8d361b563d67941c6b56fc38b1684f47484f353db013ab5f350c_prof);

        
        $__internal_4e820a399671dcfdaa62c881a84f2c520b4ee5b11d79f785c603eb27deda002d->leave($__internal_4e820a399671dcfdaa62c881a84f2c520b4ee5b11d79f785c603eb27deda002d_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_246fec28544d1967c5a6c2d14322d6517acf1923cdd901052563f601e30a9ab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246fec28544d1967c5a6c2d14322d6517acf1923cdd901052563f601e30a9ab9->enter($__internal_246fec28544d1967c5a6c2d14322d6517acf1923cdd901052563f601e30a9ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b3fa8bf4c71a2ba7bf5945c73a21045a00605a271142249328f785159675d54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fa8bf4c71a2ba7bf5945c73a21045a00605a271142249328f785159675d54a->enter($__internal_b3fa8bf4c71a2ba7bf5945c73a21045a00605a271142249328f785159675d54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_b3fa8bf4c71a2ba7bf5945c73a21045a00605a271142249328f785159675d54a->leave($__internal_b3fa8bf4c71a2ba7bf5945c73a21045a00605a271142249328f785159675d54a_prof);

        
        $__internal_246fec28544d1967c5a6c2d14322d6517acf1923cdd901052563f601e30a9ab9->leave($__internal_246fec28544d1967c5a6c2d14322d6517acf1923cdd901052563f601e30a9ab9_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_66bfa18114aef1f29d7d05617fd9cceb154271e67f3590681f81ad72d62734eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66bfa18114aef1f29d7d05617fd9cceb154271e67f3590681f81ad72d62734eb->enter($__internal_66bfa18114aef1f29d7d05617fd9cceb154271e67f3590681f81ad72d62734eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_71df128b4070e521cc6affd3c040cb1fdd785c1185e04e44316adc7b474912ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71df128b4070e521cc6affd3c040cb1fdd785c1185e04e44316adc7b474912ef->enter($__internal_71df128b4070e521cc6affd3c040cb1fdd785c1185e04e44316adc7b474912ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_71df128b4070e521cc6affd3c040cb1fdd785c1185e04e44316adc7b474912ef->leave($__internal_71df128b4070e521cc6affd3c040cb1fdd785c1185e04e44316adc7b474912ef_prof);

        
        $__internal_66bfa18114aef1f29d7d05617fd9cceb154271e67f3590681f81ad72d62734eb->leave($__internal_66bfa18114aef1f29d7d05617fd9cceb154271e67f3590681f81ad72d62734eb_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e7d5bd88b6246c554ea1501664fb1cbff3e09d5997f6a8b4d6f6fd1c809aece0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d5bd88b6246c554ea1501664fb1cbff3e09d5997f6a8b4d6f6fd1c809aece0->enter($__internal_e7d5bd88b6246c554ea1501664fb1cbff3e09d5997f6a8b4d6f6fd1c809aece0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_4c711dc476d05efd44767a1e639ee57a1fc751cec9a9345fcfade488838bc3a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c711dc476d05efd44767a1e639ee57a1fc751cec9a9345fcfade488838bc3a9->enter($__internal_4c711dc476d05efd44767a1e639ee57a1fc751cec9a9345fcfade488838bc3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_4c711dc476d05efd44767a1e639ee57a1fc751cec9a9345fcfade488838bc3a9->leave($__internal_4c711dc476d05efd44767a1e639ee57a1fc751cec9a9345fcfade488838bc3a9_prof);

        
        $__internal_e7d5bd88b6246c554ea1501664fb1cbff3e09d5997f6a8b4d6f6fd1c809aece0->leave($__internal_e7d5bd88b6246c554ea1501664fb1cbff3e09d5997f6a8b4d6f6fd1c809aece0_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_fefadc7ea21cadae5d373a0e3e448310e8edd771cbb0f39eeba16a1515d8f5e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefadc7ea21cadae5d373a0e3e448310e8edd771cbb0f39eeba16a1515d8f5e1->enter($__internal_fefadc7ea21cadae5d373a0e3e448310e8edd771cbb0f39eeba16a1515d8f5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_2eba4e2d5f12e518c08593d92685d39d5efb6803c1d8cd1fc9d16acd9ac4c179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eba4e2d5f12e518c08593d92685d39d5efb6803c1d8cd1fc9d16acd9ac4c179->enter($__internal_2eba4e2d5f12e518c08593d92685d39d5efb6803c1d8cd1fc9d16acd9ac4c179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_2eba4e2d5f12e518c08593d92685d39d5efb6803c1d8cd1fc9d16acd9ac4c179->leave($__internal_2eba4e2d5f12e518c08593d92685d39d5efb6803c1d8cd1fc9d16acd9ac4c179_prof);

        
        $__internal_fefadc7ea21cadae5d373a0e3e448310e8edd771cbb0f39eeba16a1515d8f5e1->leave($__internal_fefadc7ea21cadae5d373a0e3e448310e8edd771cbb0f39eeba16a1515d8f5e1_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_3ad00802095a4e281e2fa02ae3af378d34e3bda0449ecdef62395e5962e0c35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ad00802095a4e281e2fa02ae3af378d34e3bda0449ecdef62395e5962e0c35f->enter($__internal_3ad00802095a4e281e2fa02ae3af378d34e3bda0449ecdef62395e5962e0c35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8782456d07fefc514a677627deb9a19b46139c703c88957850dc44e406f0a4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8782456d07fefc514a677627deb9a19b46139c703c88957850dc44e406f0a4bb->enter($__internal_8782456d07fefc514a677627deb9a19b46139c703c88957850dc44e406f0a4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8782456d07fefc514a677627deb9a19b46139c703c88957850dc44e406f0a4bb->leave($__internal_8782456d07fefc514a677627deb9a19b46139c703c88957850dc44e406f0a4bb_prof);

        
        $__internal_3ad00802095a4e281e2fa02ae3af378d34e3bda0449ecdef62395e5962e0c35f->leave($__internal_3ad00802095a4e281e2fa02ae3af378d34e3bda0449ecdef62395e5962e0c35f_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_9739d2f9bd77084e71f41af46bbfbb6ebd02c2aa91f205aee08f0176343d61b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9739d2f9bd77084e71f41af46bbfbb6ebd02c2aa91f205aee08f0176343d61b1->enter($__internal_9739d2f9bd77084e71f41af46bbfbb6ebd02c2aa91f205aee08f0176343d61b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_fa66c20d5fa3cf1858cb7936c132ef414c1ac025bf44dd16922e53fcf03de30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa66c20d5fa3cf1858cb7936c132ef414c1ac025bf44dd16922e53fcf03de30e->enter($__internal_fa66c20d5fa3cf1858cb7936c132ef414c1ac025bf44dd16922e53fcf03de30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_fa66c20d5fa3cf1858cb7936c132ef414c1ac025bf44dd16922e53fcf03de30e->leave($__internal_fa66c20d5fa3cf1858cb7936c132ef414c1ac025bf44dd16922e53fcf03de30e_prof);

        
        $__internal_9739d2f9bd77084e71f41af46bbfbb6ebd02c2aa91f205aee08f0176343d61b1->leave($__internal_9739d2f9bd77084e71f41af46bbfbb6ebd02c2aa91f205aee08f0176343d61b1_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_cc7b3a68838b713223a6e99e75702f89d94b0c877451b92c36a4ee961f247f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc7b3a68838b713223a6e99e75702f89d94b0c877451b92c36a4ee961f247f01->enter($__internal_cc7b3a68838b713223a6e99e75702f89d94b0c877451b92c36a4ee961f247f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3418619dbcd13dabe906f6ea77ad0cb07cc5f9b1a42d979c1afba36449a8bc8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3418619dbcd13dabe906f6ea77ad0cb07cc5f9b1a42d979c1afba36449a8bc8c->enter($__internal_3418619dbcd13dabe906f6ea77ad0cb07cc5f9b1a42d979c1afba36449a8bc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3418619dbcd13dabe906f6ea77ad0cb07cc5f9b1a42d979c1afba36449a8bc8c->leave($__internal_3418619dbcd13dabe906f6ea77ad0cb07cc5f9b1a42d979c1afba36449a8bc8c_prof);

        
        $__internal_cc7b3a68838b713223a6e99e75702f89d94b0c877451b92c36a4ee961f247f01->leave($__internal_cc7b3a68838b713223a6e99e75702f89d94b0c877451b92c36a4ee961f247f01_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_20da655aef095822135a28e1e522509a37fe97d829e14b4692f6cdc6bf1162ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20da655aef095822135a28e1e522509a37fe97d829e14b4692f6cdc6bf1162ca->enter($__internal_20da655aef095822135a28e1e522509a37fe97d829e14b4692f6cdc6bf1162ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_158d54fd62d53d32e16db0d3f7db7efdbaf69f00ffafa8485efb1b8c026749e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158d54fd62d53d32e16db0d3f7db7efdbaf69f00ffafa8485efb1b8c026749e2->enter($__internal_158d54fd62d53d32e16db0d3f7db7efdbaf69f00ffafa8485efb1b8c026749e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_158d54fd62d53d32e16db0d3f7db7efdbaf69f00ffafa8485efb1b8c026749e2->leave($__internal_158d54fd62d53d32e16db0d3f7db7efdbaf69f00ffafa8485efb1b8c026749e2_prof);

        
        $__internal_20da655aef095822135a28e1e522509a37fe97d829e14b4692f6cdc6bf1162ca->leave($__internal_20da655aef095822135a28e1e522509a37fe97d829e14b4692f6cdc6bf1162ca_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_7bd42a4837e5118624f304ce18adb34077309bd7895dedc4a7e944f9102015ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd42a4837e5118624f304ce18adb34077309bd7895dedc4a7e944f9102015ee->enter($__internal_7bd42a4837e5118624f304ce18adb34077309bd7895dedc4a7e944f9102015ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_2e2f244533accb3460d61d9090efdb81429d08cc3e1ab6c9c5bdea8d3997a1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2f244533accb3460d61d9090efdb81429d08cc3e1ab6c9c5bdea8d3997a1aa->enter($__internal_2e2f244533accb3460d61d9090efdb81429d08cc3e1ab6c9c5bdea8d3997a1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_2e2f244533accb3460d61d9090efdb81429d08cc3e1ab6c9c5bdea8d3997a1aa->leave($__internal_2e2f244533accb3460d61d9090efdb81429d08cc3e1ab6c9c5bdea8d3997a1aa_prof);

        
        $__internal_7bd42a4837e5118624f304ce18adb34077309bd7895dedc4a7e944f9102015ee->leave($__internal_7bd42a4837e5118624f304ce18adb34077309bd7895dedc4a7e944f9102015ee_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_84baf69b1427d55e04afe557058fc902a4ed8b821ba5df001ebaed9e4f1cfd4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84baf69b1427d55e04afe557058fc902a4ed8b821ba5df001ebaed9e4f1cfd4d->enter($__internal_84baf69b1427d55e04afe557058fc902a4ed8b821ba5df001ebaed9e4f1cfd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8976d9dd9beeb4d03da5adbc6efa18a68b6163c353690174cd4c1ef3719e373e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8976d9dd9beeb4d03da5adbc6efa18a68b6163c353690174cd4c1ef3719e373e->enter($__internal_8976d9dd9beeb4d03da5adbc6efa18a68b6163c353690174cd4c1ef3719e373e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_8976d9dd9beeb4d03da5adbc6efa18a68b6163c353690174cd4c1ef3719e373e->leave($__internal_8976d9dd9beeb4d03da5adbc6efa18a68b6163c353690174cd4c1ef3719e373e_prof);

        
        $__internal_84baf69b1427d55e04afe557058fc902a4ed8b821ba5df001ebaed9e4f1cfd4d->leave($__internal_84baf69b1427d55e04afe557058fc902a4ed8b821ba5df001ebaed9e4f1cfd4d_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_5c92b2e68a0df4a769f129e6f5ae1b487c66338035dc6d156b1eee9fb1940e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c92b2e68a0df4a769f129e6f5ae1b487c66338035dc6d156b1eee9fb1940e37->enter($__internal_5c92b2e68a0df4a769f129e6f5ae1b487c66338035dc6d156b1eee9fb1940e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_802cf5ff1aead88bfc2b7c8f634644131f679957a1cc5c1f9adb16321b277166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802cf5ff1aead88bfc2b7c8f634644131f679957a1cc5c1f9adb16321b277166->enter($__internal_802cf5ff1aead88bfc2b7c8f634644131f679957a1cc5c1f9adb16321b277166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_802cf5ff1aead88bfc2b7c8f634644131f679957a1cc5c1f9adb16321b277166->leave($__internal_802cf5ff1aead88bfc2b7c8f634644131f679957a1cc5c1f9adb16321b277166_prof);

        
        $__internal_5c92b2e68a0df4a769f129e6f5ae1b487c66338035dc6d156b1eee9fb1940e37->leave($__internal_5c92b2e68a0df4a769f129e6f5ae1b487c66338035dc6d156b1eee9fb1940e37_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_512303947d234da84ebbc89fcca221733a5055b4ba9a58d0588ea3045704a8a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_512303947d234da84ebbc89fcca221733a5055b4ba9a58d0588ea3045704a8a2->enter($__internal_512303947d234da84ebbc89fcca221733a5055b4ba9a58d0588ea3045704a8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ae5d6511c82546477720f47752c2b3032d73968209d3e1c859abf9e2bdbb3430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5d6511c82546477720f47752c2b3032d73968209d3e1c859abf9e2bdbb3430->enter($__internal_ae5d6511c82546477720f47752c2b3032d73968209d3e1c859abf9e2bdbb3430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ae5d6511c82546477720f47752c2b3032d73968209d3e1c859abf9e2bdbb3430->leave($__internal_ae5d6511c82546477720f47752c2b3032d73968209d3e1c859abf9e2bdbb3430_prof);

        
        $__internal_512303947d234da84ebbc89fcca221733a5055b4ba9a58d0588ea3045704a8a2->leave($__internal_512303947d234da84ebbc89fcca221733a5055b4ba9a58d0588ea3045704a8a2_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_5b622f2d263ff70cbf84a02ba1359d8bc6615934b57b1b527ee67ee6b7a177e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b622f2d263ff70cbf84a02ba1359d8bc6615934b57b1b527ee67ee6b7a177e3->enter($__internal_5b622f2d263ff70cbf84a02ba1359d8bc6615934b57b1b527ee67ee6b7a177e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_a38ee0ae50de50c6f7422e113f34c562bfdf7a9278aad664dcf128229e935b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38ee0ae50de50c6f7422e113f34c562bfdf7a9278aad664dcf128229e935b44->enter($__internal_a38ee0ae50de50c6f7422e113f34c562bfdf7a9278aad664dcf128229e935b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a38ee0ae50de50c6f7422e113f34c562bfdf7a9278aad664dcf128229e935b44->leave($__internal_a38ee0ae50de50c6f7422e113f34c562bfdf7a9278aad664dcf128229e935b44_prof);

        
        $__internal_5b622f2d263ff70cbf84a02ba1359d8bc6615934b57b1b527ee67ee6b7a177e3->leave($__internal_5b622f2d263ff70cbf84a02ba1359d8bc6615934b57b1b527ee67ee6b7a177e3_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9746d501a0fbb7792c46eaa9103af656d8fab9928b6280719c43f1bdb592f890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9746d501a0fbb7792c46eaa9103af656d8fab9928b6280719c43f1bdb592f890->enter($__internal_9746d501a0fbb7792c46eaa9103af656d8fab9928b6280719c43f1bdb592f890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_44110a2baa8dd9141070640e2d9e67e3c0d792fed1ebe3de940a52eba8023ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44110a2baa8dd9141070640e2d9e67e3c0d792fed1ebe3de940a52eba8023ce7->enter($__internal_44110a2baa8dd9141070640e2d9e67e3c0d792fed1ebe3de940a52eba8023ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_44110a2baa8dd9141070640e2d9e67e3c0d792fed1ebe3de940a52eba8023ce7->leave($__internal_44110a2baa8dd9141070640e2d9e67e3c0d792fed1ebe3de940a52eba8023ce7_prof);

        
        $__internal_9746d501a0fbb7792c46eaa9103af656d8fab9928b6280719c43f1bdb592f890->leave($__internal_9746d501a0fbb7792c46eaa9103af656d8fab9928b6280719c43f1bdb592f890_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5449fbd96d2654b342935ef3d877b58b11b6e3844835e9b983d1bd4ad2e65b0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5449fbd96d2654b342935ef3d877b58b11b6e3844835e9b983d1bd4ad2e65b0c->enter($__internal_5449fbd96d2654b342935ef3d877b58b11b6e3844835e9b983d1bd4ad2e65b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0e7db52c6bd73e177e18fd8925abb0bb376afe1d4f3a01b233e63e245f2cdcdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7db52c6bd73e177e18fd8925abb0bb376afe1d4f3a01b233e63e245f2cdcdb->enter($__internal_0e7db52c6bd73e177e18fd8925abb0bb376afe1d4f3a01b233e63e245f2cdcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_0e7db52c6bd73e177e18fd8925abb0bb376afe1d4f3a01b233e63e245f2cdcdb->leave($__internal_0e7db52c6bd73e177e18fd8925abb0bb376afe1d4f3a01b233e63e245f2cdcdb_prof);

        
        $__internal_5449fbd96d2654b342935ef3d877b58b11b6e3844835e9b983d1bd4ad2e65b0c->leave($__internal_5449fbd96d2654b342935ef3d877b58b11b6e3844835e9b983d1bd4ad2e65b0c_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_054f69dbac9111b36e02f1981f1222492fba9cbc05117a9d05a8242ae822cdb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054f69dbac9111b36e02f1981f1222492fba9cbc05117a9d05a8242ae822cdb6->enter($__internal_054f69dbac9111b36e02f1981f1222492fba9cbc05117a9d05a8242ae822cdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d7fab9128b37ffb1a6952a939b3b93b453a6aab75905c4e1e26cc1ea423320b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fab9128b37ffb1a6952a939b3b93b453a6aab75905c4e1e26cc1ea423320b7->enter($__internal_d7fab9128b37ffb1a6952a939b3b93b453a6aab75905c4e1e26cc1ea423320b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_d7fab9128b37ffb1a6952a939b3b93b453a6aab75905c4e1e26cc1ea423320b7->leave($__internal_d7fab9128b37ffb1a6952a939b3b93b453a6aab75905c4e1e26cc1ea423320b7_prof);

        
        $__internal_054f69dbac9111b36e02f1981f1222492fba9cbc05117a9d05a8242ae822cdb6->leave($__internal_054f69dbac9111b36e02f1981f1222492fba9cbc05117a9d05a8242ae822cdb6_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1bebcb977ccd827c216cb84e2d29a510579f51bac8d33814b54a1370e65d180f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bebcb977ccd827c216cb84e2d29a510579f51bac8d33814b54a1370e65d180f->enter($__internal_1bebcb977ccd827c216cb84e2d29a510579f51bac8d33814b54a1370e65d180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_40770153acbb5c3a18e75fc91b1be78479d50aaca54c9947d3a8b46853174667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40770153acbb5c3a18e75fc91b1be78479d50aaca54c9947d3a8b46853174667->enter($__internal_40770153acbb5c3a18e75fc91b1be78479d50aaca54c9947d3a8b46853174667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_40770153acbb5c3a18e75fc91b1be78479d50aaca54c9947d3a8b46853174667->leave($__internal_40770153acbb5c3a18e75fc91b1be78479d50aaca54c9947d3a8b46853174667_prof);

        
        $__internal_1bebcb977ccd827c216cb84e2d29a510579f51bac8d33814b54a1370e65d180f->leave($__internal_1bebcb977ccd827c216cb84e2d29a510579f51bac8d33814b54a1370e65d180f_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form.parent %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
