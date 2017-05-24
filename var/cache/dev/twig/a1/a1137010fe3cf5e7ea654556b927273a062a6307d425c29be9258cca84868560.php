<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_0c3f1f0b18f67bf8016a92151305f6924f3ae68bdd2bd69241ceeb015fabdb00 extends Twig_Template
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
        $__internal_e2b8de65f370f48720f63fcc232103bc73e4ae92eb40d8b0f44e9cb21dc2202e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b8de65f370f48720f63fcc232103bc73e4ae92eb40d8b0f44e9cb21dc2202e->enter($__internal_e2b8de65f370f48720f63fcc232103bc73e4ae92eb40d8b0f44e9cb21dc2202e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_bad455d321de4d842525f48525b9f9c2a0b413e6175b5b7a24af43b520af586a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad455d321de4d842525f48525b9f9c2a0b413e6175b5b7a24af43b520af586a->enter($__internal_bad455d321de4d842525f48525b9f9c2a0b413e6175b5b7a24af43b520af586a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2b8de65f370f48720f63fcc232103bc73e4ae92eb40d8b0f44e9cb21dc2202e->leave($__internal_e2b8de65f370f48720f63fcc232103bc73e4ae92eb40d8b0f44e9cb21dc2202e_prof);

        
        $__internal_bad455d321de4d842525f48525b9f9c2a0b413e6175b5b7a24af43b520af586a->leave($__internal_bad455d321de4d842525f48525b9f9c2a0b413e6175b5b7a24af43b520af586a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f4317f319b9a3ea85e4c814d667e94bb7d1849db720efee3f8bd75e13fa1254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f4317f319b9a3ea85e4c814d667e94bb7d1849db720efee3f8bd75e13fa1254->enter($__internal_3f4317f319b9a3ea85e4c814d667e94bb7d1849db720efee3f8bd75e13fa1254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_352c7b4b5fa4cea9f2018791a0e00833dc1421155b3d393cf76180d5ec23d9ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352c7b4b5fa4cea9f2018791a0e00833dc1421155b3d393cf76180d5ec23d9ad->enter($__internal_352c7b4b5fa4cea9f2018791a0e00833dc1421155b3d393cf76180d5ec23d9ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_352c7b4b5fa4cea9f2018791a0e00833dc1421155b3d393cf76180d5ec23d9ad->leave($__internal_352c7b4b5fa4cea9f2018791a0e00833dc1421155b3d393cf76180d5ec23d9ad_prof);

        
        $__internal_3f4317f319b9a3ea85e4c814d667e94bb7d1849db720efee3f8bd75e13fa1254->leave($__internal_3f4317f319b9a3ea85e4c814d667e94bb7d1849db720efee3f8bd75e13fa1254_prof);

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
