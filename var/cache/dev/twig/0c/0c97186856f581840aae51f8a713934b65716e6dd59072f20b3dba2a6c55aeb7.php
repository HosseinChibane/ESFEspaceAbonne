<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_497a90359695333ac8499e534e1a524ca696754f77d19df729a9c1ec9bb23ec0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_accbdfbd54e73ca57f9f52b3ca53a0e2b9be6d445c6fc363d1989aaed237d877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_accbdfbd54e73ca57f9f52b3ca53a0e2b9be6d445c6fc363d1989aaed237d877->enter($__internal_accbdfbd54e73ca57f9f52b3ca53a0e2b9be6d445c6fc363d1989aaed237d877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_d4d0e08bd3017041c24987b9f60513c0e0d9d40e89dc176c4c4bd8364cb6ecd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d0e08bd3017041c24987b9f60513c0e0d9d40e89dc176c4c4bd8364cb6ecd5->enter($__internal_d4d0e08bd3017041c24987b9f60513c0e0d9d40e89dc176c4c4bd8364cb6ecd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_accbdfbd54e73ca57f9f52b3ca53a0e2b9be6d445c6fc363d1989aaed237d877->leave($__internal_accbdfbd54e73ca57f9f52b3ca53a0e2b9be6d445c6fc363d1989aaed237d877_prof);

        
        $__internal_d4d0e08bd3017041c24987b9f60513c0e0d9d40e89dc176c4c4bd8364cb6ecd5->leave($__internal_d4d0e08bd3017041c24987b9f60513c0e0d9d40e89dc176c4c4bd8364cb6ecd5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f9d122469244df95cc77d933bd8a1292704de3387f5722bef287ddc217211107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d122469244df95cc77d933bd8a1292704de3387f5722bef287ddc217211107->enter($__internal_f9d122469244df95cc77d933bd8a1292704de3387f5722bef287ddc217211107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_654493e80e3e4f4254948d26b12277b377051d2f68ee6891c0301f801db7d4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654493e80e3e4f4254948d26b12277b377051d2f68ee6891c0301f801db7d4c8->enter($__internal_654493e80e3e4f4254948d26b12277b377051d2f68ee6891c0301f801db7d4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_654493e80e3e4f4254948d26b12277b377051d2f68ee6891c0301f801db7d4c8->leave($__internal_654493e80e3e4f4254948d26b12277b377051d2f68ee6891c0301f801db7d4c8_prof);

        
        $__internal_f9d122469244df95cc77d933bd8a1292704de3387f5722bef287ddc217211107->leave($__internal_f9d122469244df95cc77d933bd8a1292704de3387f5722bef287ddc217211107_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
