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
        $__internal_6c86dc6c0547f37d71d3ce60291e7f069249607bf2a070e5eb128e4e3544709d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c86dc6c0547f37d71d3ce60291e7f069249607bf2a070e5eb128e4e3544709d->enter($__internal_6c86dc6c0547f37d71d3ce60291e7f069249607bf2a070e5eb128e4e3544709d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteOne.html.twig"));

        $__internal_800ba559af651dc1fc4d6fa748570fbc6991487cdaa994919cbdf9d69f396040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800ba559af651dc1fc4d6fa748570fbc6991487cdaa994919cbdf9d69f396040->enter($__internal_800ba559af651dc1fc4d6fa748570fbc6991487cdaa994919cbdf9d69f396040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c86dc6c0547f37d71d3ce60291e7f069249607bf2a070e5eb128e4e3544709d->leave($__internal_6c86dc6c0547f37d71d3ce60291e7f069249607bf2a070e5eb128e4e3544709d_prof);

        
        $__internal_800ba559af651dc1fc4d6fa748570fbc6991487cdaa994919cbdf9d69f396040->leave($__internal_800ba559af651dc1fc4d6fa748570fbc6991487cdaa994919cbdf9d69f396040_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0880ae2305cc1c10a506e99862c6bd00380adcdc760418da4d4ee642bd11e9f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0880ae2305cc1c10a506e99862c6bd00380adcdc760418da4d4ee642bd11e9f3->enter($__internal_0880ae2305cc1c10a506e99862c6bd00380adcdc760418da4d4ee642bd11e9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6424df0f8aab202b74d6a6a31385c2bf3fa6e4112a6de91ad6473e9550424dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6424df0f8aab202b74d6a6a31385c2bf3fa6e4112a6de91ad6473e9550424dae->enter($__internal_6424df0f8aab202b74d6a6a31385c2bf3fa6e4112a6de91ad6473e9550424dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6424df0f8aab202b74d6a6a31385c2bf3fa6e4112a6de91ad6473e9550424dae->leave($__internal_6424df0f8aab202b74d6a6a31385c2bf3fa6e4112a6de91ad6473e9550424dae_prof);

        
        $__internal_0880ae2305cc1c10a506e99862c6bd00380adcdc760418da4d4ee642bd11e9f3->leave($__internal_0880ae2305cc1c10a506e99862c6bd00380adcdc760418da4d4ee642bd11e9f3_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c59fcb850a27c60e234b41555275891abdd450180852e89146907129aa48cbf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c59fcb850a27c60e234b41555275891abdd450180852e89146907129aa48cbf5->enter($__internal_c59fcb850a27c60e234b41555275891abdd450180852e89146907129aa48cbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_f0908a154634ee927cf2567cc3d5554536db32c7109ce04b779b9551d75b7937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0908a154634ee927cf2567cc3d5554536db32c7109ce04b779b9551d75b7937->enter($__internal_f0908a154634ee927cf2567cc3d5554536db32c7109ce04b779b9551d75b7937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_f0908a154634ee927cf2567cc3d5554536db32c7109ce04b779b9551d75b7937->leave($__internal_f0908a154634ee927cf2567cc3d5554536db32c7109ce04b779b9551d75b7937_prof);

        
        $__internal_c59fcb850a27c60e234b41555275891abdd450180852e89146907129aa48cbf5->leave($__internal_c59fcb850a27c60e234b41555275891abdd450180852e89146907129aa48cbf5_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_09741318e4e214259ca4202cddab1ae1419e1a7ecfb1a2e3f61506c998191319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09741318e4e214259ca4202cddab1ae1419e1a7ecfb1a2e3f61506c998191319->enter($__internal_09741318e4e214259ca4202cddab1ae1419e1a7ecfb1a2e3f61506c998191319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_835d298d4c91f771b5be4b57af430c9470b5fafde5820efcc6280e33b357e890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_835d298d4c91f771b5be4b57af430c9470b5fafde5820efcc6280e33b357e890->enter($__internal_835d298d4c91f771b5be4b57af430c9470b5fafde5820efcc6280e33b357e890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'errors', array("attr" => array("class" => "paysclass span3")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'errors', array("attr" => array("class" => "regionclass span3")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'errors', array("attr" => array("class" => "villeclass span3")));
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
        var \$langue = \$('#esf_espaceabonnebundle_t_universite_langue');

        \$langue.change(function() {

            var \$form = \$(this).closest('form');
            var data = {};
            data[\$langue.attr('name')] = \$langue.val();

            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteAjax");
        echo "\" // \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                    \$('#esf_espaceabonnebundle_t_universite_formation').replaceWith(
                        \$(html).find('#esf_espaceabonnebundle_t_universite_formation')
                        );
                    selectFormation();
                },
                error: function(e) {
                    alert('Exeption: ' + e);
                    console.log(JSON.stringify(data));
                }
            });
        });

        function selectFormation(){
         var \$formation = \$('#esf_espaceabonnebundle_t_universite_formation');

         \$formation.change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$formation.attr('name')] = \$formation.val();
            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteAjax");
        echo "\" //  \$form.attr('action'),
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
";
        
        $__internal_835d298d4c91f771b5be4b57af430c9470b5fafde5820efcc6280e33b357e890->leave($__internal_835d298d4c91f771b5be4b57af430c9470b5fafde5820efcc6280e33b357e890_prof);

        
        $__internal_09741318e4e214259ca4202cddab1ae1419e1a7ecfb1a2e3f61506c998191319->leave($__internal_09741318e4e214259ca4202cddab1ae1419e1a7ecfb1a2e3f61506c998191319_prof);

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
        return array (  234 => 95,  204 => 68,  183 => 51,  178 => 49,  171 => 44,  167 => 43,  158 => 37,  154 => 36,  150 => 35,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
                {{ form_errors(form.langue, {'attr' : {'class' : 'paysclass span3'}}) }}
                {{ form_widget(form.langue) }}

                {{ form_label(form.formation, 'Formation') }}
                {{ form_errors(form.formation, {'attr' : {'class' : 'regionclass span3'}}) }}
                {{ form_widget(form.formation) }}

                {{ form_label(form.nometablissement, 'Université') }}
                {{ form_errors(form.nometablissement, {'attr' : {'class' : 'villeclass span3'}}) }}
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
        var \$langue = \$('#esf_espaceabonnebundle_t_universite_langue');

        \$langue.change(function() {

            var \$form = \$(this).closest('form');
            var data = {};
            data[\$langue.attr('name')] = \$langue.val();

            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \"{{ path('esf_espace_abonne_universiteAjax') }}\" // \$form.attr('action'),
                type: \$form.attr('method'),
                data : data,
                success: function(html) {
                    \$('#esf_espaceabonnebundle_t_universite_formation').replaceWith(
                        \$(html).find('#esf_espaceabonnebundle_t_universite_formation')
                        );
                    selectFormation();
                },
                error: function(e) {
                    alert('Exeption: ' + e);
                    console.log(JSON.stringify(data));
                }
            });
        });

        function selectFormation(){
         var \$formation = \$('#esf_espaceabonnebundle_t_universite_formation');

         \$formation.change(function() {
            var \$form = \$(this).closest('form');
            var data = {};
            data[\$formation.attr('name')] = \$formation.val();
            \$.ajax({
                beforeSend: function(){
                    \$(\"#esf_espaceabonnebundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                },
                url : \"{{ path('esf_espace_abonne_universiteAjax') }}\" //  \$form.attr('action'),
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
{% endblock %}
", "ESFEspaceAbonneBundle:back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/universiteOne.html.twig");
    }
}
