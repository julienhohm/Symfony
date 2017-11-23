<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_3a9a12d857df3b5e5e76c0dd267d375522e18e1c0c37b8efada538f7708e989a extends Twig_Template
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
        $__internal_1cf0e42d478a29289eab819348b71cb5d5cd12f72f742ccdedb57868b102a67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cf0e42d478a29289eab819348b71cb5d5cd12f72f742ccdedb57868b102a67e->enter($__internal_1cf0e42d478a29289eab819348b71cb5d5cd12f72f742ccdedb57868b102a67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_ca23d2897eed7b803c4d7d9b793210b4dcaa6a8718b61dc5a5603e18a7d97216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca23d2897eed7b803c4d7d9b793210b4dcaa6a8718b61dc5a5603e18a7d97216->enter($__internal_ca23d2897eed7b803c4d7d9b793210b4dcaa6a8718b61dc5a5603e18a7d97216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_1cf0e42d478a29289eab819348b71cb5d5cd12f72f742ccdedb57868b102a67e->leave($__internal_1cf0e42d478a29289eab819348b71cb5d5cd12f72f742ccdedb57868b102a67e_prof);

        
        $__internal_ca23d2897eed7b803c4d7d9b793210b4dcaa6a8718b61dc5a5603e18a7d97216->leave($__internal_ca23d2897eed7b803c4d7d9b793210b4dcaa6a8718b61dc5a5603e18a7d97216_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_154fec15e968eb1ed2a08d87a4f22f89e79618e4f30af4785937ef17f3279099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_154fec15e968eb1ed2a08d87a4f22f89e79618e4f30af4785937ef17f3279099->enter($__internal_154fec15e968eb1ed2a08d87a4f22f89e79618e4f30af4785937ef17f3279099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d2525b8802302280be9f18354a7ac67815d7a8ca83e41de6b9888e146e7b2f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2525b8802302280be9f18354a7ac67815d7a8ca83e41de6b9888e146e7b2f2a->enter($__internal_d2525b8802302280be9f18354a7ac67815d7a8ca83e41de6b9888e146e7b2f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_d2525b8802302280be9f18354a7ac67815d7a8ca83e41de6b9888e146e7b2f2a->leave($__internal_d2525b8802302280be9f18354a7ac67815d7a8ca83e41de6b9888e146e7b2f2a_prof);

        
        $__internal_154fec15e968eb1ed2a08d87a4f22f89e79618e4f30af4785937ef17f3279099->leave($__internal_154fec15e968eb1ed2a08d87a4f22f89e79618e4f30af4785937ef17f3279099_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_510db43d9e31749b996d45bdc7c0f67d15e9632d360401a9895dd5843b36b1e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510db43d9e31749b996d45bdc7c0f67d15e9632d360401a9895dd5843b36b1e7->enter($__internal_510db43d9e31749b996d45bdc7c0f67d15e9632d360401a9895dd5843b36b1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c9c7681f9e24e261a8f06943462e4a57c842a909f96aa47f7ffccdcc57838fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c7681f9e24e261a8f06943462e4a57c842a909f96aa47f7ffccdcc57838fd3->enter($__internal_c9c7681f9e24e261a8f06943462e4a57c842a909f96aa47f7ffccdcc57838fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c9c7681f9e24e261a8f06943462e4a57c842a909f96aa47f7ffccdcc57838fd3->leave($__internal_c9c7681f9e24e261a8f06943462e4a57c842a909f96aa47f7ffccdcc57838fd3_prof);

        
        $__internal_510db43d9e31749b996d45bdc7c0f67d15e9632d360401a9895dd5843b36b1e7->leave($__internal_510db43d9e31749b996d45bdc7c0f67d15e9632d360401a9895dd5843b36b1e7_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f49af4cb24eb9d788f59a372b4f123b7b2b135c7b576efacfda04e270033e9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49af4cb24eb9d788f59a372b4f123b7b2b135c7b576efacfda04e270033e9a9->enter($__internal_f49af4cb24eb9d788f59a372b4f123b7b2b135c7b576efacfda04e270033e9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_2023888223213dcb5a94f528f107bf77cba3fe1b05eee58ba84ed7844405f088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2023888223213dcb5a94f528f107bf77cba3fe1b05eee58ba84ed7844405f088->enter($__internal_2023888223213dcb5a94f528f107bf77cba3fe1b05eee58ba84ed7844405f088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_2023888223213dcb5a94f528f107bf77cba3fe1b05eee58ba84ed7844405f088->leave($__internal_2023888223213dcb5a94f528f107bf77cba3fe1b05eee58ba84ed7844405f088_prof);

        
        $__internal_f49af4cb24eb9d788f59a372b4f123b7b2b135c7b576efacfda04e270033e9a9->leave($__internal_f49af4cb24eb9d788f59a372b4f123b7b2b135c7b576efacfda04e270033e9a9_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4b5cd00cd484a82f6c2dc33ea1fb53a5eae83849fc65eb4e8813d30d7d2e0882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5cd00cd484a82f6c2dc33ea1fb53a5eae83849fc65eb4e8813d30d7d2e0882->enter($__internal_4b5cd00cd484a82f6c2dc33ea1fb53a5eae83849fc65eb4e8813d30d7d2e0882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3b7b185ed49ae974de3301f79af70d2be33e111d6ac0235718abd01c821f7add = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7b185ed49ae974de3301f79af70d2be33e111d6ac0235718abd01c821f7add->enter($__internal_3b7b185ed49ae974de3301f79af70d2be33e111d6ac0235718abd01c821f7add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_3b7b185ed49ae974de3301f79af70d2be33e111d6ac0235718abd01c821f7add->leave($__internal_3b7b185ed49ae974de3301f79af70d2be33e111d6ac0235718abd01c821f7add_prof);

        
        $__internal_4b5cd00cd484a82f6c2dc33ea1fb53a5eae83849fc65eb4e8813d30d7d2e0882->leave($__internal_4b5cd00cd484a82f6c2dc33ea1fb53a5eae83849fc65eb4e8813d30d7d2e0882_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_295211ba612041e50bfee3d06b17e6481cae0829281fabfe6135c67e15d3d763 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295211ba612041e50bfee3d06b17e6481cae0829281fabfe6135c67e15d3d763->enter($__internal_295211ba612041e50bfee3d06b17e6481cae0829281fabfe6135c67e15d3d763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6d4d59b234943fdcbd168d48c78d7795a3875923bd46a420cd6563e5e3930d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4d59b234943fdcbd168d48c78d7795a3875923bd46a420cd6563e5e3930d22->enter($__internal_6d4d59b234943fdcbd168d48c78d7795a3875923bd46a420cd6563e5e3930d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_6d4d59b234943fdcbd168d48c78d7795a3875923bd46a420cd6563e5e3930d22->leave($__internal_6d4d59b234943fdcbd168d48c78d7795a3875923bd46a420cd6563e5e3930d22_prof);

        
        $__internal_295211ba612041e50bfee3d06b17e6481cae0829281fabfe6135c67e15d3d763->leave($__internal_295211ba612041e50bfee3d06b17e6481cae0829281fabfe6135c67e15d3d763_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_c6b3ff319c185e8046365992f2816808de9bb378bad62d8e3482f2983d03b133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b3ff319c185e8046365992f2816808de9bb378bad62d8e3482f2983d03b133->enter($__internal_c6b3ff319c185e8046365992f2816808de9bb378bad62d8e3482f2983d03b133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_0ed174a89661558541accca19dad4fcf8a9fe4abebb6f2fd1df6099a21b43c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed174a89661558541accca19dad4fcf8a9fe4abebb6f2fd1df6099a21b43c8b->enter($__internal_0ed174a89661558541accca19dad4fcf8a9fe4abebb6f2fd1df6099a21b43c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0ed174a89661558541accca19dad4fcf8a9fe4abebb6f2fd1df6099a21b43c8b->leave($__internal_0ed174a89661558541accca19dad4fcf8a9fe4abebb6f2fd1df6099a21b43c8b_prof);

        
        $__internal_c6b3ff319c185e8046365992f2816808de9bb378bad62d8e3482f2983d03b133->leave($__internal_c6b3ff319c185e8046365992f2816808de9bb378bad62d8e3482f2983d03b133_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_cc9f55065dc83c35811327148221fe00bbd95e843b8974c8c9bcb5236abd8b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc9f55065dc83c35811327148221fe00bbd95e843b8974c8c9bcb5236abd8b66->enter($__internal_cc9f55065dc83c35811327148221fe00bbd95e843b8974c8c9bcb5236abd8b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_fac6bea0c371a5e3f40e3e0511f297e96718a6e68350ee594d32d193b704017d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac6bea0c371a5e3f40e3e0511f297e96718a6e68350ee594d32d193b704017d->enter($__internal_fac6bea0c371a5e3f40e3e0511f297e96718a6e68350ee594d32d193b704017d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fac6bea0c371a5e3f40e3e0511f297e96718a6e68350ee594d32d193b704017d->leave($__internal_fac6bea0c371a5e3f40e3e0511f297e96718a6e68350ee594d32d193b704017d_prof);

        
        $__internal_cc9f55065dc83c35811327148221fe00bbd95e843b8974c8c9bcb5236abd8b66->leave($__internal_cc9f55065dc83c35811327148221fe00bbd95e843b8974c8c9bcb5236abd8b66_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_54926b50ab0fd9ebb6dcea85075680c07ac65c0144545fae5c31bc82fe75b4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54926b50ab0fd9ebb6dcea85075680c07ac65c0144545fae5c31bc82fe75b4b9->enter($__internal_54926b50ab0fd9ebb6dcea85075680c07ac65c0144545fae5c31bc82fe75b4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_8821b4de18630d793f126a70f5771e685fdbc98472bac2a2980120d5f788f09c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8821b4de18630d793f126a70f5771e685fdbc98472bac2a2980120d5f788f09c->enter($__internal_8821b4de18630d793f126a70f5771e685fdbc98472bac2a2980120d5f788f09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8821b4de18630d793f126a70f5771e685fdbc98472bac2a2980120d5f788f09c->leave($__internal_8821b4de18630d793f126a70f5771e685fdbc98472bac2a2980120d5f788f09c_prof);

        
        $__internal_54926b50ab0fd9ebb6dcea85075680c07ac65c0144545fae5c31bc82fe75b4b9->leave($__internal_54926b50ab0fd9ebb6dcea85075680c07ac65c0144545fae5c31bc82fe75b4b9_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_23241e22d284264edbdccda5b43347967a330339696d0a61bbf09f359ab68694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23241e22d284264edbdccda5b43347967a330339696d0a61bbf09f359ab68694->enter($__internal_23241e22d284264edbdccda5b43347967a330339696d0a61bbf09f359ab68694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_95a92b82b0c1e98720c963b4dc6e71a98cb8b1f47995f01b350ee72bff775f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a92b82b0c1e98720c963b4dc6e71a98cb8b1f47995f01b350ee72bff775f72->enter($__internal_95a92b82b0c1e98720c963b4dc6e71a98cb8b1f47995f01b350ee72bff775f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_95a92b82b0c1e98720c963b4dc6e71a98cb8b1f47995f01b350ee72bff775f72->leave($__internal_95a92b82b0c1e98720c963b4dc6e71a98cb8b1f47995f01b350ee72bff775f72_prof);

        
        $__internal_23241e22d284264edbdccda5b43347967a330339696d0a61bbf09f359ab68694->leave($__internal_23241e22d284264edbdccda5b43347967a330339696d0a61bbf09f359ab68694_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_919a638b6d9fc375f0ae57735bc4ed7eb454f6093c748ec77954f84c7f4cf0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919a638b6d9fc375f0ae57735bc4ed7eb454f6093c748ec77954f84c7f4cf0fc->enter($__internal_919a638b6d9fc375f0ae57735bc4ed7eb454f6093c748ec77954f84c7f4cf0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_114d985a836f1664e1d6904572b5a79c948459e08e6da1ec389cad57e8ffb538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_114d985a836f1664e1d6904572b5a79c948459e08e6da1ec389cad57e8ffb538->enter($__internal_114d985a836f1664e1d6904572b5a79c948459e08e6da1ec389cad57e8ffb538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_114d985a836f1664e1d6904572b5a79c948459e08e6da1ec389cad57e8ffb538->leave($__internal_114d985a836f1664e1d6904572b5a79c948459e08e6da1ec389cad57e8ffb538_prof);

        
        $__internal_919a638b6d9fc375f0ae57735bc4ed7eb454f6093c748ec77954f84c7f4cf0fc->leave($__internal_919a638b6d9fc375f0ae57735bc4ed7eb454f6093c748ec77954f84c7f4cf0fc_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
