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
        $__internal_8c5b983fa48c69f18dec0ac2ad2e926b9331e4d60e1cc02cd1927fdf93299f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5b983fa48c69f18dec0ac2ad2e926b9331e4d60e1cc02cd1927fdf93299f85->enter($__internal_8c5b983fa48c69f18dec0ac2ad2e926b9331e4d60e1cc02cd1927fdf93299f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_e58f6164985228fe135de66010c9855d271ea8ed60d8665ca76d86a6cc57cd9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58f6164985228fe135de66010c9855d271ea8ed60d8665ca76d86a6cc57cd9f->enter($__internal_e58f6164985228fe135de66010c9855d271ea8ed60d8665ca76d86a6cc57cd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c5b983fa48c69f18dec0ac2ad2e926b9331e4d60e1cc02cd1927fdf93299f85->leave($__internal_8c5b983fa48c69f18dec0ac2ad2e926b9331e4d60e1cc02cd1927fdf93299f85_prof);

        
        $__internal_e58f6164985228fe135de66010c9855d271ea8ed60d8665ca76d86a6cc57cd9f->leave($__internal_e58f6164985228fe135de66010c9855d271ea8ed60d8665ca76d86a6cc57cd9f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_babf35e7a0ef484455f79b93bdab86ed22edba347bda515f8e1dd2f6141273c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_babf35e7a0ef484455f79b93bdab86ed22edba347bda515f8e1dd2f6141273c5->enter($__internal_babf35e7a0ef484455f79b93bdab86ed22edba347bda515f8e1dd2f6141273c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b294d135f5bd50f7bd3388c73979740cc51ba8a4deab961ead9a23b862a73cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b294d135f5bd50f7bd3388c73979740cc51ba8a4deab961ead9a23b862a73cb->enter($__internal_2b294d135f5bd50f7bd3388c73979740cc51ba8a4deab961ead9a23b862a73cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2b294d135f5bd50f7bd3388c73979740cc51ba8a4deab961ead9a23b862a73cb->leave($__internal_2b294d135f5bd50f7bd3388c73979740cc51ba8a4deab961ead9a23b862a73cb_prof);

        
        $__internal_babf35e7a0ef484455f79b93bdab86ed22edba347bda515f8e1dd2f6141273c5->leave($__internal_babf35e7a0ef484455f79b93bdab86ed22edba347bda515f8e1dd2f6141273c5_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_daddcf12cbf00645abff57755adae20ac7a0827cd31eb10b7212601dc3d3cd0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daddcf12cbf00645abff57755adae20ac7a0827cd31eb10b7212601dc3d3cd0f->enter($__internal_daddcf12cbf00645abff57755adae20ac7a0827cd31eb10b7212601dc3d3cd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_d32d29b29a59e1e3437e929f01dcf6ad2ccee505ad1a5cb2a26d239e7c7894e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32d29b29a59e1e3437e929f01dcf6ad2ccee505ad1a5cb2a26d239e7c7894e2->enter($__internal_d32d29b29a59e1e3437e929f01dcf6ad2ccee505ad1a5cb2a26d239e7c7894e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_d32d29b29a59e1e3437e929f01dcf6ad2ccee505ad1a5cb2a26d239e7c7894e2->leave($__internal_d32d29b29a59e1e3437e929f01dcf6ad2ccee505ad1a5cb2a26d239e7c7894e2_prof);

        
        $__internal_daddcf12cbf00645abff57755adae20ac7a0827cd31eb10b7212601dc3d3cd0f->leave($__internal_daddcf12cbf00645abff57755adae20ac7a0827cd31eb10b7212601dc3d3cd0f_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_edad11ba6abf57bfac2101939ed84ec64924c217a90c4470b50f71427bd43021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edad11ba6abf57bfac2101939ed84ec64924c217a90c4470b50f71427bd43021->enter($__internal_edad11ba6abf57bfac2101939ed84ec64924c217a90c4470b50f71427bd43021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_141563dce2dae31430f86fef0698c6782506a1e5d5d3afef3005964c8d18504b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141563dce2dae31430f86fef0698c6782506a1e5d5d3afef3005964c8d18504b->enter($__internal_141563dce2dae31430f86fef0698c6782506a1e5d5d3afef3005964c8d18504b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_141563dce2dae31430f86fef0698c6782506a1e5d5d3afef3005964c8d18504b->leave($__internal_141563dce2dae31430f86fef0698c6782506a1e5d5d3afef3005964c8d18504b_prof);

        
        $__internal_edad11ba6abf57bfac2101939ed84ec64924c217a90c4470b50f71427bd43021->leave($__internal_edad11ba6abf57bfac2101939ed84ec64924c217a90c4470b50f71427bd43021_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_fd83f6cf6518b93e2c768bd0deb9b0c3f856f69da3f09eb6c32f4dcc06182f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd83f6cf6518b93e2c768bd0deb9b0c3f856f69da3f09eb6c32f4dcc06182f62->enter($__internal_fd83f6cf6518b93e2c768bd0deb9b0c3f856f69da3f09eb6c32f4dcc06182f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_9d69f4f84c9e5db33089fadd94616e4e59e0125ff8d06d041e05643151e2b739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d69f4f84c9e5db33089fadd94616e4e59e0125ff8d06d041e05643151e2b739->enter($__internal_9d69f4f84c9e5db33089fadd94616e4e59e0125ff8d06d041e05643151e2b739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_9d69f4f84c9e5db33089fadd94616e4e59e0125ff8d06d041e05643151e2b739->leave($__internal_9d69f4f84c9e5db33089fadd94616e4e59e0125ff8d06d041e05643151e2b739_prof);

        
        $__internal_fd83f6cf6518b93e2c768bd0deb9b0c3f856f69da3f09eb6c32f4dcc06182f62->leave($__internal_fd83f6cf6518b93e2c768bd0deb9b0c3f856f69da3f09eb6c32f4dcc06182f62_prof);

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
