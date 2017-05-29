<?php

/* ESFEspaceAbonneBundle:Back:detailsdemandes.html.twig */
class __TwigTemplate_2c827fb8f07d62fe8330b8e88a0007e23872ea01551ed3dac5fd311389727b57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:detailsdemandes.html.twig", 1);
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
        $__internal_3ae6220f518847bf315b4db2a21f238ab202b497220871c1b1e31aba5f56dabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ae6220f518847bf315b4db2a21f238ab202b497220871c1b1e31aba5f56dabf->enter($__internal_3ae6220f518847bf315b4db2a21f238ab202b497220871c1b1e31aba5f56dabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:detailsdemandes.html.twig"));

        $__internal_e003d7edd17a177a82582a9c2c670960f66650987fa5dc8658cb14df510433bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e003d7edd17a177a82582a9c2c670960f66650987fa5dc8658cb14df510433bf->enter($__internal_e003d7edd17a177a82582a9c2c670960f66650987fa5dc8658cb14df510433bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:detailsdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ae6220f518847bf315b4db2a21f238ab202b497220871c1b1e31aba5f56dabf->leave($__internal_3ae6220f518847bf315b4db2a21f238ab202b497220871c1b1e31aba5f56dabf_prof);

        
        $__internal_e003d7edd17a177a82582a9c2c670960f66650987fa5dc8658cb14df510433bf->leave($__internal_e003d7edd17a177a82582a9c2c670960f66650987fa5dc8658cb14df510433bf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_445e9800f3f34ed7d03ecb92a96d5bc4ea7e6e9ef44827b0bffbf1b81db0ce00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445e9800f3f34ed7d03ecb92a96d5bc4ea7e6e9ef44827b0bffbf1b81db0ce00->enter($__internal_445e9800f3f34ed7d03ecb92a96d5bc4ea7e6e9ef44827b0bffbf1b81db0ce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_911871c4f69ff4ad95530b00ff80b79d1e53a8fece88bb830daaf2ba6076dc97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911871c4f69ff4ad95530b00ff80b79d1e53a8fece88bb830daaf2ba6076dc97->enter($__internal_911871c4f69ff4ad95530b00ff80b79d1e53a8fece88bb830daaf2ba6076dc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Détails Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_911871c4f69ff4ad95530b00ff80b79d1e53a8fece88bb830daaf2ba6076dc97->leave($__internal_911871c4f69ff4ad95530b00ff80b79d1e53a8fece88bb830daaf2ba6076dc97_prof);

        
        $__internal_445e9800f3f34ed7d03ecb92a96d5bc4ea7e6e9ef44827b0bffbf1b81db0ce00->leave($__internal_445e9800f3f34ed7d03ecb92a96d5bc4ea7e6e9ef44827b0bffbf1b81db0ce00_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_cf386b9c60c65282d36396b0c359f76c4d0b424dbab05fdd258d364068108461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf386b9c60c65282d36396b0c359f76c4d0b424dbab05fdd258d364068108461->enter($__internal_cf386b9c60c65282d36396b0c359f76c4d0b424dbab05fdd258d364068108461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_e7eb8549f8f5cbf27a58e4f207629d4cbde931db21a4c7aeb3144f7ce1267820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7eb8549f8f5cbf27a58e4f207629d4cbde931db21a4c7aeb3144f7ce1267820->enter($__internal_e7eb8549f8f5cbf27a58e4f207629d4cbde931db21a4c7aeb3144f7ce1267820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_e7eb8549f8f5cbf27a58e4f207629d4cbde931db21a4c7aeb3144f7ce1267820->leave($__internal_e7eb8549f8f5cbf27a58e4f207629d4cbde931db21a4c7aeb3144f7ce1267820_prof);

        
        $__internal_cf386b9c60c65282d36396b0c359f76c4d0b424dbab05fdd258d364068108461->leave($__internal_cf386b9c60c65282d36396b0c359f76c4d0b424dbab05fdd258d364068108461_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_a36901a72f12b3b962543c32e53c1bcc64b52b1b59a2f6ce4d4c00db57d21570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36901a72f12b3b962543c32e53c1bcc64b52b1b59a2f6ce4d4c00db57d21570->enter($__internal_a36901a72f12b3b962543c32e53c1bcc64b52b1b59a2f6ce4d4c00db57d21570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_3dda06020ffb1fdeaa0109ff3eb897b7b4c75a0d76e1f5d97d72da36acc0b298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dda06020ffb1fdeaa0109ff3eb897b7b4c75a0d76e1f5d97d72da36acc0b298->enter($__internal_3dda06020ffb1fdeaa0109ff3eb897b7b4c75a0d76e1f5d97d72da36acc0b298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_3dda06020ffb1fdeaa0109ff3eb897b7b4c75a0d76e1f5d97d72da36acc0b298->leave($__internal_3dda06020ffb1fdeaa0109ff3eb897b7b4c75a0d76e1f5d97d72da36acc0b298_prof);

        
        $__internal_a36901a72f12b3b962543c32e53c1bcc64b52b1b59a2f6ce4d4c00db57d21570->leave($__internal_a36901a72f12b3b962543c32e53c1bcc64b52b1b59a2f6ce4d4c00db57d21570_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:detailsdemandes.html.twig";
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

{% endblock %}", "ESFEspaceAbonneBundle:Back:detailsdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/detailsdemandes.html.twig");
    }
}
