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
        $__internal_eaf093e1fd007f2eebe87074eb279b1c7bbc5706350489c3c01e86c526250b86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf093e1fd007f2eebe87074eb279b1c7bbc5706350489c3c01e86c526250b86->enter($__internal_eaf093e1fd007f2eebe87074eb279b1c7bbc5706350489c3c01e86c526250b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_be178ba3fa969c8b95fa6657f22c4c897263c0e651f0d55747dd80113f5530c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be178ba3fa969c8b95fa6657f22c4c897263c0e651f0d55747dd80113f5530c8->enter($__internal_be178ba3fa969c8b95fa6657f22c4c897263c0e651f0d55747dd80113f5530c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaf093e1fd007f2eebe87074eb279b1c7bbc5706350489c3c01e86c526250b86->leave($__internal_eaf093e1fd007f2eebe87074eb279b1c7bbc5706350489c3c01e86c526250b86_prof);

        
        $__internal_be178ba3fa969c8b95fa6657f22c4c897263c0e651f0d55747dd80113f5530c8->leave($__internal_be178ba3fa969c8b95fa6657f22c4c897263c0e651f0d55747dd80113f5530c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_948918cb219b20bfc9f8f298f11f3a56c0be682640ebb537a1b80cc0977a644c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948918cb219b20bfc9f8f298f11f3a56c0be682640ebb537a1b80cc0977a644c->enter($__internal_948918cb219b20bfc9f8f298f11f3a56c0be682640ebb537a1b80cc0977a644c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_961f574675606efaf9a898993eaaabcadaf839ac1164065f477f9d2ce331698b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961f574675606efaf9a898993eaaabcadaf839ac1164065f477f9d2ce331698b->enter($__internal_961f574675606efaf9a898993eaaabcadaf839ac1164065f477f9d2ce331698b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_961f574675606efaf9a898993eaaabcadaf839ac1164065f477f9d2ce331698b->leave($__internal_961f574675606efaf9a898993eaaabcadaf839ac1164065f477f9d2ce331698b_prof);

        
        $__internal_948918cb219b20bfc9f8f298f11f3a56c0be682640ebb537a1b80cc0977a644c->leave($__internal_948918cb219b20bfc9f8f298f11f3a56c0be682640ebb537a1b80cc0977a644c_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_dd0c80445966e67cbad2b7c43f705315540cd8e5bdb74f5418af37986a5c1e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd0c80445966e67cbad2b7c43f705315540cd8e5bdb74f5418af37986a5c1e7c->enter($__internal_dd0c80445966e67cbad2b7c43f705315540cd8e5bdb74f5418af37986a5c1e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_78bcd4634d8aeb10f1e247c0f24b98c6246dcf310281319daf72e2a191b00673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bcd4634d8aeb10f1e247c0f24b98c6246dcf310281319daf72e2a191b00673->enter($__internal_78bcd4634d8aeb10f1e247c0f24b98c6246dcf310281319daf72e2a191b00673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_78bcd4634d8aeb10f1e247c0f24b98c6246dcf310281319daf72e2a191b00673->leave($__internal_78bcd4634d8aeb10f1e247c0f24b98c6246dcf310281319daf72e2a191b00673_prof);

        
        $__internal_dd0c80445966e67cbad2b7c43f705315540cd8e5bdb74f5418af37986a5c1e7c->leave($__internal_dd0c80445966e67cbad2b7c43f705315540cd8e5bdb74f5418af37986a5c1e7c_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_448f279f51312810ee643613d8b8b9d954430d5515680b577e1574f197d4b384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448f279f51312810ee643613d8b8b9d954430d5515680b577e1574f197d4b384->enter($__internal_448f279f51312810ee643613d8b8b9d954430d5515680b577e1574f197d4b384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_0f3bc5c77269f8fcf5412f229b3814603ee01e024fa15a31b304894cb1f58bf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3bc5c77269f8fcf5412f229b3814603ee01e024fa15a31b304894cb1f58bf5->enter($__internal_0f3bc5c77269f8fcf5412f229b3814603ee01e024fa15a31b304894cb1f58bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_0f3bc5c77269f8fcf5412f229b3814603ee01e024fa15a31b304894cb1f58bf5->leave($__internal_0f3bc5c77269f8fcf5412f229b3814603ee01e024fa15a31b304894cb1f58bf5_prof);

        
        $__internal_448f279f51312810ee643613d8b8b9d954430d5515680b577e1574f197d4b384->leave($__internal_448f279f51312810ee643613d8b8b9d954430d5515680b577e1574f197d4b384_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_3aebd8dbce20cb1a6743984357855563a3ac0407cb1133e7d4f6eebabcd0ffee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aebd8dbce20cb1a6743984357855563a3ac0407cb1133e7d4f6eebabcd0ffee->enter($__internal_3aebd8dbce20cb1a6743984357855563a3ac0407cb1133e7d4f6eebabcd0ffee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_36340ee909831b62741214292ee8bc7ed0d5e177303bcee13c58dcb906f9e2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36340ee909831b62741214292ee8bc7ed0d5e177303bcee13c58dcb906f9e2b9->enter($__internal_36340ee909831b62741214292ee8bc7ed0d5e177303bcee13c58dcb906f9e2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_36340ee909831b62741214292ee8bc7ed0d5e177303bcee13c58dcb906f9e2b9->leave($__internal_36340ee909831b62741214292ee8bc7ed0d5e177303bcee13c58dcb906f9e2b9_prof);

        
        $__internal_3aebd8dbce20cb1a6743984357855563a3ac0407cb1133e7d4f6eebabcd0ffee->leave($__internal_3aebd8dbce20cb1a6743984357855563a3ac0407cb1133e7d4f6eebabcd0ffee_prof);

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
