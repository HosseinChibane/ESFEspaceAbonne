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
        $__internal_cc2d4e5d21bf5a01c170c28c73bb65208bdf1f170671c1fed36300e85bae15de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2d4e5d21bf5a01c170c28c73bb65208bdf1f170671c1fed36300e85bae15de->enter($__internal_cc2d4e5d21bf5a01c170c28c73bb65208bdf1f170671c1fed36300e85bae15de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/aide.html.twig"));

        $__internal_4bbec70ad74a1f1c2cc1015841a1dbe548310846f7915265e7dffc257c1254cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bbec70ad74a1f1c2cc1015841a1dbe548310846f7915265e7dffc257c1254cf->enter($__internal_4bbec70ad74a1f1c2cc1015841a1dbe548310846f7915265e7dffc257c1254cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc2d4e5d21bf5a01c170c28c73bb65208bdf1f170671c1fed36300e85bae15de->leave($__internal_cc2d4e5d21bf5a01c170c28c73bb65208bdf1f170671c1fed36300e85bae15de_prof);

        
        $__internal_4bbec70ad74a1f1c2cc1015841a1dbe548310846f7915265e7dffc257c1254cf->leave($__internal_4bbec70ad74a1f1c2cc1015841a1dbe548310846f7915265e7dffc257c1254cf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b57ab87af9e240527ef072bfe5b300a278f9d7a971c3e4c125ca2566f5f45560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b57ab87af9e240527ef072bfe5b300a278f9d7a971c3e4c125ca2566f5f45560->enter($__internal_b57ab87af9e240527ef072bfe5b300a278f9d7a971c3e4c125ca2566f5f45560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a67f38f6df5bf02cd9da65d92eeb04e6f783bf84b386b0f2ee84a68d93edddcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67f38f6df5bf02cd9da65d92eeb04e6f783bf84b386b0f2ee84a68d93edddcf->enter($__internal_a67f38f6df5bf02cd9da65d92eeb04e6f783bf84b386b0f2ee84a68d93edddcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a67f38f6df5bf02cd9da65d92eeb04e6f783bf84b386b0f2ee84a68d93edddcf->leave($__internal_a67f38f6df5bf02cd9da65d92eeb04e6f783bf84b386b0f2ee84a68d93edddcf_prof);

        
        $__internal_b57ab87af9e240527ef072bfe5b300a278f9d7a971c3e4c125ca2566f5f45560->leave($__internal_b57ab87af9e240527ef072bfe5b300a278f9d7a971c3e4c125ca2566f5f45560_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d2f3a1098cc63bffcccfbd0eb1c909ea7264fc7aa9a8a640aa132edb6901962d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f3a1098cc63bffcccfbd0eb1c909ea7264fc7aa9a8a640aa132edb6901962d->enter($__internal_d2f3a1098cc63bffcccfbd0eb1c909ea7264fc7aa9a8a640aa132edb6901962d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_dbf1eff0d59c6e69d451ee6a93e8325767a18963fb45c9af04292cd7292cad41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf1eff0d59c6e69d451ee6a93e8325767a18963fb45c9af04292cd7292cad41->enter($__internal_dbf1eff0d59c6e69d451ee6a93e8325767a18963fb45c9af04292cd7292cad41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_dbf1eff0d59c6e69d451ee6a93e8325767a18963fb45c9af04292cd7292cad41->leave($__internal_dbf1eff0d59c6e69d451ee6a93e8325767a18963fb45c9af04292cd7292cad41_prof);

        
        $__internal_d2f3a1098cc63bffcccfbd0eb1c909ea7264fc7aa9a8a640aa132edb6901962d->leave($__internal_d2f3a1098cc63bffcccfbd0eb1c909ea7264fc7aa9a8a640aa132edb6901962d_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_4d9a31bdcf4f346c3545b9843037c0b537547098e4ef552d88c2a1a6cd8b9247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9a31bdcf4f346c3545b9843037c0b537547098e4ef552d88c2a1a6cd8b9247->enter($__internal_4d9a31bdcf4f346c3545b9843037c0b537547098e4ef552d88c2a1a6cd8b9247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_eac6303022dbe3017d201245a59e4d6cf69a4d629f6d60b30599f770d9a8a8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac6303022dbe3017d201245a59e4d6cf69a4d629f6d60b30599f770d9a8a8f9->enter($__internal_eac6303022dbe3017d201245a59e4d6cf69a4d629f6d60b30599f770d9a8a8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_eac6303022dbe3017d201245a59e4d6cf69a4d629f6d60b30599f770d9a8a8f9->leave($__internal_eac6303022dbe3017d201245a59e4d6cf69a4d629f6d60b30599f770d9a8a8f9_prof);

        
        $__internal_4d9a31bdcf4f346c3545b9843037c0b537547098e4ef552d88c2a1a6cd8b9247->leave($__internal_4d9a31bdcf4f346c3545b9843037c0b537547098e4ef552d88c2a1a6cd8b9247_prof);

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
