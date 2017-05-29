<?php

/* @ESFEspaceAbonne/back/detailsdemandes.html.twig */
class __TwigTemplate_5122f7314bd6f51d71c9b4be8dcbbf1672b9c7129e1bfb96dfd6131e68df3aa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/detailsdemandes.html.twig", 1);
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
        $__internal_d9a96e9303b99ef2da86513bb60462bbc905619375dc56266eea500fd12d9cd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9a96e9303b99ef2da86513bb60462bbc905619375dc56266eea500fd12d9cd4->enter($__internal_d9a96e9303b99ef2da86513bb60462bbc905619375dc56266eea500fd12d9cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/detailsdemandes.html.twig"));

        $__internal_19603b5612b762eb70eba8a940cad900ee97984003de287acccf413c0ccd1314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19603b5612b762eb70eba8a940cad900ee97984003de287acccf413c0ccd1314->enter($__internal_19603b5612b762eb70eba8a940cad900ee97984003de287acccf413c0ccd1314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/detailsdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9a96e9303b99ef2da86513bb60462bbc905619375dc56266eea500fd12d9cd4->leave($__internal_d9a96e9303b99ef2da86513bb60462bbc905619375dc56266eea500fd12d9cd4_prof);

        
        $__internal_19603b5612b762eb70eba8a940cad900ee97984003de287acccf413c0ccd1314->leave($__internal_19603b5612b762eb70eba8a940cad900ee97984003de287acccf413c0ccd1314_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3716dd0cddc34c609a21c13c6e3b041b975dbcb994f13280cdae5b59b0025e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3716dd0cddc34c609a21c13c6e3b041b975dbcb994f13280cdae5b59b0025e9->enter($__internal_f3716dd0cddc34c609a21c13c6e3b041b975dbcb994f13280cdae5b59b0025e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_70a08eefa143e3a55b97efa3a7e91b34f2952f73bd1fb04e4cbc5a1e30a81787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a08eefa143e3a55b97efa3a7e91b34f2952f73bd1fb04e4cbc5a1e30a81787->enter($__internal_70a08eefa143e3a55b97efa3a7e91b34f2952f73bd1fb04e4cbc5a1e30a81787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Détails Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_70a08eefa143e3a55b97efa3a7e91b34f2952f73bd1fb04e4cbc5a1e30a81787->leave($__internal_70a08eefa143e3a55b97efa3a7e91b34f2952f73bd1fb04e4cbc5a1e30a81787_prof);

        
        $__internal_f3716dd0cddc34c609a21c13c6e3b041b975dbcb994f13280cdae5b59b0025e9->leave($__internal_f3716dd0cddc34c609a21c13c6e3b041b975dbcb994f13280cdae5b59b0025e9_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_8d7de0e342ad7858c1f38895a3e472098bc1bbd07601641c61b6e8a57642999f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7de0e342ad7858c1f38895a3e472098bc1bbd07601641c61b6e8a57642999f->enter($__internal_8d7de0e342ad7858c1f38895a3e472098bc1bbd07601641c61b6e8a57642999f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_36181df3522e46e3a540ab034f000a7f565df0488eca71d456be87a500c2af03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36181df3522e46e3a540ab034f000a7f565df0488eca71d456be87a500c2af03->enter($__internal_36181df3522e46e3a540ab034f000a7f565df0488eca71d456be87a500c2af03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_36181df3522e46e3a540ab034f000a7f565df0488eca71d456be87a500c2af03->leave($__internal_36181df3522e46e3a540ab034f000a7f565df0488eca71d456be87a500c2af03_prof);

        
        $__internal_8d7de0e342ad7858c1f38895a3e472098bc1bbd07601641c61b6e8a57642999f->leave($__internal_8d7de0e342ad7858c1f38895a3e472098bc1bbd07601641c61b6e8a57642999f_prof);

    }

    // line 15
    public function block_Content($context, array $blocks = array())
    {
        $__internal_32036419b07844919bbf5ec7aa77489aa66de1807e60b3d24e8b05d3ea5c7bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32036419b07844919bbf5ec7aa77489aa66de1807e60b3d24e8b05d3ea5c7bad->enter($__internal_32036419b07844919bbf5ec7aa77489aa66de1807e60b3d24e8b05d3ea5c7bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e6e59ef8e05cc66cc9b7cd13d2743ba08a37dd8c8fc5e81daa317f7b522d5395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e59ef8e05cc66cc9b7cd13d2743ba08a37dd8c8fc5e81daa317f7b522d5395->enter($__internal_e6e59ef8e05cc66cc9b7cd13d2743ba08a37dd8c8fc5e81daa317f7b522d5395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_e6e59ef8e05cc66cc9b7cd13d2743ba08a37dd8c8fc5e81daa317f7b522d5395->leave($__internal_e6e59ef8e05cc66cc9b7cd13d2743ba08a37dd8c8fc5e81daa317f7b522d5395_prof);

        
        $__internal_32036419b07844919bbf5ec7aa77489aa66de1807e60b3d24e8b05d3ea5c7bad->leave($__internal_32036419b07844919bbf5ec7aa77489aa66de1807e60b3d24e8b05d3ea5c7bad_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/detailsdemandes.html.twig";
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

{% endblock %}", "@ESFEspaceAbonne/back/detailsdemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\detailsdemandes.html.twig");
    }
}
