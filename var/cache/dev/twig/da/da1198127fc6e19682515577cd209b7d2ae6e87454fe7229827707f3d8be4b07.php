<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_eb6b1e13e695b163c59be39c502bbd6c9385885a6b15fd135310d5c8ab397e28 extends Twig_Template
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
        $__internal_7d6f749eeb5d405dd150166c454f5656fe730acdc18bd063691f47dc624ace6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6f749eeb5d405dd150166c454f5656fe730acdc18bd063691f47dc624ace6c->enter($__internal_7d6f749eeb5d405dd150166c454f5656fe730acdc18bd063691f47dc624ace6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_e75c9b3b7eb27951620f18d4268d95a23e872dde62fdee7e8df6440783258e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75c9b3b7eb27951620f18d4268d95a23e872dde62fdee7e8df6440783258e98->enter($__internal_e75c9b3b7eb27951620f18d4268d95a23e872dde62fdee7e8df6440783258e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d6f749eeb5d405dd150166c454f5656fe730acdc18bd063691f47dc624ace6c->leave($__internal_7d6f749eeb5d405dd150166c454f5656fe730acdc18bd063691f47dc624ace6c_prof);

        
        $__internal_e75c9b3b7eb27951620f18d4268d95a23e872dde62fdee7e8df6440783258e98->leave($__internal_e75c9b3b7eb27951620f18d4268d95a23e872dde62fdee7e8df6440783258e98_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4704929d6930aa5a266a8bad22c5f28285c5f74119b5a37bfe487b1894158f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4704929d6930aa5a266a8bad22c5f28285c5f74119b5a37bfe487b1894158f8->enter($__internal_e4704929d6930aa5a266a8bad22c5f28285c5f74119b5a37bfe487b1894158f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_09689be33dd54406c92863b08d0d2bd6ed89593173ef78a93357a58aaa49a2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09689be33dd54406c92863b08d0d2bd6ed89593173ef78a93357a58aaa49a2b1->enter($__internal_09689be33dd54406c92863b08d0d2bd6ed89593173ef78a93357a58aaa49a2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_09689be33dd54406c92863b08d0d2bd6ed89593173ef78a93357a58aaa49a2b1->leave($__internal_09689be33dd54406c92863b08d0d2bd6ed89593173ef78a93357a58aaa49a2b1_prof);

        
        $__internal_e4704929d6930aa5a266a8bad22c5f28285c5f74119b5a37bfe487b1894158f8->leave($__internal_e4704929d6930aa5a266a8bad22c5f28285c5f74119b5a37bfe487b1894158f8_prof);

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
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
