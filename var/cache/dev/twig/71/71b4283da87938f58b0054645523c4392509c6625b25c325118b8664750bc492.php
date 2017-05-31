<?php

/* ESFEspaceAbonneBundle:back:modifierdemandes.html.twig */
class __TwigTemplate_7f5a60978ba3ed3038d6deecae9e037b72c94f908df2b8429b079ea7b6213908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:modifierdemandes.html.twig", 1);
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
        $__internal_c7bc140caf69d1497c8c1844a8805deb4a2385d787c6c78ae25f3dea142930e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7bc140caf69d1497c8c1844a8805deb4a2385d787c6c78ae25f3dea142930e8->enter($__internal_c7bc140caf69d1497c8c1844a8805deb4a2385d787c6c78ae25f3dea142930e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:modifierdemandes.html.twig"));

        $__internal_cad90373504094f4abbd1e0115dd4903949b3a45624fa8606cd6a5c278961eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad90373504094f4abbd1e0115dd4903949b3a45624fa8606cd6a5c278961eba->enter($__internal_cad90373504094f4abbd1e0115dd4903949b3a45624fa8606cd6a5c278961eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:modifierdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7bc140caf69d1497c8c1844a8805deb4a2385d787c6c78ae25f3dea142930e8->leave($__internal_c7bc140caf69d1497c8c1844a8805deb4a2385d787c6c78ae25f3dea142930e8_prof);

        
        $__internal_cad90373504094f4abbd1e0115dd4903949b3a45624fa8606cd6a5c278961eba->leave($__internal_cad90373504094f4abbd1e0115dd4903949b3a45624fa8606cd6a5c278961eba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_80954d147c01b2ce87621192ff59b25ad645a39b30fb04fb133de2a653c66cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80954d147c01b2ce87621192ff59b25ad645a39b30fb04fb133de2a653c66cc9->enter($__internal_80954d147c01b2ce87621192ff59b25ad645a39b30fb04fb133de2a653c66cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48c89b5d4dbdd1af8d6bd8a41b82513a8eb7b4cebe135918089567ddb024dedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c89b5d4dbdd1af8d6bd8a41b82513a8eb7b4cebe135918089567ddb024dedb->enter($__internal_48c89b5d4dbdd1af8d6bd8a41b82513a8eb7b4cebe135918089567ddb024dedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_48c89b5d4dbdd1af8d6bd8a41b82513a8eb7b4cebe135918089567ddb024dedb->leave($__internal_48c89b5d4dbdd1af8d6bd8a41b82513a8eb7b4cebe135918089567ddb024dedb_prof);

        
        $__internal_80954d147c01b2ce87621192ff59b25ad645a39b30fb04fb133de2a653c66cc9->leave($__internal_80954d147c01b2ce87621192ff59b25ad645a39b30fb04fb133de2a653c66cc9_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_fbb9e18ca659698857eb6715e02d9046b9bbdda25498090a435a66152b9b199b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb9e18ca659698857eb6715e02d9046b9bbdda25498090a435a66152b9b199b->enter($__internal_fbb9e18ca659698857eb6715e02d9046b9bbdda25498090a435a66152b9b199b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_4fe208c7a3ed40a6866d4b29bf604035cfe8f5bab120a3b07bf887bfa8bfe799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe208c7a3ed40a6866d4b29bf604035cfe8f5bab120a3b07bf887bfa8bfe799->enter($__internal_4fe208c7a3ed40a6866d4b29bf604035cfe8f5bab120a3b07bf887bfa8bfe799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li ><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDemandes");
        echo "\">Mes Demandes</a></li>
        <li class=\"active\">Modifier</li>
    </ol>
";
        
        $__internal_4fe208c7a3ed40a6866d4b29bf604035cfe8f5bab120a3b07bf887bfa8bfe799->leave($__internal_4fe208c7a3ed40a6866d4b29bf604035cfe8f5bab120a3b07bf887bfa8bfe799_prof);

        
        $__internal_fbb9e18ca659698857eb6715e02d9046b9bbdda25498090a435a66152b9b199b->leave($__internal_fbb9e18ca659698857eb6715e02d9046b9bbdda25498090a435a66152b9b199b_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1285de3d2099349db294892b88f4186bec2a022a179a6226cecce79cbf181d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1285de3d2099349db294892b88f4186bec2a022a179a6226cecce79cbf181d07->enter($__internal_1285de3d2099349db294892b88f4186bec2a022a179a6226cecce79cbf181d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_111d9c5557a0a0e45c95be232207e272bcb1afc4083f27d9f7de4874285f2bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_111d9c5557a0a0e45c95be232207e272bcb1afc4083f27d9f7de4874285f2bec->enter($__internal_111d9c5557a0a0e45c95be232207e272bcb1afc4083f27d9f7de4874285f2bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Détails Demandes -->
    <div class=\"col-md-12\">
        <h1>Modification de la demande n°";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()), "html", null, true);
        echo " :</h1>

        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["editForm"] ?? $this->getContext($context, "editForm")), 'form_start');
        echo "

        ";
        // line 22
        if ( !$this->getAttribute($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "vars", array()), "valid", array())) {
            // line 23
            echo "            <div class=\"alert alert-error\">
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["editForm"] ?? $this->getContext($context, "editForm")), 'errors');
            echo "
            </div>
        ";
        }
        // line 27
        echo "
        <div class=\"form-group\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">                                        
                 ";
        // line 31
        if ($this->getAttribute(($context["editForm"] ?? null), "etablissement", array(), "any", true, true)) {
            // line 32
            echo "                    ";
            if (($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "etablissement", array()) != null)) {
                // line 33
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "etablissement", array()), 'label', array("label" => "Etablissement de l'Inscription"));
                echo "
                        ";
                // line 34
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "etablissement", array()), 'widget', array("attr" => array("disabled" => "disabled")));
                echo "

                        ";
                // line 36
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "formation", array()), 'label', array("label" => "Formation de l'Inscription"));
                echo "
                        ";
                // line 37
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "formation", array()), 'widget', array("attr" => array("disabled" => "disabled")));
                echo "
                        
                        ";
                // line 39
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "langue", array()), 'label', array("label" => "Langue de l'Inscription"));
                echo "
                        ";
                // line 40
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "langue", array()), 'widget', array("attr" => array("disabled" => "disabled")));
                echo "
                    ";
            }
            // line 42
            echo "                ";
        } elseif ($this->getAttribute(($context["editForm"] ?? null), "partenaire", array(), "any", true, true)) {
            // line 43
            echo "                    ";
            if (($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "partenaire", array()) != null)) {
                // line 44
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "partenaire", array()), 'label', array("label" => "Partenaire de l'Inscription"));
                echo "
                        ";
                // line 45
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "partenaire", array()), 'widget', array("attr" => array("disabled" => "disabled")));
                echo "
                    ";
            }
            // line 47
            echo "                ";
        }
        // line 48
        echo "
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "type", array()), 'label', array("label" => "Type d'Inscription"));
        echo "
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "type", array()), 'widget', array("attr" => array("disabled" => "disabled")));
        echo "

                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "etat", array()), 'label', array("label" => "Etat de l'Inscription"));
        echo "
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "etat", array()), 'widget', array("attr" => array("disabled" => "disabled")));
        echo "
            </div>
        </div>   
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "documentinscription", array()), "nom", array()), 'widget');
        echo "

    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
               ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 73
            echo "                <div class=\"flash-notice\">
                    ";
            // line 74
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            <a class=\"btn btn-info\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDemandes");
        echo "\" role=\"button\">Retour à la liste des demandes</a>
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
        </div>
    </div>
</div>

";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["editForm"] ?? $this->getContext($context, "editForm")), "_token", array()), 'widget');
        echo "

";
        // line 86
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["editForm"] ?? $this->getContext($context, "editForm")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_111d9c5557a0a0e45c95be232207e272bcb1afc4083f27d9f7de4874285f2bec->leave($__internal_111d9c5557a0a0e45c95be232207e272bcb1afc4083f27d9f7de4874285f2bec_prof);

        
        $__internal_1285de3d2099349db294892b88f4186bec2a022a179a6226cecce79cbf181d07->leave($__internal_1285de3d2099349db294892b88f4186bec2a022a179a6226cecce79cbf181d07_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:modifierdemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 86,  262 => 84,  254 => 78,  249 => 77,  240 => 74,  237 => 73,  233 => 72,  222 => 64,  212 => 57,  208 => 56,  202 => 53,  198 => 52,  193 => 50,  189 => 49,  186 => 48,  183 => 47,  178 => 45,  173 => 44,  170 => 43,  167 => 42,  162 => 40,  158 => 39,  153 => 37,  149 => 36,  144 => 34,  139 => 33,  136 => 32,  134 => 31,  128 => 27,  122 => 24,  119 => 23,  117 => 22,  112 => 20,  107 => 18,  94 => 15,  80 => 10,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Modifier Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li ><a href=\"{{ path('esf_espace_abonne_mesDemandes') }}\">Mes Demandes</a></li>
        <li class=\"active\">Modifier</li>
    </ol>
{% endblock %}

{% block Content %} 
    <!-- Détails Demandes -->
    <div class=\"col-md-12\">
        <h1>Modification de la demande n°{{ eA_Demande_Inscription.id }} :</h1>

        {{ form_start(editForm) }}

        {% if not editForm.vars.valid %}
            <div class=\"alert alert-error\">
                {{ form_errors(editForm) }}
            </div>
        {% endif %}

        <div class=\"form-group\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">                                        
                 {% if editForm.etablissement is defined %}
                    {% if editForm.etablissement != null %}
                        {{ form_label(editForm.etablissement, 'Etablissement de l\\'Inscription') }}
                        {{ form_widget(editForm.etablissement, { 'attr':{'disabled':'disabled'} }) }}

                        {{ form_label(editForm.formation, 'Formation de l\\'Inscription') }}
                        {{ form_widget(editForm.formation, { 'attr':{'disabled':'disabled'} }) }}
                        
                        {{ form_label(editForm.langue, 'Langue de l\\'Inscription') }}
                        {{ form_widget(editForm.langue, { 'attr':{'disabled':'disabled'} }) }}
                    {% endif %}
                {% elseif  editForm.partenaire is defined %}
                    {% if editForm.partenaire != null %}
                        {{ form_label(editForm.partenaire, 'Partenaire de l\\'Inscription') }}
                        {{ form_widget(editForm.partenaire, { 'attr':{'disabled':'disabled'} }) }}
                    {% endif %}
                {% endif %}

                {{ form_label(editForm.type, 'Type d\\'Inscription') }}
                {{ form_widget(editForm.type, { 'attr':{'disabled':'disabled'} }) }}

                {{ form_label(editForm.etat, 'Etat de l\\'Inscription') }}
                {{ form_widget(editForm.etat, { 'attr':{'disabled':'disabled'} }) }}
            </div>
        </div>   
        {{ form_label(editForm.documentinscription.nom, 'Document d\\'Inscription') }}
        {{ form_widget(editForm.documentinscription.nom) }}

    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
                {{ form_widget(editForm.documentinscription.pdfFile) }}
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
               {% for flash_message in app.session.flashBag.get('notice') %}
                <div class=\"flash-notice\">
                    {{ flash_message }}
                </div>
            {% endfor %}
            <a class=\"btn btn-info\" href=\"{{ path('esf_espace_abonne_mesDemandes') }}\" role=\"button\">Retour à la liste des demandes</a>
            {{ form_widget(editForm.documentinscription.Enregistrer) }}
        </div>
    </div>
</div>

{# Token CSRF #}
{{ form_widget(editForm._token) }}

{{ form_end(editForm, {'render_rest': false }) }}
</div>
{% endblock %}", "ESFEspaceAbonneBundle:back:modifierdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/modifierdemandes.html.twig");
    }
}
