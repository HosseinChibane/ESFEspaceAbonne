<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7a448448cc83b4869efe12d9db35d8153d498007bdff5de72b40ccd40ddcb708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_0d8faef2e5364980077e15c0de1bcbcfce4b9f4f2f9c551c44ac7fe9d7a6a7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d8faef2e5364980077e15c0de1bcbcfce4b9f4f2f9c551c44ac7fe9d7a6a7ea->enter($__internal_0d8faef2e5364980077e15c0de1bcbcfce4b9f4f2f9c551c44ac7fe9d7a6a7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_39194a67b4095cab9976906f43bbcf177bf135c9755ddc26e94a5e22eac4e1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39194a67b4095cab9976906f43bbcf177bf135c9755ddc26e94a5e22eac4e1ba->enter($__internal_39194a67b4095cab9976906f43bbcf177bf135c9755ddc26e94a5e22eac4e1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d8faef2e5364980077e15c0de1bcbcfce4b9f4f2f9c551c44ac7fe9d7a6a7ea->leave($__internal_0d8faef2e5364980077e15c0de1bcbcfce4b9f4f2f9c551c44ac7fe9d7a6a7ea_prof);

        
        $__internal_39194a67b4095cab9976906f43bbcf177bf135c9755ddc26e94a5e22eac4e1ba->leave($__internal_39194a67b4095cab9976906f43bbcf177bf135c9755ddc26e94a5e22eac4e1ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20c8aebb139b5a14406c29d5e7f7a4e05aac9b512435181768b36a4c87323648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c8aebb139b5a14406c29d5e7f7a4e05aac9b512435181768b36a4c87323648->enter($__internal_20c8aebb139b5a14406c29d5e7f7a4e05aac9b512435181768b36a4c87323648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6569ff8e6f1718a62eea23cfbe87cd15323e03a9696e829e349a19f6b25848b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6569ff8e6f1718a62eea23cfbe87cd15323e03a9696e829e349a19f6b25848b1->enter($__internal_6569ff8e6f1718a62eea23cfbe87cd15323e03a9696e829e349a19f6b25848b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_6569ff8e6f1718a62eea23cfbe87cd15323e03a9696e829e349a19f6b25848b1->leave($__internal_6569ff8e6f1718a62eea23cfbe87cd15323e03a9696e829e349a19f6b25848b1_prof);

        
        $__internal_20c8aebb139b5a14406c29d5e7f7a4e05aac9b512435181768b36a4c87323648->leave($__internal_20c8aebb139b5a14406c29d5e7f7a4e05aac9b512435181768b36a4c87323648_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
