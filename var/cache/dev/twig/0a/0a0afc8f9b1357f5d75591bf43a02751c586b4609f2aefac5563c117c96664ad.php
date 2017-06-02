<?php

/* ESFEspaceAbonneBundle:Back:universiteOne.html.twig */
class __TwigTemplate_a72dd8da99437807d140bf2a6312f42e8aa41a90b150fa3ba8dedc1963b121e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig", 1);
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
        $__internal_771d0bd8f9e9cf8c4fbab6ce0c9693329c98b8e426f4ce26e903912f7fe22b8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771d0bd8f9e9cf8c4fbab6ce0c9693329c98b8e426f4ce26e903912f7fe22b8a->enter($__internal_771d0bd8f9e9cf8c4fbab6ce0c9693329c98b8e426f4ce26e903912f7fe22b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $__internal_e92fa886e88e4210bbd7a81f96b330a747a2ec4943a6ce8d13365649801071a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92fa886e88e4210bbd7a81f96b330a747a2ec4943a6ce8d13365649801071a1->enter($__internal_e92fa886e88e4210bbd7a81f96b330a747a2ec4943a6ce8d13365649801071a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_771d0bd8f9e9cf8c4fbab6ce0c9693329c98b8e426f4ce26e903912f7fe22b8a->leave($__internal_771d0bd8f9e9cf8c4fbab6ce0c9693329c98b8e426f4ce26e903912f7fe22b8a_prof);

        
        $__internal_e92fa886e88e4210bbd7a81f96b330a747a2ec4943a6ce8d13365649801071a1->leave($__internal_e92fa886e88e4210bbd7a81f96b330a747a2ec4943a6ce8d13365649801071a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59d2b4c86abe19b976b589961d15d3ac34b811027f6a378f98041ce55cb33b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59d2b4c86abe19b976b589961d15d3ac34b811027f6a378f98041ce55cb33b7e->enter($__internal_59d2b4c86abe19b976b589961d15d3ac34b811027f6a378f98041ce55cb33b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b3db0775216cfcf1a8ae8bfac0952a3b651c28f3e362f4a3e1b9dad2c39b8610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3db0775216cfcf1a8ae8bfac0952a3b651c28f3e362f4a3e1b9dad2c39b8610->enter($__internal_b3db0775216cfcf1a8ae8bfac0952a3b651c28f3e362f4a3e1b9dad2c39b8610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b3db0775216cfcf1a8ae8bfac0952a3b651c28f3e362f4a3e1b9dad2c39b8610->leave($__internal_b3db0775216cfcf1a8ae8bfac0952a3b651c28f3e362f4a3e1b9dad2c39b8610_prof);

        
        $__internal_59d2b4c86abe19b976b589961d15d3ac34b811027f6a378f98041ce55cb33b7e->leave($__internal_59d2b4c86abe19b976b589961d15d3ac34b811027f6a378f98041ce55cb33b7e_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_92cb96f7c8456425957660f394f289825636345c3272379178ff3179350ebe44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cb96f7c8456425957660f394f289825636345c3272379178ff3179350ebe44->enter($__internal_92cb96f7c8456425957660f394f289825636345c3272379178ff3179350ebe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_58f35434472dd69f88ed720b73e4d8bb579a632d341f1f92c38a70404dd51140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f35434472dd69f88ed720b73e4d8bb579a632d341f1f92c38a70404dd51140->enter($__internal_58f35434472dd69f88ed720b73e4d8bb579a632d341f1f92c38a70404dd51140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_58f35434472dd69f88ed720b73e4d8bb579a632d341f1f92c38a70404dd51140->leave($__internal_58f35434472dd69f88ed720b73e4d8bb579a632d341f1f92c38a70404dd51140_prof);

        
        $__internal_92cb96f7c8456425957660f394f289825636345c3272379178ff3179350ebe44->leave($__internal_92cb96f7c8456425957660f394f289825636345c3272379178ff3179350ebe44_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_6f22a414b45430abc1ce19f15b9e30ff6835b27188164b827de3d9c65bfe804b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f22a414b45430abc1ce19f15b9e30ff6835b27188164b827de3d9c65bfe804b->enter($__internal_6f22a414b45430abc1ce19f15b9e30ff6835b27188164b827de3d9c65bfe804b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b68f2571423230047a378c713eea3095814e58b6a6a835d4a88901f9f0b49de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68f2571423230047a378c713eea3095814e58b6a6a835d4a88901f9f0b49de8->enter($__internal_b68f2571423230047a378c713eea3095814e58b6a6a835d4a88901f9f0b49de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'errors');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'errors');
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'errors');
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
        var \$langue = \$('#esf_espaceabonnebundle_inscription_universite_langue');

        \$langue .change(function() {

            var \$form = \$(this).closest('form');
            var data = {};
            data[\$langue.attr('name')] = \$langue.val();

            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_inscription_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                 \$('#esf_espaceabonnebundle_inscription_universite_formation').replaceWith(
                    \$(html).find('#esf_espaceabonnebundle_inscription_universite_formation')
                    );
                 selectFormation();
             },
             error: function(e) {
                alert('error : ' + e );
                \$(\"#esf_espaceabonnebundle_inscription_universite_formation\").html('<option value=\"\" selected=\"selected\"> Nous avons rencontré un problème... </option>');
                console.log(JSON.stringify(data));
            }
        });
        });

        function selectFormation(){
            var \$formation = \$('#esf_espaceabonnebundle_inscription_universite_formation');

            \$formation .change(function() {

                var \$form = \$(this).closest('form');
                var data = {};
                data[\$formation.attr('name')] = \$formation.val();

                \$.ajax({
                    beforeSend: function(){
                        \$(\"#esf_espaceabonnebundle_inscription_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                    },
                    url : \$form.attr('action'),
                    type: \$form.attr('method'),
                    data : data,
                    success: function(html) {
                        \$('#esf_espaceabonnebundle_inscription_universite_nometablissement').replaceWith(
                            \$(html).find('#esf_espaceabonnebundle_inscription_universite_nometablissement')
                            );
                    },
                    error: function(e) {
                        alert('Exception: ' + e);
                        \$(\"#esf_espaceabonnebundle_inscription_universite_nometablissement\").html('<option value=\"\" selected=\"selected\"> Nous avons rencontré un problème... </option>');
                        console.log(JSON.stringify(data));
                    }
                });
            });
        }
    </script>
";
        
        $__internal_b68f2571423230047a378c713eea3095814e58b6a6a835d4a88901f9f0b49de8->leave($__internal_b68f2571423230047a378c713eea3095814e58b6a6a835d4a88901f9f0b49de8_prof);

        
        $__internal_6f22a414b45430abc1ce19f15b9e30ff6835b27188164b827de3d9c65bfe804b->leave($__internal_6f22a414b45430abc1ce19f15b9e30ff6835b27188164b827de3d9c65bfe804b_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:universiteOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 51,  178 => 49,  171 => 44,  167 => 43,  158 => 37,  154 => 36,  150 => 35,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
                {{ form_errors(form.langue) }}
                {{ form_widget(form.langue) }}

                {{ form_label(form.formation, 'Formation') }}
                {{ form_errors(form.formation) }}
                {{ form_widget(form.formation) }}

                {{ form_label(form.nometablissement, 'Université') }}
                {{ form_errors(form.nometablissement) }}
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
        var \$langue = \$('#esf_espaceabonnebundle_inscription_universite_langue');

        \$langue .change(function() {

            var \$form = \$(this).closest('form');
            var data = {};
            data[\$langue.attr('name')] = \$langue.val();

            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_inscription_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                 \$('#esf_espaceabonnebundle_inscription_universite_formation').replaceWith(
                    \$(html).find('#esf_espaceabonnebundle_inscription_universite_formation')
                    );
                 selectFormation();
             },
             error: function(e) {
                alert('error : ' + e );
                \$(\"#esf_espaceabonnebundle_inscription_universite_formation\").html('<option value=\"\" selected=\"selected\"> Nous avons rencontré un problème... </option>');
                console.log(JSON.stringify(data));
            }
        });
        });

        function selectFormation(){
            var \$formation = \$('#esf_espaceabonnebundle_inscription_universite_formation');

            \$formation .change(function() {

                var \$form = \$(this).closest('form');
                var data = {};
                data[\$formation.attr('name')] = \$formation.val();

                \$.ajax({
                    beforeSend: function(){
                        \$(\"#esf_espaceabonnebundle_inscription_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                    },
                    url : \$form.attr('action'),
                    type: \$form.attr('method'),
                    data : data,
                    success: function(html) {
                        \$('#esf_espaceabonnebundle_inscription_universite_nometablissement').replaceWith(
                            \$(html).find('#esf_espaceabonnebundle_inscription_universite_nometablissement')
                            );
                    },
                    error: function(e) {
                        alert('Exception: ' + e);
                        \$(\"#esf_espaceabonnebundle_inscription_universite_nometablissement\").html('<option value=\"\" selected=\"selected\"> Nous avons rencontré un problème... </option>');
                        console.log(JSON.stringify(data));
                    }
                });
            });
        }
    </script>
{% endblock %}
{#
 
#}", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/universiteOne.html.twig");
    }
}
