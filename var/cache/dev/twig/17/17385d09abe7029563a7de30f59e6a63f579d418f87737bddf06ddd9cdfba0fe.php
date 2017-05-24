<?php

/* :backend:sidebar.html.twig */
class __TwigTemplate_ffdb16ec04eef257bda84c8e6b98cf915ef814c8b01abdc875ba85d162090560 extends Twig_Template
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
        $__internal_0c0854fb729aa743f29e07846a6d150a6c8fd77049da928ce064a195da722d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0854fb729aa743f29e07846a6d150a6c8fd77049da928ce064a195da722d33->enter($__internal_0c0854fb729aa743f29e07846a6d150a6c8fd77049da928ce064a195da722d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_d8a1bdeb2b22133a17fbe916aa5b4abe93ecd5c763a5e08144c88246ff1a675d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a1bdeb2b22133a17fbe916aa5b4abe93ecd5c763a5e08144c88246ff1a675d->enter($__internal_d8a1bdeb2b22133a17fbe916aa5b4abe93ecd5c763a5e08144c88246ff1a675d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c0854fb729aa743f29e07846a6d150a6c8fd77049da928ce064a195da722d33->leave($__internal_0c0854fb729aa743f29e07846a6d150a6c8fd77049da928ce064a195da722d33_prof);

        
        $__internal_d8a1bdeb2b22133a17fbe916aa5b4abe93ecd5c763a5e08144c88246ff1a675d->leave($__internal_d8a1bdeb2b22133a17fbe916aa5b4abe93ecd5c763a5e08144c88246ff1a675d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1adffd4a0c9d6a7baf18bd5e4ab1bbb4932e4149d2a69e99a727064959162f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1adffd4a0c9d6a7baf18bd5e4ab1bbb4932e4149d2a69e99a727064959162f86->enter($__internal_1adffd4a0c9d6a7baf18bd5e4ab1bbb4932e4149d2a69e99a727064959162f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_808f5c9230dd414f96414b783d2cac6603e30a56db44d5812e966150972428e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808f5c9230dd414f96414b783d2cac6603e30a56db44d5812e966150972428e0->enter($__internal_808f5c9230dd414f96414b783d2cac6603e30a56db44d5812e966150972428e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_808f5c9230dd414f96414b783d2cac6603e30a56db44d5812e966150972428e0->leave($__internal_808f5c9230dd414f96414b783d2cac6603e30a56db44d5812e966150972428e0_prof);

        
        $__internal_1adffd4a0c9d6a7baf18bd5e4ab1bbb4932e4149d2a69e99a727064959162f86->leave($__internal_1adffd4a0c9d6a7baf18bd5e4ab1bbb4932e4149d2a69e99a727064959162f86_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_18f70ba1f8829eaa90e953ba35d1b2a313cdf17ee8c19c4caa452794054bd2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f70ba1f8829eaa90e953ba35d1b2a313cdf17ee8c19c4caa452794054bd2be->enter($__internal_18f70ba1f8829eaa90e953ba35d1b2a313cdf17ee8c19c4caa452794054bd2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_f1ab620235ceae790212cb430d9c04f28c4c6384e5f16acbbed8b13577d41b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ab620235ceae790212cb430d9c04f28c4c6384e5f16acbbed8b13577d41b5e->enter($__internal_f1ab620235ceae790212cb430d9c04f28c4c6384e5f16acbbed8b13577d41b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_f1ab620235ceae790212cb430d9c04f28c4c6384e5f16acbbed8b13577d41b5e->leave($__internal_f1ab620235ceae790212cb430d9c04f28c4c6384e5f16acbbed8b13577d41b5e_prof);

        
        $__internal_18f70ba1f8829eaa90e953ba35d1b2a313cdf17ee8c19c4caa452794054bd2be->leave($__internal_18f70ba1f8829eaa90e953ba35d1b2a313cdf17ee8c19c4caa452794054bd2be_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_0b3a04a2b8d7e10b742293dca6559c063904229e90d1d18be0c2be083086abb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3a04a2b8d7e10b742293dca6559c063904229e90d1d18be0c2be083086abb4->enter($__internal_0b3a04a2b8d7e10b742293dca6559c063904229e90d1d18be0c2be083086abb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_685ba558b2d17756d92128751a7ee1ab42275bdf41282ee217c3a08f6f144cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685ba558b2d17756d92128751a7ee1ab42275bdf41282ee217c3a08f6f144cc8->enter($__internal_685ba558b2d17756d92128751a7ee1ab42275bdf41282ee217c3a08f6f144cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_685ba558b2d17756d92128751a7ee1ab42275bdf41282ee217c3a08f6f144cc8->leave($__internal_685ba558b2d17756d92128751a7ee1ab42275bdf41282ee217c3a08f6f144cc8_prof);

        
        $__internal_0b3a04a2b8d7e10b742293dca6559c063904229e90d1d18be0c2be083086abb4->leave($__internal_0b3a04a2b8d7e10b742293dca6559c063904229e90d1d18be0c2be083086abb4_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_982b13db0de53726b00b6ff4cbaf928f14b0a3271435911a261a4001ddd1d0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982b13db0de53726b00b6ff4cbaf928f14b0a3271435911a261a4001ddd1d0f3->enter($__internal_982b13db0de53726b00b6ff4cbaf928f14b0a3271435911a261a4001ddd1d0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_33d1d9361c7f30cd338ea307bcaf06d1485bdfdd5c8deb4e1fb6f559c61239cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d1d9361c7f30cd338ea307bcaf06d1485bdfdd5c8deb4e1fb6f559c61239cf->enter($__internal_33d1d9361c7f30cd338ea307bcaf06d1485bdfdd5c8deb4e1fb6f559c61239cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_33d1d9361c7f30cd338ea307bcaf06d1485bdfdd5c8deb4e1fb6f559c61239cf->leave($__internal_33d1d9361c7f30cd338ea307bcaf06d1485bdfdd5c8deb4e1fb6f559c61239cf_prof);

        
        $__internal_982b13db0de53726b00b6ff4cbaf928f14b0a3271435911a261a4001ddd1d0f3->leave($__internal_982b13db0de53726b00b6ff4cbaf928f14b0a3271435911a261a4001ddd1d0f3_prof);

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
