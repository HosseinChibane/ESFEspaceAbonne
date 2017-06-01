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
        $__internal_61bcea03721c6d45e88dbacc564995327f31647e649bb94cf47b5eaa4a1e4131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61bcea03721c6d45e88dbacc564995327f31647e649bb94cf47b5eaa4a1e4131->enter($__internal_61bcea03721c6d45e88dbacc564995327f31647e649bb94cf47b5eaa4a1e4131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_707bc1a2408a092d7eab767bb62e1ba6b9a6d36691881b9a49b51b871b581679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_707bc1a2408a092d7eab767bb62e1ba6b9a6d36691881b9a49b51b871b581679->enter($__internal_707bc1a2408a092d7eab767bb62e1ba6b9a6d36691881b9a49b51b871b581679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_61bcea03721c6d45e88dbacc564995327f31647e649bb94cf47b5eaa4a1e4131->leave($__internal_61bcea03721c6d45e88dbacc564995327f31647e649bb94cf47b5eaa4a1e4131_prof);

        
        $__internal_707bc1a2408a092d7eab767bb62e1ba6b9a6d36691881b9a49b51b871b581679->leave($__internal_707bc1a2408a092d7eab767bb62e1ba6b9a6d36691881b9a49b51b871b581679_prof);

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
