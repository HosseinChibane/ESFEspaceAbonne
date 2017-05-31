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
        $__internal_619eecaff739f69adb3c340d6f66eb2c7ebec05fbde69c6c09bcfc1897cdda59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_619eecaff739f69adb3c340d6f66eb2c7ebec05fbde69c6c09bcfc1897cdda59->enter($__internal_619eecaff739f69adb3c340d6f66eb2c7ebec05fbde69c6c09bcfc1897cdda59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mutuelle.html.twig"));

        $__internal_d6ce59e6b234e0e901d13ab53f162e3cd31bf8a4b8e6d8cbc349b12ecaab7730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ce59e6b234e0e901d13ab53f162e3cd31bf8a4b8e6d8cbc349b12ecaab7730->enter($__internal_d6ce59e6b234e0e901d13ab53f162e3cd31bf8a4b8e6d8cbc349b12ecaab7730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_619eecaff739f69adb3c340d6f66eb2c7ebec05fbde69c6c09bcfc1897cdda59->leave($__internal_619eecaff739f69adb3c340d6f66eb2c7ebec05fbde69c6c09bcfc1897cdda59_prof);

        
        $__internal_d6ce59e6b234e0e901d13ab53f162e3cd31bf8a4b8e6d8cbc349b12ecaab7730->leave($__internal_d6ce59e6b234e0e901d13ab53f162e3cd31bf8a4b8e6d8cbc349b12ecaab7730_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bb98991e6142f61b555aac3adfd7f410ab6e0c1a15dff97b89e3ab81d0cb366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb98991e6142f61b555aac3adfd7f410ab6e0c1a15dff97b89e3ab81d0cb366->enter($__internal_9bb98991e6142f61b555aac3adfd7f410ab6e0c1a15dff97b89e3ab81d0cb366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1574d2b39af5da574d0e1a2cff217451cc3d6ea995e631022c080ac2cc5c36dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1574d2b39af5da574d0e1a2cff217451cc3d6ea995e631022c080ac2cc5c36dc->enter($__internal_1574d2b39af5da574d0e1a2cff217451cc3d6ea995e631022c080ac2cc5c36dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1574d2b39af5da574d0e1a2cff217451cc3d6ea995e631022c080ac2cc5c36dc->leave($__internal_1574d2b39af5da574d0e1a2cff217451cc3d6ea995e631022c080ac2cc5c36dc_prof);

        
        $__internal_9bb98991e6142f61b555aac3adfd7f410ab6e0c1a15dff97b89e3ab81d0cb366->leave($__internal_9bb98991e6142f61b555aac3adfd7f410ab6e0c1a15dff97b89e3ab81d0cb366_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a7f4ef4e529cfb20556731a7d193147cba4c05590ab11c15d080e53a2aa77ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f4ef4e529cfb20556731a7d193147cba4c05590ab11c15d080e53a2aa77ebd->enter($__internal_a7f4ef4e529cfb20556731a7d193147cba4c05590ab11c15d080e53a2aa77ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_a5f40bfe025423d855b7ebb09d433a7e1057a64217b617a4f5f7cbee04c3afa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f40bfe025423d855b7ebb09d433a7e1057a64217b617a4f5f7cbee04c3afa4->enter($__internal_a5f40bfe025423d855b7ebb09d433a7e1057a64217b617a4f5f7cbee04c3afa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_a5f40bfe025423d855b7ebb09d433a7e1057a64217b617a4f5f7cbee04c3afa4->leave($__internal_a5f40bfe025423d855b7ebb09d433a7e1057a64217b617a4f5f7cbee04c3afa4_prof);

        
        $__internal_a7f4ef4e529cfb20556731a7d193147cba4c05590ab11c15d080e53a2aa77ebd->leave($__internal_a7f4ef4e529cfb20556731a7d193147cba4c05590ab11c15d080e53a2aa77ebd_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_f8b676bea73439dcb4ccc6a312deada35cac914ef65fcb4ca8fbd0ae146f269d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8b676bea73439dcb4ccc6a312deada35cac914ef65fcb4ca8fbd0ae146f269d->enter($__internal_f8b676bea73439dcb4ccc6a312deada35cac914ef65fcb4ca8fbd0ae146f269d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_31033e0190480954fdce7c1d0828fc9adb5f646aa1cacc3bfbb4243e9477094a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31033e0190480954fdce7c1d0828fc9adb5f646aa1cacc3bfbb4243e9477094a->enter($__internal_31033e0190480954fdce7c1d0828fc9adb5f646aa1cacc3bfbb4243e9477094a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_31033e0190480954fdce7c1d0828fc9adb5f646aa1cacc3bfbb4243e9477094a->leave($__internal_31033e0190480954fdce7c1d0828fc9adb5f646aa1cacc3bfbb4243e9477094a_prof);

        
        $__internal_f8b676bea73439dcb4ccc6a312deada35cac914ef65fcb4ca8fbd0ae146f269d->leave($__internal_f8b676bea73439dcb4ccc6a312deada35cac914ef65fcb4ca8fbd0ae146f269d_prof);

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
