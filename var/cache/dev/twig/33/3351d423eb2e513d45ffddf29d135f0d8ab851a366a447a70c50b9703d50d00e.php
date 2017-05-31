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
        $__internal_c8041dac69dc34484bba7a4c2c912b6c81d78523b3b9141eb94a065f8fbfd06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8041dac69dc34484bba7a4c2c912b6c81d78523b3b9141eb94a065f8fbfd06a->enter($__internal_c8041dac69dc34484bba7a4c2c912b6c81d78523b3b9141eb94a065f8fbfd06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:aide.html.twig"));

        $__internal_f3d477d5e6398e57ef745e5c2037690bb7ce94170a37255943b94cb70c87e9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d477d5e6398e57ef745e5c2037690bb7ce94170a37255943b94cb70c87e9a4->enter($__internal_f3d477d5e6398e57ef745e5c2037690bb7ce94170a37255943b94cb70c87e9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8041dac69dc34484bba7a4c2c912b6c81d78523b3b9141eb94a065f8fbfd06a->leave($__internal_c8041dac69dc34484bba7a4c2c912b6c81d78523b3b9141eb94a065f8fbfd06a_prof);

        
        $__internal_f3d477d5e6398e57ef745e5c2037690bb7ce94170a37255943b94cb70c87e9a4->leave($__internal_f3d477d5e6398e57ef745e5c2037690bb7ce94170a37255943b94cb70c87e9a4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9734e3a11f048d0137e4b44f09e1d869302f6e22d983153b40cb5b83ac1d5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9734e3a11f048d0137e4b44f09e1d869302f6e22d983153b40cb5b83ac1d5fc->enter($__internal_c9734e3a11f048d0137e4b44f09e1d869302f6e22d983153b40cb5b83ac1d5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a012fa3edb82df21fc088772f0a0efa85eb44c6239bc7e81451ca7ff1df8090d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a012fa3edb82df21fc088772f0a0efa85eb44c6239bc7e81451ca7ff1df8090d->enter($__internal_a012fa3edb82df21fc088772f0a0efa85eb44c6239bc7e81451ca7ff1df8090d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a012fa3edb82df21fc088772f0a0efa85eb44c6239bc7e81451ca7ff1df8090d->leave($__internal_a012fa3edb82df21fc088772f0a0efa85eb44c6239bc7e81451ca7ff1df8090d_prof);

        
        $__internal_c9734e3a11f048d0137e4b44f09e1d869302f6e22d983153b40cb5b83ac1d5fc->leave($__internal_c9734e3a11f048d0137e4b44f09e1d869302f6e22d983153b40cb5b83ac1d5fc_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9754d84b9c691dfc77f88fcec1148c5af9ab2947756db06b55417f66a2a7b723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9754d84b9c691dfc77f88fcec1148c5af9ab2947756db06b55417f66a2a7b723->enter($__internal_9754d84b9c691dfc77f88fcec1148c5af9ab2947756db06b55417f66a2a7b723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_8daa15071e836781b1992ed5465b6be56cf8e53ba6fd3a7378ae8b973b159367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8daa15071e836781b1992ed5465b6be56cf8e53ba6fd3a7378ae8b973b159367->enter($__internal_8daa15071e836781b1992ed5465b6be56cf8e53ba6fd3a7378ae8b973b159367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_8daa15071e836781b1992ed5465b6be56cf8e53ba6fd3a7378ae8b973b159367->leave($__internal_8daa15071e836781b1992ed5465b6be56cf8e53ba6fd3a7378ae8b973b159367_prof);

        
        $__internal_9754d84b9c691dfc77f88fcec1148c5af9ab2947756db06b55417f66a2a7b723->leave($__internal_9754d84b9c691dfc77f88fcec1148c5af9ab2947756db06b55417f66a2a7b723_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1c556a13c5787ad47909d35e6d7ef08d3c7db308a3b1569b6d5c991a67bda574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c556a13c5787ad47909d35e6d7ef08d3c7db308a3b1569b6d5c991a67bda574->enter($__internal_1c556a13c5787ad47909d35e6d7ef08d3c7db308a3b1569b6d5c991a67bda574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_e4cd3632c76a3ee488e568229988fb7ccf69aff6473bf9967460301d028ecdf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4cd3632c76a3ee488e568229988fb7ccf69aff6473bf9967460301d028ecdf6->enter($__internal_e4cd3632c76a3ee488e568229988fb7ccf69aff6473bf9967460301d028ecdf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_e4cd3632c76a3ee488e568229988fb7ccf69aff6473bf9967460301d028ecdf6->leave($__internal_e4cd3632c76a3ee488e568229988fb7ccf69aff6473bf9967460301d028ecdf6_prof);

        
        $__internal_1c556a13c5787ad47909d35e6d7ef08d3c7db308a3b1569b6d5c991a67bda574->leave($__internal_1c556a13c5787ad47909d35e6d7ef08d3c7db308a3b1569b6d5c991a67bda574_prof);

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
