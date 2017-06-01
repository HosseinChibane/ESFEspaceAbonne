<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_00b18f834011d3fee3ac830b20d384d5183add7c5f1069b5f53a5174a3182eb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_d3a2018a92e32255d08e48461d6b26a269b611940ab78822178495c8ae4c08c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3a2018a92e32255d08e48461d6b26a269b611940ab78822178495c8ae4c08c8->enter($__internal_d3a2018a92e32255d08e48461d6b26a269b611940ab78822178495c8ae4c08c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_4337fe5cca5cbacf7c53c576cee68c7d34dcb93f1736aee2875b578eb4f75a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4337fe5cca5cbacf7c53c576cee68c7d34dcb93f1736aee2875b578eb4f75a53->enter($__internal_4337fe5cca5cbacf7c53c576cee68c7d34dcb93f1736aee2875b578eb4f75a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3a2018a92e32255d08e48461d6b26a269b611940ab78822178495c8ae4c08c8->leave($__internal_d3a2018a92e32255d08e48461d6b26a269b611940ab78822178495c8ae4c08c8_prof);

        
        $__internal_4337fe5cca5cbacf7c53c576cee68c7d34dcb93f1736aee2875b578eb4f75a53->leave($__internal_4337fe5cca5cbacf7c53c576cee68c7d34dcb93f1736aee2875b578eb4f75a53_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9231666656ee3935b403c23c5cef463464bf6dbe5d1f39d3b25b09fb9d08c80b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9231666656ee3935b403c23c5cef463464bf6dbe5d1f39d3b25b09fb9d08c80b->enter($__internal_9231666656ee3935b403c23c5cef463464bf6dbe5d1f39d3b25b09fb9d08c80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9e7fe61cff2cae3fef6e4b4a69fa624a532ab416680ec612f6606701afb99003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7fe61cff2cae3fef6e4b4a69fa624a532ab416680ec612f6606701afb99003->enter($__internal_9e7fe61cff2cae3fef6e4b4a69fa624a532ab416680ec612f6606701afb99003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9e7fe61cff2cae3fef6e4b4a69fa624a532ab416680ec612f6606701afb99003->leave($__internal_9e7fe61cff2cae3fef6e4b4a69fa624a532ab416680ec612f6606701afb99003_prof);

        
        $__internal_9231666656ee3935b403c23c5cef463464bf6dbe5d1f39d3b25b09fb9d08c80b->leave($__internal_9231666656ee3935b403c23c5cef463464bf6dbe5d1f39d3b25b09fb9d08c80b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
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
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
