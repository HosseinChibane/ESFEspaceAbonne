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
        $__internal_4167d6e31700e178e5be50cd71e8aff0340044b0abad36049a82abb2be14a090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4167d6e31700e178e5be50cd71e8aff0340044b0abad36049a82abb2be14a090->enter($__internal_4167d6e31700e178e5be50cd71e8aff0340044b0abad36049a82abb2be14a090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteOne.html.twig"));

        $__internal_92fd2e8f4a63c5d43de481b2eedadd8000c641ed492ddcdd6a80398bd659dcf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fd2e8f4a63c5d43de481b2eedadd8000c641ed492ddcdd6a80398bd659dcf6->enter($__internal_92fd2e8f4a63c5d43de481b2eedadd8000c641ed492ddcdd6a80398bd659dcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4167d6e31700e178e5be50cd71e8aff0340044b0abad36049a82abb2be14a090->leave($__internal_4167d6e31700e178e5be50cd71e8aff0340044b0abad36049a82abb2be14a090_prof);

        
        $__internal_92fd2e8f4a63c5d43de481b2eedadd8000c641ed492ddcdd6a80398bd659dcf6->leave($__internal_92fd2e8f4a63c5d43de481b2eedadd8000c641ed492ddcdd6a80398bd659dcf6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9965cb25c4015a6dc2c1d573f5918e9efdf997595521032cd3e0f9594f1ab69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9965cb25c4015a6dc2c1d573f5918e9efdf997595521032cd3e0f9594f1ab69c->enter($__internal_9965cb25c4015a6dc2c1d573f5918e9efdf997595521032cd3e0f9594f1ab69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_35bb2d68985ffedbec99ab6967a7ca71b5c2e9a99fbc378f20e4d7d9ca65ccdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bb2d68985ffedbec99ab6967a7ca71b5c2e9a99fbc378f20e4d7d9ca65ccdf->enter($__internal_35bb2d68985ffedbec99ab6967a7ca71b5c2e9a99fbc378f20e4d7d9ca65ccdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_35bb2d68985ffedbec99ab6967a7ca71b5c2e9a99fbc378f20e4d7d9ca65ccdf->leave($__internal_35bb2d68985ffedbec99ab6967a7ca71b5c2e9a99fbc378f20e4d7d9ca65ccdf_prof);

        
        $__internal_9965cb25c4015a6dc2c1d573f5918e9efdf997595521032cd3e0f9594f1ab69c->leave($__internal_9965cb25c4015a6dc2c1d573f5918e9efdf997595521032cd3e0f9594f1ab69c_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_ff879b0181465b8e044969fc9174b7b2c168c3ca6365de8a9a6403e5ff8e0dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff879b0181465b8e044969fc9174b7b2c168c3ca6365de8a9a6403e5ff8e0dca->enter($__internal_ff879b0181465b8e044969fc9174b7b2c168c3ca6365de8a9a6403e5ff8e0dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_b4f36e55890498b7c293c432a6d873a891be76e27372ec4fcff091ba66d1e3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f36e55890498b7c293c432a6d873a891be76e27372ec4fcff091ba66d1e3e7->enter($__internal_b4f36e55890498b7c293c432a6d873a891be76e27372ec4fcff091ba66d1e3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_b4f36e55890498b7c293c432a6d873a891be76e27372ec4fcff091ba66d1e3e7->leave($__internal_b4f36e55890498b7c293c432a6d873a891be76e27372ec4fcff091ba66d1e3e7_prof);

        
        $__internal_ff879b0181465b8e044969fc9174b7b2c168c3ca6365de8a9a6403e5ff8e0dca->leave($__internal_ff879b0181465b8e044969fc9174b7b2c168c3ca6365de8a9a6403e5ff8e0dca_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_fdb655c820517895434689ae31b331ab17bdb6d58a97ee794e519198ea4f77df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb655c820517895434689ae31b331ab17bdb6d58a97ee794e519198ea4f77df->enter($__internal_fdb655c820517895434689ae31b331ab17bdb6d58a97ee794e519198ea4f77df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_5926c7013a9203a06c62a41e8cbd35b6db58bda78bdc3aae96c8fe391d5fd172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5926c7013a9203a06c62a41e8cbd35b6db58bda78bdc3aae96c8fe391d5fd172->enter($__internal_5926c7013a9203a06c62a41e8cbd35b6db58bda78bdc3aae96c8fe391d5fd172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        echo "    ";
        // line 51
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>

<script>
    var \$langue = \$('#esf_espacebundle_t_universite_langue');

    \$langue.change(function() {
        var \$form = \$(this).closest('form');
        var data = {};
        data[\$langue.attr('name')] = \$langue.val();
        \$.ajax({
            beforeSend: function(){
                \$(\"#esf_espacebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
            },
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
                \$('#esf_espacebundle_t_universite_formation').replaceWith(
                    \$(html).find('#esf_espacebundle_t_universite_formation')
                    );
                var \$formation = \$('#esf_espacebundle_t_universite_formation');
                
                \$formation.change(function() {
                    var \$form = \$(this).closest('form');
                    var data = {};
                    data[\$formation.attr('name')] = \$formation.val();
                    \$.ajax({
                        beforeSend: function(){
                            \$(\"#esf_espacebundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                        },
                        url : \$form.attr('action'),
                        type: \$form.attr('method'),
                        data : data,
                        success: function(html) {
                            \$('#esf_espacebundle_t_universite_nometablissement').replaceWith(
                                \$(html).find('#esf_espacebundle_t_universite_nometablissement')
                                );
                        }
                    });
                });
            }
        });
    });
</script>

";
        
        $__internal_5926c7013a9203a06c62a41e8cbd35b6db58bda78bdc3aae96c8fe391d5fd172->leave($__internal_5926c7013a9203a06c62a41e8cbd35b6db58bda78bdc3aae96c8fe391d5fd172_prof);

        
        $__internal_fdb655c820517895434689ae31b331ab17bdb6d58a97ee794e519198ea4f77df->leave($__internal_fdb655c820517895434689ae31b331ab17bdb6d58a97ee794e519198ea4f77df_prof);

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
    var \$langue = \$('#esf_espacebundle_t_universite_langue');

    \$langue.change(function() {
        var \$form = \$(this).closest('form');
        var data = {};
        data[\$langue.attr('name')] = \$langue.val();
        \$.ajax({
            beforeSend: function(){
                \$(\"#esf_espacebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
            },
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
                \$('#esf_espacebundle_t_universite_formation').replaceWith(
                    \$(html).find('#esf_espacebundle_t_universite_formation')
                    );
                var \$formation = \$('#esf_espacebundle_t_universite_formation');
                
                \$formation.change(function() {
                    var \$form = \$(this).closest('form');
                    var data = {};
                    data[\$formation.attr('name')] = \$formation.val();
                    \$.ajax({
                        beforeSend: function(){
                            \$(\"#esf_espacebundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                        },
                        url : \$form.attr('action'),
                        type: \$form.attr('method'),
                        data : data,
                        success: function(html) {
                            \$('#esf_espacebundle_t_universite_nometablissement').replaceWith(
                                \$(html).find('#esf_espacebundle_t_universite_nometablissement')
                                );
                        }
                    });
                });
            }
        });
    });
</script>

{% endblock %}
", "@ESFEspaceAbonne/back/universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\universiteOne.html.twig");
    }
}
