<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_71dde197374c077d24b3c4bf0f66ccfe129e0584c27da7e2029100a2199f928b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_b9732bd290fc01ad3e67ec95ac24ae082b1900830f55622cb7a559d2218bcd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9732bd290fc01ad3e67ec95ac24ae082b1900830f55622cb7a559d2218bcd27->enter($__internal_b9732bd290fc01ad3e67ec95ac24ae082b1900830f55622cb7a559d2218bcd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_e51a2b720350cddc8d9290de77778daf151ca5aeb2684a177b9c6f24d54b7357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51a2b720350cddc8d9290de77778daf151ca5aeb2684a177b9c6f24d54b7357->enter($__internal_e51a2b720350cddc8d9290de77778daf151ca5aeb2684a177b9c6f24d54b7357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9732bd290fc01ad3e67ec95ac24ae082b1900830f55622cb7a559d2218bcd27->leave($__internal_b9732bd290fc01ad3e67ec95ac24ae082b1900830f55622cb7a559d2218bcd27_prof);

        
        $__internal_e51a2b720350cddc8d9290de77778daf151ca5aeb2684a177b9c6f24d54b7357->leave($__internal_e51a2b720350cddc8d9290de77778daf151ca5aeb2684a177b9c6f24d54b7357_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_742e75573787347e05372bf998bcc0317fa32b1cd976e42d76b49be956c7b449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742e75573787347e05372bf998bcc0317fa32b1cd976e42d76b49be956c7b449->enter($__internal_742e75573787347e05372bf998bcc0317fa32b1cd976e42d76b49be956c7b449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4a67bf0e697314d2ef38c51483102e3b2df7c9be8c883287a9ea915031df3eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a67bf0e697314d2ef38c51483102e3b2df7c9be8c883287a9ea915031df3eac->enter($__internal_4a67bf0e697314d2ef38c51483102e3b2df7c9be8c883287a9ea915031df3eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4a67bf0e697314d2ef38c51483102e3b2df7c9be8c883287a9ea915031df3eac->leave($__internal_4a67bf0e697314d2ef38c51483102e3b2df7c9be8c883287a9ea915031df3eac_prof);

        
        $__internal_742e75573787347e05372bf998bcc0317fa32b1cd976e42d76b49be956c7b449->leave($__internal_742e75573787347e05372bf998bcc0317fa32b1cd976e42d76b49be956c7b449_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
