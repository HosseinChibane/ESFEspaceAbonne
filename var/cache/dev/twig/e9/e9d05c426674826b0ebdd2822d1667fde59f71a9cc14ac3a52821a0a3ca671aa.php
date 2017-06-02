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
        $__internal_770893631dad77c090bf1606abcd696bbd61a76b128b21b5921545ed46f05a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_770893631dad77c090bf1606abcd696bbd61a76b128b21b5921545ed46f05a78->enter($__internal_770893631dad77c090bf1606abcd696bbd61a76b128b21b5921545ed46f05a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteOne.html.twig"));

        $__internal_105dc4ee5f548e3d9b633313ac8bfd956ce78fc3881eaecb166932bf29cb0115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105dc4ee5f548e3d9b633313ac8bfd956ce78fc3881eaecb166932bf29cb0115->enter($__internal_105dc4ee5f548e3d9b633313ac8bfd956ce78fc3881eaecb166932bf29cb0115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_770893631dad77c090bf1606abcd696bbd61a76b128b21b5921545ed46f05a78->leave($__internal_770893631dad77c090bf1606abcd696bbd61a76b128b21b5921545ed46f05a78_prof);

        
        $__internal_105dc4ee5f548e3d9b633313ac8bfd956ce78fc3881eaecb166932bf29cb0115->leave($__internal_105dc4ee5f548e3d9b633313ac8bfd956ce78fc3881eaecb166932bf29cb0115_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0dae03a6a89e6ae67097858fae4f4a6e5117bbb6243725d245877cb66912179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0dae03a6a89e6ae67097858fae4f4a6e5117bbb6243725d245877cb66912179->enter($__internal_e0dae03a6a89e6ae67097858fae4f4a6e5117bbb6243725d245877cb66912179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b309ad255e5fb71455825e3adc0c0be02765c6140c4180c0e92d72cdf04703c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b309ad255e5fb71455825e3adc0c0be02765c6140c4180c0e92d72cdf04703c->enter($__internal_8b309ad255e5fb71455825e3adc0c0be02765c6140c4180c0e92d72cdf04703c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8b309ad255e5fb71455825e3adc0c0be02765c6140c4180c0e92d72cdf04703c->leave($__internal_8b309ad255e5fb71455825e3adc0c0be02765c6140c4180c0e92d72cdf04703c_prof);

        
        $__internal_e0dae03a6a89e6ae67097858fae4f4a6e5117bbb6243725d245877cb66912179->leave($__internal_e0dae03a6a89e6ae67097858fae4f4a6e5117bbb6243725d245877cb66912179_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_234d16c7d2e9a8605b71f24192dbb09be9456aa6cfc5eababf201242e6e57a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234d16c7d2e9a8605b71f24192dbb09be9456aa6cfc5eababf201242e6e57a64->enter($__internal_234d16c7d2e9a8605b71f24192dbb09be9456aa6cfc5eababf201242e6e57a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_b86ac7a35df279aa7a53f90520bf326eded368660c9d682b37438c25f3a47cc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b86ac7a35df279aa7a53f90520bf326eded368660c9d682b37438c25f3a47cc5->enter($__internal_b86ac7a35df279aa7a53f90520bf326eded368660c9d682b37438c25f3a47cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_b86ac7a35df279aa7a53f90520bf326eded368660c9d682b37438c25f3a47cc5->leave($__internal_b86ac7a35df279aa7a53f90520bf326eded368660c9d682b37438c25f3a47cc5_prof);

        
        $__internal_234d16c7d2e9a8605b71f24192dbb09be9456aa6cfc5eababf201242e6e57a64->leave($__internal_234d16c7d2e9a8605b71f24192dbb09be9456aa6cfc5eababf201242e6e57a64_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_d8a0f92ec2110cd734ca235210917682ed6dafe193d7ead652934ade99ae77ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a0f92ec2110cd734ca235210917682ed6dafe193d7ead652934ade99ae77ed->enter($__internal_d8a0f92ec2110cd734ca235210917682ed6dafe193d7ead652934ade99ae77ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_8845cb3d190ee48693415f1b7de9230208736c24154d12addbceec6893c8e124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8845cb3d190ee48693415f1b7de9230208736c24154d12addbceec6893c8e124->enter($__internal_8845cb3d190ee48693415f1b7de9230208736c24154d12addbceec6893c8e124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_8845cb3d190ee48693415f1b7de9230208736c24154d12addbceec6893c8e124->leave($__internal_8845cb3d190ee48693415f1b7de9230208736c24154d12addbceec6893c8e124_prof);

        
        $__internal_d8a0f92ec2110cd734ca235210917682ed6dafe193d7ead652934ade99ae77ed->leave($__internal_d8a0f92ec2110cd734ca235210917682ed6dafe193d7ead652934ade99ae77ed_prof);

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
 
#}", "ESFEspaceAbonneBundle:back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/universiteOne.html.twig");
    }
}
