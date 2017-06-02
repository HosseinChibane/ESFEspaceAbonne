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
        $__internal_974c8fa19ca96e5bb9a145ceebb454646779f9268ce7c4d15294fdb9fb7a9150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974c8fa19ca96e5bb9a145ceebb454646779f9268ce7c4d15294fdb9fb7a9150->enter($__internal_974c8fa19ca96e5bb9a145ceebb454646779f9268ce7c4d15294fdb9fb7a9150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/aide.html.twig"));

        $__internal_71bd2fb44aac9489fdb318ff9459c5a49d71c7df23f14f4d62fa58e7b005fe2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71bd2fb44aac9489fdb318ff9459c5a49d71c7df23f14f4d62fa58e7b005fe2d->enter($__internal_71bd2fb44aac9489fdb318ff9459c5a49d71c7df23f14f4d62fa58e7b005fe2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_974c8fa19ca96e5bb9a145ceebb454646779f9268ce7c4d15294fdb9fb7a9150->leave($__internal_974c8fa19ca96e5bb9a145ceebb454646779f9268ce7c4d15294fdb9fb7a9150_prof);

        
        $__internal_71bd2fb44aac9489fdb318ff9459c5a49d71c7df23f14f4d62fa58e7b005fe2d->leave($__internal_71bd2fb44aac9489fdb318ff9459c5a49d71c7df23f14f4d62fa58e7b005fe2d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1319b5ae0abe43dc399a3c9dcd3792ebc5352ee9073428cbbe91128fe33d9d42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1319b5ae0abe43dc399a3c9dcd3792ebc5352ee9073428cbbe91128fe33d9d42->enter($__internal_1319b5ae0abe43dc399a3c9dcd3792ebc5352ee9073428cbbe91128fe33d9d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5967d31098d5eda08cb0048f8d60fb184548bbbd5e23144b24cc84bf6f9c19c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5967d31098d5eda08cb0048f8d60fb184548bbbd5e23144b24cc84bf6f9c19c9->enter($__internal_5967d31098d5eda08cb0048f8d60fb184548bbbd5e23144b24cc84bf6f9c19c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5967d31098d5eda08cb0048f8d60fb184548bbbd5e23144b24cc84bf6f9c19c9->leave($__internal_5967d31098d5eda08cb0048f8d60fb184548bbbd5e23144b24cc84bf6f9c19c9_prof);

        
        $__internal_1319b5ae0abe43dc399a3c9dcd3792ebc5352ee9073428cbbe91128fe33d9d42->leave($__internal_1319b5ae0abe43dc399a3c9dcd3792ebc5352ee9073428cbbe91128fe33d9d42_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_9e5635cd7472b0337e07512fce05b42237a507939dbd0da37676f0887fa6cc94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e5635cd7472b0337e07512fce05b42237a507939dbd0da37676f0887fa6cc94->enter($__internal_9e5635cd7472b0337e07512fce05b42237a507939dbd0da37676f0887fa6cc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_fd2b9d7901e9938ecc9d73a787971ef0e7a91e2c0cc345a897462dadf55c2450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2b9d7901e9938ecc9d73a787971ef0e7a91e2c0cc345a897462dadf55c2450->enter($__internal_fd2b9d7901e9938ecc9d73a787971ef0e7a91e2c0cc345a897462dadf55c2450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_fd2b9d7901e9938ecc9d73a787971ef0e7a91e2c0cc345a897462dadf55c2450->leave($__internal_fd2b9d7901e9938ecc9d73a787971ef0e7a91e2c0cc345a897462dadf55c2450_prof);

        
        $__internal_9e5635cd7472b0337e07512fce05b42237a507939dbd0da37676f0887fa6cc94->leave($__internal_9e5635cd7472b0337e07512fce05b42237a507939dbd0da37676f0887fa6cc94_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_5d55e9755cd78e5422c45783b290ef6943c713e52f783a2590a9bbed256fcce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d55e9755cd78e5422c45783b290ef6943c713e52f783a2590a9bbed256fcce9->enter($__internal_5d55e9755cd78e5422c45783b290ef6943c713e52f783a2590a9bbed256fcce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d30321cc32285656b3b984efe0b05c8a9d64356e44c841386269613b95b84eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30321cc32285656b3b984efe0b05c8a9d64356e44c841386269613b95b84eef->enter($__internal_d30321cc32285656b3b984efe0b05c8a9d64356e44c841386269613b95b84eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_d30321cc32285656b3b984efe0b05c8a9d64356e44c841386269613b95b84eef->leave($__internal_d30321cc32285656b3b984efe0b05c8a9d64356e44c841386269613b95b84eef_prof);

        
        $__internal_5d55e9755cd78e5422c45783b290ef6943c713e52f783a2590a9bbed256fcce9->leave($__internal_5d55e9755cd78e5422c45783b290ef6943c713e52f783a2590a9bbed256fcce9_prof);

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
