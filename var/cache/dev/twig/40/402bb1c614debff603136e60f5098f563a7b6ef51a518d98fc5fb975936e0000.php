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
        $__internal_1c573c432a43dcc86695ba55fc740c4e139c8b800b91c7f45d0d2a65ad16df29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c573c432a43dcc86695ba55fc740c4e139c8b800b91c7f45d0d2a65ad16df29->enter($__internal_1c573c432a43dcc86695ba55fc740c4e139c8b800b91c7f45d0d2a65ad16df29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_90150679e2f0d1df43c1425e78ce03314fb646786dae7c805d5b1103feff552b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90150679e2f0d1df43c1425e78ce03314fb646786dae7c805d5b1103feff552b->enter($__internal_90150679e2f0d1df43c1425e78ce03314fb646786dae7c805d5b1103feff552b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c573c432a43dcc86695ba55fc740c4e139c8b800b91c7f45d0d2a65ad16df29->leave($__internal_1c573c432a43dcc86695ba55fc740c4e139c8b800b91c7f45d0d2a65ad16df29_prof);

        
        $__internal_90150679e2f0d1df43c1425e78ce03314fb646786dae7c805d5b1103feff552b->leave($__internal_90150679e2f0d1df43c1425e78ce03314fb646786dae7c805d5b1103feff552b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_99afb97e5930f298de9c2e5f5469fcde3bd7dc73930938e899890a42c7f1206c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99afb97e5930f298de9c2e5f5469fcde3bd7dc73930938e899890a42c7f1206c->enter($__internal_99afb97e5930f298de9c2e5f5469fcde3bd7dc73930938e899890a42c7f1206c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60a0d041ac8fd8d9798d9ac12d467d3d41c31afe8b4fd848a1dfe4de62b85444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a0d041ac8fd8d9798d9ac12d467d3d41c31afe8b4fd848a1dfe4de62b85444->enter($__internal_60a0d041ac8fd8d9798d9ac12d467d3d41c31afe8b4fd848a1dfe4de62b85444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_60a0d041ac8fd8d9798d9ac12d467d3d41c31afe8b4fd848a1dfe4de62b85444->leave($__internal_60a0d041ac8fd8d9798d9ac12d467d3d41c31afe8b4fd848a1dfe4de62b85444_prof);

        
        $__internal_99afb97e5930f298de9c2e5f5469fcde3bd7dc73930938e899890a42c7f1206c->leave($__internal_99afb97e5930f298de9c2e5f5469fcde3bd7dc73930938e899890a42c7f1206c_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_88c1779d4d8787f20e758c515ea154660a89aa65f7030301e1b43b4ec314feac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88c1779d4d8787f20e758c515ea154660a89aa65f7030301e1b43b4ec314feac->enter($__internal_88c1779d4d8787f20e758c515ea154660a89aa65f7030301e1b43b4ec314feac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_3207e794174c87a57c0d12cf58b665976c215422fd4a84cb430ea24ffc47a403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3207e794174c87a57c0d12cf58b665976c215422fd4a84cb430ea24ffc47a403->enter($__internal_3207e794174c87a57c0d12cf58b665976c215422fd4a84cb430ea24ffc47a403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_3207e794174c87a57c0d12cf58b665976c215422fd4a84cb430ea24ffc47a403->leave($__internal_3207e794174c87a57c0d12cf58b665976c215422fd4a84cb430ea24ffc47a403_prof);

        
        $__internal_88c1779d4d8787f20e758c515ea154660a89aa65f7030301e1b43b4ec314feac->leave($__internal_88c1779d4d8787f20e758c515ea154660a89aa65f7030301e1b43b4ec314feac_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_537d7aa6c71048eb5676cf81f13c98823da18bdd076bf008ebe55b216bd9106c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537d7aa6c71048eb5676cf81f13c98823da18bdd076bf008ebe55b216bd9106c->enter($__internal_537d7aa6c71048eb5676cf81f13c98823da18bdd076bf008ebe55b216bd9106c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_63ef016ad88e3f6e76ddf7313b6180d20e6660882792636eb1b74b529f684eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ef016ad88e3f6e76ddf7313b6180d20e6660882792636eb1b74b529f684eda->enter($__internal_63ef016ad88e3f6e76ddf7313b6180d20e6660882792636eb1b74b529f684eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_63ef016ad88e3f6e76ddf7313b6180d20e6660882792636eb1b74b529f684eda->leave($__internal_63ef016ad88e3f6e76ddf7313b6180d20e6660882792636eb1b74b529f684eda_prof);

        
        $__internal_537d7aa6c71048eb5676cf81f13c98823da18bdd076bf008ebe55b216bd9106c->leave($__internal_537d7aa6c71048eb5676cf81f13c98823da18bdd076bf008ebe55b216bd9106c_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_d5df17f34ffb483bbbd80ce000a49d018e0f76dde41ac72b89e9154fde0d7c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5df17f34ffb483bbbd80ce000a49d018e0f76dde41ac72b89e9154fde0d7c77->enter($__internal_d5df17f34ffb483bbbd80ce000a49d018e0f76dde41ac72b89e9154fde0d7c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_b5e5c2f63b4d41d1d43643467398fa6089a30bca0bd22f6300de303b2a35f77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e5c2f63b4d41d1d43643467398fa6089a30bca0bd22f6300de303b2a35f77a->enter($__internal_b5e5c2f63b4d41d1d43643467398fa6089a30bca0bd22f6300de303b2a35f77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_b5e5c2f63b4d41d1d43643467398fa6089a30bca0bd22f6300de303b2a35f77a->leave($__internal_b5e5c2f63b4d41d1d43643467398fa6089a30bca0bd22f6300de303b2a35f77a_prof);

        
        $__internal_d5df17f34ffb483bbbd80ce000a49d018e0f76dde41ac72b89e9154fde0d7c77->leave($__internal_d5df17f34ffb483bbbd80ce000a49d018e0f76dde41ac72b89e9154fde0d7c77_prof);

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
