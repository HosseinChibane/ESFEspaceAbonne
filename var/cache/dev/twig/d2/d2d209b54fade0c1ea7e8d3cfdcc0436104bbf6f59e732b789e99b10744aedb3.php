<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_00b18f834011d3fee3ac830b20d384d5183add7c5f1069b5f53a5174a3182eb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_9dd802ba682386032391203986e11123ff0cea7af5363763ae59111030cbaeda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd802ba682386032391203986e11123ff0cea7af5363763ae59111030cbaeda->enter($__internal_9dd802ba682386032391203986e11123ff0cea7af5363763ae59111030cbaeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_cffcbd78d6033023f6f5b97e460cecb133d52d8dec7f97cd3b0278bec2ed99aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffcbd78d6033023f6f5b97e460cecb133d52d8dec7f97cd3b0278bec2ed99aa->enter($__internal_cffcbd78d6033023f6f5b97e460cecb133d52d8dec7f97cd3b0278bec2ed99aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dd802ba682386032391203986e11123ff0cea7af5363763ae59111030cbaeda->leave($__internal_9dd802ba682386032391203986e11123ff0cea7af5363763ae59111030cbaeda_prof);

        
        $__internal_cffcbd78d6033023f6f5b97e460cecb133d52d8dec7f97cd3b0278bec2ed99aa->leave($__internal_cffcbd78d6033023f6f5b97e460cecb133d52d8dec7f97cd3b0278bec2ed99aa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0c97e9c507aac03476d3397762bdc3a4b2c212c1e7c9cd6cd92d25e3f1b3823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0c97e9c507aac03476d3397762bdc3a4b2c212c1e7c9cd6cd92d25e3f1b3823->enter($__internal_f0c97e9c507aac03476d3397762bdc3a4b2c212c1e7c9cd6cd92d25e3f1b3823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e72f3bc5602aa668e169aea5bdeaac807c5b4e7ff60ddb88cca783f938ac07e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72f3bc5602aa668e169aea5bdeaac807c5b4e7ff60ddb88cca783f938ac07e1->enter($__internal_e72f3bc5602aa668e169aea5bdeaac807c5b4e7ff60ddb88cca783f938ac07e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e72f3bc5602aa668e169aea5bdeaac807c5b4e7ff60ddb88cca783f938ac07e1->leave($__internal_e72f3bc5602aa668e169aea5bdeaac807c5b4e7ff60ddb88cca783f938ac07e1_prof);

        
        $__internal_f0c97e9c507aac03476d3397762bdc3a4b2c212c1e7c9cd6cd92d25e3f1b3823->leave($__internal_f0c97e9c507aac03476d3397762bdc3a4b2c212c1e7c9cd6cd92d25e3f1b3823_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
