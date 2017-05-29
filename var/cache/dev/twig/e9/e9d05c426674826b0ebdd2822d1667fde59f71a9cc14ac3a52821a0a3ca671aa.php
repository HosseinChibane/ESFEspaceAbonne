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
        $__internal_749d87814019a20805bace76ec9d87d96958072ff4cf01d5f1163be02f929068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_749d87814019a20805bace76ec9d87d96958072ff4cf01d5f1163be02f929068->enter($__internal_749d87814019a20805bace76ec9d87d96958072ff4cf01d5f1163be02f929068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteOne.html.twig"));

        $__internal_2b621c4cef4c8dbdff463ea81456c5e9d4b48c85409d61a02f9d89888576be32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b621c4cef4c8dbdff463ea81456c5e9d4b48c85409d61a02f9d89888576be32->enter($__internal_2b621c4cef4c8dbdff463ea81456c5e9d4b48c85409d61a02f9d89888576be32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_749d87814019a20805bace76ec9d87d96958072ff4cf01d5f1163be02f929068->leave($__internal_749d87814019a20805bace76ec9d87d96958072ff4cf01d5f1163be02f929068_prof);

        
        $__internal_2b621c4cef4c8dbdff463ea81456c5e9d4b48c85409d61a02f9d89888576be32->leave($__internal_2b621c4cef4c8dbdff463ea81456c5e9d4b48c85409d61a02f9d89888576be32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_828bf29eb88f2ea45b4227dd15e66f357e81086983f9afb3eb00b6b670b7b2b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_828bf29eb88f2ea45b4227dd15e66f357e81086983f9afb3eb00b6b670b7b2b0->enter($__internal_828bf29eb88f2ea45b4227dd15e66f357e81086983f9afb3eb00b6b670b7b2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1187d19c3009cab2db0ec334d7652fa4ee2c7c43fb40f4d97ef10051782de2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1187d19c3009cab2db0ec334d7652fa4ee2c7c43fb40f4d97ef10051782de2dc->enter($__internal_1187d19c3009cab2db0ec334d7652fa4ee2c7c43fb40f4d97ef10051782de2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1187d19c3009cab2db0ec334d7652fa4ee2c7c43fb40f4d97ef10051782de2dc->leave($__internal_1187d19c3009cab2db0ec334d7652fa4ee2c7c43fb40f4d97ef10051782de2dc_prof);

        
        $__internal_828bf29eb88f2ea45b4227dd15e66f357e81086983f9afb3eb00b6b670b7b2b0->leave($__internal_828bf29eb88f2ea45b4227dd15e66f357e81086983f9afb3eb00b6b670b7b2b0_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_da64fbbc7d04cef46223fb8bb377802bc7c968810d822a8f55a1c42cc7e50beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da64fbbc7d04cef46223fb8bb377802bc7c968810d822a8f55a1c42cc7e50beb->enter($__internal_da64fbbc7d04cef46223fb8bb377802bc7c968810d822a8f55a1c42cc7e50beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_48996eb968af264d70b3edc95559ce08829f7a4ebf6f5582d1d454d1acf7006a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48996eb968af264d70b3edc95559ce08829f7a4ebf6f5582d1d454d1acf7006a->enter($__internal_48996eb968af264d70b3edc95559ce08829f7a4ebf6f5582d1d454d1acf7006a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_48996eb968af264d70b3edc95559ce08829f7a4ebf6f5582d1d454d1acf7006a->leave($__internal_48996eb968af264d70b3edc95559ce08829f7a4ebf6f5582d1d454d1acf7006a_prof);

        
        $__internal_da64fbbc7d04cef46223fb8bb377802bc7c968810d822a8f55a1c42cc7e50beb->leave($__internal_da64fbbc7d04cef46223fb8bb377802bc7c968810d822a8f55a1c42cc7e50beb_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_0ec94d101ee7f88402c7aee9dc8c2dc54f1c689a5afb1721858b7157943816d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec94d101ee7f88402c7aee9dc8c2dc54f1c689a5afb1721858b7157943816d2->enter($__internal_0ec94d101ee7f88402c7aee9dc8c2dc54f1c689a5afb1721858b7157943816d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_2a672248f852ee71326e54a3be6b2c796ee2cfeafb8a0d7944683a679dfd7e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a672248f852ee71326e54a3be6b2c796ee2cfeafb8a0d7944683a679dfd7e28->enter($__internal_2a672248f852ee71326e54a3be6b2c796ee2cfeafb8a0d7944683a679dfd7e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_2a672248f852ee71326e54a3be6b2c796ee2cfeafb8a0d7944683a679dfd7e28->leave($__internal_2a672248f852ee71326e54a3be6b2c796ee2cfeafb8a0d7944683a679dfd7e28_prof);

        
        $__internal_0ec94d101ee7f88402c7aee9dc8c2dc54f1c689a5afb1721858b7157943816d2->leave($__internal_0ec94d101ee7f88402c7aee9dc8c2dc54f1c689a5afb1721858b7157943816d2_prof);

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
", "ESFEspaceAbonneBundle:back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/universiteOne.html.twig");
    }
}
