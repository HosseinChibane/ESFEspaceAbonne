<?php

/* ESFEspaceAbonneBundle:back:mesDemandes.html.twig */
class __TwigTemplate_3f25f0c45b6adf79564611a7fe1f538dc0e7a7e2a38f1d2ef0f6cbf04c76f044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig", 1);
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
        $__internal_1a5e7a258e9e1fcc347bee64950a9f2401ca9e81207bc7b33158573fd6216e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5e7a258e9e1fcc347bee64950a9f2401ca9e81207bc7b33158573fd6216e32->enter($__internal_1a5e7a258e9e1fcc347bee64950a9f2401ca9e81207bc7b33158573fd6216e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig"));

        $__internal_901821cf65fba5cf287696ded7a6eaa2736e9cd5f274540bb4157d7404e5faef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_901821cf65fba5cf287696ded7a6eaa2736e9cd5f274540bb4157d7404e5faef->enter($__internal_901821cf65fba5cf287696ded7a6eaa2736e9cd5f274540bb4157d7404e5faef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a5e7a258e9e1fcc347bee64950a9f2401ca9e81207bc7b33158573fd6216e32->leave($__internal_1a5e7a258e9e1fcc347bee64950a9f2401ca9e81207bc7b33158573fd6216e32_prof);

        
        $__internal_901821cf65fba5cf287696ded7a6eaa2736e9cd5f274540bb4157d7404e5faef->leave($__internal_901821cf65fba5cf287696ded7a6eaa2736e9cd5f274540bb4157d7404e5faef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f097bae208d630651de0c20002a2d0ef4ffb98f420599f19178ac81cb0fbc0fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f097bae208d630651de0c20002a2d0ef4ffb98f420599f19178ac81cb0fbc0fc->enter($__internal_f097bae208d630651de0c20002a2d0ef4ffb98f420599f19178ac81cb0fbc0fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bba00a560889762a8d0d4d43511c94a1dc7f189207cb267723acb87a4516acfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bba00a560889762a8d0d4d43511c94a1dc7f189207cb267723acb87a4516acfc->enter($__internal_bba00a560889762a8d0d4d43511c94a1dc7f189207cb267723acb87a4516acfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bba00a560889762a8d0d4d43511c94a1dc7f189207cb267723acb87a4516acfc->leave($__internal_bba00a560889762a8d0d4d43511c94a1dc7f189207cb267723acb87a4516acfc_prof);

        
        $__internal_f097bae208d630651de0c20002a2d0ef4ffb98f420599f19178ac81cb0fbc0fc->leave($__internal_f097bae208d630651de0c20002a2d0ef4ffb98f420599f19178ac81cb0fbc0fc_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_5cae62114837b1f9f416e0e513a42b2747383d7214782629869d0ca31c03fb92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cae62114837b1f9f416e0e513a42b2747383d7214782629869d0ca31c03fb92->enter($__internal_5cae62114837b1f9f416e0e513a42b2747383d7214782629869d0ca31c03fb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_cdc3de55f778f9c35494436815f58d94dbc93df43444d3a746ae5ed7dd37292f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdc3de55f778f9c35494436815f58d94dbc93df43444d3a746ae5ed7dd37292f->enter($__internal_cdc3de55f778f9c35494436815f58d94dbc93df43444d3a746ae5ed7dd37292f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_cdc3de55f778f9c35494436815f58d94dbc93df43444d3a746ae5ed7dd37292f->leave($__internal_cdc3de55f778f9c35494436815f58d94dbc93df43444d3a746ae5ed7dd37292f_prof);

        
        $__internal_5cae62114837b1f9f416e0e513a42b2747383d7214782629869d0ca31c03fb92->leave($__internal_5cae62114837b1f9f416e0e513a42b2747383d7214782629869d0ca31c03fb92_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_2c49f55912f03a4b1cfcb3ad89c819c4dae7a500949cba6f7be2e4402e2c4b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c49f55912f03a4b1cfcb3ad89c819c4dae7a500949cba6f7be2e4402e2c4b53->enter($__internal_2c49f55912f03a4b1cfcb3ad89c819c4dae7a500949cba6f7be2e4402e2c4b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_6fd095c2a54e9a241a5a364cfe68c35ba9d3d1afdb490d43c7508f90b4f7b08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd095c2a54e9a241a5a364cfe68c35ba9d3d1afdb490d43c7508f90b4f7b08b->enter($__internal_6fd095c2a54e9a241a5a364cfe68c35ba9d3d1afdb490d43c7508f90b4f7b08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 27
        if (array_key_exists("listDemandeInscription", $context)) {
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listDemandeInscription"] ?? $this->getContext($context, "listDemandeInscription")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowDemande"]) {
                // line 29
                echo "                        <tr>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "type", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "etat", array()), "html", null, true);
                echo "</td>
                            <td>           
                                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_detailsDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_modifierDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowDemande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                ";
        }
        // line 44
        echo "            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
";
        
        $__internal_6fd095c2a54e9a241a5a364cfe68c35ba9d3d1afdb490d43c7508f90b4f7b08b->leave($__internal_6fd095c2a54e9a241a5a364cfe68c35ba9d3d1afdb490d43c7508f90b4f7b08b_prof);

        
        $__internal_2c49f55912f03a4b1cfcb3ad89c819c4dae7a500949cba6f7be2e4402e2c4b53->leave($__internal_2c49f55912f03a4b1cfcb3ad89c819c4dae7a500949cba6f7be2e4402e2c4b53_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:mesDemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 44,  154 => 43,  142 => 37,  136 => 34,  131 => 32,  127 => 31,  123 => 30,  120 => 29,  115 => 28,  113 => 27,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Mes Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
{% endblock %}

{% block Content %} 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {% if listDemandeInscription is defined %}
                    {% for rowDemande in listDemandeInscription %}
                        <tr>
                            <td>{{rowDemande.id}}</td>
                            <td>{{rowDemande.type}}</td>
                            <td>{{rowDemande.etat}}</td>
                            <td>           
                                <a href=\"{{ path('esf_espace_abonne_detailsDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"{{ path('esf_espace_abonne_modifierDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
{% endblock %}", "ESFEspaceAbonneBundle:back:mesDemandes.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/mesDemandes.html.twig");
    }
}
