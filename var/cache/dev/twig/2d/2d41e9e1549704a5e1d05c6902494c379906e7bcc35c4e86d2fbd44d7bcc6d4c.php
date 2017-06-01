<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9eac273453083f3e13c23c24f192f40bc9848348643f990e228b3eaaf0b9c0cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_afd3c86b36cab8d3d7db720e62e4a4f514c3938bae54a72f2563fee0c4710243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd3c86b36cab8d3d7db720e62e4a4f514c3938bae54a72f2563fee0c4710243->enter($__internal_afd3c86b36cab8d3d7db720e62e4a4f514c3938bae54a72f2563fee0c4710243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_bf94655578284a8e08b922327c8fce4697cff1ea78e952d9ff5553b9cb47d61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf94655578284a8e08b922327c8fce4697cff1ea78e952d9ff5553b9cb47d61f->enter($__internal_bf94655578284a8e08b922327c8fce4697cff1ea78e952d9ff5553b9cb47d61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afd3c86b36cab8d3d7db720e62e4a4f514c3938bae54a72f2563fee0c4710243->leave($__internal_afd3c86b36cab8d3d7db720e62e4a4f514c3938bae54a72f2563fee0c4710243_prof);

        
        $__internal_bf94655578284a8e08b922327c8fce4697cff1ea78e952d9ff5553b9cb47d61f->leave($__internal_bf94655578284a8e08b922327c8fce4697cff1ea78e952d9ff5553b9cb47d61f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85ce582c9343fe954ca2a589512ed4beaaeb6d1aa2ba9fe6bd8adb7f2f8397bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ce582c9343fe954ca2a589512ed4beaaeb6d1aa2ba9fe6bd8adb7f2f8397bb->enter($__internal_85ce582c9343fe954ca2a589512ed4beaaeb6d1aa2ba9fe6bd8adb7f2f8397bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e35107dddf1a991f533605b23624a7484bcf9a943a051a4ce107aca5c122359d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35107dddf1a991f533605b23624a7484bcf9a943a051a4ce107aca5c122359d->enter($__internal_e35107dddf1a991f533605b23624a7484bcf9a943a051a4ce107aca5c122359d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_e35107dddf1a991f533605b23624a7484bcf9a943a051a4ce107aca5c122359d->leave($__internal_e35107dddf1a991f533605b23624a7484bcf9a943a051a4ce107aca5c122359d_prof);

        
        $__internal_85ce582c9343fe954ca2a589512ed4beaaeb6d1aa2ba9fe6bd8adb7f2f8397bb->leave($__internal_85ce582c9343fe954ca2a589512ed4beaaeb6d1aa2ba9fe6bd8adb7f2f8397bb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
