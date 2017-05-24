<?php

/* ESFEspaceAbonneBundle:Default:aide.html.twig */
class __TwigTemplate_5b0611089f6d69f7454ab7eaed8c8a06c81a3cd5f9db5776ccd2b35d6459405a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:aide.html.twig", 1);
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
        $__internal_035ed50f99c1279953f48de8981601e4a29aa0acb67cf0497a0e2869b0e52ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_035ed50f99c1279953f48de8981601e4a29aa0acb67cf0497a0e2869b0e52ad2->enter($__internal_035ed50f99c1279953f48de8981601e4a29aa0acb67cf0497a0e2869b0e52ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:aide.html.twig"));

        $__internal_b6d4c14b553100ac4c27cc7ee7c20dfab2dd90ef1480ccabd5fb93f181f341d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d4c14b553100ac4c27cc7ee7c20dfab2dd90ef1480ccabd5fb93f181f341d0->enter($__internal_b6d4c14b553100ac4c27cc7ee7c20dfab2dd90ef1480ccabd5fb93f181f341d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_035ed50f99c1279953f48de8981601e4a29aa0acb67cf0497a0e2869b0e52ad2->leave($__internal_035ed50f99c1279953f48de8981601e4a29aa0acb67cf0497a0e2869b0e52ad2_prof);

        
        $__internal_b6d4c14b553100ac4c27cc7ee7c20dfab2dd90ef1480ccabd5fb93f181f341d0->leave($__internal_b6d4c14b553100ac4c27cc7ee7c20dfab2dd90ef1480ccabd5fb93f181f341d0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54d964e1501bb51c0914b66ce7c31bbed52d654d7193f8b73e7698e2b5e9f3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54d964e1501bb51c0914b66ce7c31bbed52d654d7193f8b73e7698e2b5e9f3bd->enter($__internal_54d964e1501bb51c0914b66ce7c31bbed52d654d7193f8b73e7698e2b5e9f3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f5ef174ad8738ea1b4a006d883e5bf4918731c4f5d5db33fb71b027866de3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5ef174ad8738ea1b4a006d883e5bf4918731c4f5d5db33fb71b027866de3b5->enter($__internal_9f5ef174ad8738ea1b4a006d883e5bf4918731c4f5d5db33fb71b027866de3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9f5ef174ad8738ea1b4a006d883e5bf4918731c4f5d5db33fb71b027866de3b5->leave($__internal_9f5ef174ad8738ea1b4a006d883e5bf4918731c4f5d5db33fb71b027866de3b5_prof);

        
        $__internal_54d964e1501bb51c0914b66ce7c31bbed52d654d7193f8b73e7698e2b5e9f3bd->leave($__internal_54d964e1501bb51c0914b66ce7c31bbed52d654d7193f8b73e7698e2b5e9f3bd_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a22013c1e7175f7277fcc4ebb3700cff1c4abaa1d02bedda11eacd4f26da5352 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22013c1e7175f7277fcc4ebb3700cff1c4abaa1d02bedda11eacd4f26da5352->enter($__internal_a22013c1e7175f7277fcc4ebb3700cff1c4abaa1d02bedda11eacd4f26da5352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_dc52e26f8616cdcf8587c6c3d4a3b0c7e578825e7113f5e4cdbeac69961c5f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc52e26f8616cdcf8587c6c3d4a3b0c7e578825e7113f5e4cdbeac69961c5f1e->enter($__internal_dc52e26f8616cdcf8587c6c3d4a3b0c7e578825e7113f5e4cdbeac69961c5f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_dc52e26f8616cdcf8587c6c3d4a3b0c7e578825e7113f5e4cdbeac69961c5f1e->leave($__internal_dc52e26f8616cdcf8587c6c3d4a3b0c7e578825e7113f5e4cdbeac69961c5f1e_prof);

        
        $__internal_a22013c1e7175f7277fcc4ebb3700cff1c4abaa1d02bedda11eacd4f26da5352->leave($__internal_a22013c1e7175f7277fcc4ebb3700cff1c4abaa1d02bedda11eacd4f26da5352_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_c9394487bcac3b9359f11c100d6bb448bef9c8797e84111689dda0c09249aa4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9394487bcac3b9359f11c100d6bb448bef9c8797e84111689dda0c09249aa4a->enter($__internal_c9394487bcac3b9359f11c100d6bb448bef9c8797e84111689dda0c09249aa4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_9b88d95248a04f4f444d24d43f8439f30d4bb81930ce419971f0dbd57a0a606d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b88d95248a04f4f444d24d43f8439f30d4bb81930ce419971f0dbd57a0a606d->enter($__internal_9b88d95248a04f4f444d24d43f8439f30d4bb81930ce419971f0dbd57a0a606d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_9b88d95248a04f4f444d24d43f8439f30d4bb81930ce419971f0dbd57a0a606d->leave($__internal_9b88d95248a04f4f444d24d43f8439f30d4bb81930ce419971f0dbd57a0a606d_prof);

        
        $__internal_c9394487bcac3b9359f11c100d6bb448bef9c8797e84111689dda0c09249aa4a->leave($__internal_c9394487bcac3b9359f11c100d6bb448bef9c8797e84111689dda0c09249aa4a_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:aide.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:Default:aide.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\aide.html.twig");
    }
}
