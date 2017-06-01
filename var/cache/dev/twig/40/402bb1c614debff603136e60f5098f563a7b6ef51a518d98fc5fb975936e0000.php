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
        $__internal_597d385a034e53ccabc26966954aba364bd4a98fe96b040ae76e34c3e1f9c55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_597d385a034e53ccabc26966954aba364bd4a98fe96b040ae76e34c3e1f9c55b->enter($__internal_597d385a034e53ccabc26966954aba364bd4a98fe96b040ae76e34c3e1f9c55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_6fe36195785ee300de0a1b894423c9340b9f623d0204e73f94444e94903bc177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe36195785ee300de0a1b894423c9340b9f623d0204e73f94444e94903bc177->enter($__internal_6fe36195785ee300de0a1b894423c9340b9f623d0204e73f94444e94903bc177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_597d385a034e53ccabc26966954aba364bd4a98fe96b040ae76e34c3e1f9c55b->leave($__internal_597d385a034e53ccabc26966954aba364bd4a98fe96b040ae76e34c3e1f9c55b_prof);

        
        $__internal_6fe36195785ee300de0a1b894423c9340b9f623d0204e73f94444e94903bc177->leave($__internal_6fe36195785ee300de0a1b894423c9340b9f623d0204e73f94444e94903bc177_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3be0e4cda22cc6870cfa691fd71a0ef3cd110139224e672daae0021ffcd3d17f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be0e4cda22cc6870cfa691fd71a0ef3cd110139224e672daae0021ffcd3d17f->enter($__internal_3be0e4cda22cc6870cfa691fd71a0ef3cd110139224e672daae0021ffcd3d17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a86186d50d2844b43c2d6a3ee1d07d95961650d4f6958e90f7ad8f804008b88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86186d50d2844b43c2d6a3ee1d07d95961650d4f6958e90f7ad8f804008b88f->enter($__internal_a86186d50d2844b43c2d6a3ee1d07d95961650d4f6958e90f7ad8f804008b88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a86186d50d2844b43c2d6a3ee1d07d95961650d4f6958e90f7ad8f804008b88f->leave($__internal_a86186d50d2844b43c2d6a3ee1d07d95961650d4f6958e90f7ad8f804008b88f_prof);

        
        $__internal_3be0e4cda22cc6870cfa691fd71a0ef3cd110139224e672daae0021ffcd3d17f->leave($__internal_3be0e4cda22cc6870cfa691fd71a0ef3cd110139224e672daae0021ffcd3d17f_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_f430df7723c550566bae118ec7b8af93299ce6a38344d01134b3280253a2a104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f430df7723c550566bae118ec7b8af93299ce6a38344d01134b3280253a2a104->enter($__internal_f430df7723c550566bae118ec7b8af93299ce6a38344d01134b3280253a2a104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_c0fbdbc8e255d47d2660f2a5e6d4ea217b590bb8a280c0288cdb423e3976c1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0fbdbc8e255d47d2660f2a5e6d4ea217b590bb8a280c0288cdb423e3976c1ec->enter($__internal_c0fbdbc8e255d47d2660f2a5e6d4ea217b590bb8a280c0288cdb423e3976c1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_c0fbdbc8e255d47d2660f2a5e6d4ea217b590bb8a280c0288cdb423e3976c1ec->leave($__internal_c0fbdbc8e255d47d2660f2a5e6d4ea217b590bb8a280c0288cdb423e3976c1ec_prof);

        
        $__internal_f430df7723c550566bae118ec7b8af93299ce6a38344d01134b3280253a2a104->leave($__internal_f430df7723c550566bae118ec7b8af93299ce6a38344d01134b3280253a2a104_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_84ae29357a49942bc6e20e4915068b391ab19041ef4282f18068dcd303b02dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ae29357a49942bc6e20e4915068b391ab19041ef4282f18068dcd303b02dd6->enter($__internal_84ae29357a49942bc6e20e4915068b391ab19041ef4282f18068dcd303b02dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_c9f47aac3b2c89f8053bbb344eecae54aa3af7bb571a778efc23e63bfea4ecec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f47aac3b2c89f8053bbb344eecae54aa3af7bb571a778efc23e63bfea4ecec->enter($__internal_c9f47aac3b2c89f8053bbb344eecae54aa3af7bb571a778efc23e63bfea4ecec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_c9f47aac3b2c89f8053bbb344eecae54aa3af7bb571a778efc23e63bfea4ecec->leave($__internal_c9f47aac3b2c89f8053bbb344eecae54aa3af7bb571a778efc23e63bfea4ecec_prof);

        
        $__internal_84ae29357a49942bc6e20e4915068b391ab19041ef4282f18068dcd303b02dd6->leave($__internal_84ae29357a49942bc6e20e4915068b391ab19041ef4282f18068dcd303b02dd6_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_725ff8cef07201c464b91b2109e5ad902c4e31f0c85f81401e05705481667658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725ff8cef07201c464b91b2109e5ad902c4e31f0c85f81401e05705481667658->enter($__internal_725ff8cef07201c464b91b2109e5ad902c4e31f0c85f81401e05705481667658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_ebdd96be47566bf1f0313d6989ab1ab59df7a7c84d86d4396bfe95594208342d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebdd96be47566bf1f0313d6989ab1ab59df7a7c84d86d4396bfe95594208342d->enter($__internal_ebdd96be47566bf1f0313d6989ab1ab59df7a7c84d86d4396bfe95594208342d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_ebdd96be47566bf1f0313d6989ab1ab59df7a7c84d86d4396bfe95594208342d->leave($__internal_ebdd96be47566bf1f0313d6989ab1ab59df7a7c84d86d4396bfe95594208342d_prof);

        
        $__internal_725ff8cef07201c464b91b2109e5ad902c4e31f0c85f81401e05705481667658->leave($__internal_725ff8cef07201c464b91b2109e5ad902c4e31f0c85f81401e05705481667658_prof);

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
