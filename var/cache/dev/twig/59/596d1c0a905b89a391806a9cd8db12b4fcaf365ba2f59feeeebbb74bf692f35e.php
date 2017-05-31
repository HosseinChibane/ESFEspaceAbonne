<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_10211c20825dbe7fc481b4965a9ce9b0d05759fa80bb1acd158f708b85643074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_9c618b0d2610f94c5ac4002ebecbd34392e56cc67165342d8acb9c393f687dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c618b0d2610f94c5ac4002ebecbd34392e56cc67165342d8acb9c393f687dbe->enter($__internal_9c618b0d2610f94c5ac4002ebecbd34392e56cc67165342d8acb9c393f687dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_ca5bb88d373ac978a5d8dca95d65bbbfc75097e640aa686441e9a1b00af0b613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5bb88d373ac978a5d8dca95d65bbbfc75097e640aa686441e9a1b00af0b613->enter($__internal_ca5bb88d373ac978a5d8dca95d65bbbfc75097e640aa686441e9a1b00af0b613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c618b0d2610f94c5ac4002ebecbd34392e56cc67165342d8acb9c393f687dbe->leave($__internal_9c618b0d2610f94c5ac4002ebecbd34392e56cc67165342d8acb9c393f687dbe_prof);

        
        $__internal_ca5bb88d373ac978a5d8dca95d65bbbfc75097e640aa686441e9a1b00af0b613->leave($__internal_ca5bb88d373ac978a5d8dca95d65bbbfc75097e640aa686441e9a1b00af0b613_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2e0dc2a4abeafe0ab80837b3e2dac6cb059a9d8468a11051b0b6c9f07307ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e0dc2a4abeafe0ab80837b3e2dac6cb059a9d8468a11051b0b6c9f07307ed3->enter($__internal_a2e0dc2a4abeafe0ab80837b3e2dac6cb059a9d8468a11051b0b6c9f07307ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_672a8dd65697d5db0766e64f4cb8e065499a949ca6a83ef6d11ba2445e9e2b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672a8dd65697d5db0766e64f4cb8e065499a949ca6a83ef6d11ba2445e9e2b04->enter($__internal_672a8dd65697d5db0766e64f4cb8e065499a949ca6a83ef6d11ba2445e9e2b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_672a8dd65697d5db0766e64f4cb8e065499a949ca6a83ef6d11ba2445e9e2b04->leave($__internal_672a8dd65697d5db0766e64f4cb8e065499a949ca6a83ef6d11ba2445e9e2b04_prof);

        
        $__internal_a2e0dc2a4abeafe0ab80837b3e2dac6cb059a9d8468a11051b0b6c9f07307ed3->leave($__internal_a2e0dc2a4abeafe0ab80837b3e2dac6cb059a9d8468a11051b0b6c9f07307ed3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
