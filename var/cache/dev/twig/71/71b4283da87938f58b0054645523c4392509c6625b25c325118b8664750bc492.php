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
        $__internal_f60b094a0af3533f0d7f11b7026d36e7f20544af21c46b619ed99f46149fb611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60b094a0af3533f0d7f11b7026d36e7f20544af21c46b619ed99f46149fb611->enter($__internal_f60b094a0af3533f0d7f11b7026d36e7f20544af21c46b619ed99f46149fb611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:modifierdemandes.html.twig"));

        $__internal_0b6064f8bf233d5f050d41ae1ef3f9c1de2feea31fff8d6559b486c9f3056386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6064f8bf233d5f050d41ae1ef3f9c1de2feea31fff8d6559b486c9f3056386->enter($__internal_0b6064f8bf233d5f050d41ae1ef3f9c1de2feea31fff8d6559b486c9f3056386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:modifierdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f60b094a0af3533f0d7f11b7026d36e7f20544af21c46b619ed99f46149fb611->leave($__internal_f60b094a0af3533f0d7f11b7026d36e7f20544af21c46b619ed99f46149fb611_prof);

        
        $__internal_0b6064f8bf233d5f050d41ae1ef3f9c1de2feea31fff8d6559b486c9f3056386->leave($__internal_0b6064f8bf233d5f050d41ae1ef3f9c1de2feea31fff8d6559b486c9f3056386_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_985585df0cba34ce6b8d9cddda2d56e05fc9602e625d3cfbacb978c41d7b9af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_985585df0cba34ce6b8d9cddda2d56e05fc9602e625d3cfbacb978c41d7b9af1->enter($__internal_985585df0cba34ce6b8d9cddda2d56e05fc9602e625d3cfbacb978c41d7b9af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6416795dce611cb57d1250205cbfc34caf37d62924a922b4089f98f073201b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6416795dce611cb57d1250205cbfc34caf37d62924a922b4089f98f073201b22->enter($__internal_6416795dce611cb57d1250205cbfc34caf37d62924a922b4089f98f073201b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6416795dce611cb57d1250205cbfc34caf37d62924a922b4089f98f073201b22->leave($__internal_6416795dce611cb57d1250205cbfc34caf37d62924a922b4089f98f073201b22_prof);

        
        $__internal_985585df0cba34ce6b8d9cddda2d56e05fc9602e625d3cfbacb978c41d7b9af1->leave($__internal_985585df0cba34ce6b8d9cddda2d56e05fc9602e625d3cfbacb978c41d7b9af1_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_95ff92106cf58bfd5dc006ace7998b36c2ad8ea2d31f8964f4b0eefd72b77c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ff92106cf58bfd5dc006ace7998b36c2ad8ea2d31f8964f4b0eefd72b77c6c->enter($__internal_95ff92106cf58bfd5dc006ace7998b36c2ad8ea2d31f8964f4b0eefd72b77c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_9ae3d668f0765877bb47f89120937cfed203ba095ca83cf218f69507d764b88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae3d668f0765877bb47f89120937cfed203ba095ca83cf218f69507d764b88a->enter($__internal_9ae3d668f0765877bb47f89120937cfed203ba095ca83cf218f69507d764b88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_9ae3d668f0765877bb47f89120937cfed203ba095ca83cf218f69507d764b88a->leave($__internal_9ae3d668f0765877bb47f89120937cfed203ba095ca83cf218f69507d764b88a_prof);

        
        $__internal_95ff92106cf58bfd5dc006ace7998b36c2ad8ea2d31f8964f4b0eefd72b77c6c->leave($__internal_95ff92106cf58bfd5dc006ace7998b36c2ad8ea2d31f8964f4b0eefd72b77c6c_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_c47f4bf534416a07c54096d24ba867bf5a434da958e79fe796b5ac1dadcad771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47f4bf534416a07c54096d24ba867bf5a434da958e79fe796b5ac1dadcad771->enter($__internal_c47f4bf534416a07c54096d24ba867bf5a434da958e79fe796b5ac1dadcad771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_cda029e0075aa4e5da1f936c7b8e78edd47d84ce2d0f16f5c9af5e082b4c4f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda029e0075aa4e5da1f936c7b8e78edd47d84ce2d0f16f5c9af5e082b4c4f91->enter($__internal_cda029e0075aa4e5da1f936c7b8e78edd47d84ce2d0f16f5c9af5e082b4c4f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_cda029e0075aa4e5da1f936c7b8e78edd47d84ce2d0f16f5c9af5e082b4c4f91->leave($__internal_cda029e0075aa4e5da1f936c7b8e78edd47d84ce2d0f16f5c9af5e082b4c4f91_prof);

        
        $__internal_c47f4bf534416a07c54096d24ba867bf5a434da958e79fe796b5ac1dadcad771->leave($__internal_c47f4bf534416a07c54096d24ba867bf5a434da958e79fe796b5ac1dadcad771_prof);

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
