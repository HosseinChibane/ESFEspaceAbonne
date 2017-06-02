<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_76c36d0f6da9fdd068160a1feba7b66cd2a9f52c8933ab20d72d6f25bdb3de41 extends Twig_Template
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
        $__internal_80e5e903acb4703dba8ff584828a2c143a674c50c2ac433302fac36c6f01696c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80e5e903acb4703dba8ff584828a2c143a674c50c2ac433302fac36c6f01696c->enter($__internal_80e5e903acb4703dba8ff584828a2c143a674c50c2ac433302fac36c6f01696c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_381e2513d93d5138cea7bd09d0d466ed0b48373e961e084eb4cfe7b925e304c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381e2513d93d5138cea7bd09d0d466ed0b48373e961e084eb4cfe7b925e304c5->enter($__internal_381e2513d93d5138cea7bd09d0d466ed0b48373e961e084eb4cfe7b925e304c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_80e5e903acb4703dba8ff584828a2c143a674c50c2ac433302fac36c6f01696c->leave($__internal_80e5e903acb4703dba8ff584828a2c143a674c50c2ac433302fac36c6f01696c_prof);

        
        $__internal_381e2513d93d5138cea7bd09d0d466ed0b48373e961e084eb4cfe7b925e304c5->leave($__internal_381e2513d93d5138cea7bd09d0d466ed0b48373e961e084eb4cfe7b925e304c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
