<?php

/* ESFEspaceAbonneBundle:back:universiteOne.html.twig */
class __TwigTemplate_2813caa9820fab756875fa9f7e239eadbe33cd7b13d71a40a80a909012b39f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:universiteOne.html.twig", 1);
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
        $__internal_6a66ee7f9eea7931353c4476aec933c87b9d646b947a528d5b4a886f6011b565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a66ee7f9eea7931353c4476aec933c87b9d646b947a528d5b4a886f6011b565->enter($__internal_6a66ee7f9eea7931353c4476aec933c87b9d646b947a528d5b4a886f6011b565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteOne.html.twig"));

        $__internal_251c983ab23bf86e6c63cf5a5c3b91ff35bc56228585992e34a5f79b63891d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251c983ab23bf86e6c63cf5a5c3b91ff35bc56228585992e34a5f79b63891d02->enter($__internal_251c983ab23bf86e6c63cf5a5c3b91ff35bc56228585992e34a5f79b63891d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a66ee7f9eea7931353c4476aec933c87b9d646b947a528d5b4a886f6011b565->leave($__internal_6a66ee7f9eea7931353c4476aec933c87b9d646b947a528d5b4a886f6011b565_prof);

        
        $__internal_251c983ab23bf86e6c63cf5a5c3b91ff35bc56228585992e34a5f79b63891d02->leave($__internal_251c983ab23bf86e6c63cf5a5c3b91ff35bc56228585992e34a5f79b63891d02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_44841f6315756b6bc6a8acc4f1f8755fdd2b8336ab31d2709b19c97d3ca5d4c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44841f6315756b6bc6a8acc4f1f8755fdd2b8336ab31d2709b19c97d3ca5d4c2->enter($__internal_44841f6315756b6bc6a8acc4f1f8755fdd2b8336ab31d2709b19c97d3ca5d4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2b44149ee9fc4e9a715df53e443f8f0f0f3355cfe68857cd05a93016045d25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b44149ee9fc4e9a715df53e443f8f0f0f3355cfe68857cd05a93016045d25b->enter($__internal_c2b44149ee9fc4e9a715df53e443f8f0f0f3355cfe68857cd05a93016045d25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_c2b44149ee9fc4e9a715df53e443f8f0f0f3355cfe68857cd05a93016045d25b->leave($__internal_c2b44149ee9fc4e9a715df53e443f8f0f0f3355cfe68857cd05a93016045d25b_prof);

        
        $__internal_44841f6315756b6bc6a8acc4f1f8755fdd2b8336ab31d2709b19c97d3ca5d4c2->leave($__internal_44841f6315756b6bc6a8acc4f1f8755fdd2b8336ab31d2709b19c97d3ca5d4c2_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f9e24228c920f8212bf68ffb1ce3cdc30f044fe9015040161238fc30ed4c4d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e24228c920f8212bf68ffb1ce3cdc30f044fe9015040161238fc30ed4c4d03->enter($__internal_f9e24228c920f8212bf68ffb1ce3cdc30f044fe9015040161238fc30ed4c4d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_0417a8370fca30ff0fa1785661e6c832226b5006ad7d222e64d9cb9b25ee011c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0417a8370fca30ff0fa1785661e6c832226b5006ad7d222e64d9cb9b25ee011c->enter($__internal_0417a8370fca30ff0fa1785661e6c832226b5006ad7d222e64d9cb9b25ee011c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_0417a8370fca30ff0fa1785661e6c832226b5006ad7d222e64d9cb9b25ee011c->leave($__internal_0417a8370fca30ff0fa1785661e6c832226b5006ad7d222e64d9cb9b25ee011c_prof);

        
        $__internal_f9e24228c920f8212bf68ffb1ce3cdc30f044fe9015040161238fc30ed4c4d03->leave($__internal_f9e24228c920f8212bf68ffb1ce3cdc30f044fe9015040161238fc30ed4c4d03_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_054daab8a17d11330307107cc8aac8d52eb071e0643e203cdddc8e741b1993b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054daab8a17d11330307107cc8aac8d52eb071e0643e203cdddc8e741b1993b2->enter($__internal_054daab8a17d11330307107cc8aac8d52eb071e0643e203cdddc8e741b1993b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_592ee930ee2eb9ea80a598170e1471fcef8b0971bd0c293ef402e61edaa0a588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592ee930ee2eb9ea80a598170e1471fcef8b0971bd0c293ef402e61edaa0a588->enter($__internal_592ee930ee2eb9ea80a598170e1471fcef8b0971bd0c293ef402e61edaa0a588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        // line 50
        echo "            ";
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
        
        $__internal_592ee930ee2eb9ea80a598170e1471fcef8b0971bd0c293ef402e61edaa0a588->leave($__internal_592ee930ee2eb9ea80a598170e1471fcef8b0971bd0c293ef402e61edaa0a588_prof);

        
        $__internal_054daab8a17d11330307107cc8aac8d52eb071e0643e203cdddc8e741b1993b2->leave($__internal_054daab8a17d11330307107cc8aac8d52eb071e0643e203cdddc8e741b1993b2_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:universiteOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 51,  178 => 50,  171 => 44,  167 => 43,  158 => 37,  154 => 36,  150 => 35,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
            {# Token CSRF 
            {{ form_widget(form._token) }} #}
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
", "ESFEspaceAbonneBundle:back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/universiteOne.html.twig");
    }
}
