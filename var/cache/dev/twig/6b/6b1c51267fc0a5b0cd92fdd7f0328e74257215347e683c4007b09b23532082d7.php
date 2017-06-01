<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_3de024f863f3ddcf40e2525d44dfe45d45e5a2e251d7b3646319ee415cad46f9 extends Twig_Template
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
        $__internal_b7a98a04bc4be625e46664101cfc060bb54f782b8b20556789662e7668330bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a98a04bc4be625e46664101cfc060bb54f782b8b20556789662e7668330bdf->enter($__internal_b7a98a04bc4be625e46664101cfc060bb54f782b8b20556789662e7668330bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_0f5c21f6c7b12ac0fe107c1684c4a0d969ed33e5840bc9c188a5539db847d13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5c21f6c7b12ac0fe107c1684c4a0d969ed33e5840bc9c188a5539db847d13d->enter($__internal_0f5c21f6c7b12ac0fe107c1684c4a0d969ed33e5840bc9c188a5539db847d13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Page Heading/Breadcrumbs -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Espace Abonné
\t\t\t\t\t<small></small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">Profile</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>

\t\t<!-- /.row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"jumbotron\">

\t\t\t\t\t<div class=\"fos_user_user_show\">
\t\t\t\t\t\t<p>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_b7a98a04bc4be625e46664101cfc060bb54f782b8b20556789662e7668330bdf->leave($__internal_b7a98a04bc4be625e46664101cfc060bb54f782b8b20556789662e7668330bdf_prof);

        
        $__internal_0f5c21f6c7b12ac0fe107c1684c4a0d969ed33e5840bc9c188a5539db847d13d->leave($__internal_0f5c21f6c7b12ac0fe107c1684c4a0d969ed33e5840bc9c188a5539db847d13d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 26,  50 => 25,  25 => 2,);
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
\t\t\t\t<h1 class=\"page-header\">Espace Abonné
\t\t\t\t\t<small></small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">Profile</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>

\t\t<!-- /.row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"jumbotron\">

\t\t\t\t\t<div class=\"fos_user_user_show\">
\t\t\t\t\t\t<p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
\t\t\t\t\t\t<p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
\t\t\t\t\t</div>


\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
