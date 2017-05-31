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
        $__internal_0255cb03851fd104b9a8e510b363a853fbdbffc1dcb9bf88e0d932207e144918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0255cb03851fd104b9a8e510b363a853fbdbffc1dcb9bf88e0d932207e144918->enter($__internal_0255cb03851fd104b9a8e510b363a853fbdbffc1dcb9bf88e0d932207e144918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $__internal_415b27cac60a2c958cb462a4d6c469ae30d7a8a99353a66c89fe28838b0f1bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415b27cac60a2c958cb462a4d6c469ae30d7a8a99353a66c89fe28838b0f1bc3->enter($__internal_415b27cac60a2c958cb462a4d6c469ae30d7a8a99353a66c89fe28838b0f1bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0255cb03851fd104b9a8e510b363a853fbdbffc1dcb9bf88e0d932207e144918->leave($__internal_0255cb03851fd104b9a8e510b363a853fbdbffc1dcb9bf88e0d932207e144918_prof);

        
        $__internal_415b27cac60a2c958cb462a4d6c469ae30d7a8a99353a66c89fe28838b0f1bc3->leave($__internal_415b27cac60a2c958cb462a4d6c469ae30d7a8a99353a66c89fe28838b0f1bc3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b80e414e216a6d3d5306342b000d70257abc6291777582fc3188c78136e46a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80e414e216a6d3d5306342b000d70257abc6291777582fc3188c78136e46a2e->enter($__internal_b80e414e216a6d3d5306342b000d70257abc6291777582fc3188c78136e46a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a1cc0e0c9cea9d21863175dba1258a2d54542f4edf6a3e82a806921e7be883c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a1cc0e0c9cea9d21863175dba1258a2d54542f4edf6a3e82a806921e7be883c->enter($__internal_0a1cc0e0c9cea9d21863175dba1258a2d54542f4edf6a3e82a806921e7be883c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0a1cc0e0c9cea9d21863175dba1258a2d54542f4edf6a3e82a806921e7be883c->leave($__internal_0a1cc0e0c9cea9d21863175dba1258a2d54542f4edf6a3e82a806921e7be883c_prof);

        
        $__internal_b80e414e216a6d3d5306342b000d70257abc6291777582fc3188c78136e46a2e->leave($__internal_b80e414e216a6d3d5306342b000d70257abc6291777582fc3188c78136e46a2e_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_44bad09c32166d5829dfcbc98299e01c15d5b27f1df012a72477533fd749ac20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44bad09c32166d5829dfcbc98299e01c15d5b27f1df012a72477533fd749ac20->enter($__internal_44bad09c32166d5829dfcbc98299e01c15d5b27f1df012a72477533fd749ac20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_48f4241086c9ed128bb0e35ce5ed0e12e4c2171ed2b405d0df69405779360068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48f4241086c9ed128bb0e35ce5ed0e12e4c2171ed2b405d0df69405779360068->enter($__internal_48f4241086c9ed128bb0e35ce5ed0e12e4c2171ed2b405d0df69405779360068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_48f4241086c9ed128bb0e35ce5ed0e12e4c2171ed2b405d0df69405779360068->leave($__internal_48f4241086c9ed128bb0e35ce5ed0e12e4c2171ed2b405d0df69405779360068_prof);

        
        $__internal_44bad09c32166d5829dfcbc98299e01c15d5b27f1df012a72477533fd749ac20->leave($__internal_44bad09c32166d5829dfcbc98299e01c15d5b27f1df012a72477533fd749ac20_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_7ed1520d0f7b71dad5bfa36e73633be67061ea84573928020fca4ce4b7c30ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed1520d0f7b71dad5bfa36e73633be67061ea84573928020fca4ce4b7c30ac5->enter($__internal_7ed1520d0f7b71dad5bfa36e73633be67061ea84573928020fca4ce4b7c30ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_2a8aab5d48d39a7a9dcd8f22aaf9dd8e2f98f370c0d91060af03e3c49389836b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8aab5d48d39a7a9dcd8f22aaf9dd8e2f98f370c0d91060af03e3c49389836b->enter($__internal_2a8aab5d48d39a7a9dcd8f22aaf9dd8e2f98f370c0d91060af03e3c49389836b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        var \$langue = \$('#esf_espaceabonnebundle_t_universite_langue');

        \$langue.change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$langue.attr('name')] = \$langue.val();
            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                    \$('#esf_espaceabonnebundle_t_universite_formation').replaceWith(
                        \$(html).find('#esf_espaceabonnebundle_t_universite_formation')
                        );
                    console.log(JSON.stringify(data));

                    var \$formation = \$('#esf_espaceabonnebundle_t_universite_formation');

                    \$formation.change(function() {
                        var \$form = \$(this).closest('form');
                        var data = {};
                        data[\$formation.attr('name')] = \$formation.val();
                        \$.ajax({
                            beforeSend: function(){
                                \$(\"#esf_espaceabonnebundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                            },
                            url : \$form.attr('action'),
                            type: \$form.attr('method'),
                            data : data,
                            success: function(html) {
                                \$('#esf_espaceabonnebundle_t_universite_nometablissement').replaceWith(
                                    \$(html).find('#esf_espaceabonnebundle_t_universite_nometablissement')
                                    );
                                console.log(JSON.stringify(data));
                            },
                            error: function(exception) {
                                alert('Exeption: ' + exception);
                                console.log(JSON.stringify(data));
                            }
                        });
                    });
                },
                error: function(exception) {
                    alert('Exeption: ' + exception);
                    console.log(JSON.stringify(data));
                }
            });
        });

    </script>

";
        
        $__internal_2a8aab5d48d39a7a9dcd8f22aaf9dd8e2f98f370c0d91060af03e3c49389836b->leave($__internal_2a8aab5d48d39a7a9dcd8f22aaf9dd8e2f98f370c0d91060af03e3c49389836b_prof);

        
        $__internal_7ed1520d0f7b71dad5bfa36e73633be67061ea84573928020fca4ce4b7c30ac5->leave($__internal_7ed1520d0f7b71dad5bfa36e73633be67061ea84573928020fca4ce4b7c30ac5_prof);

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
        var \$langue = \$('#esf_espaceabonnebundle_t_universite_langue');

        \$langue.change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$langue.attr('name')] = \$langue.val();
            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                    \$('#esf_espaceabonnebundle_t_universite_formation').replaceWith(
                        \$(html).find('#esf_espaceabonnebundle_t_universite_formation')
                        );
                    console.log(JSON.stringify(data));

                    var \$formation = \$('#esf_espaceabonnebundle_t_universite_formation');

                    \$formation.change(function() {
                        var \$form = \$(this).closest('form');
                        var data = {};
                        data[\$formation.attr('name')] = \$formation.val();
                        \$.ajax({
                            beforeSend: function(){
                                \$(\"#esf_espaceabonnebundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                            },
                            url : \$form.attr('action'),
                            type: \$form.attr('method'),
                            data : data,
                            success: function(html) {
                                \$('#esf_espaceabonnebundle_t_universite_nometablissement').replaceWith(
                                    \$(html).find('#esf_espaceabonnebundle_t_universite_nometablissement')
                                    );
                                console.log(JSON.stringify(data));
                            },
                            error: function(exception) {
                                alert('Exeption: ' + exception);
                                console.log(JSON.stringify(data));
                            }
                        });
                    });
                },
                error: function(exception) {
                    alert('Exeption: ' + exception);
                    console.log(JSON.stringify(data));
                }
            });
        });

    </script>

{% endblock %}
", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/universiteOne.html.twig");
    }
}
