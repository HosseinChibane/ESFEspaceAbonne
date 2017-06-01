<?php

/* @ESFEspaceAbonne/back/aide.html.twig */
class __TwigTemplate_608508880415857895d4786836c4ff7c46d76c6dd909b15aac853ef740f7a036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/aide.html.twig", 1);
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
        $__internal_e9b455e7721034c400f62575882dfc69ab392dbb989d3586713c3f7a4fe02157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b455e7721034c400f62575882dfc69ab392dbb989d3586713c3f7a4fe02157->enter($__internal_e9b455e7721034c400f62575882dfc69ab392dbb989d3586713c3f7a4fe02157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/aide.html.twig"));

        $__internal_6f0f62bff818ec7d75bdf2ad9bd03a4e18256012744e4e07378bd886469a66d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0f62bff818ec7d75bdf2ad9bd03a4e18256012744e4e07378bd886469a66d9->enter($__internal_6f0f62bff818ec7d75bdf2ad9bd03a4e18256012744e4e07378bd886469a66d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9b455e7721034c400f62575882dfc69ab392dbb989d3586713c3f7a4fe02157->leave($__internal_e9b455e7721034c400f62575882dfc69ab392dbb989d3586713c3f7a4fe02157_prof);

        
        $__internal_6f0f62bff818ec7d75bdf2ad9bd03a4e18256012744e4e07378bd886469a66d9->leave($__internal_6f0f62bff818ec7d75bdf2ad9bd03a4e18256012744e4e07378bd886469a66d9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cd5f3caf34e62aa7e634972b98bd6894a0fd2f6b53fc9caa5f318f5d6da2542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd5f3caf34e62aa7e634972b98bd6894a0fd2f6b53fc9caa5f318f5d6da2542->enter($__internal_7cd5f3caf34e62aa7e634972b98bd6894a0fd2f6b53fc9caa5f318f5d6da2542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6119442d43239eef6207fb14d744f9d25f00591314e7b28d702600d7d941152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6119442d43239eef6207fb14d744f9d25f00591314e7b28d702600d7d941152->enter($__internal_b6119442d43239eef6207fb14d744f9d25f00591314e7b28d702600d7d941152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b6119442d43239eef6207fb14d744f9d25f00591314e7b28d702600d7d941152->leave($__internal_b6119442d43239eef6207fb14d744f9d25f00591314e7b28d702600d7d941152_prof);

        
        $__internal_7cd5f3caf34e62aa7e634972b98bd6894a0fd2f6b53fc9caa5f318f5d6da2542->leave($__internal_7cd5f3caf34e62aa7e634972b98bd6894a0fd2f6b53fc9caa5f318f5d6da2542_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f36bd3f9c5e0fb5f404ec5762b12c58ec7c2c8b76b541ae896c1650bf212695d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f36bd3f9c5e0fb5f404ec5762b12c58ec7c2c8b76b541ae896c1650bf212695d->enter($__internal_f36bd3f9c5e0fb5f404ec5762b12c58ec7c2c8b76b541ae896c1650bf212695d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_b78a0b98fb5720d6d64a1636375113b68c1586c2a021ba7ad9b28a1cd39a2d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78a0b98fb5720d6d64a1636375113b68c1586c2a021ba7ad9b28a1cd39a2d0b->enter($__internal_b78a0b98fb5720d6d64a1636375113b68c1586c2a021ba7ad9b28a1cd39a2d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_b78a0b98fb5720d6d64a1636375113b68c1586c2a021ba7ad9b28a1cd39a2d0b->leave($__internal_b78a0b98fb5720d6d64a1636375113b68c1586c2a021ba7ad9b28a1cd39a2d0b_prof);

        
        $__internal_f36bd3f9c5e0fb5f404ec5762b12c58ec7c2c8b76b541ae896c1650bf212695d->leave($__internal_f36bd3f9c5e0fb5f404ec5762b12c58ec7c2c8b76b541ae896c1650bf212695d_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_e37ea60e2e476e6ac53c7ae51e49ce7387073a200a1a187a7eb89220433ba110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e37ea60e2e476e6ac53c7ae51e49ce7387073a200a1a187a7eb89220433ba110->enter($__internal_e37ea60e2e476e6ac53c7ae51e49ce7387073a200a1a187a7eb89220433ba110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d8d2448dd5a5fc18653c4dbb8d8a0b0fbdfd7d8e2c43c3c2792c3336fa191522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d2448dd5a5fc18653c4dbb8d8a0b0fbdfd7d8e2c43c3c2792c3336fa191522->enter($__internal_d8d2448dd5a5fc18653c4dbb8d8a0b0fbdfd7d8e2c43c3c2792c3336fa191522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_d8d2448dd5a5fc18653c4dbb8d8a0b0fbdfd7d8e2c43c3c2792c3336fa191522->leave($__internal_d8d2448dd5a5fc18653c4dbb8d8a0b0fbdfd7d8e2c43c3c2792c3336fa191522_prof);

        
        $__internal_e37ea60e2e476e6ac53c7ae51e49ce7387073a200a1a187a7eb89220433ba110->leave($__internal_e37ea60e2e476e6ac53c7ae51e49ce7387073a200a1a187a7eb89220433ba110_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/aide.html.twig";
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
{% endblock %}", "@ESFEspaceAbonne/back/aide.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\aide.html.twig");
    }
}
