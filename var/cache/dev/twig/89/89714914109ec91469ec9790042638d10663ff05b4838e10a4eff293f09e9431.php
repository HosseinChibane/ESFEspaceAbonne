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
        $__internal_afa4b2a4a5296a4da44fcc3f22c9436bb069c4e576f84103e288c3baa252d2ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa4b2a4a5296a4da44fcc3f22c9436bb069c4e576f84103e288c3baa252d2ad->enter($__internal_afa4b2a4a5296a4da44fcc3f22c9436bb069c4e576f84103e288c3baa252d2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteOne.html.twig"));

        $__internal_578555b5520080e3e01a7bcd8d3edf2396a40b92c720718fdfffdd79b16ffff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578555b5520080e3e01a7bcd8d3edf2396a40b92c720718fdfffdd79b16ffff7->enter($__internal_578555b5520080e3e01a7bcd8d3edf2396a40b92c720718fdfffdd79b16ffff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afa4b2a4a5296a4da44fcc3f22c9436bb069c4e576f84103e288c3baa252d2ad->leave($__internal_afa4b2a4a5296a4da44fcc3f22c9436bb069c4e576f84103e288c3baa252d2ad_prof);

        
        $__internal_578555b5520080e3e01a7bcd8d3edf2396a40b92c720718fdfffdd79b16ffff7->leave($__internal_578555b5520080e3e01a7bcd8d3edf2396a40b92c720718fdfffdd79b16ffff7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d11438e623e3889a3048e2afb4d826be15ed0f78e1ce482f83f48164a0a0764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d11438e623e3889a3048e2afb4d826be15ed0f78e1ce482f83f48164a0a0764->enter($__internal_2d11438e623e3889a3048e2afb4d826be15ed0f78e1ce482f83f48164a0a0764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e5b9d434e9d146abd56399f791542e63a2f2393852d5665106b2aa8523104a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e5b9d434e9d146abd56399f791542e63a2f2393852d5665106b2aa8523104a8->enter($__internal_4e5b9d434e9d146abd56399f791542e63a2f2393852d5665106b2aa8523104a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4e5b9d434e9d146abd56399f791542e63a2f2393852d5665106b2aa8523104a8->leave($__internal_4e5b9d434e9d146abd56399f791542e63a2f2393852d5665106b2aa8523104a8_prof);

        
        $__internal_2d11438e623e3889a3048e2afb4d826be15ed0f78e1ce482f83f48164a0a0764->leave($__internal_2d11438e623e3889a3048e2afb4d826be15ed0f78e1ce482f83f48164a0a0764_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5680140cd4b24148c75e179d5441860ca25f352f0c386f5601a63707e3a8f438 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5680140cd4b24148c75e179d5441860ca25f352f0c386f5601a63707e3a8f438->enter($__internal_5680140cd4b24148c75e179d5441860ca25f352f0c386f5601a63707e3a8f438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_3b2fd041db2fb3c42858b3e223b6779a7791626e652d632900a42810b3ac8361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b2fd041db2fb3c42858b3e223b6779a7791626e652d632900a42810b3ac8361->enter($__internal_3b2fd041db2fb3c42858b3e223b6779a7791626e652d632900a42810b3ac8361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_3b2fd041db2fb3c42858b3e223b6779a7791626e652d632900a42810b3ac8361->leave($__internal_3b2fd041db2fb3c42858b3e223b6779a7791626e652d632900a42810b3ac8361_prof);

        
        $__internal_5680140cd4b24148c75e179d5441860ca25f352f0c386f5601a63707e3a8f438->leave($__internal_5680140cd4b24148c75e179d5441860ca25f352f0c386f5601a63707e3a8f438_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_7c2c73227574fb2bee40d2d244534443bb922d75256134268d3ade1fe172b796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2c73227574fb2bee40d2d244534443bb922d75256134268d3ade1fe172b796->enter($__internal_7c2c73227574fb2bee40d2d244534443bb922d75256134268d3ade1fe172b796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_3ca994d3eee52476133bab0997e30a045e1e0f21421e734e9a1ce255e2962e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca994d3eee52476133bab0997e30a045e1e0f21421e734e9a1ce255e2962e0d->enter($__internal_3ca994d3eee52476133bab0997e30a045e1e0f21421e734e9a1ce255e2962e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        \$('#esf_espaceabonnebundle_t_universite_langue').change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$('#esf_espaceabonnebundle_t_universite_langue').attr('name')] = \$('#esf_espaceabonnebundle_t_universite_langue').val();

            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(json) {
                  \$('#esf_espaceabonnebundle_t_universite_formation').html('');
                  \$.each(json, function(index, value) {
                     \$('#esf_espaceabonnebundle_t_universite_formation').append('<option value=\"'+ value.id +'\">'+ value.nom +'</option>');
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
                    console.log(JSON.stringify(data));
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
";
        
        $__internal_3ca994d3eee52476133bab0997e30a045e1e0f21421e734e9a1ce255e2962e0d->leave($__internal_3ca994d3eee52476133bab0997e30a045e1e0f21421e734e9a1ce255e2962e0d_prof);

        
        $__internal_7c2c73227574fb2bee40d2d244534443bb922d75256134268d3ade1fe172b796->leave($__internal_7c2c73227574fb2bee40d2d244534443bb922d75256134268d3ade1fe172b796_prof);

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
        \$('#esf_espaceabonnebundle_t_universite_langue').change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$('#esf_espaceabonnebundle_t_universite_langue').attr('name')] = \$('#esf_espaceabonnebundle_t_universite_langue').val();

            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(json) {
                  \$('#esf_espaceabonnebundle_t_universite_formation').html('');
                  \$.each(json, function(index, value) {
                     \$('#esf_espaceabonnebundle_t_universite_formation').append('<option value=\"'+ value.id +'\">'+ value.nom +'</option>');
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
                    console.log(JSON.stringify(data));
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
{% endblock %}
", "@ESFEspaceAbonne/back/universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\universiteOne.html.twig");
    }
}
