<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_1079f3ebf4d1cd05b06f5fb14e9f1ad2def535b65c525d9073445fe6fe3222a0 extends Twig_Template
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
        $__internal_7f879572e0ec92cbf92ffbfa01b3a2c76670a51ba944e77102db37b09bb1a951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f879572e0ec92cbf92ffbfa01b3a2c76670a51ba944e77102db37b09bb1a951->enter($__internal_7f879572e0ec92cbf92ffbfa01b3a2c76670a51ba944e77102db37b09bb1a951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_bb4867bce714fa9dfd4c836cd8602be0b2067f51d7f522b35d2654f2a515a8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4867bce714fa9dfd4c836cd8602be0b2067f51d7f522b35d2654f2a515a8e0->enter($__internal_bb4867bce714fa9dfd4c836cd8602be0b2067f51d7f522b35d2654f2a515a8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f879572e0ec92cbf92ffbfa01b3a2c76670a51ba944e77102db37b09bb1a951->leave($__internal_7f879572e0ec92cbf92ffbfa01b3a2c76670a51ba944e77102db37b09bb1a951_prof);

        
        $__internal_bb4867bce714fa9dfd4c836cd8602be0b2067f51d7f522b35d2654f2a515a8e0->leave($__internal_bb4867bce714fa9dfd4c836cd8602be0b2067f51d7f522b35d2654f2a515a8e0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_956a699f87e38c813f6c8cfea50b175a582589669f734af07b01a4098259817f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_956a699f87e38c813f6c8cfea50b175a582589669f734af07b01a4098259817f->enter($__internal_956a699f87e38c813f6c8cfea50b175a582589669f734af07b01a4098259817f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_167682d18278513a88f9afde632bb9cef2b404dff1189a0b11236620f2e4a6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167682d18278513a88f9afde632bb9cef2b404dff1189a0b11236620f2e4a6a9->enter($__internal_167682d18278513a88f9afde632bb9cef2b404dff1189a0b11236620f2e4a6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_167682d18278513a88f9afde632bb9cef2b404dff1189a0b11236620f2e4a6a9->leave($__internal_167682d18278513a88f9afde632bb9cef2b404dff1189a0b11236620f2e4a6a9_prof);

        
        $__internal_956a699f87e38c813f6c8cfea50b175a582589669f734af07b01a4098259817f->leave($__internal_956a699f87e38c813f6c8cfea50b175a582589669f734af07b01a4098259817f_prof);

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
