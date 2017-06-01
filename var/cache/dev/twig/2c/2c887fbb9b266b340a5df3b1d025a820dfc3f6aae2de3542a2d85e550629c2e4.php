<?php

/* ESFEspaceAbonneBundle:back:mutuelle.html.twig */
class __TwigTemplate_4faf9fbf9c6dbea7d2f583226d639e30f4dd79e949b9564163c81ce40f0f11d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mutuelle.html.twig", 1);
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
        $__internal_f87ebc998fea9528d8ee75e12082929f4af1e6ae819fb523f0dae3b9ab37edfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87ebc998fea9528d8ee75e12082929f4af1e6ae819fb523f0dae3b9ab37edfc->enter($__internal_f87ebc998fea9528d8ee75e12082929f4af1e6ae819fb523f0dae3b9ab37edfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mutuelle.html.twig"));

        $__internal_a7112871dab474ebb8d4b4d68330df6a72187c007689faf207947f607e0bcaae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7112871dab474ebb8d4b4d68330df6a72187c007689faf207947f607e0bcaae->enter($__internal_a7112871dab474ebb8d4b4d68330df6a72187c007689faf207947f607e0bcaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f87ebc998fea9528d8ee75e12082929f4af1e6ae819fb523f0dae3b9ab37edfc->leave($__internal_f87ebc998fea9528d8ee75e12082929f4af1e6ae819fb523f0dae3b9ab37edfc_prof);

        
        $__internal_a7112871dab474ebb8d4b4d68330df6a72187c007689faf207947f607e0bcaae->leave($__internal_a7112871dab474ebb8d4b4d68330df6a72187c007689faf207947f607e0bcaae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90a7abf4577f73419e6a27bee025a014df19b4ab1a8c94c61e3a13ef374bb6c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a7abf4577f73419e6a27bee025a014df19b4ab1a8c94c61e3a13ef374bb6c5->enter($__internal_90a7abf4577f73419e6a27bee025a014df19b4ab1a8c94c61e3a13ef374bb6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97ac2383c12ce3b5044d187bcea789f1bada50259b4f0478b7b406c2887b156e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ac2383c12ce3b5044d187bcea789f1bada50259b4f0478b7b406c2887b156e->enter($__internal_97ac2383c12ce3b5044d187bcea789f1bada50259b4f0478b7b406c2887b156e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_97ac2383c12ce3b5044d187bcea789f1bada50259b4f0478b7b406c2887b156e->leave($__internal_97ac2383c12ce3b5044d187bcea789f1bada50259b4f0478b7b406c2887b156e_prof);

        
        $__internal_90a7abf4577f73419e6a27bee025a014df19b4ab1a8c94c61e3a13ef374bb6c5->leave($__internal_90a7abf4577f73419e6a27bee025a014df19b4ab1a8c94c61e3a13ef374bb6c5_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c8ab42d7be624c891c54fc3419b43b10f58f154177fc8c2615596bfb7bcbf31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8ab42d7be624c891c54fc3419b43b10f58f154177fc8c2615596bfb7bcbf31e->enter($__internal_c8ab42d7be624c891c54fc3419b43b10f58f154177fc8c2615596bfb7bcbf31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_74969259dea493e857efe0d3608d33a9c520cf6de5a3dccf6cd3bade7d3b0622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74969259dea493e857efe0d3608d33a9c520cf6de5a3dccf6cd3bade7d3b0622->enter($__internal_74969259dea493e857efe0d3608d33a9c520cf6de5a3dccf6cd3bade7d3b0622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_74969259dea493e857efe0d3608d33a9c520cf6de5a3dccf6cd3bade7d3b0622->leave($__internal_74969259dea493e857efe0d3608d33a9c520cf6de5a3dccf6cd3bade7d3b0622_prof);

        
        $__internal_c8ab42d7be624c891c54fc3419b43b10f58f154177fc8c2615596bfb7bcbf31e->leave($__internal_c8ab42d7be624c891c54fc3419b43b10f58f154177fc8c2615596bfb7bcbf31e_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_0aa1504d8962768d6eee463af90666b96def88bb6541e61e8d0982c6bced94ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa1504d8962768d6eee463af90666b96def88bb6541e61e8d0982c6bced94ea->enter($__internal_0aa1504d8962768d6eee463af90666b96def88bb6541e61e8d0982c6bced94ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_fa3b104ef36de14f59a0c7d5721a90893334e34ae8c3b135e6c20d04edc267bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3b104ef36de14f59a0c7d5721a90893334e34ae8c3b135e6c20d04edc267bf->enter($__internal_fa3b104ef36de14f59a0c7d5721a90893334e34ae8c3b135e6c20d04edc267bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_fa3b104ef36de14f59a0c7d5721a90893334e34ae8c3b135e6c20d04edc267bf->leave($__internal_fa3b104ef36de14f59a0c7d5721a90893334e34ae8c3b135e6c20d04edc267bf_prof);

        
        $__internal_0aa1504d8962768d6eee463af90666b96def88bb6541e61e8d0982c6bced94ea->leave($__internal_0aa1504d8962768d6eee463af90666b96def88bb6541e61e8d0982c6bced94ea_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mutuelle.html.twig";
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
{% endblock %}", "ESFEspaceAbonneBundle:back:mutuelle.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mutuelle.html.twig");
    }
}
