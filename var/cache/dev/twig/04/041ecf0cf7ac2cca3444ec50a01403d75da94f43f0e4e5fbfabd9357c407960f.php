<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_ab6d7f3b4a392de6944f67bbf701b4d0fb3516767323ab52f13ff3bcf9bdaf75 extends Twig_Template
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
        $__internal_ded38ac1e6dd8f0154fb0d3e6c335f2e32d6e69e04c07ee0bc3a11b430b41f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded38ac1e6dd8f0154fb0d3e6c335f2e32d6e69e04c07ee0bc3a11b430b41f99->enter($__internal_ded38ac1e6dd8f0154fb0d3e6c335f2e32d6e69e04c07ee0bc3a11b430b41f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_083a2f2620f86e841a422a92647532a589121f25e4cdf81cf7d7c45c080a8016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083a2f2620f86e841a422a92647532a589121f25e4cdf81cf7d7c45c080a8016->enter($__internal_083a2f2620f86e841a422a92647532a589121f25e4cdf81cf7d7c45c080a8016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ded38ac1e6dd8f0154fb0d3e6c335f2e32d6e69e04c07ee0bc3a11b430b41f99->leave($__internal_ded38ac1e6dd8f0154fb0d3e6c335f2e32d6e69e04c07ee0bc3a11b430b41f99_prof);

        
        $__internal_083a2f2620f86e841a422a92647532a589121f25e4cdf81cf7d7c45c080a8016->leave($__internal_083a2f2620f86e841a422a92647532a589121f25e4cdf81cf7d7c45c080a8016_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1212a042aff821dda96f3be45785bc0ca651761e1f538140d30e1b6146b9d622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1212a042aff821dda96f3be45785bc0ca651761e1f538140d30e1b6146b9d622->enter($__internal_1212a042aff821dda96f3be45785bc0ca651761e1f538140d30e1b6146b9d622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c6482a53af3e1f4d2e568894ef8af3bcc7c790a1c5426c844a3a3e8b919fa232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6482a53af3e1f4d2e568894ef8af3bcc7c790a1c5426c844a3a3e8b919fa232->enter($__internal_c6482a53af3e1f4d2e568894ef8af3bcc7c790a1c5426c844a3a3e8b919fa232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_c6482a53af3e1f4d2e568894ef8af3bcc7c790a1c5426c844a3a3e8b919fa232->leave($__internal_c6482a53af3e1f4d2e568894ef8af3bcc7c790a1c5426c844a3a3e8b919fa232_prof);

        
        $__internal_1212a042aff821dda96f3be45785bc0ca651761e1f538140d30e1b6146b9d622->leave($__internal_1212a042aff821dda96f3be45785bc0ca651761e1f538140d30e1b6146b9d622_prof);

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
