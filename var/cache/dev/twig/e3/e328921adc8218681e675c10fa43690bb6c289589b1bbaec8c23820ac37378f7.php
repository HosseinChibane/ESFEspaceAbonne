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
        $__internal_d8b9862e1a42cb8d91add6b267cb502d8875dd8ef0f0356faf261dbffdfb3b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b9862e1a42cb8d91add6b267cb502d8875dd8ef0f0356faf261dbffdfb3b0e->enter($__internal_d8b9862e1a42cb8d91add6b267cb502d8875dd8ef0f0356faf261dbffdfb3b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/modifierdemandes.html.twig"));

        $__internal_31da512bcf21367223ce1bcb60a11002e0b27ae517d00c1b8a6ced8ce65a1f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31da512bcf21367223ce1bcb60a11002e0b27ae517d00c1b8a6ced8ce65a1f78->enter($__internal_31da512bcf21367223ce1bcb60a11002e0b27ae517d00c1b8a6ced8ce65a1f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/modifierdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8b9862e1a42cb8d91add6b267cb502d8875dd8ef0f0356faf261dbffdfb3b0e->leave($__internal_d8b9862e1a42cb8d91add6b267cb502d8875dd8ef0f0356faf261dbffdfb3b0e_prof);

        
        $__internal_31da512bcf21367223ce1bcb60a11002e0b27ae517d00c1b8a6ced8ce65a1f78->leave($__internal_31da512bcf21367223ce1bcb60a11002e0b27ae517d00c1b8a6ced8ce65a1f78_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23565fa189547be5e72b4f31cb2e9413226bd045fb4756b8a924b4e03f03cab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23565fa189547be5e72b4f31cb2e9413226bd045fb4756b8a924b4e03f03cab8->enter($__internal_23565fa189547be5e72b4f31cb2e9413226bd045fb4756b8a924b4e03f03cab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_076110777ff03296d0ce6f7294fdef3b4c1f2c4f2c65550a23587c787d761141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076110777ff03296d0ce6f7294fdef3b4c1f2c4f2c65550a23587c787d761141->enter($__internal_076110777ff03296d0ce6f7294fdef3b4c1f2c4f2c65550a23587c787d761141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_076110777ff03296d0ce6f7294fdef3b4c1f2c4f2c65550a23587c787d761141->leave($__internal_076110777ff03296d0ce6f7294fdef3b4c1f2c4f2c65550a23587c787d761141_prof);

        
        $__internal_23565fa189547be5e72b4f31cb2e9413226bd045fb4756b8a924b4e03f03cab8->leave($__internal_23565fa189547be5e72b4f31cb2e9413226bd045fb4756b8a924b4e03f03cab8_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_617e3782076eff98753de97633d1206fb68ddd8d71a3b98dba0e50587d3bcf03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617e3782076eff98753de97633d1206fb68ddd8d71a3b98dba0e50587d3bcf03->enter($__internal_617e3782076eff98753de97633d1206fb68ddd8d71a3b98dba0e50587d3bcf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_b7ed7958cffd3e9ae4f894621d9d6bca44db3dab5eab989ac43ab407a38e5658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ed7958cffd3e9ae4f894621d9d6bca44db3dab5eab989ac43ab407a38e5658->enter($__internal_b7ed7958cffd3e9ae4f894621d9d6bca44db3dab5eab989ac43ab407a38e5658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_b7ed7958cffd3e9ae4f894621d9d6bca44db3dab5eab989ac43ab407a38e5658->leave($__internal_b7ed7958cffd3e9ae4f894621d9d6bca44db3dab5eab989ac43ab407a38e5658_prof);

        
        $__internal_617e3782076eff98753de97633d1206fb68ddd8d71a3b98dba0e50587d3bcf03->leave($__internal_617e3782076eff98753de97633d1206fb68ddd8d71a3b98dba0e50587d3bcf03_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_4d57b04bd8f558fab58d096d1b13bb881a18f8e72e6dc4eb8ae02748e6254b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d57b04bd8f558fab58d096d1b13bb881a18f8e72e6dc4eb8ae02748e6254b0d->enter($__internal_4d57b04bd8f558fab58d096d1b13bb881a18f8e72e6dc4eb8ae02748e6254b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_bcd9e59350f88fd8c8ccc67005e54a4c2cf5ced3fd4d305e8fc6e194de93b6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd9e59350f88fd8c8ccc67005e54a4c2cf5ced3fd4d305e8fc6e194de93b6e8->enter($__internal_bcd9e59350f88fd8c8ccc67005e54a4c2cf5ced3fd4d305e8fc6e194de93b6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Détails Demandes -->
    <div class=\"col-md-12\">
        <h1>Modification de la demande n°";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()), "html", null, true);
        echo " :</h1>

        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "

        ";
        // line 22
        if ( !$this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vars", array()), "valid", array())) {
            // line 23
            echo "            <div class=\"alert alert-error\">
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 27
        echo "
        <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "type", array()), 'label', array("label" => "Type d'Inscription"));
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "type", array()), 'widget', array("attr" => array("disabled" => "disabled")));
        echo "

            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "etat", array()), 'label', array("label" => "Etat de l'Inscription"));
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "etat", array()), 'widget', array("attr" => array("disabled" => "disabled")));
        echo "

            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "documentinscription", array()), "nom", array()), 'widget');
        echo "
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                 ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 51
            echo "                    <div class=\"flash-notice\">
                        ";
            // line 52
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                <a class=\"btn btn-info\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDemandes");
        echo "\" role=\"button\">Retour à la liste des demandes</a>
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
            </div>
        </div>
    </div>

    ";
        // line 62
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "

    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_bcd9e59350f88fd8c8ccc67005e54a4c2cf5ced3fd4d305e8fc6e194de93b6e8->leave($__internal_bcd9e59350f88fd8c8ccc67005e54a4c2cf5ced3fd4d305e8fc6e194de93b6e8_prof);

        
        $__internal_4d57b04bd8f558fab58d096d1b13bb881a18f8e72e6dc4eb8ae02748e6254b0d->leave($__internal_4d57b04bd8f558fab58d096d1b13bb881a18f8e72e6dc4eb8ae02748e6254b0d_prof);

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
        return array (  209 => 64,  203 => 62,  195 => 56,  190 => 55,  181 => 52,  178 => 51,  174 => 50,  163 => 42,  154 => 36,  150 => 35,  145 => 33,  141 => 32,  136 => 30,  132 => 29,  128 => 27,  122 => 24,  119 => 23,  117 => 22,  112 => 20,  107 => 18,  94 => 15,  80 => 10,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

        {{ form_start(edit_form) }}

        {% if not edit_form.vars.valid %}
            <div class=\"alert alert-error\">
                {{ form_errors(edit_form) }}
            </div>
        {% endif %}

        <div class=\"form-group\">
            {{ form_label(edit_form.type, 'Type d\\'Inscription') }}
            {{ form_widget(edit_form.type, { 'attr':{'disabled':'disabled'} }) }}

            {{ form_label(edit_form.etat, 'Etat de l\\'Inscription') }}
            {{ form_widget(edit_form.etat, { 'attr':{'disabled':'disabled'} }) }}

            {{ form_label(edit_form.documentinscription.nom, 'Document d\\'Inscription') }}
            {{ form_widget(edit_form.documentinscription.nom) }}
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    {{ form_widget(edit_form.documentinscription.pdfFile) }}
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
                {{ form_widget(edit_form.documentinscription.Enregistrer) }}
            </div>
        </div>
    </div>

    {# Token CSRF #}
    {{ form_widget(edit_form._token) }}

    {{ form_end(edit_form, {'render_rest': false }) }}
</div>
{% endblock %}", "@ESFEspaceAbonne/back/modifierdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\modifierdemandes.html.twig");
    }
}
