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
        $__internal_f59717c48b8f761080075c96d324753d08a75a6a6fb6863a2cddedd864ff45ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59717c48b8f761080075c96d324753d08a75a6a6fb6863a2cddedd864ff45ea->enter($__internal_f59717c48b8f761080075c96d324753d08a75a6a6fb6863a2cddedd864ff45ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/aide.html.twig"));

        $__internal_cc5e7b05547a0b56e9cd1d1929abe73b2bc0020b75c695c0b04c9bc612817671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc5e7b05547a0b56e9cd1d1929abe73b2bc0020b75c695c0b04c9bc612817671->enter($__internal_cc5e7b05547a0b56e9cd1d1929abe73b2bc0020b75c695c0b04c9bc612817671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f59717c48b8f761080075c96d324753d08a75a6a6fb6863a2cddedd864ff45ea->leave($__internal_f59717c48b8f761080075c96d324753d08a75a6a6fb6863a2cddedd864ff45ea_prof);

        
        $__internal_cc5e7b05547a0b56e9cd1d1929abe73b2bc0020b75c695c0b04c9bc612817671->leave($__internal_cc5e7b05547a0b56e9cd1d1929abe73b2bc0020b75c695c0b04c9bc612817671_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c4ed82d70724f0d2f6fc7035a6c5ff08f525b9f425491ce98c2f95e91e49682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4ed82d70724f0d2f6fc7035a6c5ff08f525b9f425491ce98c2f95e91e49682->enter($__internal_0c4ed82d70724f0d2f6fc7035a6c5ff08f525b9f425491ce98c2f95e91e49682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1874af2e1d5ef355d1e74629261ec09979fec9b73a45528fe420ad3559857316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1874af2e1d5ef355d1e74629261ec09979fec9b73a45528fe420ad3559857316->enter($__internal_1874af2e1d5ef355d1e74629261ec09979fec9b73a45528fe420ad3559857316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1874af2e1d5ef355d1e74629261ec09979fec9b73a45528fe420ad3559857316->leave($__internal_1874af2e1d5ef355d1e74629261ec09979fec9b73a45528fe420ad3559857316_prof);

        
        $__internal_0c4ed82d70724f0d2f6fc7035a6c5ff08f525b9f425491ce98c2f95e91e49682->leave($__internal_0c4ed82d70724f0d2f6fc7035a6c5ff08f525b9f425491ce98c2f95e91e49682_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c17e1644c726a7a02724a4fadea8f66f76e955000b01c63745c840af3677c8e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c17e1644c726a7a02724a4fadea8f66f76e955000b01c63745c840af3677c8e4->enter($__internal_c17e1644c726a7a02724a4fadea8f66f76e955000b01c63745c840af3677c8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_47e42a7cd16d2882ed7e4f630039e331cf0d4bd76147defe022f5bb38d3fabd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e42a7cd16d2882ed7e4f630039e331cf0d4bd76147defe022f5bb38d3fabd4->enter($__internal_47e42a7cd16d2882ed7e4f630039e331cf0d4bd76147defe022f5bb38d3fabd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_47e42a7cd16d2882ed7e4f630039e331cf0d4bd76147defe022f5bb38d3fabd4->leave($__internal_47e42a7cd16d2882ed7e4f630039e331cf0d4bd76147defe022f5bb38d3fabd4_prof);

        
        $__internal_c17e1644c726a7a02724a4fadea8f66f76e955000b01c63745c840af3677c8e4->leave($__internal_c17e1644c726a7a02724a4fadea8f66f76e955000b01c63745c840af3677c8e4_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_68a9d310a97a3279abeb8ddf1b08cb24aba4f93c2e369c8a88c4dc6587707c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a9d310a97a3279abeb8ddf1b08cb24aba4f93c2e369c8a88c4dc6587707c8e->enter($__internal_68a9d310a97a3279abeb8ddf1b08cb24aba4f93c2e369c8a88c4dc6587707c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_3e1ae61956ae5a952569dc9b0c154412634474aa1b41e8430f7fe89f3c34f2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e1ae61956ae5a952569dc9b0c154412634474aa1b41e8430f7fe89f3c34f2e2->enter($__internal_3e1ae61956ae5a952569dc9b0c154412634474aa1b41e8430f7fe89f3c34f2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_3e1ae61956ae5a952569dc9b0c154412634474aa1b41e8430f7fe89f3c34f2e2->leave($__internal_3e1ae61956ae5a952569dc9b0c154412634474aa1b41e8430f7fe89f3c34f2e2_prof);

        
        $__internal_68a9d310a97a3279abeb8ddf1b08cb24aba4f93c2e369c8a88c4dc6587707c8e->leave($__internal_68a9d310a97a3279abeb8ddf1b08cb24aba4f93c2e369c8a88c4dc6587707c8e_prof);

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
