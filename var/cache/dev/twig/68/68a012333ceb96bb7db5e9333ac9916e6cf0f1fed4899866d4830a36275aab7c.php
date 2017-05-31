<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_c7bfb4498e823a07d852f8ad5352aa9be73df8c82a184651ba762ad0ca96fc27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_b724378cecf5a95e2d4cea700bd7eb194d7d3e4c7454a92436fe5ea1c7664aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b724378cecf5a95e2d4cea700bd7eb194d7d3e4c7454a92436fe5ea1c7664aa2->enter($__internal_b724378cecf5a95e2d4cea700bd7eb194d7d3e4c7454a92436fe5ea1c7664aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_82b3abe18aa0242f9c3d21fba6f64837b53a8436008f81a82255c8e38cd04b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b3abe18aa0242f9c3d21fba6f64837b53a8436008f81a82255c8e38cd04b74->enter($__internal_82b3abe18aa0242f9c3d21fba6f64837b53a8436008f81a82255c8e38cd04b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b724378cecf5a95e2d4cea700bd7eb194d7d3e4c7454a92436fe5ea1c7664aa2->leave($__internal_b724378cecf5a95e2d4cea700bd7eb194d7d3e4c7454a92436fe5ea1c7664aa2_prof);

        
        $__internal_82b3abe18aa0242f9c3d21fba6f64837b53a8436008f81a82255c8e38cd04b74->leave($__internal_82b3abe18aa0242f9c3d21fba6f64837b53a8436008f81a82255c8e38cd04b74_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00f31c6235e4356687a801ec49bbfcb555eecd83994e53e89f3d14e69d67a25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f31c6235e4356687a801ec49bbfcb555eecd83994e53e89f3d14e69d67a25c->enter($__internal_00f31c6235e4356687a801ec49bbfcb555eecd83994e53e89f3d14e69d67a25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ad226c52c7dcf26a73fae42492375c02076d571578d4432855fd66bebfadb88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad226c52c7dcf26a73fae42492375c02076d571578d4432855fd66bebfadb88a->enter($__internal_ad226c52c7dcf26a73fae42492375c02076d571578d4432855fd66bebfadb88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_ad226c52c7dcf26a73fae42492375c02076d571578d4432855fd66bebfadb88a->leave($__internal_ad226c52c7dcf26a73fae42492375c02076d571578d4432855fd66bebfadb88a_prof);

        
        $__internal_00f31c6235e4356687a801ec49bbfcb555eecd83994e53e89f3d14e69d67a25c->leave($__internal_00f31c6235e4356687a801ec49bbfcb555eecd83994e53e89f3d14e69d67a25c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
