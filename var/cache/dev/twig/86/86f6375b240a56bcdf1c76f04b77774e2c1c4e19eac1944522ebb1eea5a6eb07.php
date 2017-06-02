<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_416fbccd4eddf24fb582e105e94319e664dab29c1539ed248a8f3949d07da149 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c0192b5087dcb3e028ed3504375ee68a507822cfc44150ec990e460d449011f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0192b5087dcb3e028ed3504375ee68a507822cfc44150ec990e460d449011f->enter($__internal_6c0192b5087dcb3e028ed3504375ee68a507822cfc44150ec990e460d449011f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_8f6d72be645eb0e43e0cf78a89732c3428ebfe417bef55d15cc267ac9cfec144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f6d72be645eb0e43e0cf78a89732c3428ebfe417bef55d15cc267ac9cfec144->enter($__internal_8f6d72be645eb0e43e0cf78a89732c3428ebfe417bef55d15cc267ac9cfec144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c0192b5087dcb3e028ed3504375ee68a507822cfc44150ec990e460d449011f->leave($__internal_6c0192b5087dcb3e028ed3504375ee68a507822cfc44150ec990e460d449011f_prof);

        
        $__internal_8f6d72be645eb0e43e0cf78a89732c3428ebfe417bef55d15cc267ac9cfec144->leave($__internal_8f6d72be645eb0e43e0cf78a89732c3428ebfe417bef55d15cc267ac9cfec144_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dda66d37b5d4bfd4b1a47cdf017978c547da1fb933ca6c037e0f04ade38a98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dda66d37b5d4bfd4b1a47cdf017978c547da1fb933ca6c037e0f04ade38a98c->enter($__internal_5dda66d37b5d4bfd4b1a47cdf017978c547da1fb933ca6c037e0f04ade38a98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_01240b9c43e1602ef9da43625137ed9a8c095afa5609c5032bd21bd4dcc2d029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01240b9c43e1602ef9da43625137ed9a8c095afa5609c5032bd21bd4dcc2d029->enter($__internal_01240b9c43e1602ef9da43625137ed9a8c095afa5609c5032bd21bd4dcc2d029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "\t\t<!-- Page Content -->
\t\t<div class=\"container\">
\t\t\t<!-- Page Heading/Breadcrumbs -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1 class=\"page-header\">Création d'un compte
\t\t\t\t\t\t<small></small>
\t\t\t\t\t</h1>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Mot de passe oublié</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 27
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.container -->
\t";
        
        $__internal_01240b9c43e1602ef9da43625137ed9a8c095afa5609c5032bd21bd4dcc2d029->leave($__internal_01240b9c43e1602ef9da43625137ed9a8c095afa5609c5032bd21bd4dcc2d029_prof);

        
        $__internal_5dda66d37b5d4bfd4b1a47cdf017978c547da1fb933ca6c037e0f04ade38a98c->leave($__internal_5dda66d37b5d4bfd4b1a47cdf017978c547da1fb933ca6c037e0f04ade38a98c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

\t{% block fos_user_content %}
\t\t<!-- Page Content -->
\t\t<div class=\"container\">
\t\t\t<!-- Page Heading/Breadcrumbs -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1 class=\"page-header\">Création d'un compte
\t\t\t\t\t\t<small></small>
\t\t\t\t\t</h1>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Mot de passe oublié</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.container -->
\t{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
