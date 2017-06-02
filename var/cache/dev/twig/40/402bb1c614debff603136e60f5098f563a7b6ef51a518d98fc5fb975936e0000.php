<?php

/* :backend:sidebar.html.twig */
class __TwigTemplate_b96b84456d5736cea27caa7da1f9f7e1b278aa732a9c160859f3be6578a0b6b9 extends Twig_Template
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
        $__internal_6dbdce36ae11e639c815883b2e405894dd738a565699ddc61f1ceca38385ebb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dbdce36ae11e639c815883b2e405894dd738a565699ddc61f1ceca38385ebb9->enter($__internal_6dbdce36ae11e639c815883b2e405894dd738a565699ddc61f1ceca38385ebb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_0445e216643561ed473dea692f3cc61139bc50a15befd4d03c4a5743111ba2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0445e216643561ed473dea692f3cc61139bc50a15befd4d03c4a5743111ba2de->enter($__internal_0445e216643561ed473dea692f3cc61139bc50a15befd4d03c4a5743111ba2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dbdce36ae11e639c815883b2e405894dd738a565699ddc61f1ceca38385ebb9->leave($__internal_6dbdce36ae11e639c815883b2e405894dd738a565699ddc61f1ceca38385ebb9_prof);

        
        $__internal_0445e216643561ed473dea692f3cc61139bc50a15befd4d03c4a5743111ba2de->leave($__internal_0445e216643561ed473dea692f3cc61139bc50a15befd4d03c4a5743111ba2de_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_471a9733a2c819239785804b62cdb2cbba6c55a2844f93412ed09f4e0bc3ae45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471a9733a2c819239785804b62cdb2cbba6c55a2844f93412ed09f4e0bc3ae45->enter($__internal_471a9733a2c819239785804b62cdb2cbba6c55a2844f93412ed09f4e0bc3ae45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2705cf09f52c55a533bc4e08b2ca12dc316705c0c22bf393252073d268d2dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2705cf09f52c55a533bc4e08b2ca12dc316705c0c22bf393252073d268d2dc0->enter($__internal_e2705cf09f52c55a533bc4e08b2ca12dc316705c0c22bf393252073d268d2dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e2705cf09f52c55a533bc4e08b2ca12dc316705c0c22bf393252073d268d2dc0->leave($__internal_e2705cf09f52c55a533bc4e08b2ca12dc316705c0c22bf393252073d268d2dc0_prof);

        
        $__internal_471a9733a2c819239785804b62cdb2cbba6c55a2844f93412ed09f4e0bc3ae45->leave($__internal_471a9733a2c819239785804b62cdb2cbba6c55a2844f93412ed09f4e0bc3ae45_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_43fc2c409e290a97f817711fa3c4ccf967de123b3837e9544d0af708f4c00dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43fc2c409e290a97f817711fa3c4ccf967de123b3837e9544d0af708f4c00dbf->enter($__internal_43fc2c409e290a97f817711fa3c4ccf967de123b3837e9544d0af708f4c00dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_263dbaae6264644473564dc1bd095a68d4486f0d710004b4e1a4c6365e81b56c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263dbaae6264644473564dc1bd095a68d4486f0d710004b4e1a4c6365e81b56c->enter($__internal_263dbaae6264644473564dc1bd095a68d4486f0d710004b4e1a4c6365e81b56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_263dbaae6264644473564dc1bd095a68d4486f0d710004b4e1a4c6365e81b56c->leave($__internal_263dbaae6264644473564dc1bd095a68d4486f0d710004b4e1a4c6365e81b56c_prof);

        
        $__internal_43fc2c409e290a97f817711fa3c4ccf967de123b3837e9544d0af708f4c00dbf->leave($__internal_43fc2c409e290a97f817711fa3c4ccf967de123b3837e9544d0af708f4c00dbf_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3cfdf760b01a731acf68b1d6536c4169db9c5fc587cec6ccd8bbe247221d2e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfdf760b01a731acf68b1d6536c4169db9c5fc587cec6ccd8bbe247221d2e8c->enter($__internal_3cfdf760b01a731acf68b1d6536c4169db9c5fc587cec6ccd8bbe247221d2e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_28583550e94416e2f5d84485bfa5647435b0ccb80a96604a1a39d55d30eaaa6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28583550e94416e2f5d84485bfa5647435b0ccb80a96604a1a39d55d30eaaa6c->enter($__internal_28583550e94416e2f5d84485bfa5647435b0ccb80a96604a1a39d55d30eaaa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_28583550e94416e2f5d84485bfa5647435b0ccb80a96604a1a39d55d30eaaa6c->leave($__internal_28583550e94416e2f5d84485bfa5647435b0ccb80a96604a1a39d55d30eaaa6c_prof);

        
        $__internal_3cfdf760b01a731acf68b1d6536c4169db9c5fc587cec6ccd8bbe247221d2e8c->leave($__internal_3cfdf760b01a731acf68b1d6536c4169db9c5fc587cec6ccd8bbe247221d2e8c_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_78c51e0a3d342ce543f3122f463cfa15381145d3b256d53ff12f076f0a5e71e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c51e0a3d342ce543f3122f463cfa15381145d3b256d53ff12f076f0a5e71e8->enter($__internal_78c51e0a3d342ce543f3122f463cfa15381145d3b256d53ff12f076f0a5e71e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_a8686cc63c8e5da5bf8b7a5219955192643885c5f52249fc4492af46167a9d33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8686cc63c8e5da5bf8b7a5219955192643885c5f52249fc4492af46167a9d33->enter($__internal_a8686cc63c8e5da5bf8b7a5219955192643885c5f52249fc4492af46167a9d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_a8686cc63c8e5da5bf8b7a5219955192643885c5f52249fc4492af46167a9d33->leave($__internal_a8686cc63c8e5da5bf8b7a5219955192643885c5f52249fc4492af46167a9d33_prof);

        
        $__internal_78c51e0a3d342ce543f3122f463cfa15381145d3b256d53ff12f076f0a5e71e8->leave($__internal_78c51e0a3d342ce543f3122f463cfa15381145d3b256d53ff12f076f0a5e71e8_prof);

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
{% endblock %}#}", ":backend:sidebar.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources\\views/backend/sidebar.html.twig");
    }
}
