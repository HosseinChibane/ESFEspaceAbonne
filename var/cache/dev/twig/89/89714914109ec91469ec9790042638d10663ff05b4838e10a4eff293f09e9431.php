<?php

/* @ESFEspaceAbonne/back/universiteOne.html.twig */
class __TwigTemplate_4dac39091303b278e16a2afe9fa3f221f52b2032640f6e912a15e495b9fb151e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/universiteOne.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f15da6a51f23aa0b38d4bfd80e5a0e7ea9f80eca3d6f4ea2f7613f79b43f2031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15da6a51f23aa0b38d4bfd80e5a0e7ea9f80eca3d6f4ea2f7613f79b43f2031->enter($__internal_f15da6a51f23aa0b38d4bfd80e5a0e7ea9f80eca3d6f4ea2f7613f79b43f2031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteOne.html.twig"));

        $__internal_3e92413dda32b184dac96c2e31cb2b445072784dc69ed47846576caea42930dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e92413dda32b184dac96c2e31cb2b445072784dc69ed47846576caea42930dd->enter($__internal_3e92413dda32b184dac96c2e31cb2b445072784dc69ed47846576caea42930dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f15da6a51f23aa0b38d4bfd80e5a0e7ea9f80eca3d6f4ea2f7613f79b43f2031->leave($__internal_f15da6a51f23aa0b38d4bfd80e5a0e7ea9f80eca3d6f4ea2f7613f79b43f2031_prof);

        
        $__internal_3e92413dda32b184dac96c2e31cb2b445072784dc69ed47846576caea42930dd->leave($__internal_3e92413dda32b184dac96c2e31cb2b445072784dc69ed47846576caea42930dd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c620c6ecdc5c2c206b08f29e06059f11adad7df4cfe27fe00a99b9abd183919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c620c6ecdc5c2c206b08f29e06059f11adad7df4cfe27fe00a99b9abd183919->enter($__internal_4c620c6ecdc5c2c206b08f29e06059f11adad7df4cfe27fe00a99b9abd183919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e44a645534aa81077d1afe601ba7b5a4a80230691e8ad7d0773238f9e706f405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44a645534aa81077d1afe601ba7b5a4a80230691e8ad7d0773238f9e706f405->enter($__internal_e44a645534aa81077d1afe601ba7b5a4a80230691e8ad7d0773238f9e706f405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e44a645534aa81077d1afe601ba7b5a4a80230691e8ad7d0773238f9e706f405->leave($__internal_e44a645534aa81077d1afe601ba7b5a4a80230691e8ad7d0773238f9e706f405_prof);

        
        $__internal_4c620c6ecdc5c2c206b08f29e06059f11adad7df4cfe27fe00a99b9abd183919->leave($__internal_4c620c6ecdc5c2c206b08f29e06059f11adad7df4cfe27fe00a99b9abd183919_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_dde6060f2233567aa57b7153645c337e1b8e058b7f864f85bd13b0172437da9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde6060f2233567aa57b7153645c337e1b8e058b7f864f85bd13b0172437da9d->enter($__internal_dde6060f2233567aa57b7153645c337e1b8e058b7f864f85bd13b0172437da9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_5c4829f46533415c7fab80a403002a9b7b69470ebf00ad2189d3e9abfd1d6a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4829f46533415c7fab80a403002a9b7b69470ebf00ad2189d3e9abfd1d6a31->enter($__internal_5c4829f46533415c7fab80a403002a9b7b69470ebf00ad2189d3e9abfd1d6a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_5c4829f46533415c7fab80a403002a9b7b69470ebf00ad2189d3e9abfd1d6a31->leave($__internal_5c4829f46533415c7fab80a403002a9b7b69470ebf00ad2189d3e9abfd1d6a31_prof);

        
        $__internal_dde6060f2233567aa57b7153645c337e1b8e058b7f864f85bd13b0172437da9d->leave($__internal_dde6060f2233567aa57b7153645c337e1b8e058b7f864f85bd13b0172437da9d_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_0bc38fd917ebd382126a793b507dc5ec6751a214c4eb18c69b845583661d1e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc38fd917ebd382126a793b507dc5ec6751a214c4eb18c69b845583661d1e32->enter($__internal_0bc38fd917ebd382126a793b507dc5ec6751a214c4eb18c69b845583661d1e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b3e49a936904b524e854646c844e0dcf27f4e16930d9e04e951aa6ea69ed3f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3e49a936904b524e854646c844e0dcf27f4e16930d9e04e951aa6ea69ed3f6c->enter($__internal_b3e49a936904b524e854646c844e0dcf27f4e16930d9e04e951aa6ea69ed3f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2>Etape 1</h2>
            <p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "                <div class=\"alert alert-error\">
                    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        }
        // line 25
        echo "            <div class=\"form-group\">

                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'label', array("label" => "Langue"));
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'errors', array("attr" => array("class" => "paysclass span3")));
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'widget');
        echo "

                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'label', array("label" => "Formation"));
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'errors', array("attr" => array("class" => "regionclass span3")));
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'widget');
        echo "

                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'label', array("label" => "Université"));
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'errors', array("attr" => array("class" => "villeclass span3")));
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'widget');
        echo "

            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo "
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rechercher", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 49
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 51
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>

<script>
        var \$langue = \$('#esf_espaceabonnebundle_t_universite_langue');

        \$langue.change(function() {

            var \$form = \$(this).closest('form');
            var data = {};
            data[\$langue.attr('name')] = \$langue.val();

            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteAjax");
        echo "\" // \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                    \$('#esf_espaceabonnebundle_t_universite_formation').replaceWith(
                        \$(html).find('#esf_espaceabonnebundle_t_universite_formation')
                        );
                    selectFormation();
                },
                error: function(e) {
                    alert('Exeption: ' + e);
                    console.log(JSON.stringify(data));
                }
            });
        });

        function selectFormation(){
         var \$formation = \$('#esf_espaceabonnebundle_t_universite_formation');

         \$formation.change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$formation.attr('name')] = \$formation.val();
            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteAjax");
        echo "\" //  \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                    \$('#esf_espaceabonnebundle_t_universite_nometablissement').replaceWith(
                        \$(html).find('#esf_espaceabonnebundle_t_universite_nometablissement')
                        );
                },
                error: function(e) {
                    alert('Exeption: ' + e);
                    console.log(JSON.stringify(data));
                }
            });
        });
     }
 </script>
";
        
        $__internal_b3e49a936904b524e854646c844e0dcf27f4e16930d9e04e951aa6ea69ed3f6c->leave($__internal_b3e49a936904b524e854646c844e0dcf27f4e16930d9e04e951aa6ea69ed3f6c_prof);

        
        $__internal_0bc38fd917ebd382126a793b507dc5ec6751a214c4eb18c69b845583661d1e32->leave($__internal_0bc38fd917ebd382126a793b507dc5ec6751a214c4eb18c69b845583661d1e32_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/universiteOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 95,  204 => 68,  183 => 51,  178 => 49,  171 => 44,  167 => 43,  158 => 37,  154 => 36,  150 => 35,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
    Inscription Université - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
{% endblock %}

{% block Content %} 
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2>Etape 1</h2>
            <p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
            {{ form_start(form) }}
            {% if not form.vars.valid %}
                <div class=\"alert alert-error\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}
            <div class=\"form-group\">

                {{ form_label(form.langue, 'Langue') }}
                {{ form_errors(form.langue, {'attr' : {'class' : 'paysclass span3'}}) }}
                {{ form_widget(form.langue) }}

                {{ form_label(form.formation, 'Formation') }}
                {{ form_errors(form.formation, {'attr' : {'class' : 'regionclass span3'}}) }}
                {{ form_widget(form.formation) }}

                {{ form_label(form.nometablissement, 'Université') }}
                {{ form_errors(form.nometablissement, {'attr' : {'class' : 'villeclass span3'}}) }}
                {{ form_widget(form.nometablissement) }}

            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        {{ form_widget(form.reinitialiser) }}
                        {{ form_widget(form.rechercher) }}
                    </div>
                </div>
            </div>
            {# Token CSRF  #}
            {{ form_widget(form._token) }}
            {# , {'render_rest': false} #}
            {{ form_end(form) }}
        </div>
    </div>

<script>
        var \$langue = \$('#esf_espaceabonnebundle_t_universite_langue');

        \$langue.change(function() {

            var \$form = \$(this).closest('form');
            var data = {};
            data[\$langue.attr('name')] = \$langue.val();

            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \"{{ path('esf_espace_abonne_universiteAjax') }}\" // \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                    \$('#esf_espaceabonnebundle_t_universite_formation').replaceWith(
                        \$(html).find('#esf_espaceabonnebundle_t_universite_formation')
                        );
                    selectFormation();
                },
                error: function(e) {
                    alert('Exeption: ' + e);
                    console.log(JSON.stringify(data));
                }
            });
        });

        function selectFormation(){
         var \$formation = \$('#esf_espaceabonnebundle_t_universite_formation');

         \$formation.change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$formation.attr('name')] = \$formation.val();
            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \"{{ path('esf_espace_abonne_universiteAjax') }}\" //  \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                    \$('#esf_espaceabonnebundle_t_universite_nometablissement').replaceWith(
                        \$(html).find('#esf_espaceabonnebundle_t_universite_nometablissement')
                        );
                },
                error: function(e) {
                    alert('Exeption: ' + e);
                    console.log(JSON.stringify(data));
                }
            });
        });
     }
 </script>
{% endblock %}
", "@ESFEspaceAbonne/back/universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\universiteOne.html.twig");
    }
}
