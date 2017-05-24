<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_53dd40f728a316558be5ea5e2ec646fbd639cc0f99babe5b8fded44e6e7f3543 extends Twig_Template
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
        $__internal_273bcce4054f3383e050f37adc8f8afb9a0e7429550fbdbba1baf7f68d1d3d7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273bcce4054f3383e050f37adc8f8afb9a0e7429550fbdbba1baf7f68d1d3d7b->enter($__internal_273bcce4054f3383e050f37adc8f8afb9a0e7429550fbdbba1baf7f68d1d3d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_64fc49fbca64ece232e24e8470189327728c5fbda04c9f41142c92b78622ef24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64fc49fbca64ece232e24e8470189327728c5fbda04c9f41142c92b78622ef24->enter($__internal_64fc49fbca64ece232e24e8470189327728c5fbda04c9f41142c92b78622ef24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_273bcce4054f3383e050f37adc8f8afb9a0e7429550fbdbba1baf7f68d1d3d7b->leave($__internal_273bcce4054f3383e050f37adc8f8afb9a0e7429550fbdbba1baf7f68d1d3d7b_prof);

        
        $__internal_64fc49fbca64ece232e24e8470189327728c5fbda04c9f41142c92b78622ef24->leave($__internal_64fc49fbca64ece232e24e8470189327728c5fbda04c9f41142c92b78622ef24_prof);

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
