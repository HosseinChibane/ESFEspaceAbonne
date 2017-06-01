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
        $__internal_45a152419db5bda6cdfc2308b154d5f576929afef8695b7d6a0d9d0f75322464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a152419db5bda6cdfc2308b154d5f576929afef8695b7d6a0d9d0f75322464->enter($__internal_45a152419db5bda6cdfc2308b154d5f576929afef8695b7d6a0d9d0f75322464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mutuelle.html.twig"));

        $__internal_12d8e9b18e34766b5ce4dee50157fb2918093e7f0dd3887c95c959ea221bbe60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d8e9b18e34766b5ce4dee50157fb2918093e7f0dd3887c95c959ea221bbe60->enter($__internal_12d8e9b18e34766b5ce4dee50157fb2918093e7f0dd3887c95c959ea221bbe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a152419db5bda6cdfc2308b154d5f576929afef8695b7d6a0d9d0f75322464->leave($__internal_45a152419db5bda6cdfc2308b154d5f576929afef8695b7d6a0d9d0f75322464_prof);

        
        $__internal_12d8e9b18e34766b5ce4dee50157fb2918093e7f0dd3887c95c959ea221bbe60->leave($__internal_12d8e9b18e34766b5ce4dee50157fb2918093e7f0dd3887c95c959ea221bbe60_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26efcebeba24da48b465681774c0bf26a4fe17392a3bd727d9651a0301dabf0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26efcebeba24da48b465681774c0bf26a4fe17392a3bd727d9651a0301dabf0c->enter($__internal_26efcebeba24da48b465681774c0bf26a4fe17392a3bd727d9651a0301dabf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e5923583e84b900b53b40a17de3ad247fb6539e1c14cd0d400421b257b758e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5923583e84b900b53b40a17de3ad247fb6539e1c14cd0d400421b257b758e7c->enter($__internal_e5923583e84b900b53b40a17de3ad247fb6539e1c14cd0d400421b257b758e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e5923583e84b900b53b40a17de3ad247fb6539e1c14cd0d400421b257b758e7c->leave($__internal_e5923583e84b900b53b40a17de3ad247fb6539e1c14cd0d400421b257b758e7c_prof);

        
        $__internal_26efcebeba24da48b465681774c0bf26a4fe17392a3bd727d9651a0301dabf0c->leave($__internal_26efcebeba24da48b465681774c0bf26a4fe17392a3bd727d9651a0301dabf0c_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d1741ee42fedbe8f7ed6177a719165a51b99356f2c31ebd620ee430dab01c1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1741ee42fedbe8f7ed6177a719165a51b99356f2c31ebd620ee430dab01c1cd->enter($__internal_d1741ee42fedbe8f7ed6177a719165a51b99356f2c31ebd620ee430dab01c1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_4cc56f62605f3dd15ef8bfc97f7b003b813e14089d0eebfe79d62aa4f12a6574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc56f62605f3dd15ef8bfc97f7b003b813e14089d0eebfe79d62aa4f12a6574->enter($__internal_4cc56f62605f3dd15ef8bfc97f7b003b813e14089d0eebfe79d62aa4f12a6574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_4cc56f62605f3dd15ef8bfc97f7b003b813e14089d0eebfe79d62aa4f12a6574->leave($__internal_4cc56f62605f3dd15ef8bfc97f7b003b813e14089d0eebfe79d62aa4f12a6574_prof);

        
        $__internal_d1741ee42fedbe8f7ed6177a719165a51b99356f2c31ebd620ee430dab01c1cd->leave($__internal_d1741ee42fedbe8f7ed6177a719165a51b99356f2c31ebd620ee430dab01c1cd_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_ce73162154bdfe83a4bdeac9cc2fd63cd9bea18b1aacc4dd5ad0a0489c0855da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce73162154bdfe83a4bdeac9cc2fd63cd9bea18b1aacc4dd5ad0a0489c0855da->enter($__internal_ce73162154bdfe83a4bdeac9cc2fd63cd9bea18b1aacc4dd5ad0a0489c0855da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d0127a4b1564fd5bf0fa8024f0126162dcec4a3303071975c936a9236028b171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0127a4b1564fd5bf0fa8024f0126162dcec4a3303071975c936a9236028b171->enter($__internal_d0127a4b1564fd5bf0fa8024f0126162dcec4a3303071975c936a9236028b171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_d0127a4b1564fd5bf0fa8024f0126162dcec4a3303071975c936a9236028b171->leave($__internal_d0127a4b1564fd5bf0fa8024f0126162dcec4a3303071975c936a9236028b171_prof);

        
        $__internal_ce73162154bdfe83a4bdeac9cc2fd63cd9bea18b1aacc4dd5ad0a0489c0855da->leave($__internal_ce73162154bdfe83a4bdeac9cc2fd63cd9bea18b1aacc4dd5ad0a0489c0855da_prof);

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
