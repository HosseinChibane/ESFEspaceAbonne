<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_c6d9620f1c2a5197a829d825a6b7649ffca738b7c2b2eed8c9053530844d6085 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_52c607741ad6636d57fc2160cc6332a39fed62e2736b8247a0bd602c8e9c2b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c607741ad6636d57fc2160cc6332a39fed62e2736b8247a0bd602c8e9c2b1c->enter($__internal_52c607741ad6636d57fc2160cc6332a39fed62e2736b8247a0bd602c8e9c2b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_5e790ebb82d13188de5f2d8dbb996452809eb469f5be6c6beae39670b60aef90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e790ebb82d13188de5f2d8dbb996452809eb469f5be6c6beae39670b60aef90->enter($__internal_5e790ebb82d13188de5f2d8dbb996452809eb469f5be6c6beae39670b60aef90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52c607741ad6636d57fc2160cc6332a39fed62e2736b8247a0bd602c8e9c2b1c->leave($__internal_52c607741ad6636d57fc2160cc6332a39fed62e2736b8247a0bd602c8e9c2b1c_prof);

        
        $__internal_5e790ebb82d13188de5f2d8dbb996452809eb469f5be6c6beae39670b60aef90->leave($__internal_5e790ebb82d13188de5f2d8dbb996452809eb469f5be6c6beae39670b60aef90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d11e00782a03590e66adb37a677df7d2f1ec34815d5f2682462fd7a7137291cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11e00782a03590e66adb37a677df7d2f1ec34815d5f2682462fd7a7137291cb->enter($__internal_d11e00782a03590e66adb37a677df7d2f1ec34815d5f2682462fd7a7137291cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_07a2afd1ed6fddc88840a8536c20130b73f2faff43335f7a034d8af08e5e2c7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a2afd1ed6fddc88840a8536c20130b73f2faff43335f7a034d8af08e5e2c7c->enter($__internal_07a2afd1ed6fddc88840a8536c20130b73f2faff43335f7a034d8af08e5e2c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_07a2afd1ed6fddc88840a8536c20130b73f2faff43335f7a034d8af08e5e2c7c->leave($__internal_07a2afd1ed6fddc88840a8536c20130b73f2faff43335f7a034d8af08e5e2c7c_prof);

        
        $__internal_d11e00782a03590e66adb37a677df7d2f1ec34815d5f2682462fd7a7137291cb->leave($__internal_d11e00782a03590e66adb37a677df7d2f1ec34815d5f2682462fd7a7137291cb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
