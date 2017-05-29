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
        $__internal_33ea1a4bc381aa527adac903b14c28f34576feff4914ba3d6e99dbb992068ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ea1a4bc381aa527adac903b14c28f34576feff4914ba3d6e99dbb992068ea0->enter($__internal_33ea1a4bc381aa527adac903b14c28f34576feff4914ba3d6e99dbb992068ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_1cc6581cb2427f3859f2f3ed0a2ba8c33dfd8ca1d14f6c3fa60087a2aaa052dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cc6581cb2427f3859f2f3ed0a2ba8c33dfd8ca1d14f6c3fa60087a2aaa052dc->enter($__internal_1cc6581cb2427f3859f2f3ed0a2ba8c33dfd8ca1d14f6c3fa60087a2aaa052dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33ea1a4bc381aa527adac903b14c28f34576feff4914ba3d6e99dbb992068ea0->leave($__internal_33ea1a4bc381aa527adac903b14c28f34576feff4914ba3d6e99dbb992068ea0_prof);

        
        $__internal_1cc6581cb2427f3859f2f3ed0a2ba8c33dfd8ca1d14f6c3fa60087a2aaa052dc->leave($__internal_1cc6581cb2427f3859f2f3ed0a2ba8c33dfd8ca1d14f6c3fa60087a2aaa052dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e623216ae52199d1cbb5bba1f240bd262f1d7dc60097e1e52b79ab94cbe4c777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e623216ae52199d1cbb5bba1f240bd262f1d7dc60097e1e52b79ab94cbe4c777->enter($__internal_e623216ae52199d1cbb5bba1f240bd262f1d7dc60097e1e52b79ab94cbe4c777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b785b0977fb4e54621546d9349b0c49791d0e73648777c669603863384d7c1da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b785b0977fb4e54621546d9349b0c49791d0e73648777c669603863384d7c1da->enter($__internal_b785b0977fb4e54621546d9349b0c49791d0e73648777c669603863384d7c1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b785b0977fb4e54621546d9349b0c49791d0e73648777c669603863384d7c1da->leave($__internal_b785b0977fb4e54621546d9349b0c49791d0e73648777c669603863384d7c1da_prof);

        
        $__internal_e623216ae52199d1cbb5bba1f240bd262f1d7dc60097e1e52b79ab94cbe4c777->leave($__internal_e623216ae52199d1cbb5bba1f240bd262f1d7dc60097e1e52b79ab94cbe4c777_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_aca8b76048335cd88cf709be1ddf0bbd0c46445b446e962760e6ab485db3669d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca8b76048335cd88cf709be1ddf0bbd0c46445b446e962760e6ab485db3669d->enter($__internal_aca8b76048335cd88cf709be1ddf0bbd0c46445b446e962760e6ab485db3669d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_6726b8fed8782fc8d9579f90e0e491c87a94c67a691d48e7445c27c2112184d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6726b8fed8782fc8d9579f90e0e491c87a94c67a691d48e7445c27c2112184d2->enter($__internal_6726b8fed8782fc8d9579f90e0e491c87a94c67a691d48e7445c27c2112184d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_6726b8fed8782fc8d9579f90e0e491c87a94c67a691d48e7445c27c2112184d2->leave($__internal_6726b8fed8782fc8d9579f90e0e491c87a94c67a691d48e7445c27c2112184d2_prof);

        
        $__internal_aca8b76048335cd88cf709be1ddf0bbd0c46445b446e962760e6ab485db3669d->leave($__internal_aca8b76048335cd88cf709be1ddf0bbd0c46445b446e962760e6ab485db3669d_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c97b436fc7c044d238e82e4261e357253b7a55b21d486f0f0e26f24a8bb2fdc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97b436fc7c044d238e82e4261e357253b7a55b21d486f0f0e26f24a8bb2fdc5->enter($__internal_c97b436fc7c044d238e82e4261e357253b7a55b21d486f0f0e26f24a8bb2fdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_156511ac042b9491a4ddfdacaf53c20a2d14a4a99ba8252066bae61089564441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_156511ac042b9491a4ddfdacaf53c20a2d14a4a99ba8252066bae61089564441->enter($__internal_156511ac042b9491a4ddfdacaf53c20a2d14a4a99ba8252066bae61089564441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_156511ac042b9491a4ddfdacaf53c20a2d14a4a99ba8252066bae61089564441->leave($__internal_156511ac042b9491a4ddfdacaf53c20a2d14a4a99ba8252066bae61089564441_prof);

        
        $__internal_c97b436fc7c044d238e82e4261e357253b7a55b21d486f0f0e26f24a8bb2fdc5->leave($__internal_c97b436fc7c044d238e82e4261e357253b7a55b21d486f0f0e26f24a8bb2fdc5_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_aed13baed64af8f5d40c40082f41cdd5d2c104e0b3a48c58af7ebc5d425870dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed13baed64af8f5d40c40082f41cdd5d2c104e0b3a48c58af7ebc5d425870dd->enter($__internal_aed13baed64af8f5d40c40082f41cdd5d2c104e0b3a48c58af7ebc5d425870dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_2f2eba386c9a4d8558490c3c841d6920ae05665a9862e3449954bc4c89e4a620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2eba386c9a4d8558490c3c841d6920ae05665a9862e3449954bc4c89e4a620->enter($__internal_2f2eba386c9a4d8558490c3c841d6920ae05665a9862e3449954bc4c89e4a620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_2f2eba386c9a4d8558490c3c841d6920ae05665a9862e3449954bc4c89e4a620->leave($__internal_2f2eba386c9a4d8558490c3c841d6920ae05665a9862e3449954bc4c89e4a620_prof);

        
        $__internal_aed13baed64af8f5d40c40082f41cdd5d2c104e0b3a48c58af7ebc5d425870dd->leave($__internal_aed13baed64af8f5d40c40082f41cdd5d2c104e0b3a48c58af7ebc5d425870dd_prof);

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
