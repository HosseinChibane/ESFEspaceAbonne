<?php

/* @ESFEspaceAbonne/back/modifierdemandes.html.twig */
class __TwigTemplate_3488267e067a44bc9476413dcf0116019f246393e23af4457574c7c64e0fb742 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/modifierdemandes.html.twig", 1);
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
        $__internal_d237999031174fe3455b5c6521340f2ecc56a47a7b893ce9666db31e0909a3e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d237999031174fe3455b5c6521340f2ecc56a47a7b893ce9666db31e0909a3e4->enter($__internal_d237999031174fe3455b5c6521340f2ecc56a47a7b893ce9666db31e0909a3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/modifierdemandes.html.twig"));

        $__internal_4d4f382892346b6e3801fb99e12054e7c981d705992c0f8efd9051dd047ad824 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4f382892346b6e3801fb99e12054e7c981d705992c0f8efd9051dd047ad824->enter($__internal_4d4f382892346b6e3801fb99e12054e7c981d705992c0f8efd9051dd047ad824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/modifierdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d237999031174fe3455b5c6521340f2ecc56a47a7b893ce9666db31e0909a3e4->leave($__internal_d237999031174fe3455b5c6521340f2ecc56a47a7b893ce9666db31e0909a3e4_prof);

        
        $__internal_4d4f382892346b6e3801fb99e12054e7c981d705992c0f8efd9051dd047ad824->leave($__internal_4d4f382892346b6e3801fb99e12054e7c981d705992c0f8efd9051dd047ad824_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcf0fcd05644856f23b0ffd4872188a2d4e8cdd22690c1cfecd8ca51e84cd819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcf0fcd05644856f23b0ffd4872188a2d4e8cdd22690c1cfecd8ca51e84cd819->enter($__internal_bcf0fcd05644856f23b0ffd4872188a2d4e8cdd22690c1cfecd8ca51e84cd819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1169bf7e87bab27f73880cdb22f622b7f8450e3d34f7f83eac2be49c43386cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1169bf7e87bab27f73880cdb22f622b7f8450e3d34f7f83eac2be49c43386cb->enter($__internal_a1169bf7e87bab27f73880cdb22f622b7f8450e3d34f7f83eac2be49c43386cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a1169bf7e87bab27f73880cdb22f622b7f8450e3d34f7f83eac2be49c43386cb->leave($__internal_a1169bf7e87bab27f73880cdb22f622b7f8450e3d34f7f83eac2be49c43386cb_prof);

        
        $__internal_bcf0fcd05644856f23b0ffd4872188a2d4e8cdd22690c1cfecd8ca51e84cd819->leave($__internal_bcf0fcd05644856f23b0ffd4872188a2d4e8cdd22690c1cfecd8ca51e84cd819_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_65e5d2f30ac6a06cdc453e4b23e96c00a307d8f275337c4155fd037fab4669af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65e5d2f30ac6a06cdc453e4b23e96c00a307d8f275337c4155fd037fab4669af->enter($__internal_65e5d2f30ac6a06cdc453e4b23e96c00a307d8f275337c4155fd037fab4669af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_ed45dba21379a3160747e5bb28d5f1e04c652642101c3751997c38f7d5bf06cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed45dba21379a3160747e5bb28d5f1e04c652642101c3751997c38f7d5bf06cd->enter($__internal_ed45dba21379a3160747e5bb28d5f1e04c652642101c3751997c38f7d5bf06cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_ed45dba21379a3160747e5bb28d5f1e04c652642101c3751997c38f7d5bf06cd->leave($__internal_ed45dba21379a3160747e5bb28d5f1e04c652642101c3751997c38f7d5bf06cd_prof);

        
        $__internal_65e5d2f30ac6a06cdc453e4b23e96c00a307d8f275337c4155fd037fab4669af->leave($__internal_65e5d2f30ac6a06cdc453e4b23e96c00a307d8f275337c4155fd037fab4669af_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_736c04da24df4af694a62c08cf74efaa2223ec2b2eb1a6a05172a6c9d32bb381 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_736c04da24df4af694a62c08cf74efaa2223ec2b2eb1a6a05172a6c9d32bb381->enter($__internal_736c04da24df4af694a62c08cf74efaa2223ec2b2eb1a6a05172a6c9d32bb381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_54036f184d04a3749dcdd2bc4d9b76eedf9018bba544c2ad4ab4fea503074cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54036f184d04a3749dcdd2bc4d9b76eedf9018bba544c2ad4ab4fea503074cf4->enter($__internal_54036f184d04a3749dcdd2bc4d9b76eedf9018bba544c2ad4ab4fea503074cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_54036f184d04a3749dcdd2bc4d9b76eedf9018bba544c2ad4ab4fea503074cf4->leave($__internal_54036f184d04a3749dcdd2bc4d9b76eedf9018bba544c2ad4ab4fea503074cf4_prof);

        
        $__internal_736c04da24df4af694a62c08cf74efaa2223ec2b2eb1a6a05172a6c9d32bb381->leave($__internal_736c04da24df4af694a62c08cf74efaa2223ec2b2eb1a6a05172a6c9d32bb381_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/modifierdemandes.html.twig";
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
{% endblock %}", "@ESFEspaceAbonne/back/modifierdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\modifierdemandes.html.twig");
    }
}
