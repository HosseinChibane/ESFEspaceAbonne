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
        $__internal_a2c44252abe30fe17fb209b4f48ce17286f9970601bd5f135b8173b923517eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2c44252abe30fe17fb209b4f48ce17286f9970601bd5f135b8173b923517eab->enter($__internal_a2c44252abe30fe17fb209b4f48ce17286f9970601bd5f135b8173b923517eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteOne.html.twig"));

        $__internal_11221bf9a60965a78ac4f462cc4e7687a130737d91003f9e7fe1973b7825823a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11221bf9a60965a78ac4f462cc4e7687a130737d91003f9e7fe1973b7825823a->enter($__internal_11221bf9a60965a78ac4f462cc4e7687a130737d91003f9e7fe1973b7825823a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c44252abe30fe17fb209b4f48ce17286f9970601bd5f135b8173b923517eab->leave($__internal_a2c44252abe30fe17fb209b4f48ce17286f9970601bd5f135b8173b923517eab_prof);

        
        $__internal_11221bf9a60965a78ac4f462cc4e7687a130737d91003f9e7fe1973b7825823a->leave($__internal_11221bf9a60965a78ac4f462cc4e7687a130737d91003f9e7fe1973b7825823a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6ef1a2f693e0d7d7565847057b4294048638d137048ad82a0455331cd2f4564 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ef1a2f693e0d7d7565847057b4294048638d137048ad82a0455331cd2f4564->enter($__internal_b6ef1a2f693e0d7d7565847057b4294048638d137048ad82a0455331cd2f4564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_af8a37eb069adb72e8fab389e6c72fd7c628a2520dbf6501f0abcd823b329edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8a37eb069adb72e8fab389e6c72fd7c628a2520dbf6501f0abcd823b329edc->enter($__internal_af8a37eb069adb72e8fab389e6c72fd7c628a2520dbf6501f0abcd823b329edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_af8a37eb069adb72e8fab389e6c72fd7c628a2520dbf6501f0abcd823b329edc->leave($__internal_af8a37eb069adb72e8fab389e6c72fd7c628a2520dbf6501f0abcd823b329edc_prof);

        
        $__internal_b6ef1a2f693e0d7d7565847057b4294048638d137048ad82a0455331cd2f4564->leave($__internal_b6ef1a2f693e0d7d7565847057b4294048638d137048ad82a0455331cd2f4564_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b491e5689519d9169a51b427f08598c34391e91909675d86516560ae9c09745d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b491e5689519d9169a51b427f08598c34391e91909675d86516560ae9c09745d->enter($__internal_b491e5689519d9169a51b427f08598c34391e91909675d86516560ae9c09745d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_bbeb206eeb139d165968e009ea6ab0467089857085efc445a8d02af8b505e887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbeb206eeb139d165968e009ea6ab0467089857085efc445a8d02af8b505e887->enter($__internal_bbeb206eeb139d165968e009ea6ab0467089857085efc445a8d02af8b505e887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_bbeb206eeb139d165968e009ea6ab0467089857085efc445a8d02af8b505e887->leave($__internal_bbeb206eeb139d165968e009ea6ab0467089857085efc445a8d02af8b505e887_prof);

        
        $__internal_b491e5689519d9169a51b427f08598c34391e91909675d86516560ae9c09745d->leave($__internal_b491e5689519d9169a51b427f08598c34391e91909675d86516560ae9c09745d_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_599457d71b5375fb7f34f7468135589a93d9b6a7aba4a41258994dc2ed3ec6ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599457d71b5375fb7f34f7468135589a93d9b6a7aba4a41258994dc2ed3ec6ce->enter($__internal_599457d71b5375fb7f34f7468135589a93d9b6a7aba4a41258994dc2ed3ec6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_7653e509b7b76e05f64be32495ac0d1e45e5643ff1142a3a4789e0036ae7c8db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7653e509b7b76e05f64be32495ac0d1e45e5643ff1142a3a4789e0036ae7c8db->enter($__internal_7653e509b7b76e05f64be32495ac0d1e45e5643ff1142a3a4789e0036ae7c8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_7653e509b7b76e05f64be32495ac0d1e45e5643ff1142a3a4789e0036ae7c8db->leave($__internal_7653e509b7b76e05f64be32495ac0d1e45e5643ff1142a3a4789e0036ae7c8db_prof);

        
        $__internal_599457d71b5375fb7f34f7468135589a93d9b6a7aba4a41258994dc2ed3ec6ce->leave($__internal_599457d71b5375fb7f34f7468135589a93d9b6a7aba4a41258994dc2ed3ec6ce_prof);

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
", "@ESFEspaceAbonne/back/universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\universiteOne.html.twig");
    }
}
