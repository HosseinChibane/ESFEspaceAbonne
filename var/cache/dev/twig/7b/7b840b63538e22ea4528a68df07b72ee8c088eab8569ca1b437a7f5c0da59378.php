<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_de697eef40675d6be258a998bba48f274e00cddd38cc7bb49c0fefdeedb46cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_740557d3f7b7000b1125031d747fea12501ff5524ab7f797d4c37b517ef6b1ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740557d3f7b7000b1125031d747fea12501ff5524ab7f797d4c37b517ef6b1ed->enter($__internal_740557d3f7b7000b1125031d747fea12501ff5524ab7f797d4c37b517ef6b1ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_ed5958c9d4e88f7453d61ac74c39a628176900b40690b194cf511082bdbf8503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5958c9d4e88f7453d61ac74c39a628176900b40690b194cf511082bdbf8503->enter($__internal_ed5958c9d4e88f7453d61ac74c39a628176900b40690b194cf511082bdbf8503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_740557d3f7b7000b1125031d747fea12501ff5524ab7f797d4c37b517ef6b1ed->leave($__internal_740557d3f7b7000b1125031d747fea12501ff5524ab7f797d4c37b517ef6b1ed_prof);

        
        $__internal_ed5958c9d4e88f7453d61ac74c39a628176900b40690b194cf511082bdbf8503->leave($__internal_ed5958c9d4e88f7453d61ac74c39a628176900b40690b194cf511082bdbf8503_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f66f57101569b790592b45196590aa82835d57290549aed7802aa8f0b3ee848f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66f57101569b790592b45196590aa82835d57290549aed7802aa8f0b3ee848f->enter($__internal_f66f57101569b790592b45196590aa82835d57290549aed7802aa8f0b3ee848f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_59edc6a6b69b710b8cd392b1266f12fc4ae24951a91a2c00f7e9da173ba0c7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59edc6a6b69b710b8cd392b1266f12fc4ae24951a91a2c00f7e9da173ba0c7ba->enter($__internal_59edc6a6b69b710b8cd392b1266f12fc4ae24951a91a2c00f7e9da173ba0c7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_59edc6a6b69b710b8cd392b1266f12fc4ae24951a91a2c00f7e9da173ba0c7ba->leave($__internal_59edc6a6b69b710b8cd392b1266f12fc4ae24951a91a2c00f7e9da173ba0c7ba_prof);

        
        $__internal_f66f57101569b790592b45196590aa82835d57290549aed7802aa8f0b3ee848f->leave($__internal_f66f57101569b790592b45196590aa82835d57290549aed7802aa8f0b3ee848f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
