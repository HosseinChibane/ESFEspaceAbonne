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
        $__internal_c33fd14e891355bcfb8b52971171f51a543767140b3660447ca93df898256c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c33fd14e891355bcfb8b52971171f51a543767140b3660447ca93df898256c80->enter($__internal_c33fd14e891355bcfb8b52971171f51a543767140b3660447ca93df898256c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_32a578f71fbe6e7316e9191e3b3c44ee8660a547ff20c4d70600b5e3c80ea0cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a578f71fbe6e7316e9191e3b3c44ee8660a547ff20c4d70600b5e3c80ea0cc->enter($__internal_32a578f71fbe6e7316e9191e3b3c44ee8660a547ff20c4d70600b5e3c80ea0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c33fd14e891355bcfb8b52971171f51a543767140b3660447ca93df898256c80->leave($__internal_c33fd14e891355bcfb8b52971171f51a543767140b3660447ca93df898256c80_prof);

        
        $__internal_32a578f71fbe6e7316e9191e3b3c44ee8660a547ff20c4d70600b5e3c80ea0cc->leave($__internal_32a578f71fbe6e7316e9191e3b3c44ee8660a547ff20c4d70600b5e3c80ea0cc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ad3ff215e1d856a96409d4701415a0877241344d1695a2b2511934c956ba8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad3ff215e1d856a96409d4701415a0877241344d1695a2b2511934c956ba8df->enter($__internal_5ad3ff215e1d856a96409d4701415a0877241344d1695a2b2511934c956ba8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce5d847652f7b4fe42a855df76952cc23a3f91faf519fc4d20aa95979bf29d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5d847652f7b4fe42a855df76952cc23a3f91faf519fc4d20aa95979bf29d5d->enter($__internal_ce5d847652f7b4fe42a855df76952cc23a3f91faf519fc4d20aa95979bf29d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ce5d847652f7b4fe42a855df76952cc23a3f91faf519fc4d20aa95979bf29d5d->leave($__internal_ce5d847652f7b4fe42a855df76952cc23a3f91faf519fc4d20aa95979bf29d5d_prof);

        
        $__internal_5ad3ff215e1d856a96409d4701415a0877241344d1695a2b2511934c956ba8df->leave($__internal_5ad3ff215e1d856a96409d4701415a0877241344d1695a2b2511934c956ba8df_prof);

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
