<?php

/* :backend:sidebar.html.twig */
class __TwigTemplate_3ab03dd0c1f1d3ab97ab26a4565bb56341d288ccbbc2a074be1aa1b5ab7c438a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":backend:sidebar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Body' => array($this, 'block_Body'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d53c75d7474f3e641c2677a1aae862091ed9935691fa96ebbd60a322e2d79002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53c75d7474f3e641c2677a1aae862091ed9935691fa96ebbd60a322e2d79002->enter($__internal_d53c75d7474f3e641c2677a1aae862091ed9935691fa96ebbd60a322e2d79002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_d7aa743774b6cb2533d14d7960998246c32143abd595a903ed41f3d60b899407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7aa743774b6cb2533d14d7960998246c32143abd595a903ed41f3d60b899407->enter($__internal_d7aa743774b6cb2533d14d7960998246c32143abd595a903ed41f3d60b899407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d53c75d7474f3e641c2677a1aae862091ed9935691fa96ebbd60a322e2d79002->leave($__internal_d53c75d7474f3e641c2677a1aae862091ed9935691fa96ebbd60a322e2d79002_prof);

        
        $__internal_d7aa743774b6cb2533d14d7960998246c32143abd595a903ed41f3d60b899407->leave($__internal_d7aa743774b6cb2533d14d7960998246c32143abd595a903ed41f3d60b899407_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bf3050bd5015f2f8a6a8cf7c8c7c0e97197dd579e29cec8b6c33144c85afc52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf3050bd5015f2f8a6a8cf7c8c7c0e97197dd579e29cec8b6c33144c85afc52->enter($__internal_2bf3050bd5015f2f8a6a8cf7c8c7c0e97197dd579e29cec8b6c33144c85afc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8604ffae11cc4e92430bc479a3c0772e98fd6f73bb57b62f356e99e4c436df05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8604ffae11cc4e92430bc479a3c0772e98fd6f73bb57b62f356e99e4c436df05->enter($__internal_8604ffae11cc4e92430bc479a3c0772e98fd6f73bb57b62f356e99e4c436df05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8604ffae11cc4e92430bc479a3c0772e98fd6f73bb57b62f356e99e4c436df05->leave($__internal_8604ffae11cc4e92430bc479a3c0772e98fd6f73bb57b62f356e99e4c436df05_prof);

        
        $__internal_2bf3050bd5015f2f8a6a8cf7c8c7c0e97197dd579e29cec8b6c33144c85afc52->leave($__internal_2bf3050bd5015f2f8a6a8cf7c8c7c0e97197dd579e29cec8b6c33144c85afc52_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_90cf2b39494aa23bd947ed4639e38c7d83f470b1ba41c7a4108bae5b5e011321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cf2b39494aa23bd947ed4639e38c7d83f470b1ba41c7a4108bae5b5e011321->enter($__internal_90cf2b39494aa23bd947ed4639e38c7d83f470b1ba41c7a4108bae5b5e011321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_3039ce89294a7ed521e6a38293f9863789aba66ea8bd56afd2ab66d5a4587b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3039ce89294a7ed521e6a38293f9863789aba66ea8bd56afd2ab66d5a4587b90->enter($__internal_3039ce89294a7ed521e6a38293f9863789aba66ea8bd56afd2ab66d5a4587b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        echo "   
        <!-- Page Content -->
        <div class=\"container\">

            <!-- Page Heading/Breadcrumbs -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Espace Abonné
                        <small></small>
                    </h1>
                    ";
        // line 19
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 26
        echo "            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class=\"row\">
            <!-- Sidebar Column -->
            <div class=\"col-md-3\">
                <div class=\"list-group\">
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\" class=\"list-group-item\">Mon Profil</a>
                    <a href=\"#\" class=\"list-group-item\" data-toggle=\"collapse\" data-target=\"#sl\" data-parent=\"#menu\">Mes Paramètres</a>
                    <div id=\"sl\" class=\"sublinks collapse\">
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesParametresMAIL");
        echo "\" class=\"list-group-item small\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Changer d'email</a>
                        <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesParametresMDP");
        echo "\" class=\"list-group-item small\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Changer de mot de passe</a>
                    </div>
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDocuments");
        echo "\" class=\"list-group-item\">Mes Documents</a>
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mesDemandes");
        echo "\" class=\"list-group-item\">Mes Demandes</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_universiteStepsOne");
        echo "\" class=\"list-group-item\">Inscription Universitaire</a>
                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsOne");
        echo "\" class=\"list-group-item\">Inscription cours de langue</a>
                    <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_logementStepsOne");
        echo "\" class=\"list-group-item\">Inscription logement</a>
                    <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_preparationStepsOne");
        echo "\" class=\"list-group-item\">Inscription cours préparation</a>
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_mutuelle");
        echo "\" class=\"list-group-item\">Inscription mutuelle</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_aide");
        echo "\" class=\"list-group-item\">Aide</a>
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_contact");
        echo "\" class=\"list-group-item\">Contact</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"list-group-item\">Déconnexion</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class=\"col-md-9\">
                ";
        // line 62
        echo "                ";
        $this->displayBlock('Content', $context, $blocks);
        // line 65
        echo "            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
";
        
        $__internal_3039ce89294a7ed521e6a38293f9863789aba66ea8bd56afd2ab66d5a4587b90->leave($__internal_3039ce89294a7ed521e6a38293f9863789aba66ea8bd56afd2ab66d5a4587b90_prof);

        
        $__internal_90cf2b39494aa23bd947ed4639e38c7d83f470b1ba41c7a4108bae5b5e011321->leave($__internal_90cf2b39494aa23bd947ed4639e38c7d83f470b1ba41c7a4108bae5b5e011321_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_59c235075e35b6b6a06a922b9bd32d24f36196bf5e83a8dea00e908d28a86d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c235075e35b6b6a06a922b9bd32d24f36196bf5e83a8dea00e908d28a86d6f->enter($__internal_59c235075e35b6b6a06a922b9bd32d24f36196bf5e83a8dea00e908d28a86d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_4756f5c37361352675d64b0cb99df2d015428717319e20bbc29708f9c183071d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4756f5c37361352675d64b0cb99df2d015428717319e20bbc29708f9c183071d->enter($__internal_4756f5c37361352675d64b0cb99df2d015428717319e20bbc29708f9c183071d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_4756f5c37361352675d64b0cb99df2d015428717319e20bbc29708f9c183071d->leave($__internal_4756f5c37361352675d64b0cb99df2d015428717319e20bbc29708f9c183071d_prof);

        
        $__internal_59c235075e35b6b6a06a922b9bd32d24f36196bf5e83a8dea00e908d28a86d6f->leave($__internal_59c235075e35b6b6a06a922b9bd32d24f36196bf5e83a8dea00e908d28a86d6f_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_02c638c85d0b7ad1073d0a05a60d8fdd47491f73539f621f4de936f1f74d40ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02c638c85d0b7ad1073d0a05a60d8fdd47491f73539f621f4de936f1f74d40ff->enter($__internal_02c638c85d0b7ad1073d0a05a60d8fdd47491f73539f621f4de936f1f74d40ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_0e6e9c6c3fa0fb5896d7090a73bce8263cd240c6cc3fc62536e2379599694d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6e9c6c3fa0fb5896d7090a73bce8263cd240c6cc3fc62536e2379599694d42->enter($__internal_0e6e9c6c3fa0fb5896d7090a73bce8263cd240c6cc3fc62536e2379599694d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_0e6e9c6c3fa0fb5896d7090a73bce8263cd240c6cc3fc62536e2379599694d42->leave($__internal_0e6e9c6c3fa0fb5896d7090a73bce8263cd240c6cc3fc62536e2379599694d42_prof);

        
        $__internal_02c638c85d0b7ad1073d0a05a60d8fdd47491f73539f621f4de936f1f74d40ff->leave($__internal_02c638c85d0b7ad1073d0a05a60d8fdd47491f73539f621f4de936f1f74d40ff_prof);

    }

    public function getTemplateName()
    {
        return ":backend:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 62,  194 => 20,  185 => 19,  170 => 65,  167 => 62,  159 => 56,  153 => 53,  149 => 52,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  127 => 45,  121 => 42,  117 => 41,  112 => 39,  108 => 38,  102 => 35,  91 => 26,  89 => 19,  69 => 9,  56 => 4,  47 => 3,  37 => 1,  34 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}
    {{ parent() }}
{% endblock %}

{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}  

    {% block Body %}   
        <!-- Page Content -->
        <div class=\"container\">

            <!-- Page Heading/Breadcrumbs -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Espace Abonné
                        <small></small>
                    </h1>
                    {% block breadcrumb %}
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                {% endblock %}
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class=\"row\">
            <!-- Sidebar Column -->
            <div class=\"col-md-3\">
                <div class=\"list-group\">
                    <a href=\"{{ path('esf_espace_abonne_monProfil') }}\" class=\"list-group-item\">Mon Profil</a>
                    <a href=\"#\" class=\"list-group-item\" data-toggle=\"collapse\" data-target=\"#sl\" data-parent=\"#menu\">Mes Paramètres</a>
                    <div id=\"sl\" class=\"sublinks collapse\">
                        <a href=\"{{ path('esf_espace_abonne_mesParametresMAIL') }}\" class=\"list-group-item small\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Changer d'email</a>
                        <a href=\"{{ path('esf_espace_abonne_mesParametresMDP') }}\" class=\"list-group-item small\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Changer de mot de passe</a>
                    </div>
                    <a href=\"{{ path('esf_espace_abonne_mesDocuments') }}\" class=\"list-group-item\">Mes Documents</a>
                    <a href=\"{{ path('esf_espace_abonne_mesDemandes') }}\" class=\"list-group-item\">Mes Demandes</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"{{ path('esf_espace_abonne_universiteStepsOne') }}\" class=\"list-group-item\">Inscription Universitaire</a>
                    <a href=\"{{ path('esf_espace_abonne_langueStepsOne') }}\" class=\"list-group-item\">Inscription cours de langue</a>
                    <a href=\"{{ path('esf_espace_abonne_logementStepsOne') }}\" class=\"list-group-item\">Inscription logement</a>
                    <a href=\"{{ path('esf_espace_abonne_preparationStepsOne') }}\" class=\"list-group-item\">Inscription cours préparation</a>
                    <a href=\"{{ path('esf_espace_abonne_mutuelle') }}\" class=\"list-group-item\">Inscription mutuelle</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"{{ path('esf_espace_abonne_aide') }}\" class=\"list-group-item\">Aide</a>
                    <a href=\"{{ path('esf_espace_abonne_contact') }}\" class=\"list-group-item\">Contact</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"{{ path('fos_user_security_logout') }}\" class=\"list-group-item\">Déconnexion</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class=\"col-md-9\">
                {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
                {% block Content %} 

                {% endblock %}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
{% endblock %}
{% endif %}

{#{% block BackPills %} 
{% include ':backend:pills.html.twig' %}
{% endblock %}#}", ":backend:sidebar.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\views\\backend\\sidebar.html.twig");
    }
}
