<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_672b59d0635e17dd48753ee2348f50fb558c58328ed2b98d6c9f24ee783d2c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_07dc8ce3991a50a4b830c3465f2b1ffd7b8f28a1d2bf590b6532e525e1d89da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07dc8ce3991a50a4b830c3465f2b1ffd7b8f28a1d2bf590b6532e525e1d89da1->enter($__internal_07dc8ce3991a50a4b830c3465f2b1ffd7b8f28a1d2bf590b6532e525e1d89da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_603db487718e0191d861ef108550cee437141d56571ba4348e9611590c8c4cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603db487718e0191d861ef108550cee437141d56571ba4348e9611590c8c4cee->enter($__internal_603db487718e0191d861ef108550cee437141d56571ba4348e9611590c8c4cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07dc8ce3991a50a4b830c3465f2b1ffd7b8f28a1d2bf590b6532e525e1d89da1->leave($__internal_07dc8ce3991a50a4b830c3465f2b1ffd7b8f28a1d2bf590b6532e525e1d89da1_prof);

        
        $__internal_603db487718e0191d861ef108550cee437141d56571ba4348e9611590c8c4cee->leave($__internal_603db487718e0191d861ef108550cee437141d56571ba4348e9611590c8c4cee_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18cc21ff3e8e9e402e45713ec677ecd4c13fb7d8a2998243fd6b3739b0634d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18cc21ff3e8e9e402e45713ec677ecd4c13fb7d8a2998243fd6b3739b0634d09->enter($__internal_18cc21ff3e8e9e402e45713ec677ecd4c13fb7d8a2998243fd6b3739b0634d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_120db1fca2d3e6ecfedd9b2abcf39faca30c729ec55dc64aace0e35c8a0fb3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120db1fca2d3e6ecfedd9b2abcf39faca30c729ec55dc64aace0e35c8a0fb3d1->enter($__internal_120db1fca2d3e6ecfedd9b2abcf39faca30c729ec55dc64aace0e35c8a0fb3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_120db1fca2d3e6ecfedd9b2abcf39faca30c729ec55dc64aace0e35c8a0fb3d1->leave($__internal_120db1fca2d3e6ecfedd9b2abcf39faca30c729ec55dc64aace0e35c8a0fb3d1_prof);

        
        $__internal_18cc21ff3e8e9e402e45713ec677ecd4c13fb7d8a2998243fd6b3739b0634d09->leave($__internal_18cc21ff3e8e9e402e45713ec677ecd4c13fb7d8a2998243fd6b3739b0634d09_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
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
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
