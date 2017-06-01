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
        $__internal_9a24787e76109f4fb92b202bbb2ef64febd726067cb551a81a9166197d0f6be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a24787e76109f4fb92b202bbb2ef64febd726067cb551a81a9166197d0f6be1->enter($__internal_9a24787e76109f4fb92b202bbb2ef64febd726067cb551a81a9166197d0f6be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteOne.html.twig"));

        $__internal_eec62a6745fb7f2125c20189a62ecc36cb6e764422965bbbca35da2010971ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec62a6745fb7f2125c20189a62ecc36cb6e764422965bbbca35da2010971ad9->enter($__internal_eec62a6745fb7f2125c20189a62ecc36cb6e764422965bbbca35da2010971ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a24787e76109f4fb92b202bbb2ef64febd726067cb551a81a9166197d0f6be1->leave($__internal_9a24787e76109f4fb92b202bbb2ef64febd726067cb551a81a9166197d0f6be1_prof);

        
        $__internal_eec62a6745fb7f2125c20189a62ecc36cb6e764422965bbbca35da2010971ad9->leave($__internal_eec62a6745fb7f2125c20189a62ecc36cb6e764422965bbbca35da2010971ad9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_938d9789b26dea9ae16ccefd053948da5d5b4effae9cdd78ac875e68a1d83da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938d9789b26dea9ae16ccefd053948da5d5b4effae9cdd78ac875e68a1d83da8->enter($__internal_938d9789b26dea9ae16ccefd053948da5d5b4effae9cdd78ac875e68a1d83da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f3e12291881b724a2f6bfcda350fae16ef1858f88a690516ed2f4b35f28217c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3e12291881b724a2f6bfcda350fae16ef1858f88a690516ed2f4b35f28217c->enter($__internal_0f3e12291881b724a2f6bfcda350fae16ef1858f88a690516ed2f4b35f28217c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0f3e12291881b724a2f6bfcda350fae16ef1858f88a690516ed2f4b35f28217c->leave($__internal_0f3e12291881b724a2f6bfcda350fae16ef1858f88a690516ed2f4b35f28217c_prof);

        
        $__internal_938d9789b26dea9ae16ccefd053948da5d5b4effae9cdd78ac875e68a1d83da8->leave($__internal_938d9789b26dea9ae16ccefd053948da5d5b4effae9cdd78ac875e68a1d83da8_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3de69fbc44a18f4c093fb1c738ed3a9b1b0ee98c28bfb48d7b717c6877f7cd0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de69fbc44a18f4c093fb1c738ed3a9b1b0ee98c28bfb48d7b717c6877f7cd0b->enter($__internal_3de69fbc44a18f4c093fb1c738ed3a9b1b0ee98c28bfb48d7b717c6877f7cd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6173424fafd244930b288b02d384751c6578ba2877263de81b407e30a51685f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6173424fafd244930b288b02d384751c6578ba2877263de81b407e30a51685f8->enter($__internal_6173424fafd244930b288b02d384751c6578ba2877263de81b407e30a51685f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_6173424fafd244930b288b02d384751c6578ba2877263de81b407e30a51685f8->leave($__internal_6173424fafd244930b288b02d384751c6578ba2877263de81b407e30a51685f8_prof);

        
        $__internal_3de69fbc44a18f4c093fb1c738ed3a9b1b0ee98c28bfb48d7b717c6877f7cd0b->leave($__internal_3de69fbc44a18f4c093fb1c738ed3a9b1b0ee98c28bfb48d7b717c6877f7cd0b_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_163972c83a7e384ab700c3964eb9c5019a89520ae55bf0f018d7bbb830227579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163972c83a7e384ab700c3964eb9c5019a89520ae55bf0f018d7bbb830227579->enter($__internal_163972c83a7e384ab700c3964eb9c5019a89520ae55bf0f018d7bbb830227579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e41d6f5fbb7470a5df8baa43fb012323e8730e132b98d778a0ac9fbe38fb0ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41d6f5fbb7470a5df8baa43fb012323e8730e132b98d778a0ac9fbe38fb0ead->enter($__internal_e41d6f5fbb7470a5df8baa43fb012323e8730e132b98d778a0ac9fbe38fb0ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_e41d6f5fbb7470a5df8baa43fb012323e8730e132b98d778a0ac9fbe38fb0ead->leave($__internal_e41d6f5fbb7470a5df8baa43fb012323e8730e132b98d778a0ac9fbe38fb0ead_prof);

        
        $__internal_163972c83a7e384ab700c3964eb9c5019a89520ae55bf0f018d7bbb830227579->leave($__internal_163972c83a7e384ab700c3964eb9c5019a89520ae55bf0f018d7bbb830227579_prof);

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
", "ESFEspaceAbonneBundle:back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/universiteOne.html.twig");
    }
}
