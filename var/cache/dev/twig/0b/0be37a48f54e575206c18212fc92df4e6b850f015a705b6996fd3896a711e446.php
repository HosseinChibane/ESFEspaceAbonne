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
        $__internal_be03b8c1ac89a9c185f743e8c40bbfeeb865f8d8c0329d1ce3950dfb560ae68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be03b8c1ac89a9c185f743e8c40bbfeeb865f8d8c0329d1ce3950dfb560ae68b->enter($__internal_be03b8c1ac89a9c185f743e8c40bbfeeb865f8d8c0329d1ce3950dfb560ae68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_d37c7f723c0385e4ef1c0fdf6f69df3f190ea73c175990ebe148e1522994d0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37c7f723c0385e4ef1c0fdf6f69df3f190ea73c175990ebe148e1522994d0a4->enter($__internal_d37c7f723c0385e4ef1c0fdf6f69df3f190ea73c175990ebe148e1522994d0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_be03b8c1ac89a9c185f743e8c40bbfeeb865f8d8c0329d1ce3950dfb560ae68b->leave($__internal_be03b8c1ac89a9c185f743e8c40bbfeeb865f8d8c0329d1ce3950dfb560ae68b_prof);

        
        $__internal_d37c7f723c0385e4ef1c0fdf6f69df3f190ea73c175990ebe148e1522994d0a4->leave($__internal_d37c7f723c0385e4ef1c0fdf6f69df3f190ea73c175990ebe148e1522994d0a4_prof);

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
