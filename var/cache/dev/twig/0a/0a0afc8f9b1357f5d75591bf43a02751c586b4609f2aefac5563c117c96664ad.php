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
        $__internal_be874062cc605e6dacf6f32ec950a0aab3f4d14ac4d6e117865af4a088208fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be874062cc605e6dacf6f32ec950a0aab3f4d14ac4d6e117865af4a088208fc5->enter($__internal_be874062cc605e6dacf6f32ec950a0aab3f4d14ac4d6e117865af4a088208fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $__internal_3f403295865e9afc2e58fd0c0def249a7434fb623bdf84cc7d4c7434f439ea76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f403295865e9afc2e58fd0c0def249a7434fb623bdf84cc7d4c7434f439ea76->enter($__internal_3f403295865e9afc2e58fd0c0def249a7434fb623bdf84cc7d4c7434f439ea76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be874062cc605e6dacf6f32ec950a0aab3f4d14ac4d6e117865af4a088208fc5->leave($__internal_be874062cc605e6dacf6f32ec950a0aab3f4d14ac4d6e117865af4a088208fc5_prof);

        
        $__internal_3f403295865e9afc2e58fd0c0def249a7434fb623bdf84cc7d4c7434f439ea76->leave($__internal_3f403295865e9afc2e58fd0c0def249a7434fb623bdf84cc7d4c7434f439ea76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_88d37128cf95fe45ae4f58b842d9e990aaf629cc5ce1d25421d8a1c185e0e090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d37128cf95fe45ae4f58b842d9e990aaf629cc5ce1d25421d8a1c185e0e090->enter($__internal_88d37128cf95fe45ae4f58b842d9e990aaf629cc5ce1d25421d8a1c185e0e090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b200d27e43ad91be4c49f25fab3f460316db06a6922a859b881fe48099ddb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b200d27e43ad91be4c49f25fab3f460316db06a6922a859b881fe48099ddb21->enter($__internal_8b200d27e43ad91be4c49f25fab3f460316db06a6922a859b881fe48099ddb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8b200d27e43ad91be4c49f25fab3f460316db06a6922a859b881fe48099ddb21->leave($__internal_8b200d27e43ad91be4c49f25fab3f460316db06a6922a859b881fe48099ddb21_prof);

        
        $__internal_88d37128cf95fe45ae4f58b842d9e990aaf629cc5ce1d25421d8a1c185e0e090->leave($__internal_88d37128cf95fe45ae4f58b842d9e990aaf629cc5ce1d25421d8a1c185e0e090_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1159391cfee18dac491bdee17c7ae19f53b5380d56364ddb959ad49b58cd61be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1159391cfee18dac491bdee17c7ae19f53b5380d56364ddb959ad49b58cd61be->enter($__internal_1159391cfee18dac491bdee17c7ae19f53b5380d56364ddb959ad49b58cd61be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_50ee946aa0fe1d33f2511273adae8e23db1bf02e8d9584b4b3a98feab87b32ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ee946aa0fe1d33f2511273adae8e23db1bf02e8d9584b4b3a98feab87b32ab->enter($__internal_50ee946aa0fe1d33f2511273adae8e23db1bf02e8d9584b4b3a98feab87b32ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_50ee946aa0fe1d33f2511273adae8e23db1bf02e8d9584b4b3a98feab87b32ab->leave($__internal_50ee946aa0fe1d33f2511273adae8e23db1bf02e8d9584b4b3a98feab87b32ab_prof);

        
        $__internal_1159391cfee18dac491bdee17c7ae19f53b5380d56364ddb959ad49b58cd61be->leave($__internal_1159391cfee18dac491bdee17c7ae19f53b5380d56364ddb959ad49b58cd61be_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_81aea4019f7ebd7d0ecbf04f5e6d32e46c5913c547b37851648b6c41fc281e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81aea4019f7ebd7d0ecbf04f5e6d32e46c5913c547b37851648b6c41fc281e35->enter($__internal_81aea4019f7ebd7d0ecbf04f5e6d32e46c5913c547b37851648b6c41fc281e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_aeada77888522bb12156531c7efd408f31c3544d83bd082dc3f5977f84d262f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeada77888522bb12156531c7efd408f31c3544d83bd082dc3f5977f84d262f4->enter($__internal_aeada77888522bb12156531c7efd408f31c3544d83bd082dc3f5977f84d262f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        \$('#esf_espaceabonnebundle_t_universite_langue').change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$('#esf_espaceabonnebundle_t_universite_langue').attr('name')] = \$('#esf_espaceabonnebundle_t_universite_langue').val();

            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(json) {
                  \$('#esf_espaceabonnebundle_t_universite_formation').html('');
                  \$.each(json, function(index, value) {
                     \$('#esf_espaceabonnebundle_t_universite_formation').append('<option value=\"'+ value.id +'\">'+ value.nom +'</option>');
                 });
                  selectFormation();
              },
              error: function(e) {
                alert('Exeption: ' + e);
                console.log(JSON.stringify(data));
            }
        });
        });

        function selectFormation(){
         \$('#esf_espaceabonnebundle_t_universite_formation').change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$('#esf_espaceabonnebundle_t_universite_formation').attr('name')] =  \$('#esf_espaceabonnebundle_t_universite_formation').val();
            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                    console.log(JSON.stringify(data));
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
        
        $__internal_aeada77888522bb12156531c7efd408f31c3544d83bd082dc3f5977f84d262f4->leave($__internal_aeada77888522bb12156531c7efd408f31c3544d83bd082dc3f5977f84d262f4_prof);

        
        $__internal_81aea4019f7ebd7d0ecbf04f5e6d32e46c5913c547b37851648b6c41fc281e35->leave($__internal_81aea4019f7ebd7d0ecbf04f5e6d32e46c5913c547b37851648b6c41fc281e35_prof);

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
        \$('#esf_espaceabonnebundle_t_universite_langue').change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$('#esf_espaceabonnebundle_t_universite_langue').attr('name')] = \$('#esf_espaceabonnebundle_t_universite_langue').val();

            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(json) {
                  \$('#esf_espaceabonnebundle_t_universite_formation').html('');
                  \$.each(json, function(index, value) {
                     \$('#esf_espaceabonnebundle_t_universite_formation').append('<option value=\"'+ value.id +'\">'+ value.nom +'</option>');
                 });
                  selectFormation();
              },
              error: function(e) {
                alert('Exeption: ' + e);
                console.log(JSON.stringify(data));
            }
        });
        });

        function selectFormation(){
         \$('#esf_espaceabonnebundle_t_universite_formation').change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$('#esf_espaceabonnebundle_t_universite_formation').attr('name')] =  \$('#esf_espaceabonnebundle_t_universite_formation').val();
            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                    console.log(JSON.stringify(data));
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
", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/universiteOne.html.twig");
    }
}
