<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_3c5f96d5a77f07ea52e00878b6d44e4affb09c2e07ad941b0aaea88bc88acab7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_f353ea30ad2e6b7234a3c2026a5b704f4c7949bce82424dba786b0bdc3f00af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f353ea30ad2e6b7234a3c2026a5b704f4c7949bce82424dba786b0bdc3f00af8->enter($__internal_f353ea30ad2e6b7234a3c2026a5b704f4c7949bce82424dba786b0bdc3f00af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_bee907816b115a8561245d04da2ea8d246e97073f14ae339852a7a66a7dae590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee907816b115a8561245d04da2ea8d246e97073f14ae339852a7a66a7dae590->enter($__internal_bee907816b115a8561245d04da2ea8d246e97073f14ae339852a7a66a7dae590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f353ea30ad2e6b7234a3c2026a5b704f4c7949bce82424dba786b0bdc3f00af8->leave($__internal_f353ea30ad2e6b7234a3c2026a5b704f4c7949bce82424dba786b0bdc3f00af8_prof);

        
        $__internal_bee907816b115a8561245d04da2ea8d246e97073f14ae339852a7a66a7dae590->leave($__internal_bee907816b115a8561245d04da2ea8d246e97073f14ae339852a7a66a7dae590_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_637651721bcb1e6fb2e16af22c2c3864a50bf50923a1c5700015da57548c6ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637651721bcb1e6fb2e16af22c2c3864a50bf50923a1c5700015da57548c6ebc->enter($__internal_637651721bcb1e6fb2e16af22c2c3864a50bf50923a1c5700015da57548c6ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_13bbb43216c6c515e09d1a1829782abd9ca4ec5068dec4a1b232b7e282fe9101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13bbb43216c6c515e09d1a1829782abd9ca4ec5068dec4a1b232b7e282fe9101->enter($__internal_13bbb43216c6c515e09d1a1829782abd9ca4ec5068dec4a1b232b7e282fe9101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_13bbb43216c6c515e09d1a1829782abd9ca4ec5068dec4a1b232b7e282fe9101->leave($__internal_13bbb43216c6c515e09d1a1829782abd9ca4ec5068dec4a1b232b7e282fe9101_prof);

        
        $__internal_637651721bcb1e6fb2e16af22c2c3864a50bf50923a1c5700015da57548c6ebc->leave($__internal_637651721bcb1e6fb2e16af22c2c3864a50bf50923a1c5700015da57548c6ebc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
