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
        $__internal_30bc076fcf83150e1375e0e29cc1e4d72a0a3e5653ef8a3ab438aadf0cfed04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30bc076fcf83150e1375e0e29cc1e4d72a0a3e5653ef8a3ab438aadf0cfed04f->enter($__internal_30bc076fcf83150e1375e0e29cc1e4d72a0a3e5653ef8a3ab438aadf0cfed04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $__internal_36ca68b9f35a5bc1467ee383b221af1f9c867da424d697c38a5898d3a31862ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ca68b9f35a5bc1467ee383b221af1f9c867da424d697c38a5898d3a31862ca->enter($__internal_36ca68b9f35a5bc1467ee383b221af1f9c867da424d697c38a5898d3a31862ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30bc076fcf83150e1375e0e29cc1e4d72a0a3e5653ef8a3ab438aadf0cfed04f->leave($__internal_30bc076fcf83150e1375e0e29cc1e4d72a0a3e5653ef8a3ab438aadf0cfed04f_prof);

        
        $__internal_36ca68b9f35a5bc1467ee383b221af1f9c867da424d697c38a5898d3a31862ca->leave($__internal_36ca68b9f35a5bc1467ee383b221af1f9c867da424d697c38a5898d3a31862ca_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3ce0bfac902123436b22aad05e7938003ea599538fa0090bdb9de003df7faec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ce0bfac902123436b22aad05e7938003ea599538fa0090bdb9de003df7faec->enter($__internal_f3ce0bfac902123436b22aad05e7938003ea599538fa0090bdb9de003df7faec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09fbd066224c17ff1043f806dbf7de59aaeafeeb2bb7f60c46693f651ccec206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09fbd066224c17ff1043f806dbf7de59aaeafeeb2bb7f60c46693f651ccec206->enter($__internal_09fbd066224c17ff1043f806dbf7de59aaeafeeb2bb7f60c46693f651ccec206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_09fbd066224c17ff1043f806dbf7de59aaeafeeb2bb7f60c46693f651ccec206->leave($__internal_09fbd066224c17ff1043f806dbf7de59aaeafeeb2bb7f60c46693f651ccec206_prof);

        
        $__internal_f3ce0bfac902123436b22aad05e7938003ea599538fa0090bdb9de003df7faec->leave($__internal_f3ce0bfac902123436b22aad05e7938003ea599538fa0090bdb9de003df7faec_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8822272161380f0e2d49bdffc59173859908cf3fe4d61be6b8e50177e26480c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8822272161380f0e2d49bdffc59173859908cf3fe4d61be6b8e50177e26480c8->enter($__internal_8822272161380f0e2d49bdffc59173859908cf3fe4d61be6b8e50177e26480c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_97bb05f1ccd29f8f21bd2f7de4514977c7dfe8ad6209e765e6adb4d46349704f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bb05f1ccd29f8f21bd2f7de4514977c7dfe8ad6209e765e6adb4d46349704f->enter($__internal_97bb05f1ccd29f8f21bd2f7de4514977c7dfe8ad6209e765e6adb4d46349704f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_97bb05f1ccd29f8f21bd2f7de4514977c7dfe8ad6209e765e6adb4d46349704f->leave($__internal_97bb05f1ccd29f8f21bd2f7de4514977c7dfe8ad6209e765e6adb4d46349704f_prof);

        
        $__internal_8822272161380f0e2d49bdffc59173859908cf3fe4d61be6b8e50177e26480c8->leave($__internal_8822272161380f0e2d49bdffc59173859908cf3fe4d61be6b8e50177e26480c8_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_abec86b58083d091497818a62701a9ff89c779684582519a20f1cc3a4f99ca71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abec86b58083d091497818a62701a9ff89c779684582519a20f1cc3a4f99ca71->enter($__internal_abec86b58083d091497818a62701a9ff89c779684582519a20f1cc3a4f99ca71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e2160706e83bb710eb9c2e89b70a8ae95b50b69b9d4419067cc46d494aeca120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2160706e83bb710eb9c2e89b70a8ae95b50b69b9d4419067cc46d494aeca120->enter($__internal_e2160706e83bb710eb9c2e89b70a8ae95b50b69b9d4419067cc46d494aeca120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
                            }
                        });
                    });
                }
            });
        });

    </script>

";
        
        $__internal_e2160706e83bb710eb9c2e89b70a8ae95b50b69b9d4419067cc46d494aeca120->leave($__internal_e2160706e83bb710eb9c2e89b70a8ae95b50b69b9d4419067cc46d494aeca120_prof);

        
        $__internal_abec86b58083d091497818a62701a9ff89c779684582519a20f1cc3a4f99ca71->leave($__internal_abec86b58083d091497818a62701a9ff89c779684582519a20f1cc3a4f99ca71_prof);

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