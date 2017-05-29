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
        $__internal_8d7f3b47bf8e9ae7328e58689a22e69add511f54261912bdbf4af9a6a36f4cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7f3b47bf8e9ae7328e58689a22e69add511f54261912bdbf4af9a6a36f4cea->enter($__internal_8d7f3b47bf8e9ae7328e58689a22e69add511f54261912bdbf4af9a6a36f4cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_26f74c11a8e74c18cb00dc0f45d851057c2edd3c98f34b32988ea3526430d3dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f74c11a8e74c18cb00dc0f45d851057c2edd3c98f34b32988ea3526430d3dc->enter($__internal_26f74c11a8e74c18cb00dc0f45d851057c2edd3c98f34b32988ea3526430d3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d7f3b47bf8e9ae7328e58689a22e69add511f54261912bdbf4af9a6a36f4cea->leave($__internal_8d7f3b47bf8e9ae7328e58689a22e69add511f54261912bdbf4af9a6a36f4cea_prof);

        
        $__internal_26f74c11a8e74c18cb00dc0f45d851057c2edd3c98f34b32988ea3526430d3dc->leave($__internal_26f74c11a8e74c18cb00dc0f45d851057c2edd3c98f34b32988ea3526430d3dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dacc1f6265f0ce62020024438a39383b7e57847e9c4f0aa4c251045bc78950b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacc1f6265f0ce62020024438a39383b7e57847e9c4f0aa4c251045bc78950b6->enter($__internal_dacc1f6265f0ce62020024438a39383b7e57847e9c4f0aa4c251045bc78950b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_952b8da16950ece796c6e8170a1323863494f8439107d9e3c7ea902709c365e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952b8da16950ece796c6e8170a1323863494f8439107d9e3c7ea902709c365e8->enter($__internal_952b8da16950ece796c6e8170a1323863494f8439107d9e3c7ea902709c365e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_952b8da16950ece796c6e8170a1323863494f8439107d9e3c7ea902709c365e8->leave($__internal_952b8da16950ece796c6e8170a1323863494f8439107d9e3c7ea902709c365e8_prof);

        
        $__internal_dacc1f6265f0ce62020024438a39383b7e57847e9c4f0aa4c251045bc78950b6->leave($__internal_dacc1f6265f0ce62020024438a39383b7e57847e9c4f0aa4c251045bc78950b6_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_5b76a6188f92a56bf9a5ef43e8ae4815e373bf2cdb874a6109af1599fa0ccc54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b76a6188f92a56bf9a5ef43e8ae4815e373bf2cdb874a6109af1599fa0ccc54->enter($__internal_5b76a6188f92a56bf9a5ef43e8ae4815e373bf2cdb874a6109af1599fa0ccc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_01a93a57648dbf1de539fa46a605fb46b16dc2b80bee88b61cd0f5c6458e25de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a93a57648dbf1de539fa46a605fb46b16dc2b80bee88b61cd0f5c6458e25de->enter($__internal_01a93a57648dbf1de539fa46a605fb46b16dc2b80bee88b61cd0f5c6458e25de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_01a93a57648dbf1de539fa46a605fb46b16dc2b80bee88b61cd0f5c6458e25de->leave($__internal_01a93a57648dbf1de539fa46a605fb46b16dc2b80bee88b61cd0f5c6458e25de_prof);

        
        $__internal_5b76a6188f92a56bf9a5ef43e8ae4815e373bf2cdb874a6109af1599fa0ccc54->leave($__internal_5b76a6188f92a56bf9a5ef43e8ae4815e373bf2cdb874a6109af1599fa0ccc54_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e67519f2f643341bca0ecbf82b78e852e8861da5ec9bb718a36f7d7a0607619e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67519f2f643341bca0ecbf82b78e852e8861da5ec9bb718a36f7d7a0607619e->enter($__internal_e67519f2f643341bca0ecbf82b78e852e8861da5ec9bb718a36f7d7a0607619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_0a6a5292eb315a6cd5f1caca0fe8012674d217d5ce7bf0ab502e8a2802835305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6a5292eb315a6cd5f1caca0fe8012674d217d5ce7bf0ab502e8a2802835305->enter($__internal_0a6a5292eb315a6cd5f1caca0fe8012674d217d5ce7bf0ab502e8a2802835305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_0a6a5292eb315a6cd5f1caca0fe8012674d217d5ce7bf0ab502e8a2802835305->leave($__internal_0a6a5292eb315a6cd5f1caca0fe8012674d217d5ce7bf0ab502e8a2802835305_prof);

        
        $__internal_e67519f2f643341bca0ecbf82b78e852e8861da5ec9bb718a36f7d7a0607619e->leave($__internal_e67519f2f643341bca0ecbf82b78e852e8861da5ec9bb718a36f7d7a0607619e_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_ff01ba830f800617d1077dee473fbb85f18d2308430988cf35ae6bb4aff90178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff01ba830f800617d1077dee473fbb85f18d2308430988cf35ae6bb4aff90178->enter($__internal_ff01ba830f800617d1077dee473fbb85f18d2308430988cf35ae6bb4aff90178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_ba5abcb9b332cb7f5987fea3be4e33e5898ac3c93cddd1de03a53204f906953e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5abcb9b332cb7f5987fea3be4e33e5898ac3c93cddd1de03a53204f906953e->enter($__internal_ba5abcb9b332cb7f5987fea3be4e33e5898ac3c93cddd1de03a53204f906953e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_ba5abcb9b332cb7f5987fea3be4e33e5898ac3c93cddd1de03a53204f906953e->leave($__internal_ba5abcb9b332cb7f5987fea3be4e33e5898ac3c93cddd1de03a53204f906953e_prof);

        
        $__internal_ff01ba830f800617d1077dee473fbb85f18d2308430988cf35ae6bb4aff90178->leave($__internal_ff01ba830f800617d1077dee473fbb85f18d2308430988cf35ae6bb4aff90178_prof);

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
