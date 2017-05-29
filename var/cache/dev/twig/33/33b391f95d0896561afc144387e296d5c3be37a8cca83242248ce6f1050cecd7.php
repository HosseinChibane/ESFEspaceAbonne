<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_22a808c4c75554c88c2549f960872fe19264bcad15cf37ecdf019e8e70f07fd7 extends Twig_Template
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
        $__internal_40de94adc5e815b9283e37ff1e2f353851f0fccb0cc5ff78f4ee9df15086076e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40de94adc5e815b9283e37ff1e2f353851f0fccb0cc5ff78f4ee9df15086076e->enter($__internal_40de94adc5e815b9283e37ff1e2f353851f0fccb0cc5ff78f4ee9df15086076e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_123c1e8bf9eec8a97f05f02cd18771ca618ebc088649daad0be8a183526ca514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_123c1e8bf9eec8a97f05f02cd18771ca618ebc088649daad0be8a183526ca514->enter($__internal_123c1e8bf9eec8a97f05f02cd18771ca618ebc088649daad0be8a183526ca514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_40de94adc5e815b9283e37ff1e2f353851f0fccb0cc5ff78f4ee9df15086076e->leave($__internal_40de94adc5e815b9283e37ff1e2f353851f0fccb0cc5ff78f4ee9df15086076e_prof);

        
        $__internal_123c1e8bf9eec8a97f05f02cd18771ca618ebc088649daad0be8a183526ca514->leave($__internal_123c1e8bf9eec8a97f05f02cd18771ca618ebc088649daad0be8a183526ca514_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
