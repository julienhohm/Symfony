<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_a3940407c32cec776ad4fb6d702e771a4e2d72a40c2c53d09eb12bf8f447da55 extends Twig_Template
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
        $__internal_48d256ef8c136204a75ad346674dea6fdab3bd613b316c9fd93521fbedcfcece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d256ef8c136204a75ad346674dea6fdab3bd613b316c9fd93521fbedcfcece->enter($__internal_48d256ef8c136204a75ad346674dea6fdab3bd613b316c9fd93521fbedcfcece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d256ef8c136204a75ad346674dea6fdab3bd613b316c9fd93521fbedcfcece->leave($__internal_48d256ef8c136204a75ad346674dea6fdab3bd613b316c9fd93521fbedcfcece_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c46f10cca0e8c0c8ddc44c36cfa7d1d4427fd566c4fcd4a89c2b1825e395aed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46f10cca0e8c0c8ddc44c36cfa7d1d4427fd566c4fcd4a89c2b1825e395aed5->enter($__internal_c46f10cca0e8c0c8ddc44c36cfa7d1d4427fd566c4fcd4a89c2b1825e395aed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c46f10cca0e8c0c8ddc44c36cfa7d1d4427fd566c4fcd4a89c2b1825e395aed5->leave($__internal_c46f10cca0e8c0c8ddc44c36cfa7d1d4427fd566c4fcd4a89c2b1825e395aed5_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_436917fa19634d8b5834969cb892bd1aa87114f9a16dfd21e7416a4123adb076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_436917fa19634d8b5834969cb892bd1aa87114f9a16dfd21e7416a4123adb076->enter($__internal_436917fa19634d8b5834969cb892bd1aa87114f9a16dfd21e7416a4123adb076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_436917fa19634d8b5834969cb892bd1aa87114f9a16dfd21e7416a4123adb076->leave($__internal_436917fa19634d8b5834969cb892bd1aa87114f9a16dfd21e7416a4123adb076_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_24d3bf316bce5cfc92c424edfce064ce04aa273c923a064ae7877e36a7707d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d3bf316bce5cfc92c424edfce064ce04aa273c923a064ae7877e36a7707d61->enter($__internal_24d3bf316bce5cfc92c424edfce064ce04aa273c923a064ae7877e36a7707d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_24d3bf316bce5cfc92c424edfce064ce04aa273c923a064ae7877e36a7707d61->leave($__internal_24d3bf316bce5cfc92c424edfce064ce04aa273c923a064ae7877e36a7707d61_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_4268c69060f8602d61a583801470d7b35f154fde1a64d0350a8512b56337b6cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4268c69060f8602d61a583801470d7b35f154fde1a64d0350a8512b56337b6cd->enter($__internal_4268c69060f8602d61a583801470d7b35f154fde1a64d0350a8512b56337b6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
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
        if (($context["prepend"] ?? null)) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_4268c69060f8602d61a583801470d7b35f154fde1a64d0350a8512b56337b6cd->leave($__internal_4268c69060f8602d61a583801470d7b35f154fde1a64d0350a8512b56337b6cd_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_8787abb7fbf15506dd0a3bd60fb782c3a46a48e05a1927be28d5fac307190c37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8787abb7fbf15506dd0a3bd60fb782c3a46a48e05a1927be28d5fac307190c37->enter($__internal_8787abb7fbf15506dd0a3bd60fb782c3a46a48e05a1927be28d5fac307190c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_8787abb7fbf15506dd0a3bd60fb782c3a46a48e05a1927be28d5fac307190c37->leave($__internal_8787abb7fbf15506dd0a3bd60fb782c3a46a48e05a1927be28d5fac307190c37_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7fb08e057d76fb07e0ea5ec976c1fe51d27e10ab8827821a25a70814d9e4c984 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb08e057d76fb07e0ea5ec976c1fe51d27e10ab8827821a25a70814d9e4c984->enter($__internal_7fb08e057d76fb07e0ea5ec976c1fe51d27e10ab8827821a25a70814d9e4c984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_7fb08e057d76fb07e0ea5ec976c1fe51d27e10ab8827821a25a70814d9e4c984->leave($__internal_7fb08e057d76fb07e0ea5ec976c1fe51d27e10ab8827821a25a70814d9e4c984_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_76b3c57227382494eda1d1191351c831e98d47f47667ee4377520733120ca881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b3c57227382494eda1d1191351c831e98d47f47667ee4377520733120ca881->enter($__internal_76b3c57227382494eda1d1191351c831e98d47f47667ee4377520733120ca881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_76b3c57227382494eda1d1191351c831e98d47f47667ee4377520733120ca881->leave($__internal_76b3c57227382494eda1d1191351c831e98d47f47667ee4377520733120ca881_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_08b664d29416857d832a56eff50754ada213ffccafddb65fa40484fa9a9b0a9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b664d29416857d832a56eff50754ada213ffccafddb65fa40484fa9a9b0a9f->enter($__internal_08b664d29416857d832a56eff50754ada213ffccafddb65fa40484fa9a9b0a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? null)) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
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
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_08b664d29416857d832a56eff50754ada213ffccafddb65fa40484fa9a9b0a9f->leave($__internal_08b664d29416857d832a56eff50754ada213ffccafddb65fa40484fa9a9b0a9f_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_26f5761d85185b99a0ab6e89a6717f123dfb31e2b2977c45c788fb7d1c420f78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f5761d85185b99a0ab6e89a6717f123dfb31e2b2977c45c788fb7d1c420f78->enter($__internal_26f5761d85185b99a0ab6e89a6717f123dfb31e2b2977c45c788fb7d1c420f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? null)) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? null) && (null === ($context["placeholder"] ?? null))) &&  !($context["placeholder_in_choices"] ?? null)) &&  !($context["multiple"] ?? null))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? null)) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? null))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? null) && twig_test_empty(($context["value"] ?? null)))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["placeholder"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? null), array(), ($context["translation_domain"] ?? null)))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? null)) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? null);
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? null)) > 0) &&  !(null === ($context["separator"] ?? null)))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? null), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? null);
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_26f5761d85185b99a0ab6e89a6717f123dfb31e2b2977c45c788fb7d1c420f78->leave($__internal_26f5761d85185b99a0ab6e89a6717f123dfb31e2b2977c45c788fb7d1c420f78_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_aca3e118165c9dec646c6b8b9a0fdf5d8be0a2545cb5908ab0ef002f63be529e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca3e118165c9dec646c6b8b9a0fdf5d8be0a2545cb5908ab0ef002f63be529e->enter($__internal_aca3e118165c9dec646c6b8b9a0fdf5d8be0a2545cb5908ab0ef002f63be529e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
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
        
        $__internal_aca3e118165c9dec646c6b8b9a0fdf5d8be0a2545cb5908ab0ef002f63be529e->leave($__internal_aca3e118165c9dec646c6b8b9a0fdf5d8be0a2545cb5908ab0ef002f63be529e_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_695485691362c6846eed2af432ecc32b4ad79067e7a0f666f742fb6b5173591c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695485691362c6846eed2af432ecc32b4ad79067e7a0f666f742fb6b5173591c->enter($__internal_695485691362c6846eed2af432ecc32b4ad79067e7a0f666f742fb6b5173591c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_695485691362c6846eed2af432ecc32b4ad79067e7a0f666f742fb6b5173591c->leave($__internal_695485691362c6846eed2af432ecc32b4ad79067e7a0f666f742fb6b5173591c_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_082b8a120da865ae5dc3d5954258680bb33784edb06ce8daf7b6dd510ae19e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082b8a120da865ae5dc3d5954258680bb33784edb06ce8daf7b6dd510ae19e2c->enter($__internal_082b8a120da865ae5dc3d5954258680bb33784edb06ce8daf7b6dd510ae19e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? null), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_082b8a120da865ae5dc3d5954258680bb33784edb06ce8daf7b6dd510ae19e2c->leave($__internal_082b8a120da865ae5dc3d5954258680bb33784edb06ce8daf7b6dd510ae19e2c_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4126267fd80ea57ee2606b06cf4ef77526705eef5d67fffeecab3f71b511cf71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4126267fd80ea57ee2606b06cf4ef77526705eef5d67fffeecab3f71b511cf71->enter($__internal_4126267fd80ea57ee2606b06cf4ef77526705eef5d67fffeecab3f71b511cf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_4126267fd80ea57ee2606b06cf4ef77526705eef5d67fffeecab3f71b511cf71->leave($__internal_4126267fd80ea57ee2606b06cf4ef77526705eef5d67fffeecab3f71b511cf71_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_96838d75ee2e6bcd063e388945ad33c5c48731e707653501d5a7660e17a07b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96838d75ee2e6bcd063e388945ad33c5c48731e707653501d5a7660e17a07b95->enter($__internal_96838d75ee2e6bcd063e388945ad33c5c48731e707653501d5a7660e17a07b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_96838d75ee2e6bcd063e388945ad33c5c48731e707653501d5a7660e17a07b95->leave($__internal_96838d75ee2e6bcd063e388945ad33c5c48731e707653501d5a7660e17a07b95_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_24b337f556f37d4f72a5d248f43b3ef141a2e4e6a101e7eab9eb94b108cb429d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24b337f556f37d4f72a5d248f43b3ef141a2e4e6a101e7eab9eb94b108cb429d->enter($__internal_24b337f556f37d4f72a5d248f43b3ef141a2e4e6a101e7eab9eb94b108cb429d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_24b337f556f37d4f72a5d248f43b3ef141a2e4e6a101e7eab9eb94b108cb429d->leave($__internal_24b337f556f37d4f72a5d248f43b3ef141a2e4e6a101e7eab9eb94b108cb429d_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_411cd2a35dc1d34235ba952e13bd6123c31b7b820d068c11bdbd73648a065402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411cd2a35dc1d34235ba952e13bd6123c31b7b820d068c11bdbd73648a065402->enter($__internal_411cd2a35dc1d34235ba952e13bd6123c31b7b820d068c11bdbd73648a065402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_411cd2a35dc1d34235ba952e13bd6123c31b7b820d068c11bdbd73648a065402->leave($__internal_411cd2a35dc1d34235ba952e13bd6123c31b7b820d068c11bdbd73648a065402_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_eb7f82e4fb1f86f43d40ae8ed282f89ab53e43706d530792b1370b45874a7212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb7f82e4fb1f86f43d40ae8ed282f89ab53e43706d530792b1370b45874a7212->enter($__internal_eb7f82e4fb1f86f43d40ae8ed282f89ab53e43706d530792b1370b45874a7212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? null)) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? null)))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? null))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? null))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? null), array("%name%" =>                 // line 254
($context["name"] ?? null), "%id%" =>                 // line 255
($context["id"] ?? null)));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? null));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
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
        echo ($context["widget"] ?? null);
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), array(), ($context["translation_domain"] ?? null)))), "html", null, true);
        echo "
    </label>";
        
        $__internal_eb7f82e4fb1f86f43d40ae8ed282f89ab53e43706d530792b1370b45874a7212->leave($__internal_eb7f82e4fb1f86f43d40ae8ed282f89ab53e43706d530792b1370b45874a7212_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cee2b8e6e5d1dddddbe9979379b996b5b7128185e569164e56c3f43cbdd44520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cee2b8e6e5d1dddddbe9979379b996b5b7128185e569164e56c3f43cbdd44520->enter($__internal_cee2b8e6e5d1dddddbe9979379b996b5b7128185e569164e56c3f43cbdd44520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_cee2b8e6e5d1dddddbe9979379b996b5b7128185e569164e56c3f43cbdd44520->leave($__internal_cee2b8e6e5d1dddddbe9979379b996b5b7128185e569164e56c3f43cbdd44520_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_678e174837545ab54ba9396f6cf0fe94efb1fb20ea492d4031d432850419c27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678e174837545ab54ba9396f6cf0fe94efb1fb20ea492d4031d432850419c27e->enter($__internal_678e174837545ab54ba9396f6cf0fe94efb1fb20ea492d4031d432850419c27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_678e174837545ab54ba9396f6cf0fe94efb1fb20ea492d4031d432850419c27e->leave($__internal_678e174837545ab54ba9396f6cf0fe94efb1fb20ea492d4031d432850419c27e_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b6056901a967d106f0c708b808c6a6b0d25067db463e2a2c2b06198aae66e1d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6056901a967d106f0c708b808c6a6b0d25067db463e2a2c2b06198aae66e1d9->enter($__internal_b6056901a967d106f0c708b808c6a6b0d25067db463e2a2c2b06198aae66e1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b6056901a967d106f0c708b808c6a6b0d25067db463e2a2c2b06198aae66e1d9->leave($__internal_b6056901a967d106f0c708b808c6a6b0d25067db463e2a2c2b06198aae66e1d9_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_7e08d58eaf40a308fae65455eb593dbd4e0931621c051e60fc3abb8fe74c611d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e08d58eaf40a308fae65455eb593dbd4e0931621c051e60fc3abb8fe74c611d->enter($__internal_7e08d58eaf40a308fae65455eb593dbd4e0931621c051e60fc3abb8fe74c611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7e08d58eaf40a308fae65455eb593dbd4e0931621c051e60fc3abb8fe74c611d->leave($__internal_7e08d58eaf40a308fae65455eb593dbd4e0931621c051e60fc3abb8fe74c611d_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_33d2c302f51c6136f1fd5fc0883202273cff6f69b285586ede19ecdf633dcaf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d2c302f51c6136f1fd5fc0883202273cff6f69b285586ede19ecdf633dcaf9->enter($__internal_33d2c302f51c6136f1fd5fc0883202273cff6f69b285586ede19ecdf633dcaf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_33d2c302f51c6136f1fd5fc0883202273cff6f69b285586ede19ecdf633dcaf9->leave($__internal_33d2c302f51c6136f1fd5fc0883202273cff6f69b285586ede19ecdf633dcaf9_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0726dbaf494c7e40acc80c60661234e654a12d3ebe27e24fd4cc130eb48739aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0726dbaf494c7e40acc80c60661234e654a12d3ebe27e24fd4cc130eb48739aa->enter($__internal_0726dbaf494c7e40acc80c60661234e654a12d3ebe27e24fd4cc130eb48739aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? null)) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_0726dbaf494c7e40acc80c60661234e654a12d3ebe27e24fd4cc130eb48739aa->leave($__internal_0726dbaf494c7e40acc80c60661234e654a12d3ebe27e24fd4cc130eb48739aa_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_8e64151c1fff50cbcb4a03be2e54bc46a28b2e97296a74ef6fcd254863d0ed3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e64151c1fff50cbcb4a03be2e54bc46a28b2e97296a74ef6fcd254863d0ed3b->enter($__internal_8e64151c1fff50cbcb4a03be2e54bc46a28b2e97296a74ef6fcd254863d0ed3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? null)) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_8e64151c1fff50cbcb4a03be2e54bc46a28b2e97296a74ef6fcd254863d0ed3b->leave($__internal_8e64151c1fff50cbcb4a03be2e54bc46a28b2e97296a74ef6fcd254863d0ed3b_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a988827ac5ad28cf1ec5cc91d74b8496007f3ad2e1dd9a4cd8ebe52a6177038d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a988827ac5ad28cf1ec5cc91d74b8496007f3ad2e1dd9a4cd8ebe52a6177038d->enter($__internal_a988827ac5ad28cf1ec5cc91d74b8496007f3ad2e1dd9a4cd8ebe52a6177038d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 321
            if ($this->getAttribute(($context["form"] ?? null), "parent", array())) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
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
            if ($this->getAttribute(($context["form"] ?? null), "parent", array())) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_a988827ac5ad28cf1ec5cc91d74b8496007f3ad2e1dd9a4cd8ebe52a6177038d->leave($__internal_a988827ac5ad28cf1ec5cc91d74b8496007f3ad2e1dd9a4cd8ebe52a6177038d_prof);

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
        return array (  925 => 326,  909 => 324,  905 => 323,  888 => 322,  882 => 321,  880 => 320,  874 => 319,  864 => 312,  860 => 311,  854 => 310,  851 => 309,  845 => 308,  835 => 303,  831 => 302,  825 => 301,  822 => 300,  816 => 299,  808 => 296,  806 => 295,  800 => 294,  792 => 291,  790 => 290,  784 => 289,  776 => 286,  774 => 285,  768 => 284,  760 => 281,  758 => 280,  752 => 279,  742 => 274,  738 => 273,  734 => 272,  728 => 271,  725 => 270,  719 => 269,  710 => 263,  706 => 262,  690 => 261,  686 => 258,  683 => 255,  682 => 254,  681 => 253,  679 => 252,  676 => 251,  673 => 250,  670 => 249,  667 => 248,  664 => 247,  662 => 246,  659 => 245,  656 => 244,  653 => 243,  651 => 242,  645 => 241,  638 => 238,  632 => 237,  625 => 234,  619 => 233,  612 => 230,  609 => 229,  607 => 228,  604 => 227,  602 => 226,  600 => 225,  594 => 224,  587 => 221,  584 => 220,  582 => 219,  580 => 218,  574 => 217,  563 => 210,  560 => 209,  557 => 208,  555 => 207,  552 => 206,  546 => 204,  543 => 203,  541 => 202,  535 => 201,  524 => 196,  521 => 195,  515 => 193,  512 => 192,  509 => 191,  507 => 190,  504 => 189,  502 => 188,  496 => 187,  487 => 183,  480 => 181,  478 => 180,  476 => 179,  472 => 178,  467 => 177,  463 => 175,  456 => 173,  454 => 172,  452 => 171,  448 => 170,  445 => 169,  443 => 168,  437 => 167,  430 => 164,  428 => 163,  426 => 162,  420 => 159,  418 => 158,  416 => 157,  414 => 156,  412 => 155,  403 => 153,  401 => 152,  393 => 151,  390 => 149,  388 => 148,  385 => 147,  382 => 146,  380 => 145,  378 => 144,  375 => 143,  372 => 142,  370 => 141,  368 => 140,  362 => 139,  354 => 136,  350 => 134,  347 => 133,  339 => 128,  328 => 121,  320 => 116,  307 => 106,  296 => 99,  293 => 98,  287 => 96,  284 => 95,  281 => 94,  278 => 92,  276 => 91,  270 => 90,  262 => 87,  258 => 85,  256 => 84,  254 => 82,  253 => 81,  252 => 80,  251 => 79,  245 => 77,  242 => 76,  239 => 75,  236 => 73,  234 => 72,  228 => 71,  217 => 66,  213 => 65,  209 => 64,  204 => 62,  200 => 61,  197 => 60,  194 => 59,  191 => 57,  189 => 56,  183 => 55,  172 => 48,  170 => 47,  167 => 45,  161 => 44,  154 => 41,  148 => 38,  145 => 37,  143 => 36,  140 => 35,  138 => 34,  136 => 33,  130 => 30,  127 => 29,  124 => 28,  122 => 27,  119 => 26,  113 => 25,  106 => 22,  104 => 21,  98 => 20,  91 => 17,  88 => 16,  86 => 15,  84 => 14,  78 => 13,  71 => 10,  68 => 9,  66 => 8,  64 => 7,  58 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "foundation_5_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
