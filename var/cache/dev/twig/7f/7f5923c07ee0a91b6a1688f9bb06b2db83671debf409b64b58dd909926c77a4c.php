<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_fc0c79a683535526839a76107cf454b6a778ffcbd7864afd6df50a9519c687c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8e87b9d221eb308d4e463ab0695bf255f7dde26bf3750a24475cf5be88f4164e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e87b9d221eb308d4e463ab0695bf255f7dde26bf3750a24475cf5be88f4164e->enter($__internal_8e87b9d221eb308d4e463ab0695bf255f7dde26bf3750a24475cf5be88f4164e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_4a4cd6d7aaad00e0a6352df0fc62815eaabfeb93fabd03f80bc078d126d07470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4cd6d7aaad00e0a6352df0fc62815eaabfeb93fabd03f80bc078d126d07470->enter($__internal_4a4cd6d7aaad00e0a6352df0fc62815eaabfeb93fabd03f80bc078d126d07470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e87b9d221eb308d4e463ab0695bf255f7dde26bf3750a24475cf5be88f4164e->leave($__internal_8e87b9d221eb308d4e463ab0695bf255f7dde26bf3750a24475cf5be88f4164e_prof);

        
        $__internal_4a4cd6d7aaad00e0a6352df0fc62815eaabfeb93fabd03f80bc078d126d07470->leave($__internal_4a4cd6d7aaad00e0a6352df0fc62815eaabfeb93fabd03f80bc078d126d07470_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eda2a8c254d8852bec8c974ae33809ec26b8a6cdec3a8a49df73d9bed662d02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda2a8c254d8852bec8c974ae33809ec26b8a6cdec3a8a49df73d9bed662d02a->enter($__internal_eda2a8c254d8852bec8c974ae33809ec26b8a6cdec3a8a49df73d9bed662d02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bfa8f3ea415e8186f6602048d7aa389ead984b5113a5610543e8a292b1f9efeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa8f3ea415e8186f6602048d7aa389ead984b5113a5610543e8a292b1f9efeb->enter($__internal_bfa8f3ea415e8186f6602048d7aa389ead984b5113a5610543e8a292b1f9efeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_bfa8f3ea415e8186f6602048d7aa389ead984b5113a5610543e8a292b1f9efeb->leave($__internal_bfa8f3ea415e8186f6602048d7aa389ead984b5113a5610543e8a292b1f9efeb_prof);

        
        $__internal_eda2a8c254d8852bec8c974ae33809ec26b8a6cdec3a8a49df73d9bed662d02a->leave($__internal_eda2a8c254d8852bec8c974ae33809ec26b8a6cdec3a8a49df73d9bed662d02a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
