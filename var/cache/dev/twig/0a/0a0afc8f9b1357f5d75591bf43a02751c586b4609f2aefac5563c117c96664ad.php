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
        $__internal_6f52e3773f441f04cf6afec4329d81e5541495ab1c075fe96ae1ae480e330418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f52e3773f441f04cf6afec4329d81e5541495ab1c075fe96ae1ae480e330418->enter($__internal_6f52e3773f441f04cf6afec4329d81e5541495ab1c075fe96ae1ae480e330418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $__internal_b7490c9387801e6e73f1c05b503759cc9debad77080677ff0497582ba68d00c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7490c9387801e6e73f1c05b503759cc9debad77080677ff0497582ba68d00c6->enter($__internal_b7490c9387801e6e73f1c05b503759cc9debad77080677ff0497582ba68d00c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f52e3773f441f04cf6afec4329d81e5541495ab1c075fe96ae1ae480e330418->leave($__internal_6f52e3773f441f04cf6afec4329d81e5541495ab1c075fe96ae1ae480e330418_prof);

        
        $__internal_b7490c9387801e6e73f1c05b503759cc9debad77080677ff0497582ba68d00c6->leave($__internal_b7490c9387801e6e73f1c05b503759cc9debad77080677ff0497582ba68d00c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cc1452bbb5ad100ec1e95bb0840a60dba93e787bede6b482d6f0f94cedf4b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cc1452bbb5ad100ec1e95bb0840a60dba93e787bede6b482d6f0f94cedf4b97->enter($__internal_5cc1452bbb5ad100ec1e95bb0840a60dba93e787bede6b482d6f0f94cedf4b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1d8de890c9e77557ed62e731d1b7fa7d45685e0799e5fc086955312a6d168354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8de890c9e77557ed62e731d1b7fa7d45685e0799e5fc086955312a6d168354->enter($__internal_1d8de890c9e77557ed62e731d1b7fa7d45685e0799e5fc086955312a6d168354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1d8de890c9e77557ed62e731d1b7fa7d45685e0799e5fc086955312a6d168354->leave($__internal_1d8de890c9e77557ed62e731d1b7fa7d45685e0799e5fc086955312a6d168354_prof);

        
        $__internal_5cc1452bbb5ad100ec1e95bb0840a60dba93e787bede6b482d6f0f94cedf4b97->leave($__internal_5cc1452bbb5ad100ec1e95bb0840a60dba93e787bede6b482d6f0f94cedf4b97_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d3691eb28e6e58ec17bc83e6ae1b974f86af3f9726151d6cad54f61bdd5df0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3691eb28e6e58ec17bc83e6ae1b974f86af3f9726151d6cad54f61bdd5df0d1->enter($__internal_d3691eb28e6e58ec17bc83e6ae1b974f86af3f9726151d6cad54f61bdd5df0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_bfbf8221ec57b1cca2174a2418b5f49fcdbce1fac40239b42539a43cfa38f293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfbf8221ec57b1cca2174a2418b5f49fcdbce1fac40239b42539a43cfa38f293->enter($__internal_bfbf8221ec57b1cca2174a2418b5f49fcdbce1fac40239b42539a43cfa38f293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_bfbf8221ec57b1cca2174a2418b5f49fcdbce1fac40239b42539a43cfa38f293->leave($__internal_bfbf8221ec57b1cca2174a2418b5f49fcdbce1fac40239b42539a43cfa38f293_prof);

        
        $__internal_d3691eb28e6e58ec17bc83e6ae1b974f86af3f9726151d6cad54f61bdd5df0d1->leave($__internal_d3691eb28e6e58ec17bc83e6ae1b974f86af3f9726151d6cad54f61bdd5df0d1_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_604de3ca74f34194ae0a1481508191c95a37940da542019c60e4d2ea37491b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_604de3ca74f34194ae0a1481508191c95a37940da542019c60e4d2ea37491b42->enter($__internal_604de3ca74f34194ae0a1481508191c95a37940da542019c60e4d2ea37491b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_c1325ade5e1290a336a9cd8ca77bd91f12d2734c7ab4c54f215b401b5a8a7aee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1325ade5e1290a336a9cd8ca77bd91f12d2734c7ab4c54f215b401b5a8a7aee->enter($__internal_c1325ade5e1290a336a9cd8ca77bd91f12d2734c7ab4c54f215b401b5a8a7aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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

    
";
        
        $__internal_c1325ade5e1290a336a9cd8ca77bd91f12d2734c7ab4c54f215b401b5a8a7aee->leave($__internal_c1325ade5e1290a336a9cd8ca77bd91f12d2734c7ab4c54f215b401b5a8a7aee_prof);

        
        $__internal_604de3ca74f34194ae0a1481508191c95a37940da542019c60e4d2ea37491b42->leave($__internal_604de3ca74f34194ae0a1481508191c95a37940da542019c60e4d2ea37491b42_prof);

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

    
{% endblock %}
{#
  <script>
        \$('#esf_espaceabonnebundle_t_universite_langue').change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$('#esf_espaceabonnebundle_t_universite_langue').attr('name')] = \$('#esf_espaceabonnebundle_t_universite_langue').val();

            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \"{{ path('esf_espace_abonne_universiteAjax')}}\" //\$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                dataType: 'json',
                success: function(json) {
                  \$('#esf_espaceabonnebundle_t_universite_formation').html('');
                  \$.each(json, function(index, value) {
                   \$('#esf_espaceabonnebundle_t_universite_formation').append('<option value=\"'+ value.id +'\">'+ value.formation +'</option>');
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
#}", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/universiteOne.html.twig");
    }
}
