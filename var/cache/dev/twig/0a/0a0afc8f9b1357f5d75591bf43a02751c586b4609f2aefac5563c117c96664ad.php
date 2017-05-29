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
        $__internal_6e07d6d8af7c0421112704248c99b800aa04ec4af4a11703332eaae2ec1981cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e07d6d8af7c0421112704248c99b800aa04ec4af4a11703332eaae2ec1981cc->enter($__internal_6e07d6d8af7c0421112704248c99b800aa04ec4af4a11703332eaae2ec1981cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $__internal_ac82c0a54fbaedf667cdf8cdb0245cd9b80935f8cac50587d07adad0738c8723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac82c0a54fbaedf667cdf8cdb0245cd9b80935f8cac50587d07adad0738c8723->enter($__internal_ac82c0a54fbaedf667cdf8cdb0245cd9b80935f8cac50587d07adad0738c8723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e07d6d8af7c0421112704248c99b800aa04ec4af4a11703332eaae2ec1981cc->leave($__internal_6e07d6d8af7c0421112704248c99b800aa04ec4af4a11703332eaae2ec1981cc_prof);

        
        $__internal_ac82c0a54fbaedf667cdf8cdb0245cd9b80935f8cac50587d07adad0738c8723->leave($__internal_ac82c0a54fbaedf667cdf8cdb0245cd9b80935f8cac50587d07adad0738c8723_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15c460eb271ed1ea13d5dc858bd3a87c3f3b0df9bb77b502744588d393c21974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c460eb271ed1ea13d5dc858bd3a87c3f3b0df9bb77b502744588d393c21974->enter($__internal_15c460eb271ed1ea13d5dc858bd3a87c3f3b0df9bb77b502744588d393c21974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2008ff02d9440d83f75361d332c9be4ac1e4d9eb074f4e7dc6374713f3e550a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2008ff02d9440d83f75361d332c9be4ac1e4d9eb074f4e7dc6374713f3e550a1->enter($__internal_2008ff02d9440d83f75361d332c9be4ac1e4d9eb074f4e7dc6374713f3e550a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2008ff02d9440d83f75361d332c9be4ac1e4d9eb074f4e7dc6374713f3e550a1->leave($__internal_2008ff02d9440d83f75361d332c9be4ac1e4d9eb074f4e7dc6374713f3e550a1_prof);

        
        $__internal_15c460eb271ed1ea13d5dc858bd3a87c3f3b0df9bb77b502744588d393c21974->leave($__internal_15c460eb271ed1ea13d5dc858bd3a87c3f3b0df9bb77b502744588d393c21974_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1a1423f1254faf3bc2edfab72d901ce42bf0d510224746aaa40cce96e26679f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a1423f1254faf3bc2edfab72d901ce42bf0d510224746aaa40cce96e26679f9->enter($__internal_1a1423f1254faf3bc2edfab72d901ce42bf0d510224746aaa40cce96e26679f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_9170db0bc663585b46e6b80481a7f398d3b99889b919e596f37a4f6bf4833a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9170db0bc663585b46e6b80481a7f398d3b99889b919e596f37a4f6bf4833a1b->enter($__internal_9170db0bc663585b46e6b80481a7f398d3b99889b919e596f37a4f6bf4833a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_9170db0bc663585b46e6b80481a7f398d3b99889b919e596f37a4f6bf4833a1b->leave($__internal_9170db0bc663585b46e6b80481a7f398d3b99889b919e596f37a4f6bf4833a1b_prof);

        
        $__internal_1a1423f1254faf3bc2edfab72d901ce42bf0d510224746aaa40cce96e26679f9->leave($__internal_1a1423f1254faf3bc2edfab72d901ce42bf0d510224746aaa40cce96e26679f9_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_df7f5c04db18028d1416230b5355cbf106d93868e6155ae098d02fe60b5ba5cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7f5c04db18028d1416230b5355cbf106d93868e6155ae098d02fe60b5ba5cd->enter($__internal_df7f5c04db18028d1416230b5355cbf106d93868e6155ae098d02fe60b5ba5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_5bbf03f068a7b8885f8c4ce2dc669a9af53f891912c9533d01a9ce6362da26fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbf03f068a7b8885f8c4ce2dc669a9af53f891912c9533d01a9ce6362da26fd->enter($__internal_5bbf03f068a7b8885f8c4ce2dc669a9af53f891912c9533d01a9ce6362da26fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'label', array("label" => "Formation"));
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'widget');
        echo "

                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'label', array("label" => "Langue"));
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'widget');
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
    var \$formation = \$('#esf_espaceabonnebundle_t_universite_formation');

    \$formation.change(function() {
        var \$form = \$(this).closest('form');
        var data = {};
        data[\$formation.attr('name')] = \$formation.val();
        \$.ajax({
            beforeSend: function(){
                \$(\"#esf_espaceabonnebundle_t_universite_langue\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
            },
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
                \$('#esf_espaceabonnebundle_t_universite_langue').replaceWith(
                    \$(html).find('#esf_espaceabonnebundle_t_universite_langue')
                    );
                
                var \$langue = \$('#esf_espaceabonnebundle_t_universite_langue');

                \$langue.change(function() {
                    var \$form = \$(this).closest('form');
                    var data = {};
                    data[\$langue.attr('name')] = \$langue.val();
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
                        }
                    });
                });
            }
        });
    });

</script>

";
        
        $__internal_5bbf03f068a7b8885f8c4ce2dc669a9af53f891912c9533d01a9ce6362da26fd->leave($__internal_5bbf03f068a7b8885f8c4ce2dc669a9af53f891912c9533d01a9ce6362da26fd_prof);

        
        $__internal_df7f5c04db18028d1416230b5355cbf106d93868e6155ae098d02fe60b5ba5cd->leave($__internal_df7f5c04db18028d1416230b5355cbf106d93868e6155ae098d02fe60b5ba5cd_prof);

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

                {{ form_label(form.formation, 'Formation') }}
                {{ form_errors(form.formation) }}
                {{ form_widget(form.formation) }}

                {{ form_label(form.langue, 'Langue') }}
                {{ form_errors(form.langue) }}
                {{ form_widget(form.langue) }}

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
    var \$formation = \$('#esf_espaceabonnebundle_t_universite_formation');

    \$formation.change(function() {
        var \$form = \$(this).closest('form');
        var data = {};
        data[\$formation.attr('name')] = \$formation.val();
        \$.ajax({
            beforeSend: function(){
                \$(\"#esf_espaceabonnebundle_t_universite_langue\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
            },
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
                \$('#esf_espaceabonnebundle_t_universite_langue').replaceWith(
                    \$(html).find('#esf_espaceabonnebundle_t_universite_langue')
                    );
                
                var \$langue = \$('#esf_espaceabonnebundle_t_universite_langue');

                \$langue.change(function() {
                    var \$form = \$(this).closest('form');
                    var data = {};
                    data[\$langue.attr('name')] = \$langue.val();
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
                        }
                    });
                });
            }
        });
    });

</script>

{% endblock %}
", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/universiteOne.html.twig");
    }
}
