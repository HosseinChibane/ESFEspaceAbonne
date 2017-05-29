<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_71dde197374c077d24b3c4bf0f66ccfe129e0584c27da7e2029100a2199f928b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_5d1df3bd550299ed60ef17e0b8c0b6d4f88a70b4c554835dc0c0753dd6b4b08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1df3bd550299ed60ef17e0b8c0b6d4f88a70b4c554835dc0c0753dd6b4b08b->enter($__internal_5d1df3bd550299ed60ef17e0b8c0b6d4f88a70b4c554835dc0c0753dd6b4b08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_2dcda9c1343954e3a923373cbc5c9629f510dbacfb31049050ecafd7b0fa66a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcda9c1343954e3a923373cbc5c9629f510dbacfb31049050ecafd7b0fa66a6->enter($__internal_2dcda9c1343954e3a923373cbc5c9629f510dbacfb31049050ecafd7b0fa66a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d1df3bd550299ed60ef17e0b8c0b6d4f88a70b4c554835dc0c0753dd6b4b08b->leave($__internal_5d1df3bd550299ed60ef17e0b8c0b6d4f88a70b4c554835dc0c0753dd6b4b08b_prof);

        
        $__internal_2dcda9c1343954e3a923373cbc5c9629f510dbacfb31049050ecafd7b0fa66a6->leave($__internal_2dcda9c1343954e3a923373cbc5c9629f510dbacfb31049050ecafd7b0fa66a6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd11b685f0edca957888fda387b13febb1533d63edb85912e1b080defe8ed3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd11b685f0edca957888fda387b13febb1533d63edb85912e1b080defe8ed3ea->enter($__internal_bd11b685f0edca957888fda387b13febb1533d63edb85912e1b080defe8ed3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1c6c3a1cc85fd84a4ac70f78bb84b0eb87ca8b421ee4d93773703ab8870b7535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6c3a1cc85fd84a4ac70f78bb84b0eb87ca8b421ee4d93773703ab8870b7535->enter($__internal_1c6c3a1cc85fd84a4ac70f78bb84b0eb87ca8b421ee4d93773703ab8870b7535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1c6c3a1cc85fd84a4ac70f78bb84b0eb87ca8b421ee4d93773703ab8870b7535->leave($__internal_1c6c3a1cc85fd84a4ac70f78bb84b0eb87ca8b421ee4d93773703ab8870b7535_prof);

        
        $__internal_bd11b685f0edca957888fda387b13febb1533d63edb85912e1b080defe8ed3ea->leave($__internal_bd11b685f0edca957888fda387b13febb1533d63edb85912e1b080defe8ed3ea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
