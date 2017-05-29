<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4e45ec3581ae4645c1a35829c95ac9490ff4d77734490c2ba094e9e590d4f358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_888971875cd058f7c8ec5ad1f5bc9355f47f34d8a31dc8b518ee0f6d071b8b66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888971875cd058f7c8ec5ad1f5bc9355f47f34d8a31dc8b518ee0f6d071b8b66->enter($__internal_888971875cd058f7c8ec5ad1f5bc9355f47f34d8a31dc8b518ee0f6d071b8b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_4ab7920757d42467e50adc1c3b7c17b130951401faa55e8eb8016ba17b3e366c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab7920757d42467e50adc1c3b7c17b130951401faa55e8eb8016ba17b3e366c->enter($__internal_4ab7920757d42467e50adc1c3b7c17b130951401faa55e8eb8016ba17b3e366c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_888971875cd058f7c8ec5ad1f5bc9355f47f34d8a31dc8b518ee0f6d071b8b66->leave($__internal_888971875cd058f7c8ec5ad1f5bc9355f47f34d8a31dc8b518ee0f6d071b8b66_prof);

        
        $__internal_4ab7920757d42467e50adc1c3b7c17b130951401faa55e8eb8016ba17b3e366c->leave($__internal_4ab7920757d42467e50adc1c3b7c17b130951401faa55e8eb8016ba17b3e366c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_245da3404a06162b178bb54d215d967af9e901f586da6b22deb25bf3381dfc50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245da3404a06162b178bb54d215d967af9e901f586da6b22deb25bf3381dfc50->enter($__internal_245da3404a06162b178bb54d215d967af9e901f586da6b22deb25bf3381dfc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f8d14dea02ffb4a0f03214eb1e40fd5484f9157bca6196dc607d8f55041c23ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d14dea02ffb4a0f03214eb1e40fd5484f9157bca6196dc607d8f55041c23ee->enter($__internal_f8d14dea02ffb4a0f03214eb1e40fd5484f9157bca6196dc607d8f55041c23ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_f8d14dea02ffb4a0f03214eb1e40fd5484f9157bca6196dc607d8f55041c23ee->leave($__internal_f8d14dea02ffb4a0f03214eb1e40fd5484f9157bca6196dc607d8f55041c23ee_prof);

        
        $__internal_245da3404a06162b178bb54d215d967af9e901f586da6b22deb25bf3381dfc50->leave($__internal_245da3404a06162b178bb54d215d967af9e901f586da6b22deb25bf3381dfc50_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
