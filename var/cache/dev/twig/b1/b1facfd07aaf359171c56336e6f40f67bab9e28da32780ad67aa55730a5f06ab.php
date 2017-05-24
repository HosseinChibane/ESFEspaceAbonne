<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f6bf3ca451243af79a1ca6b306274fda6cb21268098554606b241248775e4eed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c94853d55bf212662579605d4c3e2a2aba1527d4d376bf6eafa192fdaca0d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c94853d55bf212662579605d4c3e2a2aba1527d4d376bf6eafa192fdaca0d35->enter($__internal_4c94853d55bf212662579605d4c3e2a2aba1527d4d376bf6eafa192fdaca0d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_93577d65ba2f3e13b73ce8b6b3f78bdc7ec4e72ac51fa2841cff5ea7498b2f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93577d65ba2f3e13b73ce8b6b3f78bdc7ec4e72ac51fa2841cff5ea7498b2f75->enter($__internal_93577d65ba2f3e13b73ce8b6b3f78bdc7ec4e72ac51fa2841cff5ea7498b2f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4c94853d55bf212662579605d4c3e2a2aba1527d4d376bf6eafa192fdaca0d35->leave($__internal_4c94853d55bf212662579605d4c3e2a2aba1527d4d376bf6eafa192fdaca0d35_prof);

        
        $__internal_93577d65ba2f3e13b73ce8b6b3f78bdc7ec4e72ac51fa2841cff5ea7498b2f75->leave($__internal_93577d65ba2f3e13b73ce8b6b3f78bdc7ec4e72ac51fa2841cff5ea7498b2f75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
