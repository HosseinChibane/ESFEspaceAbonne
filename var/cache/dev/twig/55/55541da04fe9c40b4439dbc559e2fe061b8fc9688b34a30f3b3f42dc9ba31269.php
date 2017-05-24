<?php

/* :backend:sidebar.html.twig */
class __TwigTemplate_ad89628471fde4f26200c2875fb18a65b8a86ef7bfe965bf2415713cd72325f4 extends Twig_Template
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
        $__internal_4670ad5d3c1a9a251798d546d17e0f358c331623f29bc7fcb1d54dc89037a18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4670ad5d3c1a9a251798d546d17e0f358c331623f29bc7fcb1d54dc89037a18f->enter($__internal_4670ad5d3c1a9a251798d546d17e0f358c331623f29bc7fcb1d54dc89037a18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_37f2da7420a19abde227f7b0b78a490baaaadcf6f36ea4ab7b42ef51d0f4f3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f2da7420a19abde227f7b0b78a490baaaadcf6f36ea4ab7b42ef51d0f4f3ff->enter($__internal_37f2da7420a19abde227f7b0b78a490baaaadcf6f36ea4ab7b42ef51d0f4f3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4670ad5d3c1a9a251798d546d17e0f358c331623f29bc7fcb1d54dc89037a18f->leave($__internal_4670ad5d3c1a9a251798d546d17e0f358c331623f29bc7fcb1d54dc89037a18f_prof);

        
        $__internal_37f2da7420a19abde227f7b0b78a490baaaadcf6f36ea4ab7b42ef51d0f4f3ff->leave($__internal_37f2da7420a19abde227f7b0b78a490baaaadcf6f36ea4ab7b42ef51d0f4f3ff_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39ebdced60fc52e45794b58c5d1aaaaf5483f0fbe41ef7d0c20f5060f5fdad58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ebdced60fc52e45794b58c5d1aaaaf5483f0fbe41ef7d0c20f5060f5fdad58->enter($__internal_39ebdced60fc52e45794b58c5d1aaaaf5483f0fbe41ef7d0c20f5060f5fdad58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d81238336b8122463b97ccf282a00116b0b4726a9d01e9e5af94121d9742d401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81238336b8122463b97ccf282a00116b0b4726a9d01e9e5af94121d9742d401->enter($__internal_d81238336b8122463b97ccf282a00116b0b4726a9d01e9e5af94121d9742d401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d81238336b8122463b97ccf282a00116b0b4726a9d01e9e5af94121d9742d401->leave($__internal_d81238336b8122463b97ccf282a00116b0b4726a9d01e9e5af94121d9742d401_prof);

        
        $__internal_39ebdced60fc52e45794b58c5d1aaaaf5483f0fbe41ef7d0c20f5060f5fdad58->leave($__internal_39ebdced60fc52e45794b58c5d1aaaaf5483f0fbe41ef7d0c20f5060f5fdad58_prof);

    }

    // line 9
    public function block_Body($context, array $blocks = array())
    {
        $__internal_534002a26dcbfc438a9b938e4764f301cd395a76d76996f41a9d7becced8beba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534002a26dcbfc438a9b938e4764f301cd395a76d76996f41a9d7becced8beba->enter($__internal_534002a26dcbfc438a9b938e4764f301cd395a76d76996f41a9d7becced8beba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

        $__internal_f590c13dc633ddfea93008f5c417e916d6e9e1a82747bc642b9d10c863553a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f590c13dc633ddfea93008f5c417e916d6e9e1a82747bc642b9d10c863553a37->enter($__internal_f590c13dc633ddfea93008f5c417e916d6e9e1a82747bc642b9d10c863553a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Body"));

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
        
        $__internal_f590c13dc633ddfea93008f5c417e916d6e9e1a82747bc642b9d10c863553a37->leave($__internal_f590c13dc633ddfea93008f5c417e916d6e9e1a82747bc642b9d10c863553a37_prof);

        
        $__internal_534002a26dcbfc438a9b938e4764f301cd395a76d76996f41a9d7becced8beba->leave($__internal_534002a26dcbfc438a9b938e4764f301cd395a76d76996f41a9d7becced8beba_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_411cf1afa3564f0e2d06bdfc6449fe3f2c72ccd30f7b7c6cdaf6db1039615b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411cf1afa3564f0e2d06bdfc6449fe3f2c72ccd30f7b7c6cdaf6db1039615b1d->enter($__internal_411cf1afa3564f0e2d06bdfc6449fe3f2c72ccd30f7b7c6cdaf6db1039615b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_914b754d7c546ec38699d8947a02faeda024bdc9d1d61ace95a64d26c6687216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914b754d7c546ec38699d8947a02faeda024bdc9d1d61ace95a64d26c6687216->enter($__internal_914b754d7c546ec38699d8947a02faeda024bdc9d1d61ace95a64d26c6687216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_914b754d7c546ec38699d8947a02faeda024bdc9d1d61ace95a64d26c6687216->leave($__internal_914b754d7c546ec38699d8947a02faeda024bdc9d1d61ace95a64d26c6687216_prof);

        
        $__internal_411cf1afa3564f0e2d06bdfc6449fe3f2c72ccd30f7b7c6cdaf6db1039615b1d->leave($__internal_411cf1afa3564f0e2d06bdfc6449fe3f2c72ccd30f7b7c6cdaf6db1039615b1d_prof);

    }

    // line 62
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1024456b0cf61ca6fcab1dbd20fd9106db29f599fdc6a1a7a537aa231c929891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1024456b0cf61ca6fcab1dbd20fd9106db29f599fdc6a1a7a537aa231c929891->enter($__internal_1024456b0cf61ca6fcab1dbd20fd9106db29f599fdc6a1a7a537aa231c929891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d4458f018d1072f2011de0d35c0dca91befc9c22322a647ac1142ea30110b555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4458f018d1072f2011de0d35c0dca91befc9c22322a647ac1142ea30110b555->enter($__internal_d4458f018d1072f2011de0d35c0dca91befc9c22322a647ac1142ea30110b555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

                ";
        
        $__internal_d4458f018d1072f2011de0d35c0dca91befc9c22322a647ac1142ea30110b555->leave($__internal_d4458f018d1072f2011de0d35c0dca91befc9c22322a647ac1142ea30110b555_prof);

        
        $__internal_1024456b0cf61ca6fcab1dbd20fd9106db29f599fdc6a1a7a537aa231c929891->leave($__internal_1024456b0cf61ca6fcab1dbd20fd9106db29f599fdc6a1a7a537aa231c929891_prof);

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
