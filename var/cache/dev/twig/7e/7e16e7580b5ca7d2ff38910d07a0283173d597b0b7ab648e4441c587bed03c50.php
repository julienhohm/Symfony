<?php

/* JHTourismeBundle:Activity:add.html.twig */
class __TwigTemplate_0460f42f0cb95e8198f279edfd0542f334c8de6600786c5c79eff90cbbefcc32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("JHTourismeBundle::layout.html.twig", "JHTourismeBundle:Activity:add.html.twig", 1);
        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JHTourismeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05a0e4e794d43767488bc224a244e02c5e3898791c9b007c54a57ca9648575a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a0e4e794d43767488bc224a244e02c5e3898791c9b007c54a57ca9648575a8->enter($__internal_05a0e4e794d43767488bc224a244e02c5e3898791c9b007c54a57ca9648575a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $__internal_86e7f4c192cbe7a846976c2f8629d78dd38d025b26da2ebb89afb3552e51e889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e7f4c192cbe7a846976c2f8629d78dd38d025b26da2ebb89afb3552e51e889->enter($__internal_86e7f4c192cbe7a846976c2f8629d78dd38d025b26da2ebb89afb3552e51e889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JHTourismeBundle:Activity:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05a0e4e794d43767488bc224a244e02c5e3898791c9b007c54a57ca9648575a8->leave($__internal_05a0e4e794d43767488bc224a244e02c5e3898791c9b007c54a57ca9648575a8_prof);

        
        $__internal_86e7f4c192cbe7a846976c2f8629d78dd38d025b26da2ebb89afb3552e51e889->leave($__internal_86e7f4c192cbe7a846976c2f8629d78dd38d025b26da2ebb89afb3552e51e889_prof);

    }

    // line 3
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6fc5f05a8ab946598b9f83487c149790156635279004512f243b807fec76af75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc5f05a8ab946598b9f83487c149790156635279004512f243b807fec76af75->enter($__internal_6fc5f05a8ab946598b9f83487c149790156635279004512f243b807fec76af75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f2b25128455cd9d4c763fd768363738d5a5cb031b55e213419144efe79bd6ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2b25128455cd9d4c763fd768363738d5a5cb031b55e213419144efe79bd6ae0->enter($__internal_f2b25128455cd9d4c763fd768363738d5a5cb031b55e213419144efe79bd6ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 4
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
";
        
        $__internal_f2b25128455cd9d4c763fd768363738d5a5cb031b55e213419144efe79bd6ae0->leave($__internal_f2b25128455cd9d4c763fd768363738d5a5cb031b55e213419144efe79bd6ae0_prof);

        
        $__internal_6fc5f05a8ab946598b9f83487c149790156635279004512f243b807fec76af75->leave($__internal_6fc5f05a8ab946598b9f83487c149790156635279004512f243b807fec76af75_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_84e68b7e0eeab92f2d579754ef207a119d6064c61be2ea4a4da4ec0f1fe78039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e68b7e0eeab92f2d579754ef207a119d6064c61be2ea4a4da4ec0f1fe78039->enter($__internal_84e68b7e0eeab92f2d579754ef207a119d6064c61be2ea4a4da4ec0f1fe78039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20579069f47e54b4ce26a36676d491b6092b9be5f7f8b3174db61b60bb3dca47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20579069f47e54b4ce26a36676d491b6092b9be5f7f8b3174db61b60bb3dca47->enter($__internal_20579069f47e54b4ce26a36676d491b6092b9be5f7f8b3174db61b60bb3dca47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<section class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"columns is-multiline is-centered\">
\t\t\t\t<div class=\"column is-12 has-text-centered\">
\t\t\t\t\t<h1 class=\"title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add.title"), "html", null, true);
        echo "</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\">
                    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                    
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
                    
                    <div class=\"field\">
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Nom :"));
        echo "
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Description :"));
        echo "
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'label', array("label" => "Adresse :"));
        echo "
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'widget');
        echo "
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", array()), 'label', array("label" => "Site internet :"));
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", array()), 'errors');
        echo "
                        <div class=\"control\">
                            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", array()), 'widget');
        echo "
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "region", array()), 'label', array("label" => "Region :"));
        echo "
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "region", array()), 'errors');
        echo "
                        <div class=\"control\">
                            <div class=\"select\">
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "region", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "department", array()), 'label', array("label" => "Departement :"));
        echo "
                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "department", array()), 'errors');
        echo "
                        <div class=\"control\">
                            <div class=\"select\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "department", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'label', array("label" => "Ville :"));
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'errors');
        echo "   
                        <div class=\"control\">
                            <div class=\"select\">
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "city", array()), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    
                    
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
                    
                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                    
                    ";
        // line 86
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
    <script>
        
        // Get the dropdown region
        var region = \$(\"#activity_region\");
        
        // Add a onchange event
        region.change(function()
        {
            
            \$(\"#activity_city\").html(\"\");
\t\t\t\$(\"#activity_department\").html(\"\");
            
\t\t\t\$.getJSON(Routing.generate('add_activity_department_json', { regionId: this.value }), function(data)
            {
\t\t\t\t
\t\t\t\tvar options = [\"<option value='' selected='selected'>Choose a department</option>\"];
                \$.each(data, function(i, department){
\t\t\t\t
\t\t\t\t\toptions.push(\"<option value=\" + department.departmentId + \">\" + department.departmentNumber + \" - \" + department.departmentName + \"</option>\");
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$(\"#activity_department\").append(options);
\t\t\t\t
\t\t\t});
            
        });
        
        // Get the dropdown department
        var department = \$(\"#activity_department\");

        // Add a onchange event
        department.change(function()
        {

            \$(\"#activity_city\").html(\"\");

            \$.getJSON(Routing.generate('add_activity_city_json', { departmentId: this.value }), function(data)
            {
                var options = [\"<option value='' selected='selected'>Choose a city</option>\"];
                \$.each(data, function(i, city){

                    options.push(\"<option value=\" + city.cityId + \">\" + city.cityPostalCode + \" - \" + city.cityName + \"</option>\");

                });

                \$(\"#activity_city\").append(options);

            });
        });

        // Initialize the drowpdown with the default selected region
        //\$(\"#activity_region\").change();
        
    </script>
";
        
        $__internal_20579069f47e54b4ce26a36676d491b6092b9be5f7f8b3174db61b60bb3dca47->leave($__internal_20579069f47e54b4ce26a36676d491b6092b9be5f7f8b3174db61b60bb3dca47_prof);

        
        $__internal_84e68b7e0eeab92f2d579754ef207a119d6064c61be2ea4a4da4ec0f1fe78039->leave($__internal_84e68b7e0eeab92f2d579754ef207a119d6064c61be2ea4a4da4ec0f1fe78039_prof);

    }

    public function getTemplateName()
    {
        return "JHTourismeBundle:Activity:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 86,  223 => 84,  218 => 82,  209 => 76,  203 => 73,  199 => 72,  190 => 66,  184 => 63,  180 => 62,  171 => 56,  165 => 53,  161 => 52,  153 => 47,  148 => 45,  144 => 44,  136 => 39,  131 => 37,  127 => 36,  119 => 31,  114 => 29,  110 => 28,  102 => 23,  97 => 21,  93 => 20,  87 => 17,  82 => 15,  76 => 12,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JHTourismeBundle::layout.html.twig\" %}

{% block javascript %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
{% endblock %}

{% block body %}
\t<section class=\"section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"columns is-multiline is-centered\">
\t\t\t\t<div class=\"column is-12 has-text-centered\">
\t\t\t\t\t<h1 class=\"title\">{{ 'add.title'|trans }}</h1>
\t\t\t\t</div>
\t\t\t\t<div class=\"column\">
                    {{ form_start(form) }}
                    
                    {{ form_errors(form) }}
                    
                    <div class=\"field\">
                        {{ form_label(form.name, \"Nom :\") }}
                        {{ form_errors(form.name) }}
                        <div class=\"control\">
                            {{ form_widget(form.name) }}
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        {{ form_label(form.description, \"Description :\") }}
                        {{ form_errors(form.description) }}
                        <div class=\"control\">
                            {{ form_widget(form.description) }}
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        {{ form_label(form.address, \"Adresse :\") }}
                        {{ form_errors(form.address) }}
                        <div class=\"control\">
                            {{ form_widget(form.address) }}
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        {{ form_label(form.website, \"Site internet :\") }}
                        {{ form_errors(form.website) }}
                        <div class=\"control\">
                            {{ form_widget(form.website) }}
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        {{ form_label(form.region, \"Region :\") }}
                        {{ form_errors(form.region) }}
                        <div class=\"control\">
                            <div class=\"select\">
                                {{ form_widget(form.region) }}
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        {{ form_label(form.department, \"Departement :\") }}
                        {{ form_errors(form.department) }}
                        <div class=\"control\">
                            <div class=\"select\">
                                {{ form_widget(form.department) }}
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"field\">
                        {{ form_label(form.city, \"Ville :\") }}
                        {{ form_errors(form.city) }}   
                        <div class=\"control\">
                            <div class=\"select\">
                                {{ form_widget(form.city) }}
                            </div>
                        </div>
                    </div>
                    
                    
                    {{ form_widget(form.save) }}
                    
                    {{ form_rest(form) }}
                    
                    {{ form_end(form) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
    <script>
        
        // Get the dropdown region
        var region = \$(\"#activity_region\");
        
        // Add a onchange event
        region.change(function()
        {
            
            \$(\"#activity_city\").html(\"\");
\t\t\t\$(\"#activity_department\").html(\"\");
            
\t\t\t\$.getJSON(Routing.generate('add_activity_department_json', { regionId: this.value }), function(data)
            {
\t\t\t\t
\t\t\t\tvar options = [\"<option value='' selected='selected'>Choose a department</option>\"];
                \$.each(data, function(i, department){
\t\t\t\t
\t\t\t\t\toptions.push(\"<option value=\" + department.departmentId + \">\" + department.departmentNumber + \" - \" + department.departmentName + \"</option>\");
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$(\"#activity_department\").append(options);
\t\t\t\t
\t\t\t});
            
        });
        
        // Get the dropdown department
        var department = \$(\"#activity_department\");

        // Add a onchange event
        department.change(function()
        {

            \$(\"#activity_city\").html(\"\");

            \$.getJSON(Routing.generate('add_activity_city_json', { departmentId: this.value }), function(data)
            {
                var options = [\"<option value='' selected='selected'>Choose a city</option>\"];
                \$.each(data, function(i, city){

                    options.push(\"<option value=\" + city.cityId + \">\" + city.cityPostalCode + \" - \" + city.cityName + \"</option>\");

                });

                \$(\"#activity_city\").append(options);

            });
        });

        // Initialize the drowpdown with the default selected region
        //\$(\"#activity_region\").change();
        
    </script>
{% endblock %}", "JHTourismeBundle:Activity:add.html.twig", "C:\\wamp64\\www\\Symfony\\src\\JH\\TourismeBundle/Resources/views/Activity/add.html.twig");
    }
}
