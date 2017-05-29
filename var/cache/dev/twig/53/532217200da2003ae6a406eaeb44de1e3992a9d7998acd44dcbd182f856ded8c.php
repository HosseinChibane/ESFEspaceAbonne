<?php

/* ESFEspaceAbonneBundle:back:detailsdemandes.html.twig */
class __TwigTemplate_66f05795832eb12c9f1eb9c67066048eed537462b836d5fd036c4825e819ae2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:detailsdemandes.html.twig", 1);
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
        $__internal_3a574dc3c9a0ab1a4945ef911c9928bc2e34a3a1a9a3ef6f32af6217dd3dcd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a574dc3c9a0ab1a4945ef911c9928bc2e34a3a1a9a3ef6f32af6217dd3dcd69->enter($__internal_3a574dc3c9a0ab1a4945ef911c9928bc2e34a3a1a9a3ef6f32af6217dd3dcd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:detailsdemandes.html.twig"));

        $__internal_a22bc5549a159d40428736b6a8ee54bcf37c4553e13a4f030fcf951aa75864be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22bc5549a159d40428736b6a8ee54bcf37c4553e13a4f030fcf951aa75864be->enter($__internal_a22bc5549a159d40428736b6a8ee54bcf37c4553e13a4f030fcf951aa75864be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:detailsdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a574dc3c9a0ab1a4945ef911c9928bc2e34a3a1a9a3ef6f32af6217dd3dcd69->leave($__internal_3a574dc3c9a0ab1a4945ef911c9928bc2e34a3a1a9a3ef6f32af6217dd3dcd69_prof);

        
        $__internal_a22bc5549a159d40428736b6a8ee54bcf37c4553e13a4f030fcf951aa75864be->leave($__internal_a22bc5549a159d40428736b6a8ee54bcf37c4553e13a4f030fcf951aa75864be_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6aa4b71e946d995ec5894d524df8598363074c0bc8a5b8cf8c97c5ca505359b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aa4b71e946d995ec5894d524df8598363074c0bc8a5b8cf8c97c5ca505359b9->enter($__internal_6aa4b71e946d995ec5894d524df8598363074c0bc8a5b8cf8c97c5ca505359b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e0a71ca06ae934060ba1694bbfeeab16b57b64d929f5a2b26cc5d2e9106f3ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0a71ca06ae934060ba1694bbfeeab16b57b64d929f5a2b26cc5d2e9106f3ca->enter($__internal_1e0a71ca06ae934060ba1694bbfeeab16b57b64d929f5a2b26cc5d2e9106f3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Détails Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1e0a71ca06ae934060ba1694bbfeeab16b57b64d929f5a2b26cc5d2e9106f3ca->leave($__internal_1e0a71ca06ae934060ba1694bbfeeab16b57b64d929f5a2b26cc5d2e9106f3ca_prof);

        
        $__internal_6aa4b71e946d995ec5894d524df8598363074c0bc8a5b8cf8c97c5ca505359b9->leave($__internal_6aa4b71e946d995ec5894d524df8598363074c0bc8a5b8cf8c97c5ca505359b9_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_0f38278afb5474e83325965816075d5dbbe762bceb29a3589c9759e8819b764f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f38278afb5474e83325965816075d5dbbe762bceb29a3589c9759e8819b764f->enter($__internal_0f38278afb5474e83325965816075d5dbbe762bceb29a3589c9759e8819b764f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_f0d2fce554a602db937b1701a70ad728fe71721062bde52a65c6be7bf88a362f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d2fce554a602db937b1701a70ad728fe71721062bde52a65c6be7bf88a362f->enter($__internal_f0d2fce554a602db937b1701a70ad728fe71721062bde52a65c6be7bf88a362f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        <li class=\"active\">Détails</li>
    </ol>
";
        
        $__internal_f0d2fce554a602db937b1701a70ad728fe71721062bde52a65c6be7bf88a362f->leave($__internal_f0d2fce554a602db937b1701a70ad728fe71721062bde52a65c6be7bf88a362f_prof);

        
        $__internal_0f38278afb5474e83325965816075d5dbbe762bceb29a3589c9759e8819b764f->leave($__internal_0f38278afb5474e83325965816075d5dbbe762bceb29a3589c9759e8819b764f_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_5565a27f6d7b6c717f806c6a62f46755d11322c8e4253e848bcaccab295a94c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5565a27f6d7b6c717f806c6a62f46755d11322c8e4253e848bcaccab295a94c3->enter($__internal_5565a27f6d7b6c717f806c6a62f46755d11322c8e4253e848bcaccab295a94c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_09ee038ff07c22525babb946234381d4e6b1554896dd834b5bad8b13f13d19c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ee038ff07c22525babb946234381d4e6b1554896dd834b5bad8b13f13d19c7->enter($__internal_09ee038ff07c22525babb946234381d4e6b1554896dd834b5bad8b13f13d19c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Modifier Demandes -->
    <div class=\"col-md-12\">
        <h1>Détail de la demande n°";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()), "html", null, true);
        echo " :</h1>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4>Inscription à ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "type", array()), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"panel-body\">                                        
                Votre demande est : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "etat", array()), "html", null, true);
        echo "
            </div>
            <div class=\"panel-footer\">
                <a class=\"btn btn-info\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDemandes");
        echo "\" role=\"button\">Retour à la liste des demandes</a>
                ";
        // line 31
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_09ee038ff07c22525babb946234381d4e6b1554896dd834b5bad8b13f13d19c7->leave($__internal_09ee038ff07c22525babb946234381d4e6b1554896dd834b5bad8b13f13d19c7_prof);

        
        $__internal_5565a27f6d7b6c717f806c6a62f46755d11322c8e4253e848bcaccab295a94c3->leave($__internal_5565a27f6d7b6c717f806c6a62f46755d11322c8e4253e848bcaccab295a94c3_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:detailsdemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  125 => 27,  119 => 24,  113 => 21,  107 => 18,  94 => 15,  80 => 10,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Détails Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li ><a href=\"{{ path('esf_espace_abonne_mesDemandes') }}\">Mes Demandes</a></li>
        <li class=\"active\">Détails</li>
    </ol>
{% endblock %}

{% block Content %} 
    <!-- Modifier Demandes -->
    <div class=\"col-md-12\">
        <h1>Détail de la demande n°{{ eA_Demande_Inscription.id }} :</h1>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4>Inscription à {{ eA_Demande_Inscription.type }}</h4>
            </div>
            <div class=\"panel-body\">                                        
                Votre demande est : {{ eA_Demande_Inscription.etat }}
            </div>
            <div class=\"panel-footer\">
                <a class=\"btn btn-info\" href=\"{{ path('esf_espace_abonne_mesDemandes') }}\" role=\"button\">Retour à la liste des demandes</a>
                {#
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_modifierDemandes', { 'id': eA_Demande_Inscription.id }) }}\">Modifier</a>
                #}
            </div>
        </div>
    </div>

{% endblock %}", "ESFEspaceAbonneBundle:back:detailsdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/detailsdemandes.html.twig");
    }
}
