<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_431bf00a3e7343f0a6ed8776cd20bc9276c599aef810e4bd061f0a9d8cd51d97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_e0e4ef9430e49f1225ccdeca8b3487d6a4a98a37b525718e03052d95f75ffe65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0e4ef9430e49f1225ccdeca8b3487d6a4a98a37b525718e03052d95f75ffe65->enter($__internal_e0e4ef9430e49f1225ccdeca8b3487d6a4a98a37b525718e03052d95f75ffe65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_73ca5f712fc48ebd800013167257ca045d26ed4f433fdfc22c0542545e634bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ca5f712fc48ebd800013167257ca045d26ed4f433fdfc22c0542545e634bc6->enter($__internal_73ca5f712fc48ebd800013167257ca045d26ed4f433fdfc22c0542545e634bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e4ef9430e49f1225ccdeca8b3487d6a4a98a37b525718e03052d95f75ffe65->leave($__internal_e0e4ef9430e49f1225ccdeca8b3487d6a4a98a37b525718e03052d95f75ffe65_prof);

        
        $__internal_73ca5f712fc48ebd800013167257ca045d26ed4f433fdfc22c0542545e634bc6->leave($__internal_73ca5f712fc48ebd800013167257ca045d26ed4f433fdfc22c0542545e634bc6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e998b32d425004a0dad5132f7844ed01d4bbb0b183fae3b8eef63b8582388cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e998b32d425004a0dad5132f7844ed01d4bbb0b183fae3b8eef63b8582388cb0->enter($__internal_e998b32d425004a0dad5132f7844ed01d4bbb0b183fae3b8eef63b8582388cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8fc47a4351d213abccf3607d59cf1e5184bf34787fb252783f296eb2dcb99c22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc47a4351d213abccf3607d59cf1e5184bf34787fb252783f296eb2dcb99c22->enter($__internal_8fc47a4351d213abccf3607d59cf1e5184bf34787fb252783f296eb2dcb99c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_8fc47a4351d213abccf3607d59cf1e5184bf34787fb252783f296eb2dcb99c22->leave($__internal_8fc47a4351d213abccf3607d59cf1e5184bf34787fb252783f296eb2dcb99c22_prof);

        
        $__internal_e998b32d425004a0dad5132f7844ed01d4bbb0b183fae3b8eef63b8582388cb0->leave($__internal_e998b32d425004a0dad5132f7844ed01d4bbb0b183fae3b8eef63b8582388cb0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
