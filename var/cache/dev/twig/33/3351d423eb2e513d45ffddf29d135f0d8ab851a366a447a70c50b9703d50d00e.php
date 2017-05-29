<?php

/* ESFEspaceAbonneBundle:back:aide.html.twig */
class __TwigTemplate_5efd92214e22701638a739f59872f2ef4aa1aed6e1e02cf6f164ce0ffaf0c63c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:aide.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74159757a513ca1707a4bc7921cf978bf6947c3ec48ff518e057169bc5cd7a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74159757a513ca1707a4bc7921cf978bf6947c3ec48ff518e057169bc5cd7a4a->enter($__internal_74159757a513ca1707a4bc7921cf978bf6947c3ec48ff518e057169bc5cd7a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:aide.html.twig"));

        $__internal_652b114e28397cf0550ec2777d6efdc3cf87f75ef69a3e0ed3e803589a806ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652b114e28397cf0550ec2777d6efdc3cf87f75ef69a3e0ed3e803589a806ac1->enter($__internal_652b114e28397cf0550ec2777d6efdc3cf87f75ef69a3e0ed3e803589a806ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74159757a513ca1707a4bc7921cf978bf6947c3ec48ff518e057169bc5cd7a4a->leave($__internal_74159757a513ca1707a4bc7921cf978bf6947c3ec48ff518e057169bc5cd7a4a_prof);

        
        $__internal_652b114e28397cf0550ec2777d6efdc3cf87f75ef69a3e0ed3e803589a806ac1->leave($__internal_652b114e28397cf0550ec2777d6efdc3cf87f75ef69a3e0ed3e803589a806ac1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d2c974dd65c5bd51b3a4499a1656c15b136d660d63c6041ab4a64dc281039e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2c974dd65c5bd51b3a4499a1656c15b136d660d63c6041ab4a64dc281039e0->enter($__internal_3d2c974dd65c5bd51b3a4499a1656c15b136d660d63c6041ab4a64dc281039e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0375d61b8f586463dd0c7b2fba576b9a3a13af2c6a15617b95384fc48d2b8850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0375d61b8f586463dd0c7b2fba576b9a3a13af2c6a15617b95384fc48d2b8850->enter($__internal_0375d61b8f586463dd0c7b2fba576b9a3a13af2c6a15617b95384fc48d2b8850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0375d61b8f586463dd0c7b2fba576b9a3a13af2c6a15617b95384fc48d2b8850->leave($__internal_0375d61b8f586463dd0c7b2fba576b9a3a13af2c6a15617b95384fc48d2b8850_prof);

        
        $__internal_3d2c974dd65c5bd51b3a4499a1656c15b136d660d63c6041ab4a64dc281039e0->leave($__internal_3d2c974dd65c5bd51b3a4499a1656c15b136d660d63c6041ab4a64dc281039e0_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_e9c74fa42877aea5bf66d7942bca34a1f96022bb1d166b6c57fd86e8a3e73bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c74fa42877aea5bf66d7942bca34a1f96022bb1d166b6c57fd86e8a3e73bb0->enter($__internal_e9c74fa42877aea5bf66d7942bca34a1f96022bb1d166b6c57fd86e8a3e73bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_d1457acac236339a399866e1665cb12adcbca4ce7a3947d5e0cd306ff11b94a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1457acac236339a399866e1665cb12adcbca4ce7a3947d5e0cd306ff11b94a8->enter($__internal_d1457acac236339a399866e1665cb12adcbca4ce7a3947d5e0cd306ff11b94a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 7
        echo "
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">FAQ</li>
    </ol>
";
        
        $__internal_d1457acac236339a399866e1665cb12adcbca4ce7a3947d5e0cd306ff11b94a8->leave($__internal_d1457acac236339a399866e1665cb12adcbca4ce7a3947d5e0cd306ff11b94a8_prof);

        
        $__internal_e9c74fa42877aea5bf66d7942bca34a1f96022bb1d166b6c57fd86e8a3e73bb0->leave($__internal_e9c74fa42877aea5bf66d7942bca34a1f96022bb1d166b6c57fd86e8a3e73bb0_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_2c7d0db634fd39e26336f8bca6f62d7d6a0d20708a97def372d8ec4851fe797d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c7d0db634fd39e26336f8bca6f62d7d6a0d20708a97def372d8ec4851fe797d->enter($__internal_2c7d0db634fd39e26336f8bca6f62d7d6a0d20708a97def372d8ec4851fe797d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_2de0aa7219af1b8857be82a406b45fbaca6b9e127d55853f25f14d534054a057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de0aa7219af1b8857be82a406b45fbaca6b9e127d55853f25f14d534054a057->enter($__internal_2de0aa7219af1b8857be82a406b45fbaca6b9e127d55853f25f14d534054a057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        // line 15
        echo "\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Content Row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t";
        // line 21
        if (array_key_exists("listFAQ", $context)) {
            // line 22
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listFAQ"] ?? $this->getContext($context, "listFAQ")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowFAQ"]) {
                // line 23
                echo "\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "question", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "id", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "reponse", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowFAQ'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t</div>
\t\t\t\t<!-- /.panel-group -->
\t\t\t</div>
\t\t\t<!-- /.col-lg-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
";
        
        $__internal_2de0aa7219af1b8857be82a406b45fbaca6b9e127d55853f25f14d534054a057->leave($__internal_2de0aa7219af1b8857be82a406b45fbaca6b9e127d55853f25f14d534054a057_prof);

        
        $__internal_2c7d0db634fd39e26336f8bca6f62d7d6a0d20708a97def372d8ec4851fe797d->leave($__internal_2c7d0db634fd39e26336f8bca6f62d7d6a0d20708a97def372d8ec4851fe797d_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:aide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 39,  146 => 38,  134 => 32,  129 => 30,  121 => 27,  115 => 23,  110 => 22,  108 => 21,  100 => 15,  91 => 14,  77 => 9,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
\tAide - {{ parent() }}
{% endblock %}
{% block breadcrumb %}

    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">FAQ</li>
    </ol>
{% endblock %}

{% block Content %}
\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Content Row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t{% if listFAQ is defined %}
\t\t\t\t\t\t{% for rowFAQ in listFAQ %}
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#{{ rowFAQ.id }}\">{{ rowFAQ.question}}</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"{{ rowFAQ.id }}\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t{{ rowFAQ.reponse }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<!-- /.panel-group -->
\t\t\t</div>
\t\t\t<!-- /.col-lg-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
{% endblock %}", "ESFEspaceAbonneBundle:back:aide.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/aide.html.twig");
    }
}
