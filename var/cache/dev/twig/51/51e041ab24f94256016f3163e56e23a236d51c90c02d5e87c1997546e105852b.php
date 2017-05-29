<?php

/* ESFEspaceAbonneBundle:Back:mutuelle.html.twig */
class __TwigTemplate_2a825dca90a2efe5613b15529b5632cd4214a9805d50edb4d01ad8b1f291fdb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:mutuelle.html.twig", 1);
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
        $__internal_fea3cee4102d15b29f0ffbc5a094fd962eed9273873fbd3924805ca0fc3b99f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fea3cee4102d15b29f0ffbc5a094fd962eed9273873fbd3924805ca0fc3b99f7->enter($__internal_fea3cee4102d15b29f0ffbc5a094fd962eed9273873fbd3924805ca0fc3b99f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mutuelle.html.twig"));

        $__internal_31e0269f99ca4540dd28bdd35e4f16ff66f70cccfbb5cdfdb0190352caf141e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e0269f99ca4540dd28bdd35e4f16ff66f70cccfbb5cdfdb0190352caf141e9->enter($__internal_31e0269f99ca4540dd28bdd35e4f16ff66f70cccfbb5cdfdb0190352caf141e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fea3cee4102d15b29f0ffbc5a094fd962eed9273873fbd3924805ca0fc3b99f7->leave($__internal_fea3cee4102d15b29f0ffbc5a094fd962eed9273873fbd3924805ca0fc3b99f7_prof);

        
        $__internal_31e0269f99ca4540dd28bdd35e4f16ff66f70cccfbb5cdfdb0190352caf141e9->leave($__internal_31e0269f99ca4540dd28bdd35e4f16ff66f70cccfbb5cdfdb0190352caf141e9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdaa87f4938967bb7276d1df66e43ef0cb631d96b166461bf2e07a56e269e3e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdaa87f4938967bb7276d1df66e43ef0cb631d96b166461bf2e07a56e269e3e4->enter($__internal_fdaa87f4938967bb7276d1df66e43ef0cb631d96b166461bf2e07a56e269e3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3b40bda91d90db2e0765d50c15df2f7ac58dbb4a6fb277486d7877a31fe0bd3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b40bda91d90db2e0765d50c15df2f7ac58dbb4a6fb277486d7877a31fe0bd3c->enter($__internal_3b40bda91d90db2e0765d50c15df2f7ac58dbb4a6fb277486d7877a31fe0bd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3b40bda91d90db2e0765d50c15df2f7ac58dbb4a6fb277486d7877a31fe0bd3c->leave($__internal_3b40bda91d90db2e0765d50c15df2f7ac58dbb4a6fb277486d7877a31fe0bd3c_prof);

        
        $__internal_fdaa87f4938967bb7276d1df66e43ef0cb631d96b166461bf2e07a56e269e3e4->leave($__internal_fdaa87f4938967bb7276d1df66e43ef0cb631d96b166461bf2e07a56e269e3e4_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_4fd263a7d41169822e7276b617b209a2129bf3c7a159a5f3a9e386de5994e345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fd263a7d41169822e7276b617b209a2129bf3c7a159a5f3a9e386de5994e345->enter($__internal_4fd263a7d41169822e7276b617b209a2129bf3c7a159a5f3a9e386de5994e345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_648c8cef549e69f6f026075c28a428e031bddd71e96785893396cc78dc7919ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648c8cef549e69f6f026075c28a428e031bddd71e96785893396cc78dc7919ac->enter($__internal_648c8cef549e69f6f026075c28a428e031bddd71e96785893396cc78dc7919ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_648c8cef549e69f6f026075c28a428e031bddd71e96785893396cc78dc7919ac->leave($__internal_648c8cef549e69f6f026075c28a428e031bddd71e96785893396cc78dc7919ac_prof);

        
        $__internal_4fd263a7d41169822e7276b617b209a2129bf3c7a159a5f3a9e386de5994e345->leave($__internal_4fd263a7d41169822e7276b617b209a2129bf3c7a159a5f3a9e386de5994e345_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_8cfd80925bf5569395f3c805ef057794307f5358a029b5ee221ea720b21195fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfd80925bf5569395f3c805ef057794307f5358a029b5ee221ea720b21195fd->enter($__internal_8cfd80925bf5569395f3c805ef057794307f5358a029b5ee221ea720b21195fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_f9753db4cc9a44a1a2489175fd741e2cbaf2748fe02acc9df561a43b4447862f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9753db4cc9a44a1a2489175fd741e2cbaf2748fe02acc9df561a43b4447862f->enter($__internal_f9753db4cc9a44a1a2489175fd741e2cbaf2748fe02acc9df561a43b4447862f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
\t";
        // line 15
        if (array_key_exists("morale", $context)) {
            // line 16
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["morale"] ?? $this->getContext($context, "morale")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 17
                echo "\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4>Inscription à la mutuelle étudiante ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "raisonsocial", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "url", array()), "html", null, true);
                echo "\" role=\"button\" target=\"_blank\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "alt", array()), "html", null, true);
                echo "\">Cliquez Ici</a>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t";
        }
        
        $__internal_f9753db4cc9a44a1a2489175fd741e2cbaf2748fe02acc9df561a43b4447862f->leave($__internal_f9753db4cc9a44a1a2489175fd741e2cbaf2748fe02acc9df561a43b4447862f_prof);

        
        $__internal_8cfd80925bf5569395f3c805ef057794307f5358a029b5ee221ea720b21195fd->leave($__internal_8cfd80925bf5569395f3c805ef057794307f5358a029b5ee221ea720b21195fd_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:mutuelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  123 => 27,  113 => 20,  108 => 17,  103 => 16,  101 => 15,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\tInscription Université - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
{% endblock %}

{% block Content %} 
\t{% if morale is defined %}
\t\t{% for row in morale %}
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4>Inscription à la mutuelle étudiante {{ row.raisonsocial }}</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"{{ row.url }}\" role=\"button\" target=\"_blank\" alt=\"{{ row.alt }}\">Cliquez Ici</a>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t{% endif %}
{% endblock %}", "ESFEspaceAbonneBundle:Back:mutuelle.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/mutuelle.html.twig");
    }
}
