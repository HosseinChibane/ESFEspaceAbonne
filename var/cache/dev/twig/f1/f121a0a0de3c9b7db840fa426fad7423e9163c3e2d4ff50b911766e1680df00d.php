<?php

/* ESFEspaceAbonneBundle:Back:modifierdemandes.html.twig */
class __TwigTemplate_620fa03403a1f6b65997eb4a30f5b3212d0f6d67858cb114f6b6d8fddce088c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:modifierdemandes.html.twig", 1);
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
        $__internal_ee61a69f2432cfd37c321ecf5dd92f7dcbf938d46d7da206de54340b134e6bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee61a69f2432cfd37c321ecf5dd92f7dcbf938d46d7da206de54340b134e6bc2->enter($__internal_ee61a69f2432cfd37c321ecf5dd92f7dcbf938d46d7da206de54340b134e6bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:modifierdemandes.html.twig"));

        $__internal_7b0f8a24c1a26e15f2b423c40a0cb3f965835cdb65781e980990e97d0f7fec9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b0f8a24c1a26e15f2b423c40a0cb3f965835cdb65781e980990e97d0f7fec9b->enter($__internal_7b0f8a24c1a26e15f2b423c40a0cb3f965835cdb65781e980990e97d0f7fec9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:modifierdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee61a69f2432cfd37c321ecf5dd92f7dcbf938d46d7da206de54340b134e6bc2->leave($__internal_ee61a69f2432cfd37c321ecf5dd92f7dcbf938d46d7da206de54340b134e6bc2_prof);

        
        $__internal_7b0f8a24c1a26e15f2b423c40a0cb3f965835cdb65781e980990e97d0f7fec9b->leave($__internal_7b0f8a24c1a26e15f2b423c40a0cb3f965835cdb65781e980990e97d0f7fec9b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e6d4fa958019734a5fbae69f470742b6718c595083adc9b6e256f7478e8d697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6d4fa958019734a5fbae69f470742b6718c595083adc9b6e256f7478e8d697->enter($__internal_0e6d4fa958019734a5fbae69f470742b6718c595083adc9b6e256f7478e8d697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b400e88f405c6b22c8fad09ab2e708be116bc825c9a8ce33d52fffb5e9ad197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b400e88f405c6b22c8fad09ab2e708be116bc825c9a8ce33d52fffb5e9ad197->enter($__internal_3b400e88f405c6b22c8fad09ab2e708be116bc825c9a8ce33d52fffb5e9ad197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3b400e88f405c6b22c8fad09ab2e708be116bc825c9a8ce33d52fffb5e9ad197->leave($__internal_3b400e88f405c6b22c8fad09ab2e708be116bc825c9a8ce33d52fffb5e9ad197_prof);

        
        $__internal_0e6d4fa958019734a5fbae69f470742b6718c595083adc9b6e256f7478e8d697->leave($__internal_0e6d4fa958019734a5fbae69f470742b6718c595083adc9b6e256f7478e8d697_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_57b47a4d022a4aa2f0e813c92f53772f46fe77e75f58e670646c3bfa4fee0015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b47a4d022a4aa2f0e813c92f53772f46fe77e75f58e670646c3bfa4fee0015->enter($__internal_57b47a4d022a4aa2f0e813c92f53772f46fe77e75f58e670646c3bfa4fee0015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_95b7e1936925f9bed50f645b427b0f923f96c10458a21c44878f42ebc82af6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b7e1936925f9bed50f645b427b0f923f96c10458a21c44878f42ebc82af6b1->enter($__internal_95b7e1936925f9bed50f645b427b0f923f96c10458a21c44878f42ebc82af6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_95b7e1936925f9bed50f645b427b0f923f96c10458a21c44878f42ebc82af6b1->leave($__internal_95b7e1936925f9bed50f645b427b0f923f96c10458a21c44878f42ebc82af6b1_prof);

        
        $__internal_57b47a4d022a4aa2f0e813c92f53772f46fe77e75f58e670646c3bfa4fee0015->leave($__internal_57b47a4d022a4aa2f0e813c92f53772f46fe77e75f58e670646c3bfa4fee0015_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_eb0534caec08b61049ad1793010fba6a2edc2ffa1bb13aba5d459925498da1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb0534caec08b61049ad1793010fba6a2edc2ffa1bb13aba5d459925498da1af->enter($__internal_eb0534caec08b61049ad1793010fba6a2edc2ffa1bb13aba5d459925498da1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_32644594c4d28c430eec37c71bbc80af084755cab86cddb31190a1aa65dc55f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32644594c4d28c430eec37c71bbc80af084755cab86cddb31190a1aa65dc55f2->enter($__internal_32644594c4d28c430eec37c71bbc80af084755cab86cddb31190a1aa65dc55f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_32644594c4d28c430eec37c71bbc80af084755cab86cddb31190a1aa65dc55f2->leave($__internal_32644594c4d28c430eec37c71bbc80af084755cab86cddb31190a1aa65dc55f2_prof);

        
        $__internal_eb0534caec08b61049ad1793010fba6a2edc2ffa1bb13aba5d459925498da1af->leave($__internal_eb0534caec08b61049ad1793010fba6a2edc2ffa1bb13aba5d459925498da1af_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:modifierdemandes.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:Back:modifierdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/modifierdemandes.html.twig");
    }
}
