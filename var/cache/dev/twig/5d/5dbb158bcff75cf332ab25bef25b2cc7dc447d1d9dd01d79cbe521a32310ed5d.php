<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_9b7f382caf7efa41e29abff6fb8ac657e199abbade0dacd8e2aa4e6bdfd38b71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_847d03f9fb422479418943ebd745668394e52b52ef86b4c6ae6e481684fce297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847d03f9fb422479418943ebd745668394e52b52ef86b4c6ae6e481684fce297->enter($__internal_847d03f9fb422479418943ebd745668394e52b52ef86b4c6ae6e481684fce297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_fcf9dc3d97952baf16f03caaccb34a7813c3e30cf235296f25fa8445afca895a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf9dc3d97952baf16f03caaccb34a7813c3e30cf235296f25fa8445afca895a->enter($__internal_fcf9dc3d97952baf16f03caaccb34a7813c3e30cf235296f25fa8445afca895a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_847d03f9fb422479418943ebd745668394e52b52ef86b4c6ae6e481684fce297->leave($__internal_847d03f9fb422479418943ebd745668394e52b52ef86b4c6ae6e481684fce297_prof);

        
        $__internal_fcf9dc3d97952baf16f03caaccb34a7813c3e30cf235296f25fa8445afca895a->leave($__internal_fcf9dc3d97952baf16f03caaccb34a7813c3e30cf235296f25fa8445afca895a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9906ab1c2fa64a6e0cea84b1bc21b83c4b270a815549f572c6a0ce3fa3e33fed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9906ab1c2fa64a6e0cea84b1bc21b83c4b270a815549f572c6a0ce3fa3e33fed->enter($__internal_9906ab1c2fa64a6e0cea84b1bc21b83c4b270a815549f572c6a0ce3fa3e33fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_adac065d43d5f9bff21113ebe2d575c073072dbf9161aa7ae342614afdbbc0d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adac065d43d5f9bff21113ebe2d575c073072dbf9161aa7ae342614afdbbc0d9->enter($__internal_adac065d43d5f9bff21113ebe2d575c073072dbf9161aa7ae342614afdbbc0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_adac065d43d5f9bff21113ebe2d575c073072dbf9161aa7ae342614afdbbc0d9->leave($__internal_adac065d43d5f9bff21113ebe2d575c073072dbf9161aa7ae342614afdbbc0d9_prof);

        
        $__internal_9906ab1c2fa64a6e0cea84b1bc21b83c4b270a815549f572c6a0ce3fa3e33fed->leave($__internal_9906ab1c2fa64a6e0cea84b1bc21b83c4b270a815549f572c6a0ce3fa3e33fed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
