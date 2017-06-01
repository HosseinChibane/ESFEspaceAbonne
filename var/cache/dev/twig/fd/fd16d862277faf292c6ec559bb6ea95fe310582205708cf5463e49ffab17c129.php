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
        $__internal_f992b6c80630bf753b0406e5e8a4edd335d362d6fb431ba17040bc65b33e32d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f992b6c80630bf753b0406e5e8a4edd335d362d6fb431ba17040bc65b33e32d3->enter($__internal_f992b6c80630bf753b0406e5e8a4edd335d362d6fb431ba17040bc65b33e32d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_bb82b294a3479e579857fbb538f7e90d9f6825377b2c00ea2d081dc80c6ceafa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb82b294a3479e579857fbb538f7e90d9f6825377b2c00ea2d081dc80c6ceafa->enter($__internal_bb82b294a3479e579857fbb538f7e90d9f6825377b2c00ea2d081dc80c6ceafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f992b6c80630bf753b0406e5e8a4edd335d362d6fb431ba17040bc65b33e32d3->leave($__internal_f992b6c80630bf753b0406e5e8a4edd335d362d6fb431ba17040bc65b33e32d3_prof);

        
        $__internal_bb82b294a3479e579857fbb538f7e90d9f6825377b2c00ea2d081dc80c6ceafa->leave($__internal_bb82b294a3479e579857fbb538f7e90d9f6825377b2c00ea2d081dc80c6ceafa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9bf3777ffac23dfeb31a5567fefa47e14c81de1760de5143a3804673250291e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9bf3777ffac23dfeb31a5567fefa47e14c81de1760de5143a3804673250291e->enter($__internal_b9bf3777ffac23dfeb31a5567fefa47e14c81de1760de5143a3804673250291e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b23d4a048c3adabaf50ee7d7522b8bc4d343154b943b6d8a4c1f516006e65214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23d4a048c3adabaf50ee7d7522b8bc4d343154b943b6d8a4c1f516006e65214->enter($__internal_b23d4a048c3adabaf50ee7d7522b8bc4d343154b943b6d8a4c1f516006e65214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b23d4a048c3adabaf50ee7d7522b8bc4d343154b943b6d8a4c1f516006e65214->leave($__internal_b23d4a048c3adabaf50ee7d7522b8bc4d343154b943b6d8a4c1f516006e65214_prof);

        
        $__internal_b9bf3777ffac23dfeb31a5567fefa47e14c81de1760de5143a3804673250291e->leave($__internal_b9bf3777ffac23dfeb31a5567fefa47e14c81de1760de5143a3804673250291e_prof);

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
