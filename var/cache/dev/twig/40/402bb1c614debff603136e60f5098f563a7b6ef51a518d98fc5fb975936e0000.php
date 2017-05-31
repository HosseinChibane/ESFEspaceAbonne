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
        $__internal_dff520b7d546c30b8c5ad095123b0c3a4e0622ac878f46c3b92cbf36cc48e164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff520b7d546c30b8c5ad095123b0c3a4e0622ac878f46c3b92cbf36cc48e164->enter($__internal_dff520b7d546c30b8c5ad095123b0c3a4e0622ac878f46c3b92cbf36cc48e164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_62e0991dc470d2e449fbbd66eb66490400084c28330e89cf76483d21dab36d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e0991dc470d2e449fbbd66eb66490400084c28330e89cf76483d21dab36d16->enter($__internal_62e0991dc470d2e449fbbd66eb66490400084c28330e89cf76483d21dab36d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff520b7d546c30b8c5ad095123b0c3a4e0622ac878f46c3b92cbf36cc48e164->leave($__internal_dff520b7d546c30b8c5ad095123b0c3a4e0622ac878f46c3b92cbf36cc48e164_prof);

        
        $__internal_62e0991dc470d2e449fbbd66eb66490400084c28330e89cf76483d21dab36d16->leave($__internal_62e0991dc470d2e449fbbd66eb66490400084c28330e89cf76483d21dab36d16_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_501e0609fbfc961bf98556535d0c48e8daeaec0246170a2f69723bb375f81b14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501e0609fbfc961bf98556535d0c48e8daeaec0246170a2f69723bb375f81b14->enter($__internal_501e0609fbfc961bf98556535d0c48e8daeaec0246170a2f69723bb375f81b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b92e999771708c9a8265ac7d69802fc29667a45ae5b1580095661d5fa51da3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92e999771708c9a8265ac7d69802fc29667a45ae5b1580095661d5fa51da3e8->enter($__internal_b92e999771708c9a8265ac7d69802fc29667a45ae5b1580095661d5fa51da3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b92e999771708c9a8265ac7d69802fc29667a45ae5b1580095661d5fa51da3e8->leave($__internal_b92e999771708c9a8265ac7d69802fc29667a45ae5b1580095661d5fa51da3e8_prof);

        
        $__internal_501e0609fbfc961bf98556535d0c48e8daeaec0246170a2f69723bb375f81b14->leave($__internal_501e0609fbfc961bf98556535d0c48e8daeaec0246170a2f69723bb375f81b14_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_22d67fd64739de5862249d1dff36a9ef768121e1d537401c052c0dab9623469b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d67fd64739de5862249d1dff36a9ef768121e1d537401c052c0dab9623469b->enter($__internal_22d67fd64739de5862249d1dff36a9ef768121e1d537401c052c0dab9623469b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_58e60be1ad82813d2448704147f916557835eee1704fd54f65c48e5a84592c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e60be1ad82813d2448704147f916557835eee1704fd54f65c48e5a84592c1a->enter($__internal_58e60be1ad82813d2448704147f916557835eee1704fd54f65c48e5a84592c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_58e60be1ad82813d2448704147f916557835eee1704fd54f65c48e5a84592c1a->leave($__internal_58e60be1ad82813d2448704147f916557835eee1704fd54f65c48e5a84592c1a_prof);

        
        $__internal_22d67fd64739de5862249d1dff36a9ef768121e1d537401c052c0dab9623469b->leave($__internal_22d67fd64739de5862249d1dff36a9ef768121e1d537401c052c0dab9623469b_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_1b1280590a795e32c9db617b681d298da32b5e159356be5d68fa84ddf3560dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1280590a795e32c9db617b681d298da32b5e159356be5d68fa84ddf3560dea->enter($__internal_1b1280590a795e32c9db617b681d298da32b5e159356be5d68fa84ddf3560dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_be6262629adaff66b9a054a47b2f3937556013fe9c7aca949c2363c4a4d07dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6262629adaff66b9a054a47b2f3937556013fe9c7aca949c2363c4a4d07dff->enter($__internal_be6262629adaff66b9a054a47b2f3937556013fe9c7aca949c2363c4a4d07dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_be6262629adaff66b9a054a47b2f3937556013fe9c7aca949c2363c4a4d07dff->leave($__internal_be6262629adaff66b9a054a47b2f3937556013fe9c7aca949c2363c4a4d07dff_prof);

        
        $__internal_1b1280590a795e32c9db617b681d298da32b5e159356be5d68fa84ddf3560dea->leave($__internal_1b1280590a795e32c9db617b681d298da32b5e159356be5d68fa84ddf3560dea_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_8f980322ecac665482a2eb6eb51d639990e138e1719a64c7202e76c3043239b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f980322ecac665482a2eb6eb51d639990e138e1719a64c7202e76c3043239b9->enter($__internal_8f980322ecac665482a2eb6eb51d639990e138e1719a64c7202e76c3043239b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_10bd65b6e98660f3c1dedfa159c1605827033d5ff71506c28824e66733362f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bd65b6e98660f3c1dedfa159c1605827033d5ff71506c28824e66733362f9e->enter($__internal_10bd65b6e98660f3c1dedfa159c1605827033d5ff71506c28824e66733362f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_10bd65b6e98660f3c1dedfa159c1605827033d5ff71506c28824e66733362f9e->leave($__internal_10bd65b6e98660f3c1dedfa159c1605827033d5ff71506c28824e66733362f9e_prof);

        
        $__internal_8f980322ecac665482a2eb6eb51d639990e138e1719a64c7202e76c3043239b9->leave($__internal_8f980322ecac665482a2eb6eb51d639990e138e1719a64c7202e76c3043239b9_prof);

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
