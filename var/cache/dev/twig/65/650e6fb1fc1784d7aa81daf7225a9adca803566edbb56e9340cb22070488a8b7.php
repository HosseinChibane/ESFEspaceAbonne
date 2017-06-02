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
        $__internal_18e94282a748e597f5b23e2672305f1ba95ab4319ee04428a6bffcb535d28810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e94282a748e597f5b23e2672305f1ba95ab4319ee04428a6bffcb535d28810->enter($__internal_18e94282a748e597f5b23e2672305f1ba95ab4319ee04428a6bffcb535d28810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mutuelle.html.twig"));

        $__internal_65769347050d338c53599ef5eb336a20cef2c0c57dcdf1021f147a6c392b0b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65769347050d338c53599ef5eb336a20cef2c0c57dcdf1021f147a6c392b0b7d->enter($__internal_65769347050d338c53599ef5eb336a20cef2c0c57dcdf1021f147a6c392b0b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18e94282a748e597f5b23e2672305f1ba95ab4319ee04428a6bffcb535d28810->leave($__internal_18e94282a748e597f5b23e2672305f1ba95ab4319ee04428a6bffcb535d28810_prof);

        
        $__internal_65769347050d338c53599ef5eb336a20cef2c0c57dcdf1021f147a6c392b0b7d->leave($__internal_65769347050d338c53599ef5eb336a20cef2c0c57dcdf1021f147a6c392b0b7d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89a78840ac7dd7b40cb24d3d2397569c5088698daceedcee8c2ebbd9f0febf73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a78840ac7dd7b40cb24d3d2397569c5088698daceedcee8c2ebbd9f0febf73->enter($__internal_89a78840ac7dd7b40cb24d3d2397569c5088698daceedcee8c2ebbd9f0febf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec98a2d89a93befccf681a80c9347af90863dcba3a69919d1af0e7cf98a04593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec98a2d89a93befccf681a80c9347af90863dcba3a69919d1af0e7cf98a04593->enter($__internal_ec98a2d89a93befccf681a80c9347af90863dcba3a69919d1af0e7cf98a04593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ec98a2d89a93befccf681a80c9347af90863dcba3a69919d1af0e7cf98a04593->leave($__internal_ec98a2d89a93befccf681a80c9347af90863dcba3a69919d1af0e7cf98a04593_prof);

        
        $__internal_89a78840ac7dd7b40cb24d3d2397569c5088698daceedcee8c2ebbd9f0febf73->leave($__internal_89a78840ac7dd7b40cb24d3d2397569c5088698daceedcee8c2ebbd9f0febf73_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c729cfcaf66d1ddf5c7e2e200e854a0c3172604ba72308aa2e8447ddc657bd1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c729cfcaf66d1ddf5c7e2e200e854a0c3172604ba72308aa2e8447ddc657bd1d->enter($__internal_c729cfcaf66d1ddf5c7e2e200e854a0c3172604ba72308aa2e8447ddc657bd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_6d6111883eab0e129cd77fc6cf92b7f982aac004c81564a884c9fdfad6cda3f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d6111883eab0e129cd77fc6cf92b7f982aac004c81564a884c9fdfad6cda3f1->enter($__internal_6d6111883eab0e129cd77fc6cf92b7f982aac004c81564a884c9fdfad6cda3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_6d6111883eab0e129cd77fc6cf92b7f982aac004c81564a884c9fdfad6cda3f1->leave($__internal_6d6111883eab0e129cd77fc6cf92b7f982aac004c81564a884c9fdfad6cda3f1_prof);

        
        $__internal_c729cfcaf66d1ddf5c7e2e200e854a0c3172604ba72308aa2e8447ddc657bd1d->leave($__internal_c729cfcaf66d1ddf5c7e2e200e854a0c3172604ba72308aa2e8447ddc657bd1d_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_df94e2cb371120f4f19738a594c8b5774db373ea6624582cb0fcb4617d28ccec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df94e2cb371120f4f19738a594c8b5774db373ea6624582cb0fcb4617d28ccec->enter($__internal_df94e2cb371120f4f19738a594c8b5774db373ea6624582cb0fcb4617d28ccec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_4890d1fec24e24bb7e962ef83cba69240eeb7bb2c5cc7325ab632486a398dd37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4890d1fec24e24bb7e962ef83cba69240eeb7bb2c5cc7325ab632486a398dd37->enter($__internal_4890d1fec24e24bb7e962ef83cba69240eeb7bb2c5cc7325ab632486a398dd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_4890d1fec24e24bb7e962ef83cba69240eeb7bb2c5cc7325ab632486a398dd37->leave($__internal_4890d1fec24e24bb7e962ef83cba69240eeb7bb2c5cc7325ab632486a398dd37_prof);

        
        $__internal_df94e2cb371120f4f19738a594c8b5774db373ea6624582cb0fcb4617d28ccec->leave($__internal_df94e2cb371120f4f19738a594c8b5774db373ea6624582cb0fcb4617d28ccec_prof);

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
