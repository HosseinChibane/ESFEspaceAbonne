<?php

/* ESFEspaceAbonneBundle:Default:mutuelle.html.twig */
class __TwigTemplate_945fd708997df9ec7b117e516f2d5b4d6916d6058f9434382fb69dd329045def extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Default:mutuelle.html.twig", 1);
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
        $__internal_0b069cb32b7c3437697966865753d7291d057b2d1688d34a6dfcbd64c8b08fbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b069cb32b7c3437697966865753d7291d057b2d1688d34a6dfcbd64c8b08fbf->enter($__internal_0b069cb32b7c3437697966865753d7291d057b2d1688d34a6dfcbd64c8b08fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mutuelle.html.twig"));

        $__internal_d9e0e4a0f8e1c92253404de7d8ebecd37221fe0bced8d8bde5acc8a0b7c94344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e0e4a0f8e1c92253404de7d8ebecd37221fe0bced8d8bde5acc8a0b7c94344->enter($__internal_d9e0e4a0f8e1c92253404de7d8ebecd37221fe0bced8d8bde5acc8a0b7c94344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Default:mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b069cb32b7c3437697966865753d7291d057b2d1688d34a6dfcbd64c8b08fbf->leave($__internal_0b069cb32b7c3437697966865753d7291d057b2d1688d34a6dfcbd64c8b08fbf_prof);

        
        $__internal_d9e0e4a0f8e1c92253404de7d8ebecd37221fe0bced8d8bde5acc8a0b7c94344->leave($__internal_d9e0e4a0f8e1c92253404de7d8ebecd37221fe0bced8d8bde5acc8a0b7c94344_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_66875345b8382c978c9f4e065192c83fe322ae261c139484956d4431f902fcb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66875345b8382c978c9f4e065192c83fe322ae261c139484956d4431f902fcb3->enter($__internal_66875345b8382c978c9f4e065192c83fe322ae261c139484956d4431f902fcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1abd3c15448e50b0f3615e84fdc2e9455972abf3f1ab5396f0e6e2a05976b171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abd3c15448e50b0f3615e84fdc2e9455972abf3f1ab5396f0e6e2a05976b171->enter($__internal_1abd3c15448e50b0f3615e84fdc2e9455972abf3f1ab5396f0e6e2a05976b171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1abd3c15448e50b0f3615e84fdc2e9455972abf3f1ab5396f0e6e2a05976b171->leave($__internal_1abd3c15448e50b0f3615e84fdc2e9455972abf3f1ab5396f0e6e2a05976b171_prof);

        
        $__internal_66875345b8382c978c9f4e065192c83fe322ae261c139484956d4431f902fcb3->leave($__internal_66875345b8382c978c9f4e065192c83fe322ae261c139484956d4431f902fcb3_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_494bab4af0ecabd2f5fbc876d750102a19216bba0545e1839805c56a5eed1b07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494bab4af0ecabd2f5fbc876d750102a19216bba0545e1839805c56a5eed1b07->enter($__internal_494bab4af0ecabd2f5fbc876d750102a19216bba0545e1839805c56a5eed1b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_0f0cecf067ee7755c5722245dfa42aa809da45cb08c8c9052cd816dad3b3a54f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0cecf067ee7755c5722245dfa42aa809da45cb08c8c9052cd816dad3b3a54f->enter($__internal_0f0cecf067ee7755c5722245dfa42aa809da45cb08c8c9052cd816dad3b3a54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_0f0cecf067ee7755c5722245dfa42aa809da45cb08c8c9052cd816dad3b3a54f->leave($__internal_0f0cecf067ee7755c5722245dfa42aa809da45cb08c8c9052cd816dad3b3a54f_prof);

        
        $__internal_494bab4af0ecabd2f5fbc876d750102a19216bba0545e1839805c56a5eed1b07->leave($__internal_494bab4af0ecabd2f5fbc876d750102a19216bba0545e1839805c56a5eed1b07_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_546d767bd09c9a8ea68b84dc6ff0948aa1ca470b60f4c459ee8fb6476798653d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546d767bd09c9a8ea68b84dc6ff0948aa1ca470b60f4c459ee8fb6476798653d->enter($__internal_546d767bd09c9a8ea68b84dc6ff0948aa1ca470b60f4c459ee8fb6476798653d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_da3a9a57db168872a0645395f00fd131146d0ed2de500b21cf94025934d8d299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da3a9a57db168872a0645395f00fd131146d0ed2de500b21cf94025934d8d299->enter($__internal_da3a9a57db168872a0645395f00fd131146d0ed2de500b21cf94025934d8d299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h4>Inscription à la mutuelle étudiante AVA</h4>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<div align=\"center\">
\t\t\t\t\t<a class=\"btn btn-info\" href=\"https://www.ava.fr/blog/produit/plan-sante-studies/\" role=\"button\" target=\"_blank\">Cliquez Ici</a>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_da3a9a57db168872a0645395f00fd131146d0ed2de500b21cf94025934d8d299->leave($__internal_da3a9a57db168872a0645395f00fd131146d0ed2de500b21cf94025934d8d299_prof);

        
        $__internal_546d767bd09c9a8ea68b84dc6ff0948aa1ca470b60f4c459ee8fb6476798653d->leave($__internal_546d767bd09c9a8ea68b84dc6ff0948aa1ca470b60f4c459ee8fb6476798653d_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Default:mutuelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
{% endblock %}

{% block Content %} 
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h4>Inscription à la mutuelle étudiante AVA</h4>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<div align=\"center\">
\t\t\t\t\t<a class=\"btn btn-info\" href=\"https://www.ava.fr/blog/produit/plan-sante-studies/\" role=\"button\" target=\"_blank\">Cliquez Ici</a>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}", "ESFEspaceAbonneBundle:Default:mutuelle.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Default/mutuelle.html.twig");
    }
}
