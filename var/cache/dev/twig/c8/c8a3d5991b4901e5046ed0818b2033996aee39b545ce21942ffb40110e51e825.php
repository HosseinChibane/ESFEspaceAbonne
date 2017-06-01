<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_7971b56756737eaa0bc6c243ef58c9005f897dd107d82073645643dc25e6cdcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_935e1ec7e2a30b09a6c21de64df779fc2bf4a68892f1c2be49702b9c5494eb94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_935e1ec7e2a30b09a6c21de64df779fc2bf4a68892f1c2be49702b9c5494eb94->enter($__internal_935e1ec7e2a30b09a6c21de64df779fc2bf4a68892f1c2be49702b9c5494eb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_e816eaac42785449086dd723cb8035d5117d0136df67319b7c112eb085e05a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e816eaac42785449086dd723cb8035d5117d0136df67319b7c112eb085e05a02->enter($__internal_e816eaac42785449086dd723cb8035d5117d0136df67319b7c112eb085e05a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Page Heading/Breadcrumbs -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Création d'un compte
\t\t\t\t\t<small></small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">Inscription</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>

\t\t<!-- /.row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"jumbotron\">

\t\t\t\t\t<!-- BEGIN REGISTRATION FORM -->
\t\t\t\t\t<form action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\">

\t\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t\t\t";
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 28
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t";
            // line 29
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 32
        echo "
\t\t\t\t\t\t<h2 class=\"form-signin-heading\">Création d'un compte</h2>

\t\t\t\t\t\t<div id=\"fos_user_registration_form\">\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "nom", array()), 'label', array("label" => "Nom"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "nom", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "prenom", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Nom d'utilisateur"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 48
        echo "
\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Mot de passe"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Répéter le mot de  passe"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 59
        echo "\t\t\t\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 66
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t\t\t\t\t<!-- END REGISTRATION FORM -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.container -->

\t";
        
        $__internal_935e1ec7e2a30b09a6c21de64df779fc2bf4a68892f1c2be49702b9c5494eb94->leave($__internal_935e1ec7e2a30b09a6c21de64df779fc2bf4a68892f1c2be49702b9c5494eb94_prof);

        
        $__internal_e816eaac42785449086dd723cb8035d5117d0136df67319b7c112eb085e05a02->leave($__internal_e816eaac42785449086dd723cb8035d5117d0136df67319b7c112eb085e05a02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 66,  137 => 62,  130 => 59,  125 => 56,  121 => 55,  116 => 53,  112 => 52,  107 => 50,  103 => 49,  100 => 48,  95 => 44,  91 => 43,  86 => 41,  82 => 40,  77 => 38,  73 => 37,  66 => 32,  60 => 29,  57 => 28,  54 => 27,  49 => 24,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Page Heading/Breadcrumbs -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Création d'un compte
\t\t\t\t\t<small></small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">Inscription</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>

\t\t<!-- /.row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"jumbotron\">

\t\t\t\t\t<!-- BEGIN REGISTRATION FORM -->
\t\t\t\t\t<form action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\">

\t\t\t\t\t\t{# Les erreurs générales du formulaire. #}
\t\t\t\t\t\t{% if form_errors(form) %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t{{ form_errors(form) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<h2 class=\"form-signin-heading\">Création d'un compte</h2>

\t\t\t\t\t\t<div id=\"fos_user_registration_form\">\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t{{ form_label(form.physique.nom, 'Nom') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.physique.nom) }}

\t\t\t\t\t\t\t\t{{ form_label(form.physique.prenom, 'Prénom') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.physique.prenom) }}

\t\t\t\t\t\t\t\t{{ form_label(form.username, 'Nom d\\'utilisateur') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.username) }}

\t\t\t\t\t\t\t\t{#{{ form_label(form.physique.personne.courriel, 'Email') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.physique.personne.courriel) }}#}

\t\t\t\t\t\t\t\t{{ form_label(form.email, 'Email') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.email) }}

\t\t\t\t\t\t\t\t{{ form_label(form.plainPassword.first, 'Mot de passe') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.plainPassword.first) }}

\t\t\t\t\t\t\t\t{{ form_label(form.plainPassword.second, 'Répéter le mot de  passe') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.plainPassword.second) }}

\t\t\t\t\t\t\t\t{# Token CSRF #}
\t\t\t\t\t\t\t\t{{ form_widget(form._token) }}
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_end(form, {'render_rest': false}) }}
\t\t\t\t\t\t<!-- END REGISTRATION FORM -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.container -->

\t{#
\t<h1>Formulaire d'inscription</h1>

\t{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
\t{{ form_widget(form) }}
\t<div>
\t\t<input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
\t</div>
\t{{ form_end(form) }}
\t#}", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
