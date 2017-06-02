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
        $__internal_9a51e4a93e4db2b65ceca8a202e2b9ce77f6f55a03e39d7fc3aa479697cd6f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a51e4a93e4db2b65ceca8a202e2b9ce77f6f55a03e39d7fc3aa479697cd6f1a->enter($__internal_9a51e4a93e4db2b65ceca8a202e2b9ce77f6f55a03e39d7fc3aa479697cd6f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteOne.html.twig"));

        $__internal_ba26f549c80e564dc67d8ca5f2817f744ef2f9d333990f3c2aae9cb546eaa479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba26f549c80e564dc67d8ca5f2817f744ef2f9d333990f3c2aae9cb546eaa479->enter($__internal_ba26f549c80e564dc67d8ca5f2817f744ef2f9d333990f3c2aae9cb546eaa479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a51e4a93e4db2b65ceca8a202e2b9ce77f6f55a03e39d7fc3aa479697cd6f1a->leave($__internal_9a51e4a93e4db2b65ceca8a202e2b9ce77f6f55a03e39d7fc3aa479697cd6f1a_prof);

        
        $__internal_ba26f549c80e564dc67d8ca5f2817f744ef2f9d333990f3c2aae9cb546eaa479->leave($__internal_ba26f549c80e564dc67d8ca5f2817f744ef2f9d333990f3c2aae9cb546eaa479_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9b44bd3ef9effd047a94f7713307eab99e0e5660d059c3251d3befd3f341f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b44bd3ef9effd047a94f7713307eab99e0e5660d059c3251d3befd3f341f1b->enter($__internal_f9b44bd3ef9effd047a94f7713307eab99e0e5660d059c3251d3befd3f341f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a8fa2b5225515c0064cb021adf30871dfa635d53b94ac91be13bd868f50b12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8fa2b5225515c0064cb021adf30871dfa635d53b94ac91be13bd868f50b12f->enter($__internal_3a8fa2b5225515c0064cb021adf30871dfa635d53b94ac91be13bd868f50b12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3a8fa2b5225515c0064cb021adf30871dfa635d53b94ac91be13bd868f50b12f->leave($__internal_3a8fa2b5225515c0064cb021adf30871dfa635d53b94ac91be13bd868f50b12f_prof);

        
        $__internal_f9b44bd3ef9effd047a94f7713307eab99e0e5660d059c3251d3befd3f341f1b->leave($__internal_f9b44bd3ef9effd047a94f7713307eab99e0e5660d059c3251d3befd3f341f1b_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_22b2eeed2ee8d1bbd24d2236f10279fe4a250948f8c89f4a2f8e3240ee93e511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22b2eeed2ee8d1bbd24d2236f10279fe4a250948f8c89f4a2f8e3240ee93e511->enter($__internal_22b2eeed2ee8d1bbd24d2236f10279fe4a250948f8c89f4a2f8e3240ee93e511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_000cd66e7c8cc872dcc12af05e2c6de1b2b893ac9bb03f5367e6140f44147540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000cd66e7c8cc872dcc12af05e2c6de1b2b893ac9bb03f5367e6140f44147540->enter($__internal_000cd66e7c8cc872dcc12af05e2c6de1b2b893ac9bb03f5367e6140f44147540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_000cd66e7c8cc872dcc12af05e2c6de1b2b893ac9bb03f5367e6140f44147540->leave($__internal_000cd66e7c8cc872dcc12af05e2c6de1b2b893ac9bb03f5367e6140f44147540_prof);

        
        $__internal_22b2eeed2ee8d1bbd24d2236f10279fe4a250948f8c89f4a2f8e3240ee93e511->leave($__internal_22b2eeed2ee8d1bbd24d2236f10279fe4a250948f8c89f4a2f8e3240ee93e511_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_c370c65a4afa1cae83782aef71f0c5159a1645fb25091107b564b9f47ef1a014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c370c65a4afa1cae83782aef71f0c5159a1645fb25091107b564b9f47ef1a014->enter($__internal_c370c65a4afa1cae83782aef71f0c5159a1645fb25091107b564b9f47ef1a014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_892ec5a8780006c0c9472e8ac92e96e6ac8f945d405857d2d7e1fef60c8b1196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892ec5a8780006c0c9472e8ac92e96e6ac8f945d405857d2d7e1fef60c8b1196->enter($__internal_892ec5a8780006c0c9472e8ac92e96e6ac8f945d405857d2d7e1fef60c8b1196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        \$('#esf_espaceabonnebundle_inscription_universite_langue').change(function() {

            var \$form = \$(this).closest('form');
            var data = {};
            data[\$('#esf_espaceabonnebundle_inscription_universite_langue').attr('name')] = \$('#esf_espaceabonnebundle_inscription_universite_langue').val();

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

           \$('#esf_espaceabonnebundle_inscription_universite_formation').change(function() {

            var \$form = \$(this).closest('form');
            var data = {};
            data[\$('#esf_espaceabonnebundle_inscription_universite_formation').attr('name')] =  \$('#esf_espaceabonnebundle_inscription_universite_formation').val();

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
        
        $__internal_892ec5a8780006c0c9472e8ac92e96e6ac8f945d405857d2d7e1fef60c8b1196->leave($__internal_892ec5a8780006c0c9472e8ac92e96e6ac8f945d405857d2d7e1fef60c8b1196_prof);

        
        $__internal_c370c65a4afa1cae83782aef71f0c5159a1645fb25091107b564b9f47ef1a014->leave($__internal_c370c65a4afa1cae83782aef71f0c5159a1645fb25091107b564b9f47ef1a014_prof);

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
        \$('#esf_espaceabonnebundle_inscription_universite_langue').change(function() {

            var \$form = \$(this).closest('form');
            var data = {};
            data[\$('#esf_espaceabonnebundle_inscription_universite_langue').attr('name')] = \$('#esf_espaceabonnebundle_inscription_universite_langue').val();

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

           \$('#esf_espaceabonnebundle_inscription_universite_formation').change(function() {

            var \$form = \$(this).closest('form');
            var data = {};
            data[\$('#esf_espaceabonnebundle_inscription_universite_formation').attr('name')] =  \$('#esf_espaceabonnebundle_inscription_universite_formation').val();

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
 
#}", "@ESFEspaceAbonne/back/universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\universiteOne.html.twig");
    }
}
