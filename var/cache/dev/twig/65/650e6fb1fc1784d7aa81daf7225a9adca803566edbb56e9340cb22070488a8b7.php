<?php

/* @ESFEspaceAbonne/back/mutuelle.html.twig */
class __TwigTemplate_af30598cf6f5606da4912f60d9c18c639882c5af572ae441a93e3911cf81cf07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/mutuelle.html.twig", 1);
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
        $__internal_915f8f3db3f9b592a804a42741e2ae2ed5b5e6aef81eb9df4384b1026e335813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915f8f3db3f9b592a804a42741e2ae2ed5b5e6aef81eb9df4384b1026e335813->enter($__internal_915f8f3db3f9b592a804a42741e2ae2ed5b5e6aef81eb9df4384b1026e335813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mutuelle.html.twig"));

        $__internal_c8c24944fea9c5b052c978520015a93f27ee2340c87ce8fab2836779b1258f1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c24944fea9c5b052c978520015a93f27ee2340c87ce8fab2836779b1258f1a->enter($__internal_c8c24944fea9c5b052c978520015a93f27ee2340c87ce8fab2836779b1258f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_915f8f3db3f9b592a804a42741e2ae2ed5b5e6aef81eb9df4384b1026e335813->leave($__internal_915f8f3db3f9b592a804a42741e2ae2ed5b5e6aef81eb9df4384b1026e335813_prof);

        
        $__internal_c8c24944fea9c5b052c978520015a93f27ee2340c87ce8fab2836779b1258f1a->leave($__internal_c8c24944fea9c5b052c978520015a93f27ee2340c87ce8fab2836779b1258f1a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ea67bec3c2aee65bbf9fea90e9e82c1ba45fdaa1efff97f0c6d47be0348394a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea67bec3c2aee65bbf9fea90e9e82c1ba45fdaa1efff97f0c6d47be0348394a->enter($__internal_7ea67bec3c2aee65bbf9fea90e9e82c1ba45fdaa1efff97f0c6d47be0348394a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c6daa72bfe5252c8edcaff1e6298c4a9ec9df74d9d23bdd1b94a0a0c9b37b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c6daa72bfe5252c8edcaff1e6298c4a9ec9df74d9d23bdd1b94a0a0c9b37b7d->enter($__internal_5c6daa72bfe5252c8edcaff1e6298c4a9ec9df74d9d23bdd1b94a0a0c9b37b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5c6daa72bfe5252c8edcaff1e6298c4a9ec9df74d9d23bdd1b94a0a0c9b37b7d->leave($__internal_5c6daa72bfe5252c8edcaff1e6298c4a9ec9df74d9d23bdd1b94a0a0c9b37b7d_prof);

        
        $__internal_7ea67bec3c2aee65bbf9fea90e9e82c1ba45fdaa1efff97f0c6d47be0348394a->leave($__internal_7ea67bec3c2aee65bbf9fea90e9e82c1ba45fdaa1efff97f0c6d47be0348394a_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c315d4c0dde5baa61a79266cecb9f6f1110b29375c789537fb634bd12cf48912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c315d4c0dde5baa61a79266cecb9f6f1110b29375c789537fb634bd12cf48912->enter($__internal_c315d4c0dde5baa61a79266cecb9f6f1110b29375c789537fb634bd12cf48912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_9c15859af073a7ccfb4e64d8fcfe2374cd48896b2ac14a83d7c16628df95632c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c15859af073a7ccfb4e64d8fcfe2374cd48896b2ac14a83d7c16628df95632c->enter($__internal_9c15859af073a7ccfb4e64d8fcfe2374cd48896b2ac14a83d7c16628df95632c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_9c15859af073a7ccfb4e64d8fcfe2374cd48896b2ac14a83d7c16628df95632c->leave($__internal_9c15859af073a7ccfb4e64d8fcfe2374cd48896b2ac14a83d7c16628df95632c_prof);

        
        $__internal_c315d4c0dde5baa61a79266cecb9f6f1110b29375c789537fb634bd12cf48912->leave($__internal_c315d4c0dde5baa61a79266cecb9f6f1110b29375c789537fb634bd12cf48912_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_97d815e1d88ce7784c30275268842069458d3c1b855e03e66a4cc14204dc247d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d815e1d88ce7784c30275268842069458d3c1b855e03e66a4cc14204dc247d->enter($__internal_97d815e1d88ce7784c30275268842069458d3c1b855e03e66a4cc14204dc247d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_2989d1d4428d44079f4a01d5a77f53838ff128e26dc489f7d7f64cd50c61f771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2989d1d4428d44079f4a01d5a77f53838ff128e26dc489f7d7f64cd50c61f771->enter($__internal_2989d1d4428d44079f4a01d5a77f53838ff128e26dc489f7d7f64cd50c61f771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_2989d1d4428d44079f4a01d5a77f53838ff128e26dc489f7d7f64cd50c61f771->leave($__internal_2989d1d4428d44079f4a01d5a77f53838ff128e26dc489f7d7f64cd50c61f771_prof);

        
        $__internal_97d815e1d88ce7784c30275268842069458d3c1b855e03e66a4cc14204dc247d->leave($__internal_97d815e1d88ce7784c30275268842069458d3c1b855e03e66a4cc14204dc247d_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/mutuelle.html.twig";
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
{% endblock %}", "@ESFEspaceAbonne/back/mutuelle.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\mutuelle.html.twig");
    }
}
