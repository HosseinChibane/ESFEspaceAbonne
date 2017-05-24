<?php

/* ESFEspaceAbonneBundle:Default:detailsdemandes.html.twig */
class __TwigTemplate_04cf3d41661156d63bfaa0a789589a2fafcdf679f4a002efe916a068ce75b5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:detailsdemandes.html.twig", 1);
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
        $__internal_464f01122963dc23f4d31b7c574eeb9485cbb82746a3fc58b5b057fc977f541b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464f01122963dc23f4d31b7c574eeb9485cbb82746a3fc58b5b057fc977f541b->enter($__internal_464f01122963dc23f4d31b7c574eeb9485cbb82746a3fc58b5b057fc977f541b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:detailsdemandes.html.twig"));

        $__internal_49b93b9629022fa65b8b80bb72a499cc143faeab0963a6ab2c9c847359d6f0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b93b9629022fa65b8b80bb72a499cc143faeab0963a6ab2c9c847359d6f0bb->enter($__internal_49b93b9629022fa65b8b80bb72a499cc143faeab0963a6ab2c9c847359d6f0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:detailsdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_464f01122963dc23f4d31b7c574eeb9485cbb82746a3fc58b5b057fc977f541b->leave($__internal_464f01122963dc23f4d31b7c574eeb9485cbb82746a3fc58b5b057fc977f541b_prof);

        
        $__internal_49b93b9629022fa65b8b80bb72a499cc143faeab0963a6ab2c9c847359d6f0bb->leave($__internal_49b93b9629022fa65b8b80bb72a499cc143faeab0963a6ab2c9c847359d6f0bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8983bdb229dffee6556f892b5d2c1dc7a91d97334ecec4921967f6988398d9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8983bdb229dffee6556f892b5d2c1dc7a91d97334ecec4921967f6988398d9ba->enter($__internal_8983bdb229dffee6556f892b5d2c1dc7a91d97334ecec4921967f6988398d9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e87a3451665378b3ea644152c4a905a9429202d932fbc8cc9345a5a7712e7a54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87a3451665378b3ea644152c4a905a9429202d932fbc8cc9345a5a7712e7a54->enter($__internal_e87a3451665378b3ea644152c4a905a9429202d932fbc8cc9345a5a7712e7a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Détails Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e87a3451665378b3ea644152c4a905a9429202d932fbc8cc9345a5a7712e7a54->leave($__internal_e87a3451665378b3ea644152c4a905a9429202d932fbc8cc9345a5a7712e7a54_prof);

        
        $__internal_8983bdb229dffee6556f892b5d2c1dc7a91d97334ecec4921967f6988398d9ba->leave($__internal_8983bdb229dffee6556f892b5d2c1dc7a91d97334ecec4921967f6988398d9ba_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_341e96ea6d935e9f774cd9089cf1fb2a9a60bb53aa170230c9bf4d5bb1b0d86d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341e96ea6d935e9f774cd9089cf1fb2a9a60bb53aa170230c9bf4d5bb1b0d86d->enter($__internal_341e96ea6d935e9f774cd9089cf1fb2a9a60bb53aa170230c9bf4d5bb1b0d86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_5f5e49dbaed294dab41a2693559e4458aa5e6d59876a11402d54764ad33efd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5e49dbaed294dab41a2693559e4458aa5e6d59876a11402d54764ad33efd61->enter($__internal_5f5e49dbaed294dab41a2693559e4458aa5e6d59876a11402d54764ad33efd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_5f5e49dbaed294dab41a2693559e4458aa5e6d59876a11402d54764ad33efd61->leave($__internal_5f5e49dbaed294dab41a2693559e4458aa5e6d59876a11402d54764ad33efd61_prof);

        
        $__internal_341e96ea6d935e9f774cd9089cf1fb2a9a60bb53aa170230c9bf4d5bb1b0d86d->leave($__internal_341e96ea6d935e9f774cd9089cf1fb2a9a60bb53aa170230c9bf4d5bb1b0d86d_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_5f2b278ce06887c2a1902ebb58b0e5a751a3a5145943fb8bba8619305e589619 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f2b278ce06887c2a1902ebb58b0e5a751a3a5145943fb8bba8619305e589619->enter($__internal_5f2b278ce06887c2a1902ebb58b0e5a751a3a5145943fb8bba8619305e589619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_9962f57b4967d41470ec4be9dc535a126b51a15d8eb81f8e328c0577350dd996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9962f57b4967d41470ec4be9dc535a126b51a15d8eb81f8e328c0577350dd996->enter($__internal_9962f57b4967d41470ec4be9dc535a126b51a15d8eb81f8e328c0577350dd996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_9962f57b4967d41470ec4be9dc535a126b51a15d8eb81f8e328c0577350dd996->leave($__internal_9962f57b4967d41470ec4be9dc535a126b51a15d8eb81f8e328c0577350dd996_prof);

        
        $__internal_5f2b278ce06887c2a1902ebb58b0e5a751a3a5145943fb8bba8619305e589619->leave($__internal_5f2b278ce06887c2a1902ebb58b0e5a751a3a5145943fb8bba8619305e589619_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:detailsdemandes.html.twig";
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

{% endblock %}", "ESFEspaceAbonneBundle:Default:detailsdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/detailsdemandes.html.twig");
    }
}
