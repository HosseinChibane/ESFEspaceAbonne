<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_bdb560ca71e435e0b88cfe7a690e5faa5deff9e7e12608602edb4419ea96fc92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_8c192e65ca82d12d8ee19140ad62014c445df84d4188a1503b1a3f0f949490fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c192e65ca82d12d8ee19140ad62014c445df84d4188a1503b1a3f0f949490fb->enter($__internal_8c192e65ca82d12d8ee19140ad62014c445df84d4188a1503b1a3f0f949490fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_661f6130a45ba7373343aabcf8c9f033da8902a3af0f70c5f12afd1ded89bb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661f6130a45ba7373343aabcf8c9f033da8902a3af0f70c5f12afd1ded89bb83->enter($__internal_661f6130a45ba7373343aabcf8c9f033da8902a3af0f70c5f12afd1ded89bb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c192e65ca82d12d8ee19140ad62014c445df84d4188a1503b1a3f0f949490fb->leave($__internal_8c192e65ca82d12d8ee19140ad62014c445df84d4188a1503b1a3f0f949490fb_prof);

        
        $__internal_661f6130a45ba7373343aabcf8c9f033da8902a3af0f70c5f12afd1ded89bb83->leave($__internal_661f6130a45ba7373343aabcf8c9f033da8902a3af0f70c5f12afd1ded89bb83_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c46225f8552cdf97951568e8a239a4eb91a2979c3e833c8b18fd28def19e3383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46225f8552cdf97951568e8a239a4eb91a2979c3e833c8b18fd28def19e3383->enter($__internal_c46225f8552cdf97951568e8a239a4eb91a2979c3e833c8b18fd28def19e3383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1396c61c9a5bf2f5770a293933fe75b8eacb1ffd70e23b367675686744119407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1396c61c9a5bf2f5770a293933fe75b8eacb1ffd70e23b367675686744119407->enter($__internal_1396c61c9a5bf2f5770a293933fe75b8eacb1ffd70e23b367675686744119407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1396c61c9a5bf2f5770a293933fe75b8eacb1ffd70e23b367675686744119407->leave($__internal_1396c61c9a5bf2f5770a293933fe75b8eacb1ffd70e23b367675686744119407_prof);

        
        $__internal_c46225f8552cdf97951568e8a239a4eb91a2979c3e833c8b18fd28def19e3383->leave($__internal_c46225f8552cdf97951568e8a239a4eb91a2979c3e833c8b18fd28def19e3383_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
