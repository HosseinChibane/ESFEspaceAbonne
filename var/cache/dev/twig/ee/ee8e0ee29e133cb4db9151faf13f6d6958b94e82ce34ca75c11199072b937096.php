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
        $__internal_6683a4cad8a24965ad6eb78a58c3c5b1a0276cdb34c6a3bcbd75dc4863b6b9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6683a4cad8a24965ad6eb78a58c3c5b1a0276cdb34c6a3bcbd75dc4863b6b9a7->enter($__internal_6683a4cad8a24965ad6eb78a58c3c5b1a0276cdb34c6a3bcbd75dc4863b6b9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_005b27e3b4a8fa74ba939271deff7a8df5de3aa2162105664dd99b698f375854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005b27e3b4a8fa74ba939271deff7a8df5de3aa2162105664dd99b698f375854->enter($__internal_005b27e3b4a8fa74ba939271deff7a8df5de3aa2162105664dd99b698f375854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6683a4cad8a24965ad6eb78a58c3c5b1a0276cdb34c6a3bcbd75dc4863b6b9a7->leave($__internal_6683a4cad8a24965ad6eb78a58c3c5b1a0276cdb34c6a3bcbd75dc4863b6b9a7_prof);

        
        $__internal_005b27e3b4a8fa74ba939271deff7a8df5de3aa2162105664dd99b698f375854->leave($__internal_005b27e3b4a8fa74ba939271deff7a8df5de3aa2162105664dd99b698f375854_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_61dcffcbd23340453c56ef54e2d88bac6a1a6c4e1dcd79c057a181b7ec0ea04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dcffcbd23340453c56ef54e2d88bac6a1a6c4e1dcd79c057a181b7ec0ea04b->enter($__internal_61dcffcbd23340453c56ef54e2d88bac6a1a6c4e1dcd79c057a181b7ec0ea04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2e4fef8b709e9e0227c2f0f6dacd7d905059697d105c610260916fb4f3db1a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e4fef8b709e9e0227c2f0f6dacd7d905059697d105c610260916fb4f3db1a1->enter($__internal_b2e4fef8b709e9e0227c2f0f6dacd7d905059697d105c610260916fb4f3db1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b2e4fef8b709e9e0227c2f0f6dacd7d905059697d105c610260916fb4f3db1a1->leave($__internal_b2e4fef8b709e9e0227c2f0f6dacd7d905059697d105c610260916fb4f3db1a1_prof);

        
        $__internal_61dcffcbd23340453c56ef54e2d88bac6a1a6c4e1dcd79c057a181b7ec0ea04b->leave($__internal_61dcffcbd23340453c56ef54e2d88bac6a1a6c4e1dcd79c057a181b7ec0ea04b_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_fcc1258e73f0d9a188a9019a7ecabc2951313786fc2b736505ceadcbee4cb2aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcc1258e73f0d9a188a9019a7ecabc2951313786fc2b736505ceadcbee4cb2aa->enter($__internal_fcc1258e73f0d9a188a9019a7ecabc2951313786fc2b736505ceadcbee4cb2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_f8b8477b75d1fd74686347caa664724c58bda39316c92c976aed4fb26c754387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b8477b75d1fd74686347caa664724c58bda39316c92c976aed4fb26c754387->enter($__internal_f8b8477b75d1fd74686347caa664724c58bda39316c92c976aed4fb26c754387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_f8b8477b75d1fd74686347caa664724c58bda39316c92c976aed4fb26c754387->leave($__internal_f8b8477b75d1fd74686347caa664724c58bda39316c92c976aed4fb26c754387_prof);

        
        $__internal_fcc1258e73f0d9a188a9019a7ecabc2951313786fc2b736505ceadcbee4cb2aa->leave($__internal_fcc1258e73f0d9a188a9019a7ecabc2951313786fc2b736505ceadcbee4cb2aa_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b47001a78d3071d95ba0adfe2db528139caadacf109ae4ed18590bf2c66e9401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47001a78d3071d95ba0adfe2db528139caadacf109ae4ed18590bf2c66e9401->enter($__internal_b47001a78d3071d95ba0adfe2db528139caadacf109ae4ed18590bf2c66e9401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_bf10ac69e3378ca9c9abb3d70d546d649f0c43533b1a1caa1ed38ed26434cd36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf10ac69e3378ca9c9abb3d70d546d649f0c43533b1a1caa1ed38ed26434cd36->enter($__internal_bf10ac69e3378ca9c9abb3d70d546d649f0c43533b1a1caa1ed38ed26434cd36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_bf10ac69e3378ca9c9abb3d70d546d649f0c43533b1a1caa1ed38ed26434cd36->leave($__internal_bf10ac69e3378ca9c9abb3d70d546d649f0c43533b1a1caa1ed38ed26434cd36_prof);

        
        $__internal_b47001a78d3071d95ba0adfe2db528139caadacf109ae4ed18590bf2c66e9401->leave($__internal_b47001a78d3071d95ba0adfe2db528139caadacf109ae4ed18590bf2c66e9401_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_d0cb9fd22d5076be7f03d69b867262e5676976bfd66a650d6618a34875b29f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0cb9fd22d5076be7f03d69b867262e5676976bfd66a650d6618a34875b29f15->enter($__internal_d0cb9fd22d5076be7f03d69b867262e5676976bfd66a650d6618a34875b29f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_17c663cbe059a2f80362747c51fc99d97786e38695da640167fa51f195574d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c663cbe059a2f80362747c51fc99d97786e38695da640167fa51f195574d3d->enter($__internal_17c663cbe059a2f80362747c51fc99d97786e38695da640167fa51f195574d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_17c663cbe059a2f80362747c51fc99d97786e38695da640167fa51f195574d3d->leave($__internal_17c663cbe059a2f80362747c51fc99d97786e38695da640167fa51f195574d3d_prof);

        
        $__internal_d0cb9fd22d5076be7f03d69b867262e5676976bfd66a650d6618a34875b29f15->leave($__internal_d0cb9fd22d5076be7f03d69b867262e5676976bfd66a650d6618a34875b29f15_prof);

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
