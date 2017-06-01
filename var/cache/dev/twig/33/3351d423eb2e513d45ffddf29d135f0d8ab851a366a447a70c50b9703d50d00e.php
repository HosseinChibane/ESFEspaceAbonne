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
        $__internal_34356992ec11fad494a9c5d8952d4316184a35aba877b523f4203f4778c6bd7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34356992ec11fad494a9c5d8952d4316184a35aba877b523f4203f4778c6bd7e->enter($__internal_34356992ec11fad494a9c5d8952d4316184a35aba877b523f4203f4778c6bd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:aide.html.twig"));

        $__internal_f839ad52695244b5220d9dc61db10093d519eceb1d00341149a080ff9c5f2aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f839ad52695244b5220d9dc61db10093d519eceb1d00341149a080ff9c5f2aae->enter($__internal_f839ad52695244b5220d9dc61db10093d519eceb1d00341149a080ff9c5f2aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34356992ec11fad494a9c5d8952d4316184a35aba877b523f4203f4778c6bd7e->leave($__internal_34356992ec11fad494a9c5d8952d4316184a35aba877b523f4203f4778c6bd7e_prof);

        
        $__internal_f839ad52695244b5220d9dc61db10093d519eceb1d00341149a080ff9c5f2aae->leave($__internal_f839ad52695244b5220d9dc61db10093d519eceb1d00341149a080ff9c5f2aae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7cece2b9a66b4398620b84c5cc7218e635aad9396c49977324e605faca67f3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7cece2b9a66b4398620b84c5cc7218e635aad9396c49977324e605faca67f3d->enter($__internal_c7cece2b9a66b4398620b84c5cc7218e635aad9396c49977324e605faca67f3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80f4a6fd96ffd36e6a546945342b966392f7f56553b18666127be0646929fc14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f4a6fd96ffd36e6a546945342b966392f7f56553b18666127be0646929fc14->enter($__internal_80f4a6fd96ffd36e6a546945342b966392f7f56553b18666127be0646929fc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_80f4a6fd96ffd36e6a546945342b966392f7f56553b18666127be0646929fc14->leave($__internal_80f4a6fd96ffd36e6a546945342b966392f7f56553b18666127be0646929fc14_prof);

        
        $__internal_c7cece2b9a66b4398620b84c5cc7218e635aad9396c49977324e605faca67f3d->leave($__internal_c7cece2b9a66b4398620b84c5cc7218e635aad9396c49977324e605faca67f3d_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_be4d75e2fccb063d4be54602cd420d0ba9059d6002eda989bfe57f1f46270b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4d75e2fccb063d4be54602cd420d0ba9059d6002eda989bfe57f1f46270b51->enter($__internal_be4d75e2fccb063d4be54602cd420d0ba9059d6002eda989bfe57f1f46270b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_aebe6d85df952cdc8b35ed9bf1fe52b0f68dda602791798e2b44232f6ef1f73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebe6d85df952cdc8b35ed9bf1fe52b0f68dda602791798e2b44232f6ef1f73d->enter($__internal_aebe6d85df952cdc8b35ed9bf1fe52b0f68dda602791798e2b44232f6ef1f73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_aebe6d85df952cdc8b35ed9bf1fe52b0f68dda602791798e2b44232f6ef1f73d->leave($__internal_aebe6d85df952cdc8b35ed9bf1fe52b0f68dda602791798e2b44232f6ef1f73d_prof);

        
        $__internal_be4d75e2fccb063d4be54602cd420d0ba9059d6002eda989bfe57f1f46270b51->leave($__internal_be4d75e2fccb063d4be54602cd420d0ba9059d6002eda989bfe57f1f46270b51_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_5f6e2fe1e53f4b6abe5a5412a0d3ded898adf3d4208cf608ff41cce7bbd131b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6e2fe1e53f4b6abe5a5412a0d3ded898adf3d4208cf608ff41cce7bbd131b0->enter($__internal_5f6e2fe1e53f4b6abe5a5412a0d3ded898adf3d4208cf608ff41cce7bbd131b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_c166a995ff7fd31f09b5a3f445babe6f5bc197afa9826999e88fdd359b4b5608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c166a995ff7fd31f09b5a3f445babe6f5bc197afa9826999e88fdd359b4b5608->enter($__internal_c166a995ff7fd31f09b5a3f445babe6f5bc197afa9826999e88fdd359b4b5608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_c166a995ff7fd31f09b5a3f445babe6f5bc197afa9826999e88fdd359b4b5608->leave($__internal_c166a995ff7fd31f09b5a3f445babe6f5bc197afa9826999e88fdd359b4b5608_prof);

        
        $__internal_5f6e2fe1e53f4b6abe5a5412a0d3ded898adf3d4208cf608ff41cce7bbd131b0->leave($__internal_5f6e2fe1e53f4b6abe5a5412a0d3ded898adf3d4208cf608ff41cce7bbd131b0_prof);

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
